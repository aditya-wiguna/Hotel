 <main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Add Guest</span>
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
      </div>

      <!--Bagian View -->
      <div class="row">
        <div class="col s12 m12">
          <div class="card">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">List Guest</span>

              <table>
                <thead>
                  <tr>
                      <th data-field="">Name</th>
                      <th data-field="">No Identity</th>
                      <th data-field="">Gender</th>
                      <th data-field="">Address</th>
                      <th data-field="">City</th>
                      <th data-field="">Phone</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($tamu as $row) {
                    # code...
                  ?>
                  <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['noktp']; ?></td>
                    <td><?php echo $row['jeniskelamin']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['kota']; ?></td>
                    <td><?php echo $row['telp']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>


    </div>
    </main>
