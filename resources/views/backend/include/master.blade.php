@php
$pageTitle = 'Dashboard';
@endphp

@include('backend.include.head')

<!-- body part sart to here -->

	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
@include('backend.include.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
@include('backend.include.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

                 @yield('mainbody')
         

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	@include('backend.include.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	@include('backend.include.switcher')

	<!--end switcher-->
<!-- javascript link here  -->
	@include('backend.include.js')

</body>

</html>