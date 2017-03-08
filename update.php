<?php

  include 'header.php';

  $stmt = $db->prepare('UPDATE contacts SET firstname = :firstname, lastname = :lastname, title = :title, phone = :phone, address = :address, city = :city, state = :state, zip = :zip, notes = :notes WHERE id = :id');

  $stmt->execute(array(
    ':id' => $_POST['id'],
    ':firstname' => $_POST['contact_firstname'],
    ':lastname' => $_POST['contact_lastname'],
    ':title' => $_POST['contact_title'],
    ':phone' => $_POST['contact_phone'],
    ':address' => $_POST['contact_address'],
    ':city' => $_POST['contact_city'],
    ':state' => $_POST['contact_state'],
    ':zip' => $_POST['contact_zip'],
    ':notes' => $_POST['contact_notes']
  ));

  header('Location:index.php?testid=' . $_POST['id']);
