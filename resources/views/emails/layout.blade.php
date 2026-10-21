<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title', 'Pacha Mama Spirit')</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f5f7; -webkit-text-size-adjust:100%;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f4f5f7;">
<tr>
<td align="center" style="padding:32px 12px;">

<table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px; width:100%; background-color:#ffffff; border-radius:14px; overflow:hidden; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">

  {{-- Header --}}
  <tr>
    <td style="background-color:#1a2e45; padding:26px 32px; text-align:center;">
      <img src="{{ $message->embed(public_path('img/Pacha-Mama-Spirit-Blanco.png')) }}" alt="Pacha Mama Spirit" width="170" style="display:block; margin:0 auto; height:auto; max-width:170px; border:0;">
    </td>
  </tr>

  {{-- Gold accent bar --}}
  <tr>
    <td style="background-color:#d4a843; height:4px; line-height:4px; font-size:0;">&nbsp;</td>
  </tr>

  {{-- Title block --}}
  <tr>
    <td style="padding:32px 32px 4px;">
      <p style="margin:0; color:#2aa8a8; font-size:12px; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">@yield('eyebrow', 'Nuevo contacto')</p>
      <h1 style="margin:8px 0 0; color:#1a2e45; font-size:21px; font-weight:700; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">@yield('title', 'Nuevo mensaje')</h1>
      @hasSection('subtitle')
      <p style="margin:10px 0 0; color:#6b7280; font-size:14px; line-height:1.5; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">@yield('subtitle')</p>
      @endif
    </td>
  </tr>

  {{-- Content --}}
  <tr>
    <td style="padding:18px 32px 8px;">
      @yield('content')
    </td>
  </tr>

  {{-- CTA --}}
  @hasSection('cta')
  <tr>
    <td style="padding:10px 32px 34px;" align="center">
      @yield('cta')
    </td>
  </tr>
  @else
  <tr><td style="padding:0 32px 24px;">&nbsp;</td></tr>
  @endif

  {{-- Footer --}}
  <tr>
    <td style="background-color:#0f1a29; padding:22px 32px; text-align:center; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
      <p style="margin:0 0 6px; color:rgba(255,255,255,0.85); font-size:13px; font-weight:700;">Pacha Mama Spirit</p>
      <p style="margin:0; color:rgba(255,255,255,0.5); font-size:11px; line-height:1.5;">Este mensaje fue generado automáticamente desde un formulario de pachamamaspirit.com</p>
      <p style="margin:10px 0 0; color:rgba(255,255,255,0.35); font-size:11px;">&copy; {{ date('Y') }} Pacha Mama Spirit &mdash; Todos los derechos reservados</p>
    </td>
  </tr>

</table>

</td>
</tr>
</table>
</body>
</html>
