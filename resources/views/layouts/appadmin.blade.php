<!DOCTYPE html>
<html>
<head>
    <title>Viidia | administration</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @yield('css')
    <link href="{{asset('admin/favicon.png')}}" rel="shortcut icon">
    <link href="{{asset('admin/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/main.css?version=2.6')}}" rel="stylesheet">

    <link href="{{asset('admin/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/icon_fonts_assets/picons-thin/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="all-wrapper menu-side">
    <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w">
                <a class="mm-logo" href="/admin_viidia"><span>Viidia</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    {{--<div class="mobile-menu-trigger hide">--}}
                        {{--<div class="os-icon os-icon-hamburger-menu-1"></div>--}}
                    {{--</div>--}}
                </div>
            </div>
            {{--<div class="menu-and-user">--}}

                {{--<ul class="main-menu">--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="index.html">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-window-content"></div>--}}
                            {{--</div>--}}
                            {{--<span>Dashboard</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="index.html">Dashboard 1</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="apps_projects.html">Dashboard 2</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_top_image.html">Dashboard 3</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="#">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-user-male-circle"></div>--}}
                            {{--</div>--}}
                            {{--<span>User Profiles</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="users_profile_big.html">Big Profile</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="users_profile_small.html">Compact Profile</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="#">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-delivery-box-2"></div>--}}
                            {{--</div>--}}
                            {{--<span>Applications</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="apps_email.html">Email Application</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="apps_projects.html">Projects List</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="apps_full_chat.html">Chat Application</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="misc_chat.html">Popup Chat</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="misc_calendar.html">Calendar</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="#">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-newspaper"></div>--}}
                            {{--</div>--}}
                            {{--<span>Pages</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="misc_invoice.html">Invoice</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="misc_charts.html">Charts</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="auth_login.html">Login</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="auth_register.html">Register</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="auth_lock.html">Lock Screen</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="misc_error_404.html">Error 404</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="misc_error_500.html">Error 500</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="#">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-tasks-checked"></div>--}}
                            {{--</div>--}}
                            {{--<span>Forms</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="forms_regular.html">Regular Forms</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="forms_validation.html">Form Validation</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="forms_wizard.html">Form Wizard</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="forms_uploads.html">File Uploads</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="forms_wisiwig.html">Wisiwig Editor</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="#">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-grid-squares"></div>--}}
                            {{--</div>--}}
                            {{--<span>Tables</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="tables_regular.html">Regular Tables</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="tables_datatables.html">Data Tables</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="tables_editable.html">Editable Tables</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="#">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-hierarchy-structure-2"></div>--}}
                            {{--</div>--}}
                            {{--<span>Menu Styles</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_side.html">Side Menu</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_side_dark.html">Side Menu Dark</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_side_compact.html">Compact Side Menu</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_top.html">Top Menu Light</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_top_dark.html">Top Menu Dark</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="apps_projects.html">Side and Top Menu</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="layouts_menu_top_image.html">Top Menu Image</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-sub-menu">--}}
                        {{--<a href="#">--}}
                            {{--<div class="icon-w">--}}
                                {{--<div class="os-icon os-icon-robot-1"></div>--}}
                            {{--</div>--}}
                            {{--<span>Icons</span></a>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_themefy.html">Themefy Icons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_picons_thin.html">Picons Thin</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_dripicons.html">Dripicons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_eightyshades.html">Eightyshades</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_entypo.html">Entypo</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_font_awesome.html">Font Awesome</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_metrize_icons.html">Metrize Icons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_picons_social.html">Picons Social</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_batch_icons.html">Batch Icons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_dashicons.html">Dashicons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_typicons.html">Typicons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_weather_icons.html">Weather Icons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icon_fonts_light_admin.html">Light Admin</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="mobile-menu-magic">--}}
                    {{--<h4>--}}
                        {{--Light Admin--}}
                    {{--</h4>--}}
                    {{--<p>--}}
                        {{--Clean Bootstrap 4 Template--}}
                    {{--</p>--}}
                    {{--<div class="btn-w">--}}
                        {{--<a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <div class="content-w">
            <div class="top-menu-secondary">
                <div class="row">
                <div class="col-md-1 text-left">
                    <img style="width: 100%; padding: 27px 0 0 10px;" src="{{asset('/images/logo.png')}}" alt="">
                </div>
                <div class="col-md-10 left">
                    <ul>
                        {{--<li >--}}
                            {{--<a href="#">Главная</a>--}}
                        {{--</li>--}}

                        <li class="@yield('projects')">
                            <a href="/admin/projects/">Проекты</a>
                        </li>
                        <li class="@yield('services')">
                        <a href="/admin/services">Услуги</a>
                        </li>
                        <li class="@yield('technologies')">
                        <a href="/admin/thetechnologies">Технологии</a>
                        </li>
                        <li class="@yield('events')">
                            <a href="/admin/events/">События</a>
                        </li>
                        <li class="@yield('parnters')">
                        <a href="/admin/partners">Партнеры</a>
                        </li>
                        <li class="@yield('achivemets')">
                        <a href="/admin/achivements">Достижения</a>
                        </li>
                        <li class="@yield('settings')">
                        <a href="/admin/settings">Настройки</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1 text-right" style="padding-top: 23px;">

                                        <a href="/logout">
                                            Выход
                                        </a>


                </div>
                </div>

            </div>
            <div class="content-i">
                <div class="content-box">
                    @yield('content')

            </div>
        </div>
        </div>
    </div>
    <div class="display-type"></div>
</div>

<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/bower_components/moment/moment.js')}}"></script>
<script src="{{asset('admin/bower_components/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('admin/bower_components/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('admin/bower_components/editable-table/mindmup-editabletable.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap/js/dist/util.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap/js/dist/tab.js')}}"></script>
<script src="{{asset('admin/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/main.js?version=2.6')}}"></script>
@yield('js')
</body>
</html>
