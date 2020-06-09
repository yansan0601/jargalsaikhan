<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','app')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('master/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('master/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('master/vendors/css/vendor.bundle.base.css')}}" />
    <link rel="stylesheet" href="{{asset('master/vendors/vendors/css/vendor.bundle.addons.css')}}" />
</head>
<body>


<!--main-container-part-->
<div id="content">
    @yield('content')
</div>
</body>
<script src="{{asset('master/js/jquery.js')}}"> </script>
<script src="{{asset('master/js/chart.js')}}"> </script>
<script src="{{asset('master/js/dashboard.js')}}"> </script>

</html>
