<?php include('header.php');?>
<img src="<?php echo base_url(); ?>/public/image/1.jpg.png" height="600 px" width="100%">
		<!-- Button trigger modal -->
<br><br>
<nav class="container-fluid">
  <a class="breadcrumb-item" href="<?php echo base_url(); ?>Page_home">Home</a>
  <a class="breadcrumb-item" href="#"><?php echo $type; ?></a>
	<span class="breadcrumb-item active"><?php echo $name; ?></span>
</nav>
<div class="container-fluid">
<!-- ButtonBooking -->
	<div align="right">
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
		  Booking
		</button>
	</div>
<!-- ButtonBooking -->
<br><br>
<!-- Modal -->
<form action="<?php echo base_url(); ?>submit_form" method="post" accept-charset="utf-8">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		 <div class="modal-dialog" role="document">
		   <div class="modal-content">
		     <div class="modal-header">
		       <b><h5 class="modal-title" id="exampleModalLabel"><?php echo $name; ?></h5></b>
		       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		         <span aria-hidden="true">&times;</span>
		       </button>
		     </div>
		     <div class="modal-body">
				 <div class="row">
					<div class="col md-6">
					 <div class="form-group">
             <b><label for="Departure Date">Departure Date :</label></b>
             <input type="date" name="date" class="form-control">
           </div>
					 <div class="form-group">
             <b><label for="How many guests ?">How many guests ? :</label></b>
             <input type="number" name="guests" class="form-control">
           </div>
					</div>
					<div class="col md-6">
						<div class="form-group">
              <b><label for="How many days ?">How many days ? :</label></b>
              <input type="number" name="days" class="form-control">
            </div>
						<div class="form-group">
              <b><label for="Price">Price Total :</label></b>
              <input type="int" name="price" class="form-control" value="xx,xxx" disabled>
            </div>
					</div>
				 </div>
				 <center>
				 	<b><label for="About you">About you</label></b>
				 </center>
				 <div class="row">
					<div class="col md-6">
             <input type="text" name="name" class="form-control" placeholder="Name"><br>
             <input type="email" name="email" class="form-control" placeholder="E-mail">
					</div>
					<div class="col md-6">
              <input type="text" name="fname" class="form-control" placeholder="Family Name"><br>
              <input type="text" name="phone" class="form-control" placeholder="Phone no.">
					</div>
				 </div>
		     </div>
		     <div class="modal-footer">
					 <input type="hidden" id="name" name="name" value="<?php echo $name; ?>">
					 <input type="hidden" id="type" name="type" value="<?php echo $type; ?>">
		       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		       <button type="submit" class="btn btn-primary">Save changes</button>
		     </div>
		   </div>
		 </div>
	</div>
</form>
<!-- Modal -->
<!-- DetailBoat -->
    <div class="row">
			<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/booking.css">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
			<div class="col-md-8">
					<div class="contact-box center-version">

								<div class="row">
									<div class="col md-6">
										<div align="left">
											<img src="<?php echo base_url(); ?>/public/image/1.jpg.png" height="100%" width="400">
										</div>
									</div>
									<div class="col md-6">
									 <div align="left">
										<h3 class="m-b-xs"><strong><?php echo $name; ?></strong></h3>
 										<div class="font-bold">Description</div>
 										<address class="m-t-md">
 												<strong>Twitter, Inc.</strong><br>
 												795 Folsom Ave, Suite 600<br>
 												San Francisco, CA 94107<br>
 												<abbr title="Phone">P:</abbr> (123) 456-7890
 										</address>
									 </div>

									</div>
								</div>

							<div class="contact-box-footer">
							 <div class="row">
								 <div class="col md-10">
									 <ul class="nav nav-tabs" id="myTab" role="tablist">
	 									<li class="nav-item">
	 										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#information" role="tab" aria-controls="home" aria-selected="true">General Information</a>
	 									</li>
	 									<li class="nav-item">
	 										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="profile" aria-selected="false">Detail</a>
	 									</li>
	 								 </ul>
	 								 <div class="tab-content" id="myTabContent">
	 									<div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="home-tab">General Information</div>
	 									<div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="profile-tab">Detail</div>
	 								 </div>
								 </div>
							 </div>
							</div>
					</div>
			</div>
        <div class="col-md-4">
					<div class="card card-outline-secondary">
							<div class="card-body">
									<h3 class="text-center">Contact us</h3>
										<hr>
										<div class="form-group">
											<div align="left">
													<label for="Name">Name :</label>
											</div>
													<input type="text" name="name" class="form-control">
										</div>
										<div class="form-group">
											<div align="left">
													<label for="Email">Email :</label>
											</div>
													<input type="email" name="email" class="form-control">
										</div>
										<div class="form-group">
											<div align="left">
													<label for="Message">Message :</label>
											</div>
													<textarea name="message" class="form-control"></textarea>
										</div>
						</div>
						<div class="form-group row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
										<a class="btn btn-primary"><font color= "white"><i class="fa fa-envelope"></i> Send </font></a>
								</div>
								<div class="col-md-4"></div>
						</div>
					</div><br>
        </div>
    </div>
<!-- DetailBoat -->
</div>
<?php include('footer.php');?>
