<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','| Admin')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('master/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('master/plugins/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('master/dist/css/adminlte.min.css')}}" />
    <link rel="stylesheet" href="{{asset('master/inoicons/form/adminlte.min.css')}}" />
    <link rel="stylesheet" href="{{asset('master/plugins/css/2.0.1/css/inoicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" />

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
<script src="{{asset('master/plugins/ckeditor/ckeditor.js')}}"> </script>
<script src="{{asset('master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"> </script>

<script src="{{asset('master/ckeditor.js')}}"></script>
<script>
    ClassicEditor
    .create(document.querySelector('#body'))
    .catch(error=>{
        console.error(error);
    });                                             
</script>