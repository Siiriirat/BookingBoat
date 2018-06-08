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
    <!-- form card cc payment -->
    <div class="card card-outline-secondary">
        <div class="card-body">
            <h3 class="text-center">Boat</h3>
            <hr>
            <div class="alert alert-info p-2 pb-3">
                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>&times;</samp></a>
                You can find the desired boat.
            </div>
            <form class="form" role="form" autocomplete="off">
                <div class="form-group">
                    <label for="cc_name">Category</label>
                    <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                </div>
                <div class="form-group">
                    <label>Destinations</label>
                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                </div>
                <div class="form-group">
                    <label>Cabins</label>
                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                </div>
                <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                      <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="price">
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
              <form class="form" role="form" autocomplete="off">
                  <div class="form-group">
                      <label for="cc_name">Input Name</label>
                      <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required">
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
<!-- /form card cc payment -->

<!-- promotion boat -->
    <div class="col-sm-9">
      <h3 class="text-center">Promotions</h3><br>
      <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="<?php echo base_url('/public/image/1.jpg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="<?php echo base_url('/public/image/1.jpg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="<?php echo base_url('/public/image/1.jpg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>

<?php include('footer.php');?>
