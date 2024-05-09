<?php
function tg($x) {
  return tan($x);
}

function my_tg($x) {

  return sin($x) / cos($x);
}

function factorial($x) {
  if ($x < 0) {
    return null;
  } else if ($x == 0) {
    return 1;
  } else {
    return $x * factorial($x - 1);
  }
}
