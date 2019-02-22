<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')  }}">
    <link rel="stylesheet" href="{{ asset('plugins/highcharts/css/highcharts.css') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link id="themecss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    @yield('style')
</head>

<body>
@include('template.partial.nav')
<div class="main">
    <!-- Content Here -->
    <section class="admin-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">@yield('title')</h3>
            </div>
            <div class="panel-body">
                @include('flash::message')
                @include('template.partial.errors')
                @yield('content')
            </div>
        </div>
    </section>
</div>

<!--Footer Here
include('template.partial.footer')-->

<!--Loader Script
    <script src=" {{ asset('plugins/jquery/js/jquery-3.2.0.min.js') }} "></script>-->
<script src=" {{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src=" {{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
<script src=" {{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
<script src=" {{ asset('plugins/highcharts/highcharts.js') }}"></script>
<!---->
<!--Otros Script-->


<!---->
@yield('js')
</body>
</html>