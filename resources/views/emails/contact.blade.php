{{--
    Northwest Credit Hire — Contact form notification (HTML)
    Brand: red #B61314 on warm cream. Table-based, inline styles for email-client safety.
    Expected variables:
      $name, $email, $phone, $subject, $messageBody  (strings)
      $submittedAt (optional, string)  ·  $siteUrl (optional, string)
--}}
@php
    $submittedAt = $submittedAt ?? now()->format('D, d M Y · H:i');
    $siteUrl     = $siteUrl ?? 'https://northwestcredithire.co.uk';
@endphp
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="color-scheme" content="light only">
    <meta name="supported-color-schemes" content="light only">
    <title>New enquiry — Northwest Credit Hire</title>
    <!--[if mso]>
    <style type="text/css">
        body, table, td, p, a { font-family: Arial, Helvetica, sans-serif !important; }
    </style>
    <![endif]-->
</head>
<body style="margin:0; padding:0; width:100%; background-color:#efe9df; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">

    <!-- Preheader (hidden) -->
    <div style="display:none; max-height:0; overflow:hidden; mso-hide:all; font-size:1px; line-height:1px; color:#efe9df;">
        New enquiry from {{ $name }} — {{ $subject }}
    </div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#efe9df;">
        <tr>
            <td align="center" style="padding:28px 16px;">

                <table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0" style="width:600px; max-width:600px; background-color:#ffffff; border-radius:18px; overflow:hidden; box-shadow:0 18px 44px -26px rgba(28,26,24,.34);">

                    <!-- Header band -->
                    <tr>
                        <td style="background-color:#b61314; background-image:linear-gradient(135deg,#b61314 0%,#8d0f10 100%); padding:30px 36px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="left" style="font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                                        <div style="font-size:20px; font-weight:800; letter-spacing:.3px; color:#ffffff; line-height:1.2;">
                                            NORTHWEST CREDIT HIRE
                                        </div>
                                        <div style="font-size:12px; font-weight:600; color:#fbeceb; letter-spacing:1.5px; text-transform:uppercase; margin-top:4px;">
                                            Credit Hire &amp; Accident Management
                                        </div>
                                    </td>
                                    <td align="right" valign="top" style="font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                                        <span style="display:inline-block; background-color:rgba(255,255,255,.15); color:#ffffff; font-size:11px; font-weight:700; letter-spacing:1px; text-transform:uppercase; padding:7px 12px; border-radius:999px;">
                                            New Enquiry
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Intro -->
                    <tr>
                        <td style="padding:34px 36px 8px 36px; font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                            <h1 style="margin:0 0 6px 0; font-size:22px; line-height:1.25; color:#1c1a18; font-weight:800;">
                                You&rsquo;ve got a new website enquiry
                            </h1>
                            <p style="margin:0; font-size:14px; line-height:1.6; color:#6d6862;">
                                Submitted via the contact form on
                                <a href="{{ $siteUrl }}" style="color:#b61314; text-decoration:none; font-weight:600;">northwestcredithire.co.uk</a>
                                on {{ $submittedAt }}.
                            </p>
                        </td>
                    </tr>

                    <!-- Details card -->
                    <tr>
                        <td style="padding:22px 36px 8px 36px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#faf7f1; border:1px solid #e7e1d6; border-radius:14px;">

                                <tr>
                                    <td style="padding:18px 22px 6px 22px; font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                                        <div style="font-size:11px; font-weight:700; letter-spacing:1.2px; text-transform:uppercase; color:#9a948c;">Name</div>
                                        <div style="font-size:16px; font-weight:700; color:#1c1a18; margin-top:3px;">{{ $name }}</div>
                                    </td>
                                </tr>
                                <tr><td style="padding:0 22px;"><div style="border-top:1px solid #ece6db; height:1px; line-height:1px;">&nbsp;</div></td></tr>

                                <tr>
                                    <td style="padding:10px 22px 6px 22px; font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                                        <div style="font-size:11px; font-weight:700; letter-spacing:1.2px; text-transform:uppercase; color:#9a948c;">Email</div>
                                        <div style="font-size:16px; font-weight:600; margin-top:3px;">
                                            <a href="mailto:{{ $email }}" style="color:#b61314; text-decoration:none;">{{ $email }}</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr><td style="padding:0 22px;"><div style="border-top:1px solid #ece6db; height:1px; line-height:1px;">&nbsp;</div></td></tr>

                                <tr>
                                    <td style="padding:10px 22px 6px 22px; font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                                        <div style="font-size:11px; font-weight:700; letter-spacing:1.2px; text-transform:uppercase; color:#9a948c;">Phone</div>
                                        <div style="font-size:16px; font-weight:600; margin-top:3px;">
                                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}" style="color:#b61314; text-decoration:none;">{{ $phone }}</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr><td style="padding:0 22px;"><div style="border-top:1px solid #ece6db; height:1px; line-height:1px;">&nbsp;</div></td></tr>

                                <tr>
                                    <td style="padding:10px 22px 18px 22px; font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                                        <div style="font-size:11px; font-weight:700; letter-spacing:1.2px; text-transform:uppercase; color:#9a948c;">Subject</div>
                                        <div style="font-size:16px; font-weight:600; color:#1c1a18; margin-top:3px;">{{ $subject }}</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Message -->
                    <tr>
                        <td style="padding:14px 36px 4px 36px; font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                            <div style="font-size:11px; font-weight:700; letter-spacing:1.2px; text-transform:uppercase; color:#9a948c; margin-bottom:8px;">Message</div>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#ffffff; border-left:4px solid #b61314; border-top:1px solid #e7e1d6; border-right:1px solid #e7e1d6; border-bottom:1px solid #e7e1d6; border-radius:0 10px 10px 0;">
                                <tr>
                                    <td style="padding:16px 20px; font-size:15px; line-height:1.7; color:#211f1d;">
                                        {!! nl2br(e($messageBody)) !!}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- CTA -->
                    <tr>
                        <td align="left" style="padding:24px 36px 30px 36px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="border-radius:999px; background-color:#b61314;">
                                        <a href="mailto:{{ $email }}?subject=RE: {{ rawurlencode($subject) }}"
                                           style="display:inline-block; padding:13px 26px; font-family:'Segoe UI',Arial,Helvetica,sans-serif; font-size:14px; font-weight:700; color:#ffffff; text-decoration:none; border-radius:999px;">
                                            Reply to {{ $name }} &rarr;
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color:#1c1a18; padding:24px 36px; font-family:'Segoe UI',Arial,Helvetica,sans-serif;">
                            <p style="margin:0 0 6px 0; font-size:14px; font-weight:700; color:#ffffff;">Northwest Credit Hire Ltd</p>
                            <p style="margin:0; font-size:12px; line-height:1.7; color:#9a948c;">
                                Unit A2, Highfield Industrial Estate, W End St, Oldham OL9 6AJ<br>
                                <a href="tel:07824973768" style="color:#fbeceb; text-decoration:none;">07824 973768</a> &nbsp;·&nbsp;
                                <a href="mailto:info@northwestcredithire.co.uk" style="color:#fbeceb; text-decoration:none;">info@northwestcredithire.co.uk</a><br>
                                Open 24/7, 365 days a year
                            </p>
                        </td>
                    </tr>

                </table>

                <p style="margin:18px 0 0 0; font-family:'Segoe UI',Arial,Helvetica,sans-serif; font-size:11px; color:#9a948c;">
                    This message was generated automatically from the website contact form.
                </p>

            </td>
        </tr>
    </table>

</body>
</html>
