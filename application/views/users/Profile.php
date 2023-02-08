<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css') ?>">
	<title> Your Profile </title>
</head>
<body>

	<section class="py-0">
        <?php
          $this->load->view('Utilities/Header');
        ?>
    </section>
    <section class="py-0">
    	<!-- Inona no apoitra ato 
    		- User info aloha no apoitra ato
			- Ireo Objet rehetra ananany
    	-->
    	<?php $this->load->view('users/Profile_template') ?>
    </section>
	
</body>
</html>