<?php
  include 'header.php';
  $stmt = $db->prepare("
    INSERT INTO contacts (
      firstname, lastname, title, address, city, state, phone, zip, notes
      )
    VALUES (
      :firstname, :lastname, :title, :address, :city, :state, :phone, :zip, :notes
    )
  ");

  $stmt->execute(array(
    ':firstname' => $_POST['contact_firstname'],
    ':lastname' => $_POST['contact_lastname'],
    ':title' => $_POST['contact_title'],
    ':address' => $_POST['contact_address'],
    ':city' => $_POST['contact_city'],
    ':state' => array_key_exists('contact_state', $_POST) ? $_POST['contact_state'] : ' ',
    ':phone' => $_POST['contact_phone'],
    ':zip' => $_POST['contact_zip'],
    ':notes' => $_POST['contact_notes']
  ));
  $id = $db->lastInsertId();

  header('Location:index.php?updated=1&id=' . $id);
 ?>
