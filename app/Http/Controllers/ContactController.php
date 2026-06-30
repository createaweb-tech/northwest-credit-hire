<?php

namespace App\Http\Controllers;

use App\Mail\ContactEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:40'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $to = [
            'northwestcredithire@gmail.com',
        ];
        $to[] = config('mail.admin_email', config('mail.from.address'));

        Mail::to($to)->send(new ContactEnquiry(
            name: $data['name'],
            email: $data['email'],
            phone: $data['phone'],
            enquirySubject: $data['subject'],
            messageBody: $data['message'],
        ));

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your message has been sent. We will be in touch shortly.');
    }
}
