<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="resources\sass\app.scss"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    @include('includes.header')

    @if(Request::is('/'))
        @include('includes.specialBlock')
    @endif

    <div class="container mt-5">
        @include('includes.serviceMessages')
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('includes.sideMenu')
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>