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
    <title>Contact manager</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
