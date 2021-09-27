<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    {{-- <title>Document</title> --}}
    @include('includes.meta')
    <title>@yield('title') | Landing Page</title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">

    @stack('before-style')
    {{-- style --}}
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    @stack('before-script')
    {{-- script --}}
    @include('includes.script')
    @stack('after-script')

</body>

</html>
