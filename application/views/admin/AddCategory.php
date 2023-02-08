<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css');?>">
	<title> Add Category </title>
</head>
<body>
	<?php $this->load->view('Utilities/adminheader'); ?>
	<section class="py-0">
		<div class="row vh-100">
			<div class="col-sm-12 col-lg-6 mx-auto my-auto">
				<h3 class="title text-center text-decoration-underline">
					Insert a category
				</h3>
				<form action="<?= site_url('admin/add') ?>" class="form">
					<div class="mb-3">
						<label for="" class="form-label"> Enter the category name </label>
						<input type="text" class="form-control" name="category">
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-primary" value="Add the new Category">
					</div>
				</form>
			</div>
		</div>
	</section>
	
</body>
</html>