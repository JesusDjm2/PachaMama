@extends('layouts.admin')
@section('titulo', 'Tags português')
@section('contenido')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Criar tag em português</span>
                    <a style="float: right" class="btn btn-primary" href="{{ route('pttags.index') }}">Voltar</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pttags.store') }}" role="form">
                        @csrf
                        @include('blogs.pt.tags.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
