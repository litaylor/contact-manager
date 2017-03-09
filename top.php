<?php $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact manager</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

<body>
  <div class="container-fluid headerWrap" data-spy="affix" data-offset-top='0'>
    <div class="row">
      <a href="index.php">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 header">
          <h1>My contacts <sup class="text-muted"><?= count($contacts); ?></sup></h1>
        </div>
      </a>
    </div>
