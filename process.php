<?php
  $login = $_POST['login'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $gender = $_POST['gender'];
  $city = $_POST['city'];
  $games = $_POST['games'];
  $about = $_POST['about'];

    echo "<h1>User Information</h1>";
    echo "<table>";
    echo "<tr><td>Логін:</td><td>" . $login . "</td></tr>";
    echo "<tr><td>Пароль:</td><td>" . $password . "</td></tr>";
    echo "<tr><td>Стать:</td><td>" . $gender . "</td></tr>";
    echo "<tr><td>Місто:</td><td>" . $city . "</td></tr>";
    echo "<tr><td>Улюблені гри:</td><td>" . implode(', ', $games) . "</td></tr>";
    echo "<tr><td>Про себе:</td><td>" . nl2br($about) . "</td></tr>";

