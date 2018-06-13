<?php include('header.php');?>
<br><br><br>
<nav class="container-fluid">
  <a class="breadcrumb-item" href="<?php echo base_url(); ?>Page_home">Home</a>
	<span class="breadcrumb-item active">ALL <?php echo $type;?></span>
</nav>
<!-- menu -->
<div class="container-fluid">
    <div class="row">
    <?php if(isset($categorys)){ ?>
      <?php foreach ($categorys as $category) { ?>
       <div class="col-md-4"><br>
        <div class="card">
           <div class="header"><img class="card-img-top" src="<?php echo base_url(); ?>/public/image/3.jpg.png" alt="Card image cap"></div>
         <div class="container">
           <div class="body">
             <br><strong><h5><a href="<?php echo base_url('Page_boat/detail_Boat?id='.$category->id.''); ?>"><font color="black"><?php echo $category->title; ?></font></a></h5></strong><br>
             <?php
                echo character_limiter(($category->description), 150);
             ?><br><br>
           </div>
           <div class="footer"><div align = "right"><a class="btn btn-warning" style="width: 10rem;" href="<?php echo base_url('Page_boat/detail_Boat?id='.$category->id.''); ?>">Detail</a></div><br></div>
         </div>
        </div>
       </div>
      <?php } ?>
    <?php } ?>
    </div>
</div>
<center>
<div class="container-fluid">
  <?php if(isset($links)){
    echo $links;
  }?>
</div>
</center>
<?php include('footer.php');?>
