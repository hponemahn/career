<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}" type="text/css" />
	{{-- <link rel="stylesheet" href="style.css" type="text/css" /> --}}
	<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('asset/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('asset/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}" type="text/css" />

	<!-- DatePicker CSS -->
	{{-- <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" type="text/css" /> --}}

	<link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('asset/css/photographer.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Career Advice | MyMar</title>

	<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}

		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error { display: none !important; }

		label .pricing-box { background-color: #F8F9FA; }
		label:not(.checked) .pricing-box { background-color: #FFF; .custom-padding-bottom }

        .custom-padding-bottom > label {
            padding-bottom: 15px;
        }

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header no-sticky">

			<div id="header-wrap">
				<div class="container">
					<a href="{{ url('/') }}"><img src="{{ asset('images/myMarLogo.png') }}" alt="MyMar Logo" height="100"></a>
					
				</div>
		
				{{-- <div>
					<div class="primary-menu-trigger hamburger">
						<i class="icon-line-menu"></i>
						<i class="icon-line-cross"></i>
					</div>
					<div class="global-menu">
						<div class="global-menu__wrap">
							<a class="global-menu__item" href="#">Home</a>
							<a class="global-menu__item" href="#">Photography</a>
							<a class="global-menu__item" href="#">About</a>
							<a class="global-menu__item" href="#">Contact</a>
						</div>
					</div>
				</div> --}}
			</div>
		
		</header>
		<!-- #header end -->

		<!-- Content
        ============================================= -->
        @yield('content')
        <!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder clearfix">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background: #F5F5F5">

				<div class="container clearfix">

					<div class="col_full center nobottommargin topmargin-sm">
						© MyMar. 2020. All Rights Reserved.<br><br>
						<a href="http://facebook.com/mymar" target="_blank" class="social-icon inline-block si-small si-borderless si-rounded si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="tel:09777425147" target="_blank" class="social-icon inline-block si-small si-borderless si-rounded si-twitter">
							<i class="icon-phone"></i>
							<i class="icon-phone"></i>
						</a>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('asset/js/jquery.js') }}"></script>
	<script src="{{ asset('asset/js/plugins.js') }}"></script>

	<!-- DatePicker JS -->
	{{-- <script src="{{ asset('asset/js/datepicker.js') }}"></script> --}}

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('asset/js/functions.js') }}"></script>

	<script>
		jQuery(document).ready( function(){

			jQuery('.pricing-box input:radio').on( 'change', function(){
				$('.checked').removeClass('checked');
				if($(this).is(':checked'))  {
				    $(this).parents('label').addClass('checked');
				}
			});

		});

	</script>

</body>
</html>