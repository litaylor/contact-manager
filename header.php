<?php
  error_reporting(E_ALL);
  if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
  }
  $db = new PDO('mysql:host=localhost;dbname=contacts;charset=utf8mb4','root','root');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>This is the header.</title>
  </head>
