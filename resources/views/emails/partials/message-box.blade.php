{{-- Expects $message: string|null --}}
@if (!empty($message))
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top:18px;">
    <tr>
        <td style="background-color:#f0fbf8; border-left:4px solid #2aa8a8; border-radius:8px; padding:16px 18px; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
            <p style="margin:0 0 6px; color:#0f7a52; font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:0.4px;">Mensaje</p>
            <p style="margin:0; color:#1e1e1e; font-size:14px; line-height:1.6; white-space:pre-line;">{{ $message }}</p>
        </td>
    </tr>
</table>
@endif
