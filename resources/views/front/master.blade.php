<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora | @yield('title')</title>

{{--style--}}
    @include('front.includes.style')
</head>
<body>
{{--header--}}
@include('front.includes.header')

@yield('body')

{{--footer--}}
@include('front.includes.footer')
{{--script--}}
@include('front.includes.script')
</body>
</html>
