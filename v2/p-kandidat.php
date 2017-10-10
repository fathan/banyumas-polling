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
				<div class="image">
					<img src="assets/images/gallery/aside-kandidat.png">
				</div>
			</aside>
			<section id="body-information" class="page-detail__body-information">
				<div class="title-top">
					<span>Pilihan Inyong</span>
				</div>
				<div class="box-list">
					<?php for ($i=0; $i < 9; $i++) { ?>
						<div class="list-candidates">
							<div class="image">
								<img src="http://www.sulutprov.go.id/contents/2017/03/1384_wagub.jpg" alt="">
								<div class="sec-top">
									<a href="" class="btn btn-sm btn-success">
										<i class="fa fa-thumbs-o-up"></i>
										Pilih
									</a>
									<a href="" class="btn btn-sm btn-info">
										<i class="fa fa-user"></i>
										Profil
									</a>
								</div>
								<div class="sec-bottom">
									<div class="name">
										Luthfi Satria Ramdhani
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="box-bottom">
					<a href="p-hasil-polling.php" class="act-to-polling-result">
						<span>
							<i class="fa fa-eye"></i>
							lihat hasil polling
						</span>
					</a>
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