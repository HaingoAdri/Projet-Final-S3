<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour<?php echo $pseudo; ?></h1>
    <p>Votre email est  <?php echo $email ;?> </p>

    <?php if($en_ligne):?> Vous etes en ligne.<?php else:?> Vous n'etes pas en ligne.<?php endif;?>
        <a href="<?php echo site_url('Welcome/bonjour');?>">Cliquer ici</a>
</body>
</html>