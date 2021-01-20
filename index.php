<?php

  $matches = [
    [
      "home_team" => ["team" => "Hawks", "points_made" => 10],
      "visiting_team" => ["team" => "Nets", "points_made" => 6]
    ],
    [
      "home_team" => ["team" => "Celtics", "points_made" => 15],
      "visiting_team" => ["team" => "Bulls", "points_made" => 20]
    ],
    [
      "home_team" => ["team" => "Pacers", "points_made" => 32],
      "visiting_team" => ["team" => "Knicks", "points_made" => 11]
    ],
    [
      "home_team" => ["team" => "Heat", "points_made" => 40],
      "visiting_team" => ["team" => "Hornets", "points_made" => 32]
    ],
    [
      "home_team" => ["team" => "Pistons", "points_made" => 32],
      "visiting_team" => ["team" => "Raptors", "points_made" => 18]
    ],
    [
      "home_team" => ["team" => "Wizards", "points_made" => 5],
      "visiting_team" => ["team" => "Magic", "points_made" => 21]
    ],
  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
    <title>Snack 1</title>
  </head>
  <body>
    <ul>
      <?php
        for($i = 0; $i < count($matches); $i++) {
          $homeTeam = $matches[$i]["home_team"]["team"];
          $homePoints = $matches[$i]["home_team"]["points_made"];
          $visitingTeam = $matches[$i]["visiting_team"]["team"];
          $visitingPoints = $matches[$i]["visiting_team"]["points_made"];

          echo "<li>"."<span class='teams'>".$homeTeam." - ".$visitingTeam."</span>"."<span class='points'>".$homePoints." - ".$visitingPoints."</span>"."</li>";
        };
      ?>
  </ul>
  </body>
</html>
