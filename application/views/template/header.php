<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
</head>
<body class="<?php if(isset($module)){ echo $module; }?>">
	<nav class="navbar navbar-dark bg-primary fixed-top">
			<a class="navbar-brand" href="#">Booking-Boat</a>
	</nav>
