<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<!-- begin container-fluid -->
	<div class="container-fluid" style="background-color: #091f1d;">
		<!-- begin mobile sidebar expand / collapse button -->
		<div class="navbar-header">
			<div>
{{--                <p  style="font-size: 40px; align-content: center; padding: 3px; color: white" >Dave Cargo</p>--}}
                {{-- <img src="{{asset('admin-assets/img/dave-cargo.png')}}" alt="" style="width: 240px; margin: -15px -15px -15px -25px"> --}}
            </div>
			<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- begin header navigation right -->
		<ul class="nav navbar-nav navbar-right">
			{{-- <li>
				<form class="navbar-form full-width">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter keyword" />
						<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</li> --}}
			<li class="dropdown">
				<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14" style="color:#fefeff;">
					<i class="fa fa-bell-o"></i>
					<span class="label">5</span>
				</a>
				<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Notifications (5)</li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports</h6>
                                <div class="text-muted f-s-11">3 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><img src="/admin-assets/img/user.png" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">John Smith</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted f-s-11">25 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New User Registered</h6>
                                <div class="text-muted f-s-11">1 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted f-s-11">2 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
				</ul>
			</li>
			<li class="dropdown navbar-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" style="color:#fefeff;">
					<img src="{{(auth()->user()->image) ? asset(auth()->user()->image) : asset('/admin-assets/img/user.png')}}" class="img-round img-responsive ">
					<span class="hidden-xs">{{auth()->user()->full_name}}</span> <b class="caret"></b>
				</a>
				<ul class="dropdown-menu animated fadeInLeft">
					<li class="arrow"></li>
					<li><a href="{{route('admin.profile.index')}}">Редактировать профиль</a></li>
					<li class="divider"></li>
					<li>
                        <a href="{{route('admin.logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            Выйти из системы
                        </a>
                        <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
				</ul>
			</li>
		</ul>
		<!-- end header navigation right -->
	</div>
	<!-- end container-fluid -->
</div>
<style>
    .dave-cargo {
        font-family: 'Arial', sans-serif;
        color: #007BFF;
        text-shadow: 2px 2px #000;
        animation: glow 2s ease-in-out infinite alternate;
    }
    @keyframes glow {
        from {
            text-shadow: 0 0 10px #00E, 0 0 20px #00E, 0 0 30px #00E, 0 0 40px #00E, 0 0 50px #00E, 0 0 60px #00E, 0 0 70px #00E;
        }

        to {
            text-shadow: 0 0 20px #00E, 0 0 30px #FF8, 0 0 40px #FF8, 0 0 50px #FF8, 0 0 60px #FF8, 0 0 70px #FF8, 0 0 80px #FF8;
        }
    }
</style>
