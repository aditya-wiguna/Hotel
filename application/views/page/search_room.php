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
  <body class="page_empty">

    <header>
      <nav class="top-nav teal lighten-1">
         <div class="container">
           <a href="#" class="brand-logo">Skensa Hotel</a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li class=""><a href="<?php echo site_url('c_booking/index');?>">Home</a></li>
             <li class="active"><a href="<?php echo site_url('c_booking/empty_room');?>">Room</a></li>
             <li class=""><a href="<?php echo site_url('c_booking/search_room');?>">Check Room</a></li>
             <li class=""><a href="">About Us</a></li>
           </ul>
         </div>
     </nav>
     <div class="container">
     </div>
    </header>

      <main class="content">
        <div class="container">
          <!-- <div class="col s12 m12">
            <div class="card">
              
            </div>
          </div> -->

          <div class="main-result">
              <div class="row">

                <br><span id="logo">Ready Room: </span><br><br>

                <div class="ticker1">
                  <div class="innerWrap">

                    <?php

                      foreach ($room as $row) {
                        # code...
                    ?>

                    <div class="list">

                        <div class="card">
                          <div class="card-content">

                          <!-- Bagian Tampilan 1 -->
                          <div class="row">
                            <div class="inmage col s4 m4 l4">
                              <img src="../files/<?php echo $row->image;?>" class="col s12 m12">
                            </div>
                        
                            <ul id="con_res" class="col s6 m6 l6">
                              <li><span id="jud_r" style="font-size: 20px; font-weight: 500;"><?php echo $row->room; ?>&nbsp;<i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i>
                              <i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i>
                              <i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i></span></li>

                              <li><i class="small material-icons">schedule</i><span style="font-size: 17px; font-weight:500;">Check-In: available for that time</span></li>

                              <li><i class="small material-icons">schedule</i><span style="font-size: 17px; font-weight:500;">Check-Out: available for that time</span></li><br>
                              <li><input type="submit" name="" value="Book Now" class="btn"></li>
                            </ul>
                          </div>
                          <!-- End Bagian Tampilan 1 -->

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
