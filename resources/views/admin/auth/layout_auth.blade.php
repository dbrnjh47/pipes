<!DOCTYPE html>
<!-- saved from url=(0089)https://www.bootstrapdash.com/demo/star-admin-pro/src/demo_3/pages/samples/login-2.html?# -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Required meta tags -->
    <script src="/temple/pk/js/jquery-1.11.3.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    @include('admin.auth.style')

    <link rel="shortcut icon" href="/favicon2.ico">
</head>
    
@yield('content')
@include('admin.auth.footer')

</html>