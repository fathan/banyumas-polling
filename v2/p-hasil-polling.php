<!DOCTYPE html>
<html lang="en">
<?php include 'shareds/head.php'; ?>
<body>
	<div class="body--wrapper">
		<section class="page-detail">
			<aside id="aside-information" class="page-detail__aside-information">
				<div class="menu-back">
					<a href="/" class="icon">
						<i class="fa fa-home"></i>
						&nbsp; Kembali ke Beranda
					</a>
				</div>
				<div class="image-2">
					<img src="assets/images/gallery/aside-hasil-polling.jpg">
				</div>
			</aside>
			<section id="body-information" class="page-detail__body-information">
				<div class="box-list-chart">
					<?php for ($i=0; $i < 9; $i++) { ?>
						<div class="list-candidate">
							<div class="box-left">
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="image">
											<img src="http://www.sulutprov.go.id/contents/2017/03/1384_wagub.jpg" alt="">
										</div>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="information">
											<div class="name">Lutfi satria Ramdhani</div>
											<div class="position">Kandidat/Peserta</div>
											<div class="progress">
											  <div class="progress-bar progress-bar-warning" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											    60%
											  </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="box-right">
								<div class="total">
									45 Suara
								</div>
								<a href="p-kandidat.php" class="profile">
									<i class="fa fa-eye"></i>
									Lihat Profil
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
		</section>
	</div>
</body>
<?php include 'shareds/javascript.php'; ?>
<script>
	$(window).resize(function() {
	  $('#aside-information').height($(window).height() - 30);
	  $('#body-information').height($(window).height() - 30);
	});

	$(window).trigger('resize');
</script>
</html>