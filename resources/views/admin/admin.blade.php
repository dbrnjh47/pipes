<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>{{$settings->name}} | Панель управления</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" href="{{$settings->logo}}" type="image/x-icon">
	<link rel="shortcut icon" href="{{$settings->logo}}" type="image/x-icon">

	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Montserrat:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="/temple/pk/admin/dash/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
	<link href="/temple/pk/admin/dash/css/line-awesome.css" rel="stylesheet" type="text/css" />
	<link href="/temple/pk/admin/dash/css/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="/temple/pk/admin/dash/css/flaticon2.css" rel="stylesheet" type="text/css" />
	<link href="/temple/pk/admin/dash/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/temple/pk/admin/css/notify.css" rel="stylesheet" />
	<link href="/temple/pk/admin/dash/css/datatables.bundle.min.css" rel="stylesheet" type="text/css" />

	<script src="/temple/pk/admin/dash/js/jquery.min.js" type="text/javascript"></script>

	<script src="/temple/pk/admin/js/notify.min.js" type="text/javascript"></script>
	<script src="/temple/pk/admin/dash/js/popper.min.js" type="text/javascript"></script>
	<script src="/temple/pk/admin/dash/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/temple/pk/admin/dash/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="/temple/pk/admin/dash/js/scripts.bundle.js" type="text/javascript"></script>
	<script src="/temple/pk/admin/dash/js/datatables.bundle.min.js" type="text/javascript"></script>
	<script src="/temple/pk/admin/dash/js/adminActions.js?v=5" type="text/javascript"></script>
	<style>
		.profile_name {
			text-align: center;
			font-size: 24.17px;
			height: 36px;
			width: 35px;
			font-family: bierahinia, Regular;
			color: #ffff;
			background: #303342;
			border-radius: 7px;
			padding: 0px 0px;
		}
	</style>
</head>

