<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0.5">
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<!--
    Corrigir bugs
         Reponsividade da página inicial
         border auto focus dos formulário
         Botão voltar e cadastrar na página cadastro
-->
    @yield('content')

</body>
</html>
