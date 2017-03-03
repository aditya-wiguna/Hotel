<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login | Zamarine Admin</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css'); ?>">
    <link href="<?php echo base_url('assets/css/icon.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.clockpicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  </head>
  <body class="blue">
  <div class="right">
  </div>
<center>
    <div class="login">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Zamarine Admin</span><br>
                <div class="row">
                  <form class="col s12 m12" action="<?php echo site_url('c_booking/login_proses');?>" method="post">

                    <div class="row">
                     <div class="input-field col s12">
                       <input id="" type="text" class="" name="username">
                       <label for="username">Username</label>
                     </div>
                    </div>

                    <div class="row">
                     <div class="input-field col s12">
                       <input id="" type="password" class="" name="password">
                       <label for="password">Password</label>
                     </div>
                    </div>

                    <div class="row">
                     <div class="input-field col s12">
                      <select name="jabatan">
                        <option value="" disabled selected>Choose your option</option>
                        <?php
                          foreach ($jabatan as $jabatans) {
                        ?>

                        <option value="<?php echo $jabatans['jabatan'] ?>"><?php echo $jabatans['jabatan'] ?></option>

                        <?php
                          }
                        ?>
                      </select>
                      <label>Position</label>
                     </div>
                    </div>

                    <input type="submit" name="" value="Login" class="btn blue">

                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<center>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.clockpicker.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  </body>
</html>
