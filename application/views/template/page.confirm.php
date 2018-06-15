<?php include('header.php');?>
<!-- <img src="<?php echo base_url(); ?>/public/image/1.jpg" > -->
<img src="<?php echo base_url(); ?>/public/image/3.jpg" height="400px" width="100%">

<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/Page_booking.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">

<div class="p-3 mb-2 bg-light text-dark"><b>Reservation Status</b></div>
<div class="container-fluid">
  <form action="http://localhost/BookingBoat/Page_confirm/SearchEmailStatus" post method="post" accept-charset="utf-8">
  <div class="float-right">
    <div class="form-inline">
      <label for="email">Email address:</label>&nbsp;
      <input type="email" name="email" class="form-control" id="email" autocomplete="off" required>&nbsp;
      <button class="btn btn-primary" type="submit">Search</button>
    </div>
  </div>
</form>
  <br>
  <br>
  <hr>
<!-- table data check status -->
<?php if(isset($key)){ ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Departure</th>
      <th scope="col">days</th>
      <th scope="col">guests</th>
      <th scope="col">NameBoat</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($key as $row) { ?>
    <tr>
      <th scope="row"><?php echo $row->name ?></th>
      <td><?php echo $row->email ?></td>
      <td><?php echo $row->phone ?></td>
      <td><?php echo $row->departure ?></td>
      <td><?php echo $row->day ?></td>
      <td><?php echo $row->guest ?></td>
      <td><?php echo $row->title ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<?php } ?>
</div>



<?php include('footer.php');?>
