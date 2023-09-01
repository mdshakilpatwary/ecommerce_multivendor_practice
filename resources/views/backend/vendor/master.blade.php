
@include('backend/vendor/include/head')
<body>

	<!--wrapper-->
@include('backend/vendor/include/sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
@include('backend/vendor/include/header')
		<!--end header -->
		<!--start page wrapper -->
	<div class="page-wrapper">
        <div class="page-content">
            @yield('main_content')
        </div>
	</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
@include('backend/vendor/include/footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	@include('backend/vendor/include/switcher')
	<!--end switcher-->
@include('backend/vendor/include/script')