<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Skensa Hotels</title>
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.min.css'); ?>">
  <link href="<?php echo base_url('assets/css/icon.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body class="page_search">

<header>
<div class="navbar-fixed">
  <nav class="top-nav teal lighten-1">
      <div class="container">
        <a href="#" class="brand-logo">Skensa Hotel</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="<?php echo site_url('c_booking/index');?>">Home</a></li>
        <li class=""><a href="<?php echo site_url('c_booking/empty_room');?>">Room</a></li>
        <li class=""><a href="<?php echo site_url('c_booking/search_room');?>">Check Room</a></li>
        <li class=""><a href="">About Us</a></li>
        </ul>

        <ul class="sidebtn right">
          <li><a href="#" data-activates="navact" class="button-side"><i class="material-icons">menu</i></a></li>
        </ul>
        
      </div>
  </nav>
</div>

  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/img/parallax.jpg'); ?>">
    <div id="judul">
      <span class="white-text">Welcome To Skensa Hotel</span>
    </div>
  </div>

</header>

<main class="content">
  
  <div class="service">
    <div class="container">
      <div class="row">

      <center><h3 class="judul1">Service</h3></center>
        
      <div class="col s12 m4">
        <div class="center promo">
          <i class="material-icons">hotel</i>
          <p class="promo-caption">Confident Room</p>
          <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="center promo">
          <i class="material-icons">wifi</i>
          <p class="promo-caption">Free Wifi</p>
          <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="center promo">
          <i class="material-icons">restaurant_menu</i>
          <p class="promo-caption">Very Delicious Food</p>
          <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
      </div>

      </div>
    </div>
  </div>

  <div class="room grey lighten-3">
    <div class="container">
      <div class="row">
        <br><center><h3 class="judul1">Room</h3></center>

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
                      <img src="<?php echo base_url(); ?>/files/<?php echo $row['image']; ?>" class="col s12 m12" height="200px" width="300px">
                    </div>
                        
                    <ul id="con_res" class="col s6 m6 l6">
                      <li><span id="jud_r" style="font-size: 20px; font-weight: 500;"><?php echo $row['room']; ?>&nbsp;<i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i>
                      <i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i>
                      <i class="material-icons" style="color: #ffeb3b; font-size:20px;">grade</i></span></li>

                      <li><div class="card-panel teal lighten-2 white-text"><?php echo $row['type']; ?></div></li>
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
          </div><br>

      </div>
    </div>
  </div>

  <div class="newsletter">
    <div class="container">
      <div class="row">
        <center><h3 class="judul1">Our Awards</h3></center>

        <div class="col s12 m6 l3">
        <div class="center promo">
            <i class="material-icons">business</i>
            <p class="promo-caption">Top Hotel</p>
            <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
          </div>
        </div>

        <div class="col s12 m6 l3">
        <div class="center promo">
            <i class="material-icons">room_service</i>
            <p class="promo-caption">Best Room Service</p>
            <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
          </div>
        </div>

        <div class="col s12 m6 l3">
        <div class="center promo">
            <i class="material-icons">pool</i>
            <p class="promo-caption">Best Pool</p>
            <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
          </div>
        </div>

        <div class="col s12 m6 l3">
        <div class="center promo">
            <i class="material-icons">access_time</i>
            <p class="promo-caption">Fast Service</p>
            <p class="light center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
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

<!-- Slide Nav -->

<ul id="navact" class="side-nav">
    <li class="active"><a href="<?php echo site_url('c_booking/index');?>">Home</a></li>
    <li class=""><a href="<?php echo site_url('c_booking/empty_room');?>">Room</a></li>
    <li class=""><a href="<?php echo site_url('c_booking/search_room');?>">Check Room</a></li>
    <li class=""><a href="">About Us</a></li>
</ul>

<!-- End Slide Nav -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/materialize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/materialize.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/parallax.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/parallax.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easy-ticker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easy-ticker.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/main.js'); ?>"></script>

<script type="text/javascript">
$('.ticker1').easyTicker({
  speed: 'medium',
  direction: 'down',
  visible: 2
});

$(document).ready(function(){
  $('.parallax-window').parallax();
});

$(document).ready(function(){
  $('.button-side').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});
</script>
</body>
</html>