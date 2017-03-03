 <main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Reservation</span>
                  <div class="row">

                    <form class="col s12" action="<?php echo site_url('c_booking/create_shedule'); ?>" method="post">
                      <div class="row">
                        <div class="input-field col s6 m6">
                          <input class="datepicker" type="text" class="" name="checkin">
                          <label for="">Check In</label>
                        </div>
                        <div class="input-field col s6 m6">
                          <input class="datepicker" type="text" class="" name="checkout">
                          <label for="">Check Out</label>
                        </div>
                      </div>

                      <div class="input-field">
                         <select name="room">
                           <option value="" disabled selected>Room</option>
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
                           <option value="" disabled selected>Name</option>
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
                            <input class="with-gap" name="biaya" type="radio" id="yes" value="Yes" />
                            <label for="yes">Yes</label>
                          </p>
                          <p class="gender">
                            <input class="with-gap" name="biaya" type="radio" id="no" value="No" />
                            <label for="no">No</label>
                          </p>
                        </div>
                      </div>

                      <div class="row">
                       <div class="input-field col s12">
                         <input id="" type="text" class="" name="event">
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

    <!-- modal -->

    <div class="modal" id="modal1">
      <div class="modal-content">

        <div class="card card-content grey lighten-5">
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Add Guest</span><br>

            <div class="row">

                    <form class="col s12" action="<?php echo site_url('c_booking/add_guest'); ?>" method="post">
                      <div class="row">
                        <div class="input-field col s12 m12">
                          <input class="" type="text" class="" name="nama">
                          <label for="">Name</label>
                        </div>
                      </div>

                      <div class="row">
                       <div class="input-field col s12">
                         <input id="" type="text" name="noktp">
                         <label for="">No Identity</label>
                       </div>
                      </div>

                      <p>
                        <input name="jeniskelamin" type="radio" id="male" class="with-gap" value="L">
                        <label for="male">Male</label>
                      </p>
                      <p>
                        <input name="jeniskelamin" type="radio" id="female" class="with-gap" value="P">
                        <label for="female">Female</label>
                      </p>

                      <div class="row">
                        <div class="input-field col s12 m12">
                          <label for="">Address</label>
                          <input id="" class="" type="text" name="alamat">
                        </div>
                      </div>

                      <div class="row">
                       <div class="input-field col s12">
                         <input id="" type="text" class="" name="kota">
                         <label for="">City</label>
                       </div>
                      </div>

                      <div class="row">
                       <div class="input-field col s12">
                         <input id="" type="number" class="" name="telp">
                         <label for="">Phone</label>
                       </div>
                      </div>

                      <button type="submit" name="submit" class="btn blue">Add or Save</button>

                    </form>

                  </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close btn blue">Close</a>
      </div>

    </div>
