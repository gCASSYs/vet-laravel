<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.topo')

    <main>
        @yield('content')
    </main>

    @include('partials.rodape')

    @include('partials.script')

</body>

</html>