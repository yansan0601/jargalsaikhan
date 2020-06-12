<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','| Admin')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('master/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('master/plugins/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('master/dist/css/adminlte.min.css')}}" />
    <link rel="stylesheet" href="{{asset('master/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('master/ckeditor/samples/css/samples.css')}}" />
    <link rel="stylesheet" href="{{asset('master/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}" />


</head>
<body>


<!--main-container-part-->
<div id="content">
    @include('layouts.admin.header')
    @yield('content')
</div>
</body>
<script src="{{asset('master/plugins/jquery/jquery.js')}}"> </script>
<script src="{{asset('master/plugins/bootstrap/js/bootstrap.min.js')}}"> </script>
<script src="{{asset('master/dist/js/adminlte.min.js')}}"> </script>
<script src="{{asset('master/ckeditor/ckeditor.js')}}"> </script>
<script src="{{asset('master/ckeditor/samples/js/sample.js')}}"> </script>
<script>
	initSample();
</script>