<?php
  include 'header.php';
  include 'top.php';
?>


    <div class="row">
      <a href="add.php">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 header">
          <h2 class="create">
            Create
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
          </h2>
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
              <div class="col-xs-9 entry">
                <span class="">
                  <?= $contact['firstname']; ?> <?= $contact['lastname']; ?>
                </span>
              </div>
            </a>


              <a href="tel:<?= $contact['phone']; ?>" class="phone hovertext">
                <div class="col-xs-3 entry">
                  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                  <span class="text">Call</span>
                </div>
              </a>


          </div>

        </div>
      <?php endforeach ?>
    </div>


<?php include 'footer.php' ?>
