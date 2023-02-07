
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/aos/dist/aos.css'); ?>">
    <title>
        Welcome to the website
    </title>
    
</head>
<body>
    <div class="container">
        <div class="row vh-100 mx-auto w-50" data-aos="zoom-out" id="sign-in">
            <div class="forms-contents my-auto" >
                <div class="title my-3 p-3">
                    <h2 class="text-center fs-5 text-decoration-underline">
                        Welcome to the website
                    </h2>
                    <p class="text-muted fs-6 text-center">
                        Login using your credentials to access the website
                    </p>
                </div>
                <div class="forms">
                    <form action="<?php echo base_url('index.php/user/login'); ?>" method="POST" class="form">
                        <div class="form-floating mb-3">
                            <input type="text" name="email" value="<?php echo $emailLogin; ?>" class="form-control" id="floatingInputUser" placeholder="Your email">
                            <label for="floatingInputUser fs-4"> Username </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" value="<?php echo $passLogin; ?>" class="form-control" id="floatingInputPass" placeholder="Your password">
                            <label for="floatingInputPass"> Password </label>
                        </div>
                        <div class="form-floating mb-3 text-center">
                            <input type="submit" class="btn btn-primary px-4" value="Login">
                        </div>
                    </form>
                    <div class="error-message">
                        <p class="text-center text-danger">
                            <?= $error ?>
                        </p>
                    </div>
                </div>

                <div class="not-account">
                    <p>
                        You don't have an account ? 
                            <a href="<?php echo site_url('user/inscriptionPage') ?>" >
                                Create an account now
                            </a>    
                    </p>
                </div>
                
            </div>
        </div>
          
    </div>
    <script src="<?php echo base_url('assets/assets/aos/dist/aos.js'); ?>"></script>
    
    <script type="text/javascript">
        AOS.init({
            duration: 1000,
            once: false,
            easing: 'ease'
          });
    </script>
</body>
</html>