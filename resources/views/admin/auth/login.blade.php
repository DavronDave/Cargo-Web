<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>ALLTEN</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="{{asset('admin-assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin-assets/css/style.min.css')}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

</head>
<body class="pace-top">
	<div class="login-cover">
	    <div class="login-cover-image"><img src="{{asset('admin-assets/img/login-bg/bg-6.jpg')}}" data-id="login-cover-image" alt="" /></div><br>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand" style="text-align: center; font-size: 40px;  font-family: Apple">
                    Cargo
                </div>
            </div>
            <!-- end brand -->

                <div class="login-content">
                    <form action="{{ route('admin.authenticate') }}" method="POST" class="margin-bottom-0">
                        @csrf
                        <div class="form-group m-b-30">
                            <input type="text" class="form-control input-lg" placeholder="Имя пользователя" name="username" required />
                            @error('username')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-b-20">
                            <input type="password" class="form-control input-lg" placeholder="Пароль" name="password" required />
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- <div class="checkbox m-b-20">
                            <label>
                                <input type="checkbox" /> Remember Me
                            </label>
                        </div> --}}
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Вход</button>
                        </div>
                        {{-- <div class="m-t-10">
                        Еще не зарегистрировались? Нажмите <a href="{{route('register')}}">здесь</a> регистрировать.
                        </div> --}}
                    </form>
                </div>
        </div>
	</div>

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('admin-assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('admin-assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
	<script src="{{asset('admin-assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
	<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin-assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin-assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('admin-assets/js/apps.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			// LoginV2.init();
		});
	</script>
</body>
</html>


