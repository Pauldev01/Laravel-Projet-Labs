<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labs - Design Studio</title>
    @include('partials.all.link')
</head>
<body>
    @include('partials.all.preloder')
    @include('partials.all.header')
    @yield('content')
    @include('partials.all.footer')
    @include('partials.all.script')
</body>
</html>