<?php
  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];
  $message = "Accesso negato!"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2</title>
  </head>
  <body>
    <h1>
      <?php

        if (!empty($name) && !empty($email) && !empty($age)) {
          if (strlen($name)>3 && strpos($email, "@") !== false && strpos($email, ".") !== false && is_numeric($age)) {
            $message="Accesso consentito!";
          }
        }
        echo $message;
        
      ?>
    </h1>
  </body>
</html>
