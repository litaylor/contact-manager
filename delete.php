<?php
  include 'header.php';
  $stmt = $db->prepare('DELETE from contacts WHERE id = :id');
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));
  header('Location: index.php?deleted=true');
