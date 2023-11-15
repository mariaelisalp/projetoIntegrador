<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CNUPD - Cadastro Nacional de Pessoas Desaparecidas e Não Identificadas</title>

        <!-- Fonts -->

        <!-- Styles -->

        <link rel = "stylesheet" href="/css/styles.css">
        <script src = "/js/scripts/js"> </script>
    </head>
    <body>
        <h1> CNUPD </h1>
        <h2>Cadastro Nacional de Pessoas Desaparecidas e Não Identificadas</h2><br>
        <a href="{{route('pessoasDesaparecidas-index')}}">Lista de registros</a><br>
        <a href="{{route('pessoasDesaparecidas-create')}}">Cadastrar pessoa desaparecida</a>
        
    </body>
</html>
