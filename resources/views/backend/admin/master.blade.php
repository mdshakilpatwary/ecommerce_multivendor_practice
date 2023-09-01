
@include('backend/admin/include/head')
<body>

	<!--wrapper-->
@include('backend/admin/include/sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
@include('backend/admin/include/header')
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
@include('backend/admin/include/footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	@include('backend/admin/include/switcher')
	<!--end switcher-->
@include('backend/admin/include/script')