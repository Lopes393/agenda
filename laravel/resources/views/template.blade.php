<!doctype html>
<html language="pt-br">
<meta charset="utf-8">
<thead>
    <title>Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/assets/css/grade.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</thead>

<body>
    @include('cabecalho')
    <div class="conteudo">
        @yield('conteudo')
    </div>

    @include('rodape')

   <script src="{{asset('/assets/js/funcoes.js')}}"></script>
</body>

</html>