<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/fontawesome-all.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/swiper.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
	<title> Liste de vos propositions </title>
</head>
<body>
	<section class="py-0">
		<?php $this->load->view('Utilities/Header'); ?>
	</section>
	<section class="py-0 mx-auto">
		<!-- Atao table ny ato -->
		<div class="py-4 col-lg-6 col-sm-12 mx-auto">
			<div class="p-4 card">
				<h3 class="card-title">
					Sent
				</h3>
				<table class="table table-sm table-responsive">
					<thead>
						<th> Proprietary </th>
						<th> Your requested Object </th>
						<th> The object to exchange </th>
						<th> </th>
						<th> </th>
					</thead>
					<tbody>
						<?php
							for( $i = 0 ; $i < count($sent) ; $i++ ){ ?>
								<tr>
									<td> <?= $sent[$i]['receiver']['Nom']." ".$sent[$i]['receiver']['prenom'] ?>  </td>
									<td><?= $sent[$i]['proposed']['nom'] ?></td>
									<td><?= $sent[$i]['requested']['nom'] ?></td>
									
								</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="mt-3 p-4 card">
				<h3 class="card-title">
					Received
				</h3>
				<table class="table table-responsive">
					<thead>
						<th> The asker </th>
						<th> Requested object (your) </th>
						<th> The object to exchange </th>
						<th> </th>
						<th> </th>
					</thead>
					<tbody>
						<?php
							for( $i = 0 ; $i < count($received) ; $i++ ){ ?>
								<tr>
									<td> <?= $received[$i]['requester']['Nom']." ".$received[$i]['requester']['prenom'] ?>  </td>
									<td><?= $received[$i]['proposed']['nom'] ?></td>
									<td><?= $received[$i]['requested']['nom'] ?></td>
									<td>
										<a href="<?= site_url('exchange/accept/?id='.$received[$i]['idProposition']) ?>" class="btn btn-success">
											Accept
										</a>
									</td>
									<td>
										<a href="<?= site_url('exchange/reject/?id='.$received[$i]['idProposition'])?>" class="btn btn-danger">
											Reject
										</a>
									</td>
								</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</body>
</html>