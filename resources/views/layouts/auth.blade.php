
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>@yield('page') - Rocksure International</title>
    @include('includes.styles')
</head>

<body>

    <div class="container flex items-center justify-center mt-10 py-10">
        <div class="w-full md:w-1/2 xl:w-1/3">
            @yield('form')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('assets/js/vendor.js')}}" defer></script>
    <script src="{{asset('assets/js/chart.min.js')}}" defer></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1"></script> -->
    <script src="{{asset('assets/js/script.js')}}" defer></script>
    <script src="{{asset('js/app.js')}}" defer></script>

</body>

</html>
