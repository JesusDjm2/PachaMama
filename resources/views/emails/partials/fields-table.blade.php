{{-- Expects $fields: array of ['label' => string, 'value' => string|null] --}}
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
    @foreach ($fields as $field)
        <tr>
            <td style="padding:10px 0; border-bottom:1px solid #eef0f3; width:36%; vertical-align:top;">
                <span style="color:#6b7280; font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:0.4px;">{{ $field['label'] }}</span>
            </td>
            <td style="padding:10px 0; border-bottom:1px solid #eef0f3; vertical-align:top;">
                <span style="color:#1a2e45; font-size:14px; font-weight:600;">{{ $field['value'] !== null && $field['value'] !== '' ? $field['value'] : '—' }}</span>
            </td>
        </tr>
    @endforeach
</table>
