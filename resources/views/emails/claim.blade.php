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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New claim submission — #{{ $claim->reference_number }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, Helvetica, sans-serif; color:#333333;">

    <div style="max-width:600px; margin:0 auto; padding:24px 16px;">

        <h2 style="margin:0 0 4px 0; font-size:20px; color:#b61314;">New Claim Submission</h2>
        <p style="margin:0 0 20px 0; font-size:13px; color:#777777;">
            Reference #{{ $claim->reference_number }} · {{ $submittedAt }}
        </p>

        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; font-size:14px;">
            <tr>
                <td style="padding:8px 0; width:170px; color:#777777; vertical-align:top;">Name</td>
                <td style="padding:8px 0; color:#111111; font-weight:bold;">{{ $claim->name }}</td>
            </tr>
            <tr>
                <td style="padding:8px 0; color:#777777; vertical-align:top;">Email</td>
                <td style="padding:8px 0;"><a href="mailto:{{ $claim->email }}" style="color:#b61314;">{{ $claim->email }}</a></td>
            </tr>
            <tr>
                <td style="padding:8px 0; color:#777777; vertical-align:top;">Phone</td>
                <td style="padding:8px 0;"><a href="tel:{{ preg_replace('/[^0-9+]/', '', $claim->phone) }}" style="color:#b61314;">{{ $claim->phone }}</a></td>
            </tr>
            <tr>
                <td style="padding:8px 0; color:#777777; vertical-align:top;">Vehicle registration</td>
                <td style="padding:8px 0; color:#111111; font-weight:bold;">{{ $claim->car_reg_no }}</td>
            </tr>
            <tr>
                <td style="padding:8px 0; color:#777777; vertical-align:top;">Document types</td>
                <td style="padding:8px 0; color:#111111;">
                    @if ($documentTypesList->isNotEmpty())
                        {{ $documentTypesList->implode(', ') }}
                    @else
                        &mdash;
                    @endif
                </td>
            </tr>
            @if ($claim->notes)
            <tr>
                <td style="padding:8px 0; color:#777777; vertical-align:top;">Notes</td>
                <td style="padding:8px 0; color:#111111;">{!! nl2br(e($claim->notes)) !!}</td>
            </tr>
            @endif
        </table>

        <h3 style="margin:24px 0 8px 0; font-size:15px; color:#111111;">Attached files ({{ count($filePaths) }})</h3>
        <ol style="margin:0; padding-left:20px; font-size:14px; color:#111111; line-height:1.8;">
            @foreach ($filePaths as $path)
                <li>{{ basename($path) }}</li>
            @endforeach
        </ol>

        <p style="margin:28px 0 0 0; font-size:12px; color:#999999; border-top:1px solid #dddddd; padding-top:16px;">
            This message was generated automatically from the website claim upload form on northwestcredithire.com.
        </p>

    </div>

</body>
</html>
