<?php
  include 'header.php';
  include 'top.php'
?>


    <div class="row">
      <a href="add.php">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2>Add New +1</h2>
        </div>
      </a>
    </div>
  </div>
  <div class="container-fluid contact-list">
    <div class="row">
      <?php foreach($contacts as $contact) : ?>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <div class="row contact">
            <a class="hoverglyph" href="/edit.php?id=<?= $contact['id']; ?>">
              <div class="col-xs-9">
                <span class="entry">
                  <?= $contact['firstname']; ?> <?= $contact['lastname']; ?> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </span>
              </div>
            </a>


              <a href="tel:<?= $contact['phone']; ?>" class="phone hovertext">
                <div class="col-xs-3">
                  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                  <span class="text">Call</span>
                </div>
              </a>


          </div>

        </div>
      <?php endforeach ?>
    </div>


<?php include 'footer.php' ?>
