@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Controle do Aluno | Cursos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem-vindo ao sistema de Cursos - Capgemini
                    
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
