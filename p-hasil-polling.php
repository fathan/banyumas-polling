<!DOCTYPE html>
<html lang="en">
<?php include 'shareds/head.php'; ?>
<body>
	<div id="spinner"></div>
	<div class="body--wrapper">
		<?php include 'shareds/navbar.php'; ?>
		<section class="section--wrapper hasil-polling">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="pull-left">
							<span class="hasil-polling-title">Hasil Polling</span>
						</div>
						<div class="pull-right">
							<span class="total--suara">TOTAL : <span class="number">117012</span> SUARA</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php for ($i=0; $i < 12; $i++) { ?>
							<div class="hasil-polling">
								<div class="hasil-polling__lists">
									<div class="col-md-2">
										<div class="avatar">
											<img src="http://banyumasmemilih.com/assets/image/kandidat/Mifta_Reza.jpeg" alt="">
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-12">
												<div class="pull-left">
													<span class="name">Luthfi Satria Ramdhani</span>
												</div>
												<div class="pull-right">
													<div class="btn btn-danger">Memperoleh: 289 Suara</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="progress">
													<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
														50%
													</div>
												</div>
											</div>
										</row>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<?php include 'shareds/footer.php'; ?>
	</div>
</body>
<?php include 'shareds/javascript.php'; ?>
</html>
