<!DOCTYPE html> 
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href=""/>
		<title>SIPAYU</title>
		<meta charset="utf-8" />
		<meta name="data-bs-theme-mode" content="dark">
		<meta name="data-bs-theme" content="dark">
		<meta name="prefers-color-scheme" content="dark">
		<meta name="description" content="SIPAYU" />
		<meta name="keywords" content="SIPAYU" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="SIPAYU" />
		<meta property="og:url" content="https://keenthemes.com/products/saul-html-pro" />
		<meta property="og:site_name" content="SIPAYU" />
		<link rel="canonical" href="https://preview.keenthemes.com/saul-html-free" />
		<link rel="shortcut icon" href="{{ url('images/sipayu-ori-logo.png') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>

		<!--begin::Javascript-->
		<script>var hostUrl = "{{ url('assets') }}";</script>
		<script>var baseUrl = "{{ url('') }}";</script>
		<script>var baseUrlApi = window.location.hostname == '0.0.0.0' ? `http://0.0.0.0:8000/public` : `https://be-sipayu.indramayukab.go.id/public`;</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ url('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{ url('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ url('assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ url('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ url('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ url('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ url('assets/js/custom/utilities/modals/create-account.js') }}"></script>
		<script src="{{ url('assets/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ url('assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		<script>
			if (localStorage.getItem("sipayuSession") == null) {
				window.location = "{{ url('login') }}";
			}
			$("#kt_datatable_zero_configuration").DataTable();
			$(document).on("click", "#sign-out", function() {
				localStorage.removeItem("sipayuSession");
				window.location = "{{ url('login') }}";
			});
		
			let session = JSON.parse(localStorage.sipayuSession);
			var apiKey = session.data.access_token;

			$("#name-user").html(session.data.user.name);
			$("#email-user").html(session.data.user.email);
		
		</script>

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="false" data-kt-app-aside-fixed="false" data-kt-app-aside-push-toolbar="false" data-kt-app-aside-push-footer="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "dark"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->