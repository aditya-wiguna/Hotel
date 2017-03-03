<main><div class="container">
  <div id="test1"><div class="card">
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Input Room</span><br>
        <div class="row">

      <div class="col s12"><form action="<?php echo site_url('c_booking/update_room/'.$room['id_room']); ?>" method="post">
        <div class="row">

        <div class="row">
          <div class="input-field col s12">
            <input id="room" type="text" class="" name="room" length="20" value="<?php echo $room['room']; ?>">
            <label for="room">Room(Name)</label>
          </div>
        </div>

        <div class="input-field">
            <select name="type">
              <option value="<?php echo $room['type']; ?>" selected><?php echo $room['type']; ?></option>
              <?php
                foreach ($selector as $selectors) {

              ?>
              <option value="<?php echo $selectors['type'];?>"><?php echo $selectors['type'];?></option>

              <?php
                }
              ?>
            </select>
            <label for="type">Room Type</label>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <label class="pay">Status</label><br>
                <p class="gender">
                  <input class="with-gap" name="status" type="radio" id="available" value="Available" <?php if ($room['status'] === 'Available') {
                              echo "checked";
                            } ?>>
                  <label for="available">Available</label>
                </p>
                <p class="gender">
                  <input class="with-gap" name="status" type="radio" id="reserved" value="Reserved" <?php if ($room['status'] === 'Reserved') {
                              echo "checked";
                            } ?>>
                  <label for="reserved">Reserved</label>
                </p>
                 <p class="gender">
                  <input class="with-gap" name="status" type="radio" id="full" value="Full" <?php if ($room['status'] === 'Full') {
                              echo "checked";
                            } ?>>
                  <label for="full">Full</label>
                </p>
            </div>
          </div>
                     

          <br>
          <input type="submit" class="btn blue" name="" value="Save">
      </form></div>
      </div>
    </div>
  </div>
</div></div>
</div></main>