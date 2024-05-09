<?php
if(isset($_GET['lang'])) {
    $selected_lang = $_GET['lang'];
    setcookie('selected_lang', $selected_lang, time() + (180 * 24 * 60 * 60));
} elseif(isset($_COOKIE['selected_lang'])) {
    $selected_lang = $_COOKIE['selected_lang'];
} else {
    $selected_lang = 'ukr';
    setcookie('selected_lang', $selected_lang, time() + (180 * 24 * 60 * 60));
}


$languages = array(
  'ukr' => '💙💛Українська',
    'eng' => '❤️🤍💙English',
    'ita' => '💚🤍❤️Італійська',
    'jpn' => '🤍❤️Японська',
    'pol' => '❤️🤍Польська',
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/task4.css">
</head>
<body>
<h1>Виберіть мову:</h1>

<?php foreach ($languages as $lang_code => $lang_name): ?>
    <a class="test" href="task4.php?lang=<?php echo $lang_code; ?>"><?php?><?php echo $lang_name; ?></a>
<?php endforeach; ?>

<p>Вибрана мова: <?php echo $languages[$selected_lang]; ?></p>

<form action="process.php" method="post" enctype="multipart/form-data">
  <label for="login">Логін:</label>
  <input type="text" id="login" name="login">
  <br>

  <label for="password">Пароль:</label>
  <input type="password" id="password" name="password">
  <br>
  <label for="password2">Пароль (ще раз):</label>
  <input type="password" id="password2" name="password2">
  <br>

  <label for="gender">Стать:</label>
  <input type="radio" id="male" name="gender" value="чоловік">
  <label for="male">чоловік</label>
  <input type="radio" id="female" name="gender" value="жінка">
  <label for="female">жінка</label>
  <br>

  <label for="city">Місто:</label>
  <select name="city" id="city">
    <option value="Zhytomyr">Житомир</option>
    </select>
  <br>

  <label for="games">Улюблені гри:</label>
  <br>
  <input type="checkbox" id="football" name="games[]" value="football">
  <label for="football">футбол</label>
  <br>
  <input type="checkbox" id="basketball" name="games[]" value="basketball">
  <label for="basketball">баскетбол</label>
  <br>
  <input type="checkbox" id="volleyball" name="games[]" value="volleyball">
  <label for="volleyball">волейбол</label>
  <br>
  <input type="checkbox" id="chess" name="games[]" value="chess">
  <label for="chess">шахи</label>
  <br>
  <input type="checkbox" id="wot" name="games[]" value="World of Tanks">
  <label for="wot">World of Tanks</label>
  <br>

  <label for="about">Про себе:</label>
  <textarea id="about" name="about" rows="4" cols="50"></textarea>
  <br>

  <label for="photo">Фотографія:</label>
  <input type="file" id="photo" name="photo">
  <br>

  <button type="submit">Зареєструватися</button>
</form>
</body>
</html>