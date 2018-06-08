 		<!-- <img src="<?php echo base_url(); ?>/public/image/1.jpg" > -->
		<img src="<?php echo base_url(); ?>/public/image/1.jpg.png" height="600 px" width="100%">
		<!-- Button trigger modal -->
<br><br>
<div class="container">
	<div align="right">
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
		  Booking
		</button>
	</div>
<br><br>
		<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		 <div class="modal-dialog" role="document">
		   <div class="modal-content">
		     <div class="modal-header">
		       <center><h5 class="modal-title" id="exampleModalLabel">Boat Name</h5></center>
		       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		         <span aria-hidden="true">&times;</span>
		       </button>
		     </div>
		     <div class="modal-body">
					 <div class="form-group">
             <label for="exampleFormControlSelect1">Example select</label>
             <select class="form-control" id="exampleFormControlSelect1">
	             <option>1</option>
	             <option>2</option>
	             <option>3</option>
	             <option>4</option>
	             <option>5</option>
             </select>
           </div>
				 <div class="row">
					<div class="col md-6">
					 <div class="form-group">
             <label for="Departure Date">Departure Date</label>
             <input type="date" name="date" class="form-control">
           </div>
					 <div class="form-group">
             <label for="How many guests ?">How many guests ?</label>
             <input type="number" name="guests" class="form-control">
           </div>
					</div>
					<div class="col md-6">
						<div class="form-group">
              <label for="How many days ?">How many days ?</label>
              <input type="number" name="days" class="form-control">
            </div>
						<div class="form-group">
              <label for="Price">Price</label>
              <input type="int" name="price" class="form-control" disabled>
            </div>
					</div>
				 </div>
		     </div>
		     <div class="modal-footer">
		       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		       <button type="button" class="btn btn-primary">Save changes</button>
		     </div>
		   </div>
		 </div>
	</div>

  <div class="card" style="width: 30rem;">
    <img class="card-img-top" src="<?php echo base_url(); ?>/public/image/1.jpg.png" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
</div>
