<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<title>@yield('title')</title>--}}
    <title>DIPLOM</title>
    @include('interface.css')
    @yield('css')
</head>
<body>
@include('interface.nav')

@yield('content')


@include('interface.footer')
@include('interface.scripts')
@yield('scripts')
</body>
</html>