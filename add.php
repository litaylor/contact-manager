<?php
  include 'header.php';
  include 'top.php';
?>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h2>New contact</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid addform">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
        <!-- Begin the form -->
        <form class="contact_form" action="/create.php" method="POST">
          <div class="name_group">
            <div class="form-group contact_firstname">
              <label for="contact_firstname">First name:</label>
              <input type="text" name="contact_firstname" id="contact_firstname" value="" placeholder="First name">
            </div>
            <div class="form-group contact_lastname">
              <label for="contact_lastname">Last name:</label>
              <input type="text" name="contact_lastname" id="contact_lastname" value="" placeholder="Last name">
            </div>
          </div>
          <div class="form-group contact_title">
            <label for="contact_title">Title:</label>
            <input type="text" name="contact_title" id="contact_title" value="" placeholder="Title">
          </div>
          <div class="form-group contact_phone">
            <label for="contact_phone">Phone:</label>
            <input type="text" name="contact_phone" id="contact_phone" value="" placeholder="Phone">
          </div>
          <div class="address_group">
            <div class="form-group contact_address">
              <label for="contact_address">Street address:</label>
              <input type="text" name="contact_address" id="contact_address" value="" placeholder="Address">
            </div>
            <div class="form-group contact_city">
              <label for="contact_city">City:</label>
              <input type="text" name="contact_city" id="contact_city" value="" placeholder="City">
            </div>
            <div class="form-group contact_state">
              <label for="contact_state">State:</label>
              <select name="contact_state" id="contact_state" value="_">
                <option value="" disabled selected>State</option>
                <option value="AL">Alabama</option>
              	<option value="AK">Alaska</option>
              	<option value="AZ">Arizona</option>
              	<option value="AR">Arkansas</option>
              	<option value="CA">California</option>
              	<option value="CO">Colorado</option>
              	<option value="CT">Connecticut</option>
              	<option value="DE">Delaware</option>
              	<option value="DC">District Of Columbia</option>
              	<option value="FL">Florida</option>
              	<option value="GA">Georgia</option>
              	<option value="HI">Hawaii</option>
              	<option value="ID">Idaho</option>
              	<option value="IL">Illinois</option>
              	<option value="IN">Indiana</option>
              	<option value="IA">Iowa</option>
              	<option value="KS">Kansas</option>
              	<option value="KY">Kentucky</option>
              	<option value="LA">Louisiana</option>
              	<option value="ME">Maine</option>
              	<option value="MD">Maryland</option>
              	<option value="MA">Massachusetts</option>
              	<option value="MI">Michigan</option>
              	<option value="MN">Minnesota</option>
              	<option value="MS">Mississippi</option>
              	<option value="MO">Missouri</option>
              	<option value="MT">Montana</option>
              	<option value="NE">Nebraska</option>
              	<option value="NV">Nevada</option>
              	<option value="NH">New Hampshire</option>
              	<option value="NJ">New Jersey</option>
              	<option value="NM">New Mexico</option>
              	<option value="NY">New York</option>
              	<option value="NC">North Carolina</option>
              	<option value="ND">North Dakota</option>
              	<option value="OH">Ohio</option>
              	<option value="OK">Oklahoma</option>
              	<option value="OR">Oregon</option>
              	<option value="PA">Pennsylvania</option>
              	<option value="RI">Rhode Island</option>
              	<option value="SC">South Carolina</option>
              	<option value="SD">South Dakota</option>
              	<option value="TN">Tennessee</option>
              	<option value="TX">Texas</option>
              	<option value="UT">Utah</option>
              	<option value="VT">Vermont</option>
              	<option value="VA">Virginia</option>
              	<option value="WA">Washington</option>
              	<option value="WV">West Virginia</option>
              	<option value="WI">Wisconsin</option>
              	<option value="WY">Wyoming</option>
              </select>
            </div>
            <div class="form-group contact_zip">
              <label for="contact_zip">ZIP:</label>
              <input type="text" name="contact_zip" id="contact_zip" value="" placeholder="ZIP">
            </div>
            <div class="form-group contact_notes">
              <label for="contact_notes">Notes:</label>
              <textarea rows="5" name="contact_notes" id="contact_notes" placeholder="Notes"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 text-center">
              <a href="index.php">
                <div class="cancel">
                  Cancel <span class="glyphicon glyphicon-arrow-left"></span>
                </div>
              </a>
            </div>
            <div class="col-xs-6">
              <button class="update">
                Create <span class="glyphicon glyphicon-ok"></span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>


<?php include 'footer.php' ?>
