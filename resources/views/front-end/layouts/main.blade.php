<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@400;600;700&family=Epilogue:wght@600;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('css')
</head>

<body>
    <div class="page-wrapper">
        @include('front-end.layouts.components.header')
        <div class="body-row">
            @include('front-end.layouts.components.sidebar')
            @yield('content')

        </div>
        @include('front-end.layouts.components.footer')
    </div>
</body>

</html>
