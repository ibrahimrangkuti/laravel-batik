<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>TokoApa</title>
</head>

<body>

    @include('components.user.navbar')
    <div class="container">
        @yield('content')
    </div>

    <script
        src="{{ asset('assets/js/bootstrap.min.js') }}tps://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
