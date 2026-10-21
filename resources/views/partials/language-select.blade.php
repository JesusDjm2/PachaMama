@php
    $currentLocale = $currentLocale ?? 'es';
    $compact = $compact ?? false;
    $extraClass = $extraClass ?? '';

    $esUrl = \App\Support\LocaleRouteMap::switchUrlTo('es');
    $enUrl = \App\Support\LocaleRouteMap::switchUrlTo('en');
    $ptUrl = \App\Support\LocaleRouteMap::switchUrlTo('pt');

    $ariaLabels = [
        'es' => 'Seleccionar idioma',
        'en' => 'Select language',
        'pt' => 'Selecionar idioma',
    ];
    $ariaLabel = $ariaLabels[$currentLocale] ?? 'Seleccionar idioma';

    $labels = $compact ? [
        'es' => 'ES',
        'en' => 'EN',
        'pt' => 'PT',
    ] : [
        'es' => 'Español',
        'en' => 'English',
        'pt' => 'Português',
    ];
@endphp
<div class="pacha-lang-select-wrap {{ $compact ? 'pacha-lang-select-wrap--compact' : '' }} {{ $extraClass }}">
    <svg class="pacha-lang-globe" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="2" y1="12" x2="22" y2="12"></line>
        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
    </svg>
    <select class="pacha-lang-select js-pacha-lang-select"
            aria-label="{{ $ariaLabel }}"
            onchange="if(this.value &amp;&amp; this.value !== window.location.href) { window.location.href = this.value; }">
        <option value="{{ $esUrl }}" {{ $currentLocale === 'es' ? 'selected' : '' }}>{{ $labels['es'] }}</option>
        <option value="{{ $enUrl }}" {{ $currentLocale === 'en' ? 'selected' : '' }}>{{ $labels['en'] }}</option>
        <option value="{{ $ptUrl }}" {{ $currentLocale === 'pt' ? 'selected' : '' }}>{{ $labels['pt'] }}</option>
    </select>
    <svg class="pacha-lang-chevron" width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
        <polyline points="6 9 12 15 18 9"></polyline>
    </svg>
</div>
