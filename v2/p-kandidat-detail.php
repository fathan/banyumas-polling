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
					<span>Detail Kandidat</span>
				</div>
				<div class="box-list">
					<div class="kandidat-detail">
						<div class="panel-kandidat">
							<div class="panel-kandidat__header">
								<div class="col-md-2 col-sm-12 col-xs-12">
									<div class="row">
										<div class="image">
											<img src="http://banyumasmemilih.com/assets/image/kandidat/juli.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="col-md-10 col-sm-12 col-xs-12">
									<div class="row">
										<div class="pull-right">
											<div class="name">
												Lutfi Satria Ramdhani
											</div>
											<div class="position">
												Kandidat/Peserta
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-kandidat__body">
								<div class="col-md-6">
									<div class="description">
										<div class="title">
											Deskripsi
										</div>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, qui enim. Nisi impedit, accusamus corporis nulla ea, dicta tempora quas sint, in temporibus tempore repellendus officiis possimus? Dolores, cupiditate maiores?
										</p>
									</div>
									<div class="description">
										<div class="title">
											Visi
										</div>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, qui enim. Nisi impedit, accusamus corporis nulla ea, dicta tempora quas sint, in temporibus tempore repellendus officiis possimus? Dolores, cupiditate maiores?
										</p>
									</div>
									<div class="description">
										<div class="title">
											Misi
										</div>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, qui enim. Nisi impedit, accusamus corporis nulla ea, dicta tempora quas sint, in temporibus tempore repellendus officiis possimus? Dolores, cupiditate maiores?
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box-profile">
										<div class="box-profile__title">
											Profil Lengkap
										</div>
										<div class="box-profile__list">
											<div class="key">Nama</div>
											<div class="value">Lutfi Satria Ramdhani</div>
										</div>
										<div class="box-profile__list">
											<div class="key">Nama Panggilan</div>
											<div class="value">Lutfi</div>
										</div>
										<div class="box-profile__list">
											<div class="key">Tempat/Tanggal Lahir</div>
											<div class="value">Bogor, 17 Agustus 1945</div>
										</div>
										<div class="box-profile__list">
											<div class="key">Kewarganegaraan</div>
											<div class="value">Indonesia</div>
										</div>
										<div class="box-profile__list">
											<div class="key">Agama</div>
											<div class="value">Islam</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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