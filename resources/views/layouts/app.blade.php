<html>
<head>
    <title>Viidia | administration</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Sergey Vushnevsky" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{asset('admin/favicon.png')}}" rel="shortcut icon">
    <link href="{{asset('admin/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="//fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/bower_components/select2/dist/css/select2.min.cs')}}s" rel="stylesheet">
    <link href="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/main.css')}}" rel="stylesheet">
</head>
<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">


        <div class="logo-w">
            <a href="index.html"><img alt="" src="/images/logo.png"></a>
        </div>
    @yield('content')

                    </div>
                </div>
</body>
</html>