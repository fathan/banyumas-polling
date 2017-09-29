<!DOCTYPE html>
<html lang="en">
<?php include 'shareds/head.php'; ?>
<body>
	<div id="spinner"></div>
	<div class="body--wrapper">
		<?php include 'shareds/navbar.php'; ?>
		<!-- SLIDER HOME -->
		<div id="carousel-home-polling" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-home-polling" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-home-polling" data-slide-to="1"></li>
				<li data-target="#carousel-home-polling" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="http://banyumasmemilih.com/assets/image/slide2-ver1.jpg">
				</div>
				<div class="item">
					<img src="http://banyumasmemilih.com/assets/image/slide1-ver2.jpg">
				</div>
				<div class="item">
					<img src="http://banyumasmemilih.com/assets/image/slide3-v1.jpg">
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-home-polling" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-home-polling" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- /.SLIDER HOME -->
		<!-- USER LISTS -->
		<section class="section--wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title--top">
							<span>pilihan inyong</span>
						</div>
					</div>
					<?php for ($i=0; $i < 12; $i++) { ?>
						<div class="col-md-3">
							<div class="user-lists">
								<div class="user-lists__image">
									<img src="http://banyumasmemilih.com/assets/image/kandidat/mardjoko_Bupati_banyumas.jpg" alt="">
								</div>
								<div class="user-lists__title">
									Lutfi Satria Ramdhani
								</div>
								<div class="user-lists__bottom">
									<a href="p-kandidat-detail.php" class="box-select">
										<i class="fa fa-check"></i>
										Pilih
									</a>
									<a href="p-kandidat-detail.php" class="box-profile">
										<i class="fa fa-user"></i>
										Profil
									</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="row">
					<div class="text-center">
						<a href="p-hasil-polling.php" class="btn btn-primary btn-lg">
							<i class="fa fa-eye"></i>
							Lihat Hasil Polling
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- /.USER LISTS -->
		<?php include 'shareds/footer.php'; ?>
	</div>
</body>
<?php include 'shareds/javascript.php'; ?>
</html>