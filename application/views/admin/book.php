<main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Booking</span><br>
                <table class="highlight">
                    <thead>
                      <tr>
                          <th data-field="id">Check-In</th>
                          <th data-field="name">Check-Out</th>
                          <th data-field="price">Room</th>
                          <th data-field="price">ReBook</th>
                          <th data-field="price">Cancel</th>
                          <th data-field="price">Done</th>
                      </tr>
                    </thead>

                    <tbody>

                    <?php
                      foreach ($book as $books) {

                    ?>
                      <tr>
                        <td><?php echo $books['checkin']; ?></td>
                        <td><?php echo $books['checkout']; ?></td>
                        <td><?php echo $books['room']; ?></td>
                        <td><a href="<?php echo site_url('c_booking/view_update_book/'.$books['reservasi']); ?>" class="btn-floating blue"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="<?php echo site_url('c_booking/delete_book/'. $books['reservasi']); ?>" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                        <td><a href="<?php echo site_url('c_booking/done_book/'. $books['reservasi'].'/'.$books['id_room']); ?>" class="btn-floating teal"><i class="material-icons">done</i></a></td>
                      </tr>

                      <?php
                        }
                      ?>

                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
