<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css') ?>"  rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container" >
    <div class="row vh-100 mx-auto ">
        <div class="col-6 text-center mx-auto col-6 my-auto">
            <div class="col-4">
                <a href="<?php echo site_url('welcome/client'); ?>" class="btn btn-primary">Login as a client</a>
            </div>
            <div class="col-4">
                <a href="<?php echo site_url('welcome/admin'); ?>" class="btn btn-primary">Login pour Admin</a>
                
            </div>
            
        </div>
        
    </div>
</div>
</body>
</html>