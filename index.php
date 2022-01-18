<?php
require_once __DIR__ . "/classes/user.php";
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/cc.php";

$new_user = new User("Pino", "Pigna", "pinopigna79@gmail.com");
$new_cc = new CC("Visa", "9893-1290-8834-0097", "511");

$new_user->setCreditCard($new_cc);

var_dump($new_user->getCreditCard());

$new_product = new Product("Led Multicolore", "Elettronica", "EC44563");


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boolezon</title>
</head>
<body>
<h2>UTENTE:</h2>
  <p>Nome: 
    <?php echo 
    $new_user->getName()
     ?>
  </p>
  <p>Cognome: 
    <?php echo 
    $new_user->getLastname()
     ?>
  </p>
  <p>Email: 
    <?php echo 
    $new_user->getEmail()
     ?>
  </p>
  <h2>PRODOTTO:</h2>
  <p>Nome Prodotto: 
    <?php echo 
    $new_product->getProductName()
     ?>
  </p>
  <p>Genere Prodotto: 
    <?php echo 
    $new_product->getGenre()
     ?>
  </p>
  <p>ID Prodotto: 
    <?php echo 
    $new_product->getId()
     ?>
  </p>
  <h2>CARTA DI CREDITO:</h2>
  <p>Circuito Carta: 
    <?php echo 
    $new_cc->getCircuit()
     ?>
  </p>
  <p>Codice Seriale: 
    <?php echo 
    $new_cc->getSerialCode()
     ?>
  </p>
  <p>CVV: 
    <?php echo 
    $new_cc->getCvv()
     ?>
  </p>

</body>
</html>