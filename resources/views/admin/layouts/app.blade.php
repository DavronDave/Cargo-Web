<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Dave - Cargo</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="{{asset('admin-assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin-assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin-assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin-assets/css/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin-assets/css/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin-assets/css/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin-assets/css/theme/default.css')}}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="{{asset('admin-assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

    <link href="{{asset('admin-assets/plugins/jquery-jvectormap/jquery-jvectormap.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-assets/plugins/morris/morris.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	@stack('after-styles')
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('admin-assets/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/powerange/powerange.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/form-slider-switcher.demo.min.js')}}"></script>

	<!-- ================== END BASE JS ================== -->
    <script src="{{asset('admin-assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('admin-assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
	<script src="{{asset('admin-assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
</head>
<body>
	<!-- begin #page-loader -->
		<div id="page-loader" class="fade in">
			<span class="spinner"></span>
		</div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
			@include('admin.layouts.header')
		<!-- end #header -->

		<!-- begin #sidebar -->
			@include('admin.layouts.side-bar')
		<!-- end #sidebar -->

		<!-- begin #content -->
	        @yield('content')
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top">
			<i class="fa fa-angle-up"></i>
		</a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->

	<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="admin-assets/crossbrowserjs/html5shiv.js"></script>
		<script src="admin-assets/crossbrowserjs/respond.min.js"></script>
		<script src="admin-assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{asset('admin-assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{asset('admin-assets/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/morris/morris.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js')}}"></script>
	 <script src="{{asset('admin-assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
	<script src="{{asset('admin-assets/js/dashboard-v2.min.js')}}"></script>
	<script src="{{asset('admin-assets/js/apps.min.js')}}"></script>

	@stack('after-scripts')
	<!-- ================== END PAGE LEVEL JS ================== -->
	@yield('style')
	@yield('script')
	<script>
        $(document).ready(function() {
            App.init();
            //DashboardV2.init();
        });
    </script>
</body>
</html>
