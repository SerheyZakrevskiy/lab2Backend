<?php
$result = "";
$sorted_cities = '';
$filename = "";
$password_length = 12;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['text']) && isset($_POST['search']) && isset($_POST['replace'])) {
        $text = $_POST["text"];
        $search = $_POST["search"];
        $replace = $_POST["replace"];
        $result = str_replace($search, $replace, $text);
    } elseif(isset($_POST['cities'])) {
        $input_cities = $_POST["cities"];
        $cities_array = explode(" ", $input_cities);
        sort($cities_array);
        $sorted_cities = implode(" ", $cities_array);
    } elseif(isset($_POST['filepath'])) {
        $filepath = $_POST["filepath"];
        $filename = pathinfo($filepath, PATHINFO_FILENAME);
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date1']) && isset($_POST['date2'])) {
        $date1 = $_POST["date1"];
        $date2 = $_POST["date2"];

        $datetime1 = DateTime::createFromFormat('d-m-Y', $date1);
        $datetime2 = DateTime::createFromFormat('d-m-Y', $date2);

        if ($datetime1 && $datetime2) {
            $interval = $datetime1->diff($datetime2);
            $days_diff = $interval->days;
            echo "<h2>Різниця між датами: $days_diff днів</h2>";
        } else {
            echo "<h2>Некоректний формат дати. Введіть дати у форматі День-Місяць-Рік (наприклад, 10-02-2015).</h2>";
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['generate_password_button'])) {
        $generated_password = generatePassword($password_length);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<!-- Task11 -->
<form action="" method="post">
    <div>
        <label for="text">Текст:</label><br>
        <input type="text" id="text" name="text"><br><br>
    </div>
    <div>
        <label for="search">Знайти:</label><br>
        <input type="text" id="search" name="search"><br><br>
    </div>
    <div>
        <label for="replace">Замінити на:</label><br>
        <input type="text" id="replace" name="replace"><br><br>
    </div>
    <div>
        <div></div>
    <?php
echo "<div class='res_task1'>Результат заміни: $result</div>";
?>

    <input type="submit" value="Виконати заміну">
</form>

<!-- task12 -->
<h2>Введіть назви міст, розділені пробілами:</h2>
<form action="" method="post">
    <input type="text" name="cities" placeholder="Введіть назви міст через пробіл">
    <button type="submit">Сортувати</button>
    <?php
    echo "<h2>Відсортовані назви міст:</h2>";
        echo "<p>$sorted_cities</p>";
        ?>
</form>

<!-- Task 13 -->

<form action="" method="post">
        <label for="filepath">Введіть повний шлях до файлу:</label><br>
        <input type="text" id="filepath" name="filepath"><br><br>
        <input type="submit" value="Виділити ім'я файлу">
    </form>

<!-- Task14 -->

<h2>Форма для введення дат</h2>
    <form action="" method="post">
        <label for="date1">Перша дата (День-Місяць-Рік):</label>
        <input type="text" id="date1" name="date1" placeholder="ДД-ММ-РРРР" required><br><br>
        <label for="date2">Друга дата (День-Місяць-Рік):</label>
        <input type="text" id="date2" name="date2" placeholder="ДД-ММ-РРРР" required><br><br>
        <input type="submit" value="Розрахувати різницю">
    </form>

    <?php

    ?>

    <!-- task 15  -->

    <?php
function generatePassword($length = 12) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=~";
    $shuffled_chars = str_shuffle($chars);
    $password = substr($shuffled_chars, 0, $length);

    return $password;
}
?>
<h2>Password Generator</h2>
    <form action="" method="post">
        <input type="submit" value="Generate Password" name="generate_password_button">
    </form>
    <?php
    if (isset($generated_password)) {
        echo "<h3>Generated Password:</h3>";
        echo "<p>$generated_password</p>";
    }
    ?>

<?php
if(isset($_POST['redirect_button'])) {
    header("Location: task2.php");
    exit;
}
?>
<form method="post">
    <button type="submit" name="redirect_button">Перейти на іншу сторінку</button>
</form>

</body>
</html>
