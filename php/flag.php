<?php
include 'http://jonahadkins.github.io/neighborhoods/php/cartodbProxy.php';
//      ^CHANGE THIS TO THE PATH TO YOUR cartodbProxy.php
$q = "update " .$_POST['table'] . " set flag = true where cartodb_id = " . $_POST['id'];
$return = goProxy($q);
echo $return;
?>
