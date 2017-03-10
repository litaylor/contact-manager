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
  </div>
  <div class="container-fluid contact-list">
    <div class="row">
      <!-- Begin looping through contacts -->
      <?php foreach($contacts as $contact) : ?>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">

          <!-- Check if contact has been updated, apply updated styles -->
          <?php $checkId = array_key_exists('id', $_GET) ? $_GET['id'] : null; ?>
          <div class="row contact <?= ($checkId == $contact['id']) ? 'updated': '' ?>">

            <a class="" href="/edit.php?id=<?= $contact['id']; ?>">
              <div class="col-xs-9 entry">

                <span class="glyphicon glyphicon-ok updatemark" aria-hidden="true"></span>

                <span>
                  <!-- Populate name -->
                  <?= $contact['firstname']; ?> <?= $contact['lastname']; ?>
                </span>
                <span class="pull-right idcolumn">
                  <!-- ID -->
                  <?= $contact['id']; ?>
                </span>
                <br />
                <h4 class="title">
                  <!-- City and State -->
                  <?= $contact['city']; ?>, <?= $contact['state']; ?>
                </span>
              </div>
            </a>

            <!-- Phone number -->
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
