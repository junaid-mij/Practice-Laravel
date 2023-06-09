<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid">

        {{-- Common Content Here --}}
        @include('Layout.header')
            {{-- Main Content --}}
            @yield('content')
        @include('Layout.footer')

    </div>
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
