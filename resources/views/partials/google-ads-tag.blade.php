{{--
    Google Ads (gtag.js) — etiqueta base + conversión.
    No imprime nada mientras GOOGLE_ADS_ID esté vacío en .env.
    Cuando agregues GOOGLE_ADS_CONVERSION_LABEL, el evento "lead_form_submit"
    del dataLayer (ver public/js/landing-promo.js) dispara la conversión sola.
--}}
@if (config('services.google_ads.id'))
{{-- data-cfasync="false" evita que Cloudflare Rocket Loader difiera/reescriba
     esta etiqueta; si lo hace, Google Ads no la detecta como activa. --}}
<script async data-cfasync="false" src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_ads.id') }}"></script>
<script data-cfasync="false">
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '{{ config('services.google_ads.id') }}');
@if (config('services.google_ads.conversion_label'))
window.GOOGLE_ADS_CONVERSION_SEND_TO = '{{ config('services.google_ads.id') }}/{{ config('services.google_ads.conversion_label') }}';
@endif
</script>
@endif
