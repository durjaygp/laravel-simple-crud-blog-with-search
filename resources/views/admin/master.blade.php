<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backEnd')}}/assets/images/logo/favicon.png">
    <!-- page css -->
    <link href="{{asset('backEnd')}}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Core css -->
    <link href="{{asset('backEnd')}}/assets/css/app.min.css" rel="stylesheet">
    <link href="{{asset('backEnd')}}/assets/iziToast/dist/css/iziToast.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backEnd') }}/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ asset('backEnd') }}/dist/css/dropify.min.css">


</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        @include('admin.include.header')
        <!-- Header END -->

        <!-- Side Nav START -->
        @include('admin.include.sidebar')
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">

            <!-- Content Wrapper START -->
            @yield('content')
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            @include('admin.include.footer')
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->
    </div>
</div>


<!-- Core Vendors JS -->
<script src="{{asset('backEnd')}}/assets/js/vendors.min.js"></script>
<!-- page js -->
<script src="{{asset('backEnd')}}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backEnd')}}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
<script src="{{asset('backEnd')}}/assets/js/pages/e-commerce-order-list.js"></script>
<!-- Core JS -->
<script src="{{asset('backEnd')}}/assets/js/app.min.js"></script>
<script src="{{asset('backEnd')}}/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('backEnd')}}/dist/js/dropify.min.js"></script>
<script src="{{asset('backEnd')}}/assets/iziToast/dist/js/iziToast.min.js"></script>


<script>
    $('#description').summernote({
        placeholder: 'Please Write Your Post Content',
        tabsize: 2,
        height: 300
    });
</script>
<script>
    $('.dropify').dropify();
</script>

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
            title: '',
             position:'topRight',
            message: '{{$error}}',
            });
    </script>
    @endforeach

@endif

<!-- @if(session()->get('success'))
    <script>
        iziToast.success({
        title: '',
        position:'topRight',
        message: '{{session()->get('error')}}',
    });

    </script>

@endif -->

@if(session()->get('success'))
    <script>
        iziToast.success({
        title: '',
        position:'topRight',
        message: '{{session()->get('success')}}',
    });

    </script>

@endif

</body>

</html>
