<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Forbidden</title>
    <title>404 - Page Not Found</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/error.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    <div id="error">
        

<div class="error-page container">
    <div class="col-md-8 col-12 offset-md-2">
        <div class="text-center">
            <img class="img-error" src="{{ asset('admin/assets/images/samples/error-403.svg') }}" alt="Not Found">
            <h1 class="error-title">Forbidden</h1>
            <p class="fs-5 text-gray-600">Anda Tidak Memiliki Hak Akses untuk Melihat Halaman Ini.</p>
            <a href="{{ route('home') }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
        </div>
    </div>
</div>


    </div>
</body>

</html>
