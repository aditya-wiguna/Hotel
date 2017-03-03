 <main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Re-Shedule</span>
                  <div class="row">

                    <form class="col s12" action="<?php echo site_url('c_booking/update_book/'.$books['reservasi']);?>" method="post">
                     <div class="row">
                        <div class="input-field col s6 m6">
                          <input class="datepicker" type="text" class="" name="checkin" value="<?php echo $books['checkin']; ?>">
                          <label for="">Check In</label>
                        </div>
                        <div class="input-field col s6 m6">
                          <input class="datepicker" type="text" class="" name="checkout" value="<?php echo $books['checkout']; ?>">
                          <label for="">Check Out</label>
                        </div>
                      </div>

                      <div class="input-field">
                         <select name="room">
                           <option value="<?php echo $books['id_room']; ?>" selected><?php echo $books['room'] ?></option>
                           <?php
                           foreach ($room as $rooms) {

                           ?>

                           <option value="<?php echo $rooms['id_room'];?>"><?php echo $rooms['room'];?></option>

                           <?php
                            }
                           ?>
                         </select>
                         <label>Room</label>
                       </div>

                      <div class="row">
                       <div class="input-field col s9">
                         <select name="name">
                           <option value="<?php echo $books['id_tamu']; ?>" selected><?php echo $books['nama_tamu'] ?></option>
                           <?php
                           foreach ($guest as $guests) {
                           ?>

                            <option value="<?php echo $guests['id_tamu'];?>"><?php echo $guests['nama'];?></option>

                           <?php } ?>
                         </select> 
                         <label>Name</label>
                       </div>
                       <br><button data-target="modal1" class="btn modal-trigger blue">Add Guest</button>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                        <label class="pay">Payment</label><br>
                           <p class="gender">
                            <input class="with-gap" name="biaya" type="radio" id="yes" value="Yes" <?php if ($books['biaya'] === 'Yes') {
                              echo "checked";
                            } ?>/>
                            <label for="yes">Yes</label>
                          </p>
                          <p class="gender">
                            <input class="with-gap" name="biaya" type="radio" id="no" value="No" <?php if ($books['biaya'] === 'No') {
                              echo "checked";
                            } ?>/>
                            <label for="no">No</label>
                          </p>
                        </div>
                      </div>

                      <div class="row">
                       <div class="input-field col s12">
                         <input id="" type="text" class="" name="event" value="<?php echo $books['keperluan']; ?>">
                         <label for="">Event</label>
                       </div>
                      </div>

                      <div class="row hide">
                       <div class="input-field col s12 hide">
                         <input id="" type="text" class="" name="id_karyawan" value="<?php echo $this->session->userdata('username'); ?>">
                         <label for="">Kode Karyawan</label>
                       </div>
                      </div>

                      <button type="submit" name="submit" class="btn blue">Booking</button>
                    </form>

                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>