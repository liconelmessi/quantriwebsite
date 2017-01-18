<html>
<head>
@include('widgets.head_admin')
</head>
<body>
<div id="body-wrapper" >
<!-- Wrapper for the radial gradient background -->
<div id="sidebar" class="print">
  <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu --> 
    @include('widgets.logo_profile_admin')	
    @include('widgets.nav_admin')
  </div>
</div>
<!-- End #sidebar -->
<div id="main-content">
<!-- Main Content Section with everything -->
<?php //include ("noScript.php") ?> 
<!-- Page Head -->
<div class="print">
@include('widgets.header_admin')
<div class="clear"></div> <!-- End .clear --> 
<!-- End Page Head --> 
<!-- Content --> 
 @yield('content')
<?php //include ("content_left.php") ?>
<?php //include("content_right.php") ?> 
<!-- end Content -->
<div class="clear"></div>
<!-- Start Notifications --> 
<?php //include ("notification.php") ?> 
<!-- End Notifications --> 
<div class="print">
@include('widgets.footer_admin')
</html>