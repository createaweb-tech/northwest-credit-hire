@php
    $submittedAt = $submittedAt ?? now()->format('D, d M Y · g:i A');
    $documentTypesList = collect(
        $claim->document_type
            ? preg_split('/\s*,\s*/', $claim->document_type)
            : []
    );

    if ($claim->other_document_type) {
        $documentTypesList->push($claim->other_document_type);
    }

    $documentTypesList = $documentTypesList->filter()->values();
@endphp
NORTHWEST CREDIT HIRE — NEW CLAIM DOCUMENTS
============================================

Submitted via the claim upload form on northwestcredithire.com
{{ $submittedAt }}

--------------------------------------------
Reference:            #{{ $claim->reference_number }}
Name:                 {{ $claim->name }}
Email:                {{ $claim->email }}
Phone:                {{ $claim->phone }}
Vehicle registration: {{ $claim->car_reg_no }}
Document types:
@forelse ($documentTypesList as $type)
- {{ $type }}
@empty
- —
@endforelse
--------------------------------------------

@if ($claim->notes)
NOTES
-----
{{ $claim->notes }}

@endif
ATTACHED FILES ({{ count($filePaths) }})
---------------------------------------
@foreach ($filePaths as $path)
- {{ basename($path) }}
@endforeach

--------------------------------------------
Reply directly to this claim: {{ $claim->email }}

Northwest Credit Hire Ltd
Credit Hire & Accident Management Specialists
Unit A2, Highfield Industrial Estate, W End St, Oldham OL9 6AJ
Phone (24/7): 07824 973768
Email: info@northwestcredithire.com
Open 24/7, 365 days a year

This message was generated automatically from the website claim upload form.
