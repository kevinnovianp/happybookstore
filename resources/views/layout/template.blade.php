<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Happy Book Store</title>
</head>
<body>
    {{-- HEADER --}}
    @include('layout.header')

    {{-- TOP NAVBAR --}}
    @include('layout.topnavbar')

    <div class="fluid-container d-flex align-items-center" style="justify-content: center">
        {{-- SECTION --}}
        <div style="height: 26rem; width: 60%; padding-left: 3rem; margin-right: 3rem">
            @yield('content')
        </div>

        {{-- SIDE NAVBAR --}}
        <div style="height: 26rem; width: 15%">
            @include('layout.sidenavbar')
        </div>
    </div>

    {{-- FOOTER --}}
    @include('layout.footer')

</body>
</html>
