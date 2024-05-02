<?php
$result = "";

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
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
    <link rel="stylesheet" href="index.css">
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


</body>
</html>
