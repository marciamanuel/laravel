@extends('layouts.app')

@section('template_title')
    {{ $produto->name ?? 'Show Produto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Produto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Produto:</strong>
                            {{ $produto->Produto }}
                        </div>
                        <div class="form-group">
                            <strong>Descrição:</strong>
                            {{ $produto->Descrição }}
                        </div>
                        <div class="form-group">
                            <strong>Preço:</strong>
                            {{ $produto->Preço }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $produto->Stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
