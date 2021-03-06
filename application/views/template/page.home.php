<?php include('header.php');?>
<!-- <img src="<?php echo base_url(); ?>/public/image/1.jpg" > -->
<img src="<?php echo base_url(); ?>/public/image/1.jpg.png" height="600px" width="100%">

<!-- message -->
<div class="jumbotron">
  <h1 class="display-7">Hello, welcome!</h1>
  <p class="lead">Connect with operators, ask our porters for tips and book directly through our trusted platform.</p>
  <hr class="my-1">
</div>

<!-- navmenu -->
<nav class="container-fluid">
    <p class="breadcrumb-item active" aria-current="page">Home</p>
</nav>

<!-- menu -->
<div class="container-fluid">
  <div class="row">
  <!-- search boat -->
  <div class="col-sm-3">
  <!-- form search boat -->
  <div class="card card-outline-secondary">
    <div class="card-body">
      <h3 class="text-center">Boat</h3>
      <hr>
      <div class="alert alert-info p-2 pb-3">
        <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>&times;</samp></a>You can find the desired boat.
      </div>
      <form action="http://localhost/BookingBoat/index.php/Page_home/getSearchBoat" post method="post" accept-charset="utf-8">

      <div class="form-group">
        <label for="cc_name">Category</label>
        <input type="text" class="form-control" id="cc_name"  title="First and last name" required="required" name="category">
      </div>

      <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" autocomplete="off"   title="Credit card number" required="" name="type">
      </div>

      <div class="form-group">
        <label>Destinations</label>
        <input type="text" class="form-control" autocomplete="off"  title="Credit card number" required="" name="destinations">
      </div>

      <div class="form-group">
        <label>Cabins</label>
        <input type="text" class="form-control" autocomplete="off"  title="Credit card number" required="" name="cabins">
      </div>

      <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
          <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="price" name="price">
          <div class="input-group-append"><span class="input-group-text">.00</span></div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <button type="submit" class="btn btn-success btn-lg btn-block">Search</button>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    </form>
      </div><br>
<!-- Search by name -->
      <div class="card card-outline-secondary">
          <div class="card-body">
              <h3 class="text-center">Search By Name</h3>
              <hr>
              <form action="http://localhost/BookingBoat/index.php/Page_home/sgetSearchnameBoat" post method="post" accept-charset="utf-8">
                  <div class="form-group">
                      <label for="cc_name">Input Name</label>
                      <input type="text" class="form-control" id="cc_name" title="First and last name" required="required" name="name">
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Search</button>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </form>
        </div>
  </div>
<!-- /form search boat -->

<!-- promotion boat -->
<div class="col-sm-9">
<h3 class="text-center">Phuketnews Yacht</h3><br>
    <div class="row">
    <?php
    if($records)
    {
      foreach($records as $row){ ?>
      <div class="col-md-4"><br>
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url(); ?>/public/image/2.jpg" alt="Card image cap">
            <div class="card-body">
            <h6 class="card-title"> <?php echo $row->title; ?> </h6>
            <p class="card-text">  <?php echo character_limiter(($row->description), 100);?>  </p>
            <a class="btn btn-warning" href="<?php echo base_url('Page_boat/detail_Boat?id='.$row->id.''); ?>">Detail</a>
            </div>
       </div>
     </div>
   <?php } }?>
    </div>
</div>

  </div>
</div>
<br>

<div class="container-fluid">
  <?php if(isset($halaman)){ ?>
    <center>
    <?php echo $halaman; ?>
    <?php } ?>
    </center>
</div>

<?php include('footer.php');?>
