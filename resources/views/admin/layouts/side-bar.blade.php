@php
    use App\Models\Admin\Role;
    use Illuminate\Support\Facades\Auth;

    $userRoles = optional(Auth::user())->roles;
@endphp
<div id="sidebar" class="sidebar" style="background-color:#091f1d">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
                <div class="info" style="text-align: center">
                    <ul class="nav">
{{--                        <li style="text-align: center;font-size: 82%;color:aliceblue;">{{auth()->user()->full_name}}{{' ('.auth()->user()->role->key.')'}}</b></li>--}}
                        {{-- <a href="javascript:;"><img src="{{(auth()->user()->image) ? asset(auth()->user()->image) : asset('/admin-assets/img/user.png')}}" alt=""></a> --}}
                    </ul>
                </div>
            </li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="@yield('dashboard')">
				<a href="{{route('admin.dashboard')}}">
					<i class="fa fa-laptop"></i>
					<span>Рабочий стол</span>
				</a>
			</li>


            @if(Auth::check() && Auth::user()->role_id  == 1)
                <li class="@yield('product_categories')">
                    <a href="{{route('admin.product-categories.index')}}">
                        <i class="fa fa-product-hunt"></i>
                        <span>Категории продукта</span>
                    </a>
                </li>
            @endif

            <li class="@yield('products')">
{{--                @can('view', \App\Models\Product::class)--}}
                <a href="{{route('admin.products.index')}}">
                    <i class="fa fa-product-hunt"></i>
                    <span>Продукты</span>
                </a>
{{--                @endcan--}}
            </li>

            <li class="@yield('projects')">
                <a href="{{route('admin.projects.index')}}">
                    <i class="fa fa-print"></i>
                    <span>Проекты</span>
                </a>
            </li>

            <li class="@yield('drivers')">
                <a href="{{route('admin.drivers.index')}}">
                    <i class="fa fa-drivers-license"></i>
                    <span>Водитель паспорта</span>
                </a>
            </li>

            <li class="@yield('sender-people')">
                <a href="{{route('admin.sender-people.index')}}">
                    <i class="fa fa-send"></i>
                    <span>Отправители</span>
                </a>
            </li>

            <li class="@yield('products-list')">
                <a href="{{route('admin.product-list.index')}}">
                    <i class="fa fa-list"></i>
                    <span>Инвойс продуктов</span>
                </a>
            </li>

            <li class="@yield('incoterms')">
                @can('view', \App\Models\Product::class)
                <a href="{{route('admin.incoterms.index')}}">
                    <i class="fa fa-list-alt"></i>
                    <span>Инкотермс</span>
                </a>
                @endcan
            </li>

            @if(Auth::check() && Auth::user()->role_id  == "1")
{{--            @if($userRoles && in_array("admin", $userRoles->toArray()))--}}
                <li class="has-sub {{ Request::is(['admin/company-contracts*','admin/companies*','admin/countries*','admin/regions*', 'admin/districts*']) ? 'active' : '' }}">
                <a href="#">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-reorder (alias)"></i>
                    <span>О странах</span>
                </a>
                <ul class="sub-menu">
                    <li class="@yield('companies')">
                        @can('view', \App\Models\Product::class)
                        <a href="{{route('admin.companies.index')}}">
                            <i class="fa fa-building"></i>
                            <span>Компании</span>
                        </a>
                        @endcan
                    </li>

                    <li class="@yield('company-contracts')">
                        @can('view', \App\Models\Product::class)
                        <a href="{{route('admin.company-contracts.index')}}">
                            <i class="fa fa-building"></i>
                            <span>Контракты компании</span>
                        </a>
                        @endcan
                    </li>

                    <li class="@yield('countries')">
                        <a href="{{route('admin.countries.index')}}">
                            <i class="fa fa-university"></i>
                            <span>Страны</span>
                        </a>
                    </li>
                    <li class="@yield('regions')">
                        <a href="{{route('admin.regions.index')}}">
                            <i class="fa fa-stack-exchange"></i>
                            <span>Регионы</span>
                        </a>
                    </li>
                    <li class="@yield('districts')">
                        <a href="{{route('admin.districts.index')}}">
                            <i class="fa fa-stack-exchange"></i>
                            <span>Районы</span>
                        </a>
                    </li>
                </ul>
            </li>
{{--            @if($userRoles && in_array("admin", $userRoles->toArray()))--}}
			    <li class="has-sub {{ Request::is(['admin/languages*','admin/roles*', 'admin/blog_types*', 'admin/users*']) ? 'active' : '' }}">
				<a href="#">
					<b class="caret pull-right"></b>
					<i class="fa fa-reorder (alias)"></i>
					<span>Справочник</span>
				</a>
				<ul class="sub-menu">
                    <li class="@yield('users')">
                        @can('view', \App\Models\Product::class)
                        <a href="{{route('admin.users.index')}}">
                            <i class="fa fa-users"></i>
                            <span>Пользователи</span>
                        </a>
                        @endcan
                    </li>
					<li class="@yield('roles')">
                        @can('view', \App\Models\Product::class)
						<a href="{{route('admin.roles.index')}}">
							<i class="fa fa-cogs"></i>
							<span>Роли</span>
						</a>
                        @endcan
					</li>
				</ul>
			</li>
            @endif
{{--            <li class="@yield('contact')">--}}
{{--                <a href="{{route('admin.contact.index')}}">--}}
{{--                    <i class="fa fa-file-text"></i>--}}
{{--                    <span>Контакты</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="@yield('abouts')">--}}
{{--                <a href="{{route('admin.about.index')}}">--}}
{{--                    <i class="fa fa-solid fa-address-card"></i>--}}
{{--                    <span>О нас</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="@yield('projects')">--}}
{{--                <a href="{{route('admin.projects.index')}}">--}}
{{--                    <i class="fa fa-print"></i>--}}
{{--                    <span>Проекты</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="@yield('services')">--}}
{{--                <a href="{{route('admin.service.index')}}">--}}
{{--                    <i class="fa fa-stack-exchange"></i>--}}
{{--                    <span>Услуги</span>--}}
{{--                </a>--}}
{{--            </li>--}}

		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
