@extends('layouts.app')

@section('content')
<div class="row justify-content-center"><h1>Cursos Disponíveis</div><br>
<div class="row">

    <div class="row justify-content-center">
                
                @foreach ($cursos as $curso)
                    
                    <div class="col-md-2">
                        <tr>
                            <td><h4>Título: </h4>{{ $curso->title }}</td><br>
                            <td><h4>Categoria: </h4>{{ $curso->category }}</td><br>
                            <td><h4>Descrição: </h4>{{ $curso->description }}</td><br>
                            <td><h4>Preço: </h4>R${{ $curso->price }}</td><br>
                            <td><h4>Data de Início: </h4>{{ $curso->start }}</td><br>
                            <td><h4>Data de Término: </h4>{{ $curso->finish }}</td><br>
                        </tr>
                    </div>
                @endforeach

                @foreach ($professores as $professor)
                    <div class="col-md-2">
                        <tr>
                            <td><h4>Professor(a): </h4>{{ $professor->name }}</td><br>
                            <td><img src="{{ $professor->avatar }}"></td><br>
                        </tr>
                    </div>
                @endforeach

                
                @foreach ($enderecos as $endereco)
                    <div class="col-md-2">
                        <tr>
                            <td><h4>Rua | Avenida: </h4>{{ $endereco->street }}</td><br>
                            <td><h4>Número: </h4>{{ $endereco->number }}</td><br>
                            <td><h4>Bairro: </h4>{{ $endereco->neighborhood }}</td><br>
                            <td><h4>Cidade: </h4>{{ $endereco->city }}</td><br>
                        </tr>
                    </div>
                @endforeach
    </div>
</div>
@endsection