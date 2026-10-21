{{--
    Google Tag Manager — snippet de <head>.
    No imprime nada mientras GTM_CONTAINER_ID esté vacío en .env,
    así que es seguro incluirlo en todas las páginas desde ya.
--}}
@if (config('services.gtm.container_id'))
{{-- data-cfasync="false" evita que Cloudflare Rocket Loader difiera/reescriba
     esta etiqueta (mismo problema que rompía la detección del tag de Google Ads). --}}
<script data-cfasync="false">
window.dataLayer = window.dataLayer || [];
</script>
<script data-cfasync="false">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','{{ config('services.gtm.container_id') }}');</script>
@endif