<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="/admin/">
				<img alt="Logo" src="/temple/pk/admin/dash/img/logo-light.png" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
		</div>
	</div>

	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
			<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

				<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
					<div class="kt-aside__brand-logo">
						<a href="/admin/">
							<img alt="Logo" src="/temple/pk/admin/dash/img/logo-light.png" />
						</a>
					</div>
				</div>

				<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
					<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
						<ul class="kt-menu__nav ">
							<li class="kt-menu__item {{ (Request::is('admin') ? 'kt-menu__item--active' : '') }}" aria-haspopup="true">
								<a href="/admin/" class="kt-menu__link">
									<span class="kt-menu__link-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon id="Bound" points="0 0 24 0 24 24 0 24" />
												<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero" />
												<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<span class="kt-menu__link-text">Статистика</span>
								</a>
							</li>
							<li class="kt-menu__section ">
								<h4 class="kt-menu__section-text">Управление сайтом</h4>
								<i class="kt-menu__section-icon flaticon-more-v2"></i>
							</li>

							<li class="kt-menu__item {{ (Request::is('admin/news') ? 'kt-menu__item--active' : '') || (Request::is('admin/news_editing/*') ? 'kt-menu__item--active' : '') }}" aria-haspopup="true">
								<a href="/admin/news" class="kt-menu__link">
									<span class="kt-menu__link-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
									</span>
									<span class="kt-menu__link-text">Новости</span>
								</a>
							</li>

							<li class="kt-menu__item {{ (Request::is('admin/catalogs') ? 'kt-menu__item--active' : '') || (Request::is('admin/catalogs_editing/*') ? 'kt-menu__item--active' : '') }}" aria-haspopup="true">
								<a href="/admin/catalogs" class="kt-menu__link">
									<span class="kt-menu__link-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
												<path d="M12.6706167,18.7881514 L15.9697449,13.8394592 C16.1995092,13.4948127 16.1063788,13.0291607 15.7617323,12.7993963 C15.6385316,12.7172626 15.4937759,12.673434 15.3457071,12.673434 L12.659208,12.673434 L12.659208,9.69999981 C12.659208,9.28578625 12.3234215,8.94999981 11.909208,8.94999981 C11.6584431,8.94999981 11.4242696,9.07532566 11.2851703,9.28397466 L7.98604212,14.2326669 C7.75627777,14.5773134 7.84940818,15.0429654 8.19405469,15.2727297 C8.31725533,15.3548635 8.4620111,15.398692 8.61007984,15.398692 L11.296579,15.398692 L11.296579,18.3721263 C11.296579,18.7863398 11.6323654,19.1221263 12.046579,19.1221263 C12.2973439,19.1221263 12.5315174,18.9968004 12.6706167,18.7881514 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<span class="kt-menu__link-text">Каталоги</span>
								</a>
							</li>

							<li class="kt-menu__item {{ (Request::is('admin/services') ? 'kt-menu__item--active' : '') || (Request::is('admin/services_editing/*') ? 'kt-menu__item--active' : '') }}" aria-haspopup="true">
								<a href="/admin/services" class="kt-menu__link">
									<span class="kt-menu__link-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
												<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
												<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
											</g>
										</svg>
									</span>
									<span class="kt-menu__link-text">Услуги</span>
								</a>
							</li>

							<li class="kt-menu__item {{ (Request::is('admin/service_lots') ? 'kt-menu__item--active' : '') || (Request::is('admin/service_lots_editing/*') ? 'kt-menu__item--active' : '') }}" aria-haspopup="true">
								<a href="/admin/service_lots" class="kt-menu__link">
									<span class="kt-menu__link-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="1" width="2" height="14" rx="1" />
												<path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) " />
											</g>
										</svg>
									</span>
									<span class="kt-menu__link-text">Лот</span>
								</a>
							</li>


							<li class="kt-menu__item {{ (Request::is('admin/settings') ? 'kt-menu__item--active' : '') }}" aria-haspopup="true">
								<a href="/admin/settings" class="kt-menu__link">
									<span class="kt-menu__link-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect id="bound" x="0" y="0" width="24" height="24" />
												<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Path" fill="#000000" />
											</g>
										</svg>
									</span>
									<span class="kt-menu__link-text">Настройки</span>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>

			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
					<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
					<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

					</div>
					<div class="kt-header__topbar">
						<div class="kt-header__topbar-item kt-header__topbar-item--user">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
								<div class="kt-header__topbar-user">
									<span class="kt-header__topbar-welcome kt-hidden-mobile">Привет,</span>
									<span class="kt-header__topbar-username kt-hidden-mobile">{{$u->login}}</span>
								</div>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
								<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(/dash/img/bg-1.jpg)">
									<div class="kt-user-card__name" style="color: #6c7293;">
										{{$u->login}}
									</div>
								</div>
								<div class="kt-notification">
									<!-- <a href="/temple/pk/admin/user/{{$u->id}}" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Мой профиль
												</div>
												<div class="kt-notification__item-time">
													Настройки Вашего аккаунта
												</div>
											</div>
										</a> -->
									<div class="kt-notification__custom">
										<a href="/" class="btn btn-label-brand btn-sm btn-bold">Вернуться на сайт</a>
										<a href="/logout" class="btn btn-label-brand btn-sm btn-bold" style="margin-left: 5px;">Выйти</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
					@yield('content')
				</div>



			</div>
		</div>
	</div>

	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>
	@if(session('error'))
	<script>
		$.notify("{{ session('error') }}");
	</script>
	@elseif(session('success'))
	<script>
		$.notify("{{ session('success') }}", "success");
	</script>
	@endif
	<style>
		@font-face {
			font-family: bierahinia;
			src: url(/temple/fonts/bierahinia.ttf);
		}

		.kt-widget3__user-img .profile_name {
			text-align: center;
			font-size: 24.17px;
			height: 36px;
			width: 35px;
			font-family: bierahinia, Regular;
			color: #ffff;
			background: #303342;
			border-radius: 7px;
			padding: 0px 0px;
		}
	</style>
</body>

</html>