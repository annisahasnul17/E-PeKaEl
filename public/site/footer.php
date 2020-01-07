

<!-- FOOTER -->
<footer id="footer" class="section section-grey">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- footer widget -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="footer">
					<!-- footer logo -->
					<div class="footer-logo">Epekael</div>
					<!-- /footer logo -->

					<p><strong>Solusi Para Pedagang kaki lima</strong></p>

				</div>
			</div>
			<!-- /footer widget -->

			<!-- footer widget -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="footer">
					<h3 class="footer-header">My Account</h3>
					<ul class="list-links">
						<li><a href="keranjang.php">Keranjang</a></li>
						<li><a href="checkout.php">Checkout</a></li>
						<li><a href="daftar.php">Daftar</a></li>
						<li><a href="masuk.php">Login</a></li>
					</ul>
				</div>
			</div>
			<!-- /footer widget -->

			<div class="clearfix visible-sm visible-xs"></div>

			<!-- footer widget -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="footer">
					<h3 class="footer-header">Customer Service</h3>
					<ul class="list-links">
						<li><a href="#">Tentang</a></li>
					</ul>
				</div>
			</div>
			<!-- /footer widget -->

			<!-- footer subscribe -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="footer">
					<h3 class="footer-header">&nbsp;</h3>
					<!-- /footer social -->
				</div>
			</div>
			<!-- /footer subscribe -->
		</div>
		<!-- /row -->
		<hr>
		<!-- row -->
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<!-- footer copyright -->
				<div class="footer-copyright"></div>
				<!-- /footer copyright -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="frontend/js/jquery.min.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/slick.min.js"></script>
<script src="frontend/js/nouislider.min.js"></script>
<script src="frontend/js/jquery.zoom.min.js"></script>
<script src="frontend/js/main.js"></script>


<?php include'livechat.php'; ?>

</body>

<script>

	$(document).ready(function(){

		function numberWithCommas(x) {
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}

		$('.jumlah').on("keyup",function(){
			var nomor = $(this).attr('nomor');

			var jumlah = $(this).val();

			var harga = $("#harga_"+nomor).val();

			var total = jumlah*harga;

			var t = numberWithCommas(total);

			$("#total_"+nomor).text("Rp. "+t+" ,-");
		});
	});








</script>

</html>