<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClaimMail;

class ClaimController extends Controller
{
    public function index()
    {
        return view('frontend.claim');
    }

    public function saveClaim(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'other_document_type' => [
                'nullable',
                'string',
                'max:255',
                Rule::requiredIf(in_array('Other', $request->input('document_types', []))),
            ],
            'email' => 'required|email',
            'car_reg_no' => 'required',
            'notes' => 'nullable',
            'document_types' => 'required|array|min:1',
            'document_types.*' => 'string',
            'files' => 'required|array',
            'files.*' => 'file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $documentTypes = array_values(array_filter(
            $validated['document_types'],
            fn (string $type) => $type !== 'Other'
        ));

        try {
            DB::beginTransaction();

            $claim = Claim::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'car_reg_no' => strtoupper($validated['car_reg_no']),
                'document_type' => $documentTypes !== [] ? implode(', ', $documentTypes) : null,
                'other_document_type' => in_array('Other', $validated['document_types'], true)
                    ? $validated['other_document_type']
                    : null,
                'reference_number' => null,
                'notes' => $validated['notes'] ?? null,
            ]);

            $claim->reference_number = str_pad($claim->id, 3, '0', STR_PAD_LEFT).'-'.$claim->car_reg_no;
            $claim->save();

            foreach ($request->file('files') as $file) {
                $fileName = time().'-'.$file->getClientOriginalName();
                $claim->files()->create([
                    'file_path' => $file->storeAs(
                        'claims/'.$claim->reference_number,
                        $fileName,
                        'public'
                    ),
                ]);
            }

            DB::commit();
            $attachments = $claim->files()->pluck('file_path')->toArray();

            $to = [
                'northwestcredithire@gmail.com',
            ];
            $to[] = config('mail.admin_email', config('mail.from.address'));
            
            Mail::to($to)->send(new ClaimMail($claim, $attachments));

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Your documents have been sent successfully. We\'ll match these to your claim using your name and phone number.',
                    'reference_number' => $claim->reference_number,
                ]);
            }

            return redirect()->route('claim')->with('success', 'Claim submitted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong! Please try again.',
                ], 500);
            }

            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
