<?php include('header.php');?>
<br><br><br>
<center>
<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/Page_booking.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
<div class="col-md-10">
    <div class="contact-box center-version">
          <div class="row">
            <div class="col md-6">
              <div align="left">
                 <img src="<?php echo base_url(); ?>/public/image/1.jpg.png"   width="100%"  height="100%">
              </div>
            </div>
            <div class="col md-6"><br>
             <div align="left">
              <h3 class="m-b-xs">

                  <input type="text" name="name" value="<?php echo $user['name'];?>" class="form-control">
                  <input type="hidden" name="name" class="form-control" value="<?php echo $user['name'];?>" required>

                  <br>

              </h3>
              <div class="row">
                <div class="col-md-6">
                  <div align="left">
                      <label for="Name">Name :</label>
                  </div>
                      <input type="text" name="name" value="<?php echo $user['name'];?>" class="form-control" required>
                  <div align="left">
                      <label for="Phone">Phone :</label>
                  </div>
                      <input type="phone" name="phone" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <div align="left">
                      <label for="Email">Email :</label>
                  </div>
                      <input type="email" name="email" class="form-control" required>
                  <div align="left">
                      <label for="Title">Title :</label>
                  </div>
                      <input type="title" name="title" class="form-control" required>
                </div>
              </div>
              <div class="font-bold"><strong>Description</strong></div><br>
              <address class="m-t-md">
                <?php
                  echo $user['name'];
                ?><br><br>
                   <br>
                   <?php
                     echo $user['name'];
                   ?>
              </address>
             </div>
            </div>
          </div>
    </div>
</div>
</center>




<?php include('footer.php');?>
