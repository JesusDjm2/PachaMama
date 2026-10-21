@extends('emails.layout')

@section('title', '¡Tienes un nuevo lead!')
@section('eyebrow', 'Formulario web · Landing de campaña')
@section('subtitle', 'Alguien acaba de completar el formulario de cotización en la página web. Aquí están los detalles.')

@section('content')
    @include('emails.partials.fields-table', ['fields' => [
        ['label' => 'Nombre', 'value' => $data['name'] ?? null],
        ['label' => 'Email', 'value' => $data['email'] ?? null],
        ['label' => 'Teléfono', 'value' => $data['phone'] ?? null],
        ['label' => 'País de origen', 'value' => $data['country'] ?? null],
        ['label' => 'N.º de viajeros', 'value' => $data['adults'] ?? null],
        ['label' => 'Tour de interés', 'value' => $data['tipo'] ?? null],
    ]])

    @include('emails.partials.message-box', ['message' => $data['message'] ?? null])
@endsection

@if (!empty($data['email']))
@section('cta')
    <a href="mailto:{{ $data['email'] }}" style="display:inline-block; background-color:#d4a843; color:#1a2e45; text-decoration:none; font-weight:700; font-size:14px; padding:13px 30px; border-radius:8px; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">Responder a {{ $data['name'] ?? 'este viajero' }}</a>
@endsection
@endif
