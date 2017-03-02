<?php
  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
  <div class="container-fluid" data-spy="affix" data-offset-top='0'>
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <h1>My contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
      </div>
    </div>
    <div class="row">
      <a href="add.php">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <h3>Add New +1</h3>
        </div>
      </a>
    </div>
  </div>
  <div class="container-fluid contact-list">
    <div class="row">
      <?php foreach($contacts as $contact) : ?>
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <div class="row contact">
            <div class="col-xs-9">
              <?= $contact['firstname']; ?> <?= $contact['lastname']; ?>
            </div>
            <div class="col-xs-3">
              Call
            </div>
          </div>

        </div>
      <?php endforeach ?>
    </div>
  </div>
  <div style="background-color:gray; width:100%; height:900px;">

  </div>
</body>
</html>
