<?php

require_once('Function/func.php');

$x = $_POST['x'];

$factorial = factorial($x);
$my_tg = tg($x);
$my_sin = sin($x);
$cos = cos($x);
$tg = tan($x);

?>

<html>
<head>
<title>Calculator Results</title>
</head>
<body>
  <p>Results:</p>
  <p>X! = <?php echo $factorial; ?></p>
  <p>my_tg(x) = <?php echo $my_tg; ?></p>
  <p>sin(x) = <?php echo $my_sin; ?></p>
  <p>cos(x) = <?php echo $cos; ?></p>
  <p>tg(x) = <?php echo $tg; ?></p>
</body>
</html>
