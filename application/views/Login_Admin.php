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
        <form action="http://localhost/P_Final/ci306/User/admin" method="POST">
            <h2>Login Admin</h2>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Votre Email">
            
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="user" placeholder="Username">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</div>
</body>
</html>