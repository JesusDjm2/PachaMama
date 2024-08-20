@extends('layouts.admin')
@section('titulo', 'Tags español')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear nuevo Tag</span>
                        <span style="float: right">
                            <a href="{{route('tags.index')}}" class="btn btn-primary">Volver</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tags.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('blogs.es.tags.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
