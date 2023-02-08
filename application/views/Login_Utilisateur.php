<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Projet_Final/ci306/assets/dist/css/bootstrap.min.css"  rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container">
    
    <div class="f" style="width:400px;  margin-left:400px;">
        <form action="http://localhost/P_Final/ci306/User_Client/user" method="POST">
            <h2>Login Utilisateur</h2>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Votre Email">
            
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br>
    <div class="f" style="width:400px;   margin-left:400px;">
        <form action="http://localhost/P_Final/ci306/User_Client/user" method="POST">
            <h2>Inscription Utilisateur</h2>
            <div class="mb-3">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" name="nom" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" name="prenom" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
                </div>
                <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Votre Email">
            
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="pass1" placeholder="Username">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirmation</label>
                <input type="password" class="form-control" name="pass2" placeholder="Username">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>