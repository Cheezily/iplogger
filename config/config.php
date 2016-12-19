<?php

$dbhost = 'localhost';
$dbname = '';
$dbusername = 'root';
$dbpassword = '';

$connection = "mysql:host=$dbhost;dbname=$dbname";


function dd($thing) {
  echo "<br />";
  echo "<pre>";
  var_dump($thing);
  echo "</pre>";
}
