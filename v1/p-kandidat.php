<!DOCTYPE html>
<html lang="en">
<?php include 'shareds/head.php'; ?>
<body>
	<div id="spinner"></div>
	<div class="body--wrapper">
		<?php include 'shareds/navbar.php'; ?>
		<!-- USER LISTS -->
		<section class="section--wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title--top">
							<span>kandidat</span>
						</div>
					</div>
					<?php for ($i=0; $i < 12; $i++) { ?>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="user-lists">
								<div class="user-lists__image">
									<img src="http://banyumasmemilih.com/assets/image/kandidat/Mifta_Reza.jpeg" alt="">
								</div>
								<div class="user-lists__title">
									Mifta Reza NP, SP
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
			</div>
		</section>
		<!-- /.USER LISTS -->
		<?php include 'shareds/footer.php'; ?>
	</div>
</body>
<?php include 'shareds/javascript.php'; ?>
</html>