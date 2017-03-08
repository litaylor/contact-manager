<?php
  include 'header.php';
  include 'top.php';
  $id = $_GET['id'];
  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $contact = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!-- hey <?php echo $contact['firstname']; ?> -->

<div class="row">
  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <h2 class="cancel">
      <a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs btn-delete">[x]</a>
      Edit contact
    </h2>
    <a href="index.php">
      <button class="btn btn-warning">Cancel</button>
    </a>
  </div>
</div>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <form class="contact_form" action="/update.php" method="POST">
      <input type="hidden" name="id" id="contact_id" value="<?php echo $contact['id'] ?>" >
      <div class="name_group">
        <div class="form-group contact_firstname">
          <label for="contact_firstname">First name:</label>
          <input type="text" name="contact_firstname" id="contact_firstname" value="<?php echo $contact['firstname'] ?>" placeholder="First name">
        </div>
        <div class="form-group contact_lastname">
          <label for="contact_lastname">Last name:</label>
          <input type="text" name="contact_lastname" id="contact_lastname" value="<?php echo $contact['lastname'] ?>" placeholder="Last name">
        </div>
      </div>
      <div class="form-group contact_title">
        <label for="contact_title">Title:</label>
        <input type="text" name="contact_title" id="contact_title" value="<?php echo $contact['title'] ?>">
      </div>
      <div class="form-group contact_phone">
        <label for="contact_phone">Phone:</label>
        <input type="text" name="contact_phone" id="contact_phone" value="<?php echo $contact['phone'] ?>">
      </div>
      <div class="address_group">
        <div class="form-group contact_address">
          <label for="contact_address">Street address:</label>
          <input type="text" name="contact_address" id="contact_address" value="<?php echo $contact['address'] ?>">
        </div>
        <div class="form-group contact_city">
          <label for="contact_city">City:</label>
          <input type="text" name="contact_city" id="contact_city" value="<?php echo $contact['city'] ?>">
        </div>
        <div class="form-group contact_state">
          <label for="contact_state">State:</label>
          <select name="contact_state" id="contact_state" value="<?php echo $contact['state'] ?>">
            <option value=""> </option>
            <option value="AL"<?= ($contact['state'] == 'AL') ? ' selected' : '' ?>>Alabama</option>
            <option value="AK"<?= ($contact['state'] == 'AK') ? ' selected' : '' ?>>Alaska</option>
            <option value="AZ"<?= ($contact['state'] == 'AZ') ? ' selected' : '' ?>>Arizona</option>
            <option value="AR"<?= ($contact['state'] == 'AR') ? ' selected' : '' ?>>Arkansas</option>
            <option value="CA"<?= ($contact['state'] == 'CA') ? ' selected' : '' ?>>California</option>
            <option value="CO"<?= ($contact['state'] == 'CO') ? ' selected' : '' ?>>Colorado</option>
            <option value="CT"<?= ($contact['state'] == 'CT') ? ' selected' : '' ?>>Connecticut</option>
            <option value="DE"<?= ($contact['state'] == 'DE') ? ' selected' : '' ?>>Delaware</option>
            <option value="DC"<?= ($contact['state'] == 'DC') ? ' selected' : '' ?>>District Of Columbia</option>
            <option value="FL"<?= ($contact['state'] == 'FL') ? ' selected' : '' ?>>Florida</option>
            <option value="GA"<?= ($contact['state'] == 'GA') ? ' selected' : '' ?>>Georgia</option>
            <option value="HI"<?= ($contact['state'] == 'HI') ? ' selected' : '' ?>>Hawaii</option>
            <option value="ID"<?= ($contact['state'] == 'ID') ? ' selected' : '' ?>>Idaho</option>
            <option value="IL"<?= ($contact['state'] == 'IL') ? ' selected' : '' ?>>Illinois</option>
            <option value="IN"<?= ($contact['state'] == 'IN') ? ' selected' : '' ?>>Indiana</option>
            <option value="IA"<?= ($contact['state'] == 'IA') ? ' selected' : '' ?>>Iowa</option>
            <option value="KS"<?= ($contact['state'] == 'KS') ? ' selected' : '' ?>>Kansas</option>
            <option value="KY"<?= ($contact['state'] == 'KY') ? ' selected' : '' ?>>Kentucky</option>
            <option value="LA"<?= ($contact['state'] == 'LA') ? ' selected' : '' ?>>Louisiana</option>
            <option value="ME"<?= ($contact['state'] == 'ME') ? ' selected' : '' ?>>Maine</option>
            <option value="MD"<?= ($contact['state'] == 'MD') ? ' selected' : '' ?>>Maryland</option>
            <option value="MA"<?= ($contact['state'] == 'MA') ? ' selected' : '' ?>>Massachusetts</option>
            <option value="MI"<?= ($contact['state'] == 'MI') ? ' selected' : '' ?>>Michigan</option>
            <option value="MN"<?= ($contact['state'] == 'MN') ? ' selected' : '' ?>>Minnesota</option>
            <option value="MS"<?= ($contact['state'] == 'MS') ? ' selected' : '' ?>>Mississippi</option>
            <option value="MO"<?= ($contact['state'] == 'MO') ? ' selected' : '' ?>>Missouri</option>
            <option value="MT"<?= ($contact['state'] == 'MT') ? ' selected' : '' ?>>Montana</option>
            <option value="NE"<?= ($contact['state'] == 'NE') ? ' selected' : '' ?>>Nebraska</option>
            <option value="NV"<?= ($contact['state'] == 'NV') ? ' selected' : '' ?>>Nevada</option>
            <option value="NH"<?= ($contact['state'] == 'NH') ? ' selected' : '' ?>>New Hampshire</option>
            <option value="NJ"<?= ($contact['state'] == 'NJ') ? ' selected' : '' ?>>New Jersey</option>
            <option value="NM"<?= ($contact['state'] == 'NM') ? ' selected' : '' ?>>New Mexico</option>
            <option value="NY"<?= ($contact['state'] == 'NY') ? ' selected' : '' ?>>New York</option>
            <option value="NC"<?= ($contact['state'] == 'NC') ? ' selected' : '' ?>>North Carolina</option>
            <option value="ND"<?= ($contact['state'] == 'ND') ? ' selected' : '' ?>>North Dakota</option>
            <option value="OH"<?= ($contact['state'] == 'OH') ? ' selected' : '' ?>>Ohio</option>
            <option value="OK"<?= ($contact['state'] == 'OK') ? ' selected' : '' ?>>Oklahoma</option>
            <option value="OR"<?= ($contact['state'] == 'OR') ? ' selected' : '' ?>>Oregon</option>
            <option value="PA"<?= ($contact['state'] == 'PA') ? ' selected' : '' ?>>Pennsylvania</option>
            <option value="RI"<?= ($contact['state'] == 'RI') ? ' selected' : '' ?>>Rhode Island</option>
            <option value="SC"<?= ($contact['state'] == 'SC') ? ' selected' : '' ?>>South Carolina</option>
            <option value="SD"<?= ($contact['state'] == 'SD') ? ' selected' : '' ?>>South Dakota</option>
            <option value="TN"<?= ($contact['state'] == 'TN') ? ' selected' : '' ?>>Tennessee</option>
            <option value="TX"<?= ($contact['state'] == 'TX') ? ' selected' : '' ?>>Texas</option>
            <option value="UT"<?= ($contact['state'] == 'UT') ? ' selected' : '' ?>>Utah</option>
            <option value="VT"<?= ($contact['state'] == 'VT') ? ' selected' : '' ?>>Vermont</option>
            <option value="VA"<?= ($contact['state'] == 'VA') ? ' selected' : '' ?>>Virginia</option>
            <option value="WA"<?= ($contact['state'] == 'WA') ? ' selected' : '' ?>>Washington</option>
            <option value="WV"<?= ($contact['state'] == 'WV') ? ' selected' : '' ?>>West Virginia</option>
            <option value="WI"<?= ($contact['state'] == 'WI') ? ' selected' : '' ?>>Wisconsin</option>
            <option value="WY"<?= ($contact['state'] == 'WY') ? ' selected' : '' ?>>Wyoming</option>
          </select>
        </div>
        <div class="form-group contact_zip">
          <label for="contact_zip">ZIP:</label>
          <input type="text" name="contact_zip" id="contact_zip" value="<?php echo $contact['zip'] ?>">
        </div>
      </div>
      <div class="form-group contact_notes">
        <label for="contact_notes">Notes:</label>
        <textarea rows="5" name="contact_notes" id="contact_notes"><?php echo $contact['notes'] ?></textarea>
      </div>
      <button class="btn btn-primary">Update contact</button>
    </form>
  </div>
</div>

<?php include 'footer.php' ?>
