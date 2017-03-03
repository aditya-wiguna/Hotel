<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.min.css'); ?>">
    <link href="<?php echo base_url('assets/css/icon.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.clockpicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
  </head>
  <body>

    <header>
      <nav class="top-nav blue">
         <div class="container">
           <ul>
             <li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a></li>
           </ul>

           <ul id="nav-mobile" class="right">
             <li><a href="#" class="dropdown-button" href="#!" data-activates="dropdown1" data-beloworigin="true"><?php echo $this->session->userdata('username'); ?><i class="material-icons right">arrow_drop_down</i></a></li>
           </ul>
         </div>
     </nav>

     <div class="container">
       <ul id="nav-mobile" class="side-nav fixed">
         <li class="logo"><span class="brand-logo" id="logo-container">Zamarine Admin</span></li>
         <li class="<?php if($this->uri->segment(2) == "admin_room_type"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_room_type');?>" class=""><i class="material-icons">room</i>Room Type</a></li>

         <li class="<?php if($this->uri->segment(2) == "admin_room"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_room');?>" class=""><i class="material-icons">store</i>Room</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_shedule"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_shedule');?>"><i class="material-icons">assignment</i>Reservation</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_booking"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_booking');?>"><i class="material-icons">view_headline</i>List Booking</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_guest"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_guest');?>"><i class="material-icons">perm_identity</i>Guest</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_employee"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_employee/'.$this->session->userdata('username'));?>"><i class="material-icons">assignment_ind</i>Employee</a></li>
       </ul>
     </div>

    </header>

    <!-- Dropdown -->

    <ul id="dropdown1" class="dropdown-content">
      <li><a href="<?php echo site_url('c_booking/logout');?>">Logout</a></li>
    </ul>

    <!-- Side Nav -->
      <ul id="slide-out" class="side-nav">
         <li class="logo"><span class="brand-logo" id="logo-container">Zamarine Admin</span></li>
         <li class="<?php if($this->uri->segment(2) == "admin_room_type"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_room_type');?>" class=""><i class="material-icons">room</i>Room Type</a></li>

         <li class="<?php if($this->uri->segment(2) == "admin_room"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_room');?>" class=""><i class="material-icons">store</i>Room</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_shedule"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_shedule');?>"><i class="material-icons">assignment</i>Reservation</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_booking"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_booking');?>"><i class="material-icons">view_headline</i>List Booking</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_guest"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_guest');?>"><i class="material-icons">perm_identity</i>Guest</a></li>
         <li class="<?php if($this->uri->segment(2) == "admin_employee"){echo "active";} ?>"><a href="<?php echo site_url('c_booking/admin_employee');?>"><i class="material-icons">assignment_ind</i>Employee</a></li>
       </ul>
    <!-- End Side Nav -->
