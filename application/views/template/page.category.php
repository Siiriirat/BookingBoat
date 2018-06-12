<?php include('header.php');?>
<br><br><br>

<nav class="container-fluid">
  <a class="breadcrumb-item" href="<?php echo base_url(); ?>Page_home">Home</a>
	<span class="breadcrumb-item active">ALL <?php echo $type;?></span>
</nav>

<!-- menu -->
<div class="container-fluid">
    <div class="row">
    <?php
    if(isset($categorys))
    {
      foreach ($categorys as $category) { ?>
      <div class="col-md-4"><br>
        <div class="card" style="height: 25rem;">
          <img class="card-img-top" src="<?php echo base_url().$category->category_slug;?>" alt="Card image cap">
            <div class="card-body">
            <h4 class="card-title"> <?php echo $category->title; ?>       </h4>
            <p class="card-text">   <?php echo $category->description; ?> </p>
            <a class="btn btn-success" href="<?php echo base_url('Page_boat/detail_Boat?id='.$category->id.''); ?>">booking</a>
            </div>
        </div>
      </div>
    <?php }?>
    <?php  }?>
    </div>
</div>
<?php include('footer.php');?>
