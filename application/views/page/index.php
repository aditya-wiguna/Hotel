<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Skensa Hotels</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.min.css'); ?>">
    <link href="<?php echo base_url('assets/css/icon.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.clockpicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
  </head>
  <body class="page_search">

    <header>
      <nav class="top-nav teal lighten-1">
         <div class="container">
           <a href="#" class="brand-logo">Skensa Hotel</a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class=""><a href="<?php echo site_url('c_booking/index');?>">Home</a></li>
            <li class=""><a href="<?php echo site_url('c_booking/empty_room');?>">Room</a></li>
            <li class="active"><a href="<?php echo site_url('c_booking/search_room');?>">Check Room</a></li>
            <li class=""><a href="">About Us</a></li>
           </ul>
         </div>
     </nav>
     <div class="container">
     </div>
    </header>

      <main class="content">
        <div class="container">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Check The Room</span>
                <div class="col m12">
                  <form class="" action="<?php echo base_url('c_booking/search_room'); ?>" method="post">
                    <div class="row">
                      <div class="input-field col s6 m6">
                        <input class="" type="text" class="" name="search">
                        <label for="">Search Room</label>
                      </div>

                    <div class="row">
                      <div class="input-field col s2 m2">
                        <input class="datepicker" type="text" class="" name="checkin">
                        <label for="">Check In</label>
                      </div>
                      <div class="input-field col s2 m2">
                        <input class="datepicker" type="text" class="" name="checkout">
                        <label for="">Check Out</label>
                      </div>

                      <div class="input-field col s2 m2">
                        <input type="submit" name="" value="Search" class="btn">
                      </div>
                    </div>

                  </form>
                </div>

              </div>
            </div>
          </div>

          <div class="main-result">
              <div class="row">

                <br><span id="logo">Result: </span><br><br>

                <div class="ticker1">
                  <div class="innerWrap">

                    <?php

                      foreach ($result as $row) {
                        # code...
                    ?>

                    <div class="list">

                        <div class="card">
                          <div class="card-content">
                            <ul id="con_res">
                              <li><span id="jud_r" style="font-size: 20px; font-weight: 500;"><?php echo $row->room; ?>&nbsp; <i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i><i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i><i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i></span></li>
                              <hr>
                              <li><i class="small material-icons">perm_identity</i><span style="font-size: 17px; font-weight:500;"><?php echo $row->nama_tamu; ?></span></li>
                              <li><i class="small material-icons">schedule</i><span style="font-size: 17px; font-weight:500;">Check-In: <?php echo $row->checkin; ?></span></li>
                              <li><i class="small material-icons">schedule</i><span style="font-size: 17px; font-weight:500;">Check-Out: <?php echo $row->checkout; ?></span></li>
                              <li><span style="font-size: 17px; font-weight:500;">Event: <?php echo $row->keperluan; ?></span></li>
                              <hr>
                            </ul>
                          </div>
                        </div>

                    </div>

                    <?php

                      }
                    ?>


                  </div>
                </div>

              </div>
          </div>

        </div>
      </main>

<footer class="page-footer teal lighten-1" style="padding-left: 0px;">
  <div class="container">
    <center>
      <h4 class="white-text">Skensa Hotel</h4>
      <ul>
        <li><a href="" class="white-text"><i class="fa fa-facebook" style="font-size: 1.5em;"></i></a></li>
        <li><a href="" class="white-text"><i class="fa fa-envelope" style="font-size: 1.5em;"></i></a></li>
        <li><a href="" class="white-text"><i class="fa fa-twitter" style="font-size: 1.5em;"></i></a></li>
      </ul>
    </center>
  </div>
</footer>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/materialize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/materialize.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easy-ticker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easy-ticker.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/main.js'); ?>"></script>

<script type="text/javascript">
$('.ticker1').easyTicker({
  speed: 'medium',
  direction: 'down',
  visible: 3
});
</script>
</body>
</html>
