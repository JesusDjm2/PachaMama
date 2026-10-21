@extends('emails.layout')

@section('title', '¡Tienes un nuevo lead!')
@section('eyebrow', 'Formulario web · Ficha de tour')
@section('subtitle', 'Alguien acaba de solicitar información sobre un tour desde la página web. Aquí están los detalles.')

@section('content')
    @include('emails.partials.fields-table', ['fields' => [
        ['label' => 'Nombre', 'value' => $nombre ?? null],
        ['label' => 'Email', 'value' => $email ?? null],
        ['label' => 'Teléfono', 'value' => $phone ?? null],
        ['label' => 'Adultos', 'value' => $adultos ?? null],
        ['label' => 'Niños', 'value' => $childs ?? null],
        ['label' => 'Fecha de arribo', 'value' => $date ?? null],
        ['label' => 'Tour', 'value' => $tour ?? null],
    ]])

    @include('emails.partials.message-box', ['message' => $mensaje ?? null])
@endsection

@if (!empty($email))
@section('cta')
    <a href="mailto:{{ $email }}" style="display:inline-block; background-color:#d4a843; color:#1a2e45; text-decoration:none; font-weight:700; font-size:14px; padding:13px 30px; border-radius:8px; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">Responder a {{ $nombre ?? 'este viajero' }}</a>
@endsection
@endif
