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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <link rel="stylesheet" href="css/style2.css">
    <title>Snack 2</title>
  </head>
  <body>
    <div id="wrapper">
      <h1 v-if="title">
        <?php

        if (!empty($name) && !empty($email) && !empty($age)) {
          if (strlen($name)>3 && strpos($email, "@") !== false && strpos($email, ".") !== false && is_numeric($age)) {
            $message="Accesso consentito!";
          }
        }
        echo $message;

        ?>
      </h1>

      <div v-else class="counter">
        <span>{{ counter }}</span>
      </div>
    </div>

    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
