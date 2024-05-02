<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $search = $_POST["search"];
    $replace = $_POST["replace"];
    $result = str_replace($search, $replace, $text);
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
        <label for="result">Результат заміни:</label><br>
        <input type="text" id="result" name="result" readonly><br><br>
    </div>
    <input type="submit" value="Виконати заміну">
</form>

<?php
    echo "Результат заміни: " . $result;
?>

</body>
</html>