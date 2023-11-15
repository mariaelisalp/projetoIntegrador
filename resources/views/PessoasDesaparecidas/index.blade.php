@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    <h1>Pessoas Desaparecidas</h1>
        <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Data de Desaparecimento</th>
            <th>.</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($pessoasDesaparecidas as $pessoasDesaparecida)
            <tr>
                <td>{{$pessoasDesaparecida->id}}</td>
                <td>{{$pessoasDesaparecida->name}}</td>
                <td>{{$pessoasDesaparecida->gender}}</td>
                <td>{{$pessoasDesaparecida->desappearingCity}}</td>
                <td>{{$pessoasDesaparecida->state}}</td>
                <td>{{$pessoasDesaparecida->desappearingDate}}</td>
            </tr>
        @endforeach
        
    </tbody>
    </table>

    <a href="{{route('pessoasDesaparecidas-create')}}">Cadastrar pessoa desaparecida</a>

@endsection