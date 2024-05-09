<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// task 21
function findDuplicates($array) {
    if (empty($array)) {
        echo "Масив порожній.";
        return;
    }
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = rand(1, 10);
    }

    $counts = array_count_values($array);
    echo "Повторюючіся елементи: ";
    foreach ($counts as $value => $count) {
        if ($count > 1) {
            echo "$value  ";
        }
    }
}

$array = array(1, 2, 3, 4, 2, 5, 6, 3);
findDuplicates($array);
?>

<!-- task 22  -->
<?php
function generateAnimalName($components) {
    if (empty($components)) {
        return "Масив складів порожній.";
    }

    $name = '';
    $num_components = count($components);
    $num_parts = rand(2, 3);

    for ($i = 0; $i < $num_parts; $i++) {
        $random_index = rand(0, $num_components - 1);
        $name .= $components[$random_index];
    }

    return ucfirst($name);
}


$animal_components = array('mi', 'lo', 'ki', 'to', 'ba', 'ra');
echo "<br>Ім'я кішки: " . generateAnimalName($animal_components);
?>

<!-- task 23 -->
<?php

function createArray() {
    $length = rand(3, 7);
    $array = array();
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand(10, 20);
    }
    return $array;
}


function processArrays($array1, $array2) {

    $merged_array = array_merge($array1, $array2);

    $unique_array = array_unique($merged_array);

    sort($unique_array);
    return $unique_array;
}


$array1 = createArray();
$array2 = createArray();


$result_array = processArrays($array1, $array2);


echo "<br>Масив 1: " . implode(", ", $array1) . "<br>";
echo "Масив 2: " . implode(", ", $array2) . "<br>";
echo "Результат: " . implode(", ", $result_array);
?>

<!-- task 24  -->
<?php

$users = array(
    "Alice" => 25,
    "Bob" => 30,
    "Charlie" => 20,
    "David" => 35,
    "Eve" => 28
);

function sortUsers($array, $sortBy) {
    if ($sortBy == "age") {
        asort($array);
    } elseif ($sortBy == "name") {
        ksort($array);
    } else {
        return "Некоректний параметр сортування";
    }
    return $array;
}
echo "<br>Ізначальний массив:<br>";
print_r($users);
echo "<br><br>";
$sortedByAge = sortUsers($users, "age");
echo "<br>Сортування за віком:<br>";
print_r($sortedByAge);
echo "<br><br>";

$sortedByName = sortUsers($users, "name");
echo "Сортування за ім'ям:<br>";
print_r($sortedByName);
echo "<br><br>";
?>

<?php
if(isset($_POST['redirect_button'])) {
    header("Location: task3.php");
    exit;
}
?>
<form method="post">
    <button type="submit" name="redirect_button">Перейти на іншу сторінку</button>
</form>
</body>
</html>