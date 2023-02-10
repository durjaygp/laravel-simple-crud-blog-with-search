<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontEnd')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{asset('frontEnd')}}/css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{asset('frontEnd')}}/css/plugin.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{asset('frontEnd')}}/fonts/flaticon.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/fonts/line-icons.css" type="text/css">
</head>
<body>



<!-- header starts -->
@include('frontEnd.include.header')
<!-- header ends -->


<!-- trending-topic starts -->
@yield('content')
<!-- trending-topic ends -->


<!-- footer starts -->
@include('frontEnd.include.footer')
<!-- footer ends -->



<!-- *Scripts* -->
<script src="{{asset('frontEnd')}}/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontEnd')}}/js/plugin.js"></script>
<script src="{{asset('frontEnd')}}/js/main.js"></script>
<script src="{{asset('frontEnd')}}/js/custom-swiper1.js"></script>
<script src="{{asset('frontEnd')}}/js/custom-nav.js"></script>
</body>
</html>
