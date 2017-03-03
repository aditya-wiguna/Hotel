
    <main>
    <div class="container">
      <div class="row">
        <br>
        <button data-target="modal1" class="btn modal-trigger blue">Add Room</button>

        <div id="modal1" class="modal">
          <div class="modal-content">
            <div class="card-content grey lighten-5">
              <div id="test1"><div class="card">
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Input Room</span><br>
                   <div class="row">

                  <div class="col s12"><?php echo form_open_multipart('c_booking/create_room'); ?>
                    <div class="row">

                    <div class="row">
                      <div class="input-field col s12">
                        <input id="room" type="text" class="" name="room" length="20">
                        <label for="room">Room(Name)</label>
                      </div>
                    </div>

                    <div class="input-field">
                       <select name="type">
                         <option value="" disabled selected>Type</option>
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

                     
                       <div class="file-field input-field">
                        <div class="btn blue">
                          <span>File</span>
                          <input type="file" name="image">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div>
                     

                     <br>
                     <input type="submit" class="btn blue" name="" value="Save">
                  <?php echo form_close(); ?></div>
                 </div>
               </div>
              </div>
            </div></div>



            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close btn blue">Close</a>
          </div>
        </div>


        <div class="card">
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Room</span><br>
            <table>
             <thead>
               <tr>
                   <th data-field="">Image</th>
                   <th data-field="">Type</th>
                   <th data-field="">Room(Name)</th>
                   <th data-field="">Status</th>
                   <th data-field="">Action</th>
                   <th>Update</th>
               </tr>
             </thead>

             <?php
               foreach ($data as $datas) {


             ?>
               <tr>
                 <td><img src="../files/<?php echo $datas['image']; ?>" style="width: 50px; height: 50px;"></td>
                 <td><?php echo $datas['type']; ?></td>
                 <td><?php echo $datas['room']; ?></td>
                 <td><span id="status"><?php echo $datas['status']; ?></span></td>
                 <td><a href="<?php echo site_url('c_booking/delete_room/'. $datas['room']); ?>" class="btn btn-floating red"><i class="material-icons">delete</i></a></td>
                 <td><a href="<?php echo site_url('c_booking/view_update_room/'.$datas['id_room']); ?>" class="btn btn-floating blue"><i class="material-icons">edit</i></a></td>
               </tr>

               <?php
                 }
               ?>
           </table>

          </div>
        </div>


      </div>

    </div>
    </main>
