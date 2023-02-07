<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/aos/dist/aos.css'); ?>">
    <title>
        Create your account
    </title>    
</head>
<body>
    <div class="container">
        
        <div class="row vh-100 mx-auto w-50" id="sign-up">
            <div class="forms-contents my-auto" >
                <div class="title my-3 p-3">
                    <h2 class="text-center fs-5 text-decoration-underline">
                        Create your account
                    </h2>
                    <p class="text-muted fs-6 text-center">
                        Fill the below form to create your wown free account
                    </p>
                </div>
                <div class="forms">
                    <form action="<?php echo site_url('user/signup'); ?>" method="POST" class="form">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputName" value="<?= $nom ?>" name="nom" placeholder="Your username">
                            <label for="floatingInputName fs-4">First name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputLastName" value="<?= $prenom ?>" name="prenom" placeholder="Your password">
                            <label for="floatingInputLastName"> Last Name </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputDate" value="<?= $email ?>" name="email" placeholder="Enter a email">
                            <label for="floatingInputDate"> Your mail </label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingInputPass1" value="<?= $pass1 ?>" name="pass1" placeholder="Your password">
                            <label for="floatingInputPass1"> Enter a password </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingInputPass2" value="<?= $pass2 ?>" name="pass2" placeholder="Your password">
                            <label for="floatingInputPass2"> Verify the password </label>
                        </div>
                        <div class="form-floating mb-3 text-center">
                            <input type="submit" class="btn btn-primary px-4" value="Create my account">
                        </div>
                    </form>
                    <div class="error-inscription">
                        <p class="text-center text-danger">
                            <?= $error_inscription ?>
                        </p>
                    </div>
                </div>
                <div class="have-account">
                    <p>
                        Already having an acount ?
                            <a href="<?php echo site_url('user/') ?>">
                                Click here to login
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