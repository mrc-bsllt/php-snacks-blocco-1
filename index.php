<?php

  $matches = [
    [
      "home_team" => ["team" => "Hawks", "points_made" => 10],
      "visiting_team" => ["team" => "Nets", "points_made" => 6]
    ],
  ];

  $homeTeam = $matches[0]["home_team"]["team"];
  $homePoints = $matches[0]["home_team"]["points_made"];
  $visitingTeam = $matches[0]["visiting_team"]["team"];
  $visitingPoints = $matches[0]["visiting_team"]["points_made"];



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php blocco 1</title>
  </head>
  <body>
    <p><?php echo $homeTeam."-".$visitingTeam." | ".$homePoints."-".$visitingPoints; ?></p>
  </body>
</html>
