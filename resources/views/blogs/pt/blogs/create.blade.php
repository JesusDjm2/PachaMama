@extends('layouts.admin')
@section('titulo', 'Blogs português')
@section('contenido')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Criar blog em português</span>
                    <a style="float: right" class="btn btn-primary" href="{{ route('ptblogs.index') }}">Voltar</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('ptblogs.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @include('blogs.pt.blogs.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
