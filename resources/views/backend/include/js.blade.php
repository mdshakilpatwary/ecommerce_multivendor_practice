	<!-- Bootstrap JS -->
	<script src="{{ asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{ asset('backend')}}/assets/js/jquery.min.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
	<!-- tablle pluging  -->
	<script src="{{ asset('backend')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="{{ asset('backend')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<!-- #massege pluging  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <!-- message javascript code -->
	  <script>
		
		 toastr.options ={
			"closeButton": true,
			"progressBar": true,
			
		 }
		 @if(Session::has('message'))
		 toastr.success("{{Session('message')}}");
		 @endif
	  </script>
	  <!-- table javascript code -->
	  <script>
		$(document).ready(function() {
			var table = $('#mytable').DataTable( {
				lengthChange: true,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	  <script src="{{ asset('backend')}}/assets/js/index.js"></script>
	<!--app JS-->
	<script src="{{ asset('backend')}}/assets/js/app.js"></script>