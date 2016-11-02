<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - PIRA</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap-select.min.css")}}">
    {{--<link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap-slider.css")}}">--}}
    <link rel="stylesheet" href="{{asset("css/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin_panel.css")}}">
    <link rel="stylesheet" href="{{asset("css/skin-black.css")}}">
    <link rel="stylesheet" href="{{asset("css/lib/noty/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/lib/wysiwyg.css")}}">
    <link rel="stylesheet" href="{{asset("css/lib/cropper.css")}}">
    <link rel="stylesheet" href="{{asset("bootstrap/bootstrap-editable/css/bootstrap-editable.css")}}">

    @stack('stylesheets')


</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

    @yield('header')

    @yield('sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        2016
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-confirm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn col-md-5 col-md-offset-1 btn-success" data-dismiss="modal">Ok</button>
                <button type="button" class="btn col-md-5 btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



<script src="{{asset("js/lib/jquery.js")}}"></script>
<script src="{{asset("js/lib/jquery-ui.js")}}"></script>
<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("bootstrap/js/bootstrap-select.js")}}"></script>
{{--<script src="{{asset("bootstrap/js/bootstrap-slider.js")}}"></script>--}}
<script src="{{asset('js/lib/noty/packaged/jquery.noty.packaged.min.js')}}"></script>
<script src="{{asset('bootstrap/bootstrap-editable/js/bootstrap-editable.min.js')}}"></script>
{{--<script src="{{asset('bootstrap/js/wysihtml5-0.3.0.js')}}"></script>--}}
<script src="{{asset('bootstrap/js/wysihtml5-0.4.0pre.js')}}"></script>
<script src="{{asset('bootstrap/js/wysihtml5ParserRules.js')}}"></script>
<script src="{{asset('js/lib/image-viewer.js')}}"></script>
<script src="{{asset('js/lib/cropper.js')}}"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/workspace.js")}}"></script>
<script src="{{asset('js/responseHandler.js')}}"></script>

@stack('scripts')


</body>
</html>
