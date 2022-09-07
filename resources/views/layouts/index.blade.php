
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>HRMS - Rocksure International</title>
    @include('includes.styles')

    <style>
        input.error{
            border-color: red;
        }
        .error{
            color: red;
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    @include('includes.header')

    <!-- Menu Bar -->
    @include('includes.sidebar')

    <!-- IMPORTANT: Replace the following line with the contents from included file for Laravel Mix -->
    <!-- Customizer -->
    @include('includes.customizer')

    <!-- Workspace -->
    @include('includes.workspace')

    <!-- Scripts -->
    <script src="{{asset('assets/js/vendor.js')}}" defer></script>
    <script src="{{asset('assets/js/chart.min.js')}}" defer></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1"></script> -->
    <script src="{{asset('assets/js/script.js')}}" defer></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script>
    </script>
    <script src="{{asset('js/form-navigation.js')}}"></script>
</body>
</html>
