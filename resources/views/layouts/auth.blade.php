<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>

    @include('sweetalert::alert')
    <div class="container" style="margin-top: 120px">
        <div class="row flex justify-content-center align-items-center">
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h2 class="mb-4">{{ $title }}</h2>
                        {{-- @include('components.alert') --}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
