<?php include('header.php');?>
<img src="<?php echo base_url(); ?>/public/image/1.jpg.png" height="600 px" width="100%">
		<!-- Button trigger modal -->
<br><br>
<nav class="container-fluid">
  <a class="breadcrumb-item" href="<?php echo base_url(); ?>Page_home">Home</a>
  <a class="breadcrumb-item" href="#"><?php echo $show[0]->category_id;?></a>
	<span class="breadcrumb-item active"><?php echo $show[0]->title;?></span>
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
<form action="<?php echo base_url(); ?>Page_Boat/submit_form" method="post" accept-charset="utf-8">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		 <div class="modal-dialog" role="document">
		   <div class="modal-content">
		     <div class="modal-header">
		       <b><h5 class="modal-title" id="exampleModalLabel"><?php echo $show[0]->title;?></h5></b>
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
					 <input type="hidden" id="name" name="name" value="">
					 <input type="hidden" id="type" name="type" value="">
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
			<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/Page_booking.css">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
			<div class="col-md-8">
					<div class="contact-box center-version">
								<div class="row">
									<div class="col md-6">
										<div align="left">
                    <!-- Imageslide -->
                    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/Page_slideimage.css">
                        <div class="mySlides">
                          <div class="numbertext">1 / 6</div>
                          <img src="<?php echo base_url(); ?>/public/image/1.jpg.png" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <div class="numbertext">2 / 6</div>
                          <img src="<?php echo base_url(); ?>/public/image/1.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <div class="numbertext">3 / 6</div>
                          <img src="<?php echo base_url(); ?>/public/image/1.jpg.png" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <div class="numbertext">4 / 6</div>
                          <img src="<?php echo base_url(); ?>/public/image/1.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <div class="numbertext">5 / 6</div>
                          <img src="<?php echo base_url(); ?>/public/image/2.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                          <div class="numbertext">6 / 6</div>
                          <img src="<?php echo base_url(); ?>/public/image/1.jpg" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        <div class="caption-container">
                          <p id="caption"></p>
                        </div>
                        <div class="container" style="width:100%">
                        <div class="row">
                          <div class="column">
                            <img class="demo cursor" src="<?php echo base_url(); ?>/public/image/1.jpg.png" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="<?php echo base_url(); ?>/public/image/1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="<?php echo base_url(); ?>/public/image/1.jpg.png" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="<?php echo base_url(); ?>/public/image/1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="<?php echo base_url(); ?>/public/image/2.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="<?php echo base_url(); ?>/public/image/1.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                          </div>
                        </div>
                      </div>
                    <!-- Imageslide -->
                    </div>
									</div>
									<div class="col md-6">
									 <div align="left">
										<h3 class="m-b-xs">
                      <strong>
                        <?php echo $show[0]->title;?><br>
                      </strong>
                    </h3>
 										<div class="font-bold"><strong>Description</strong></div><br>
 										<address class="m-t-md">
                        <?php echo $show[0]->description;?><br><br>
                        <?php if($show[0]->want_to == "sale") {?>
                        <input type="checkbox" name="want_to" value="<?php echo $show[0]->want_to;?>" checked disabled>
                        <?php echo $show[0]->want_to;?>
                        <input type="checkbox" name="want_to" value="charter" disabled> charter
                        <?php } ?>
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
	 									<div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="home-tab"><div align= "left"><?php echo $show[0]->description;?></div></div>
	 									<div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="profile-tab"><div align= "left"><?php echo $show[0]->detail;?></div></div>
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
<!-- ScriptImageslide -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<!-- ScriptImageslide -->
<?php include('footer.php');?>
