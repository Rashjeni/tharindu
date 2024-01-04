
<!-- Edit -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog lg">
        <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="rid"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="action/event_add.php"  enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
               <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>New Event Details</h5>
                                        </div>
                                         

                                        <div class="card-body">
                                                  
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Event Name</label>
                                                            <input type="text" class="form-control" id="event" name="event"  aria-describedby="" placeholder="Enter Event Name">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Event Coordinator</label>
                                                            <input type="text" class="form-control" id="coordinator" name="coordinator"  aria-describedby="" placeholder="Enter Coordinator Name">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Event Description</label>
                                                            <textarea cols="" class="form-control" rows="5" id="description" name="description" placeholder="Describe about the event"></textarea>
                                                        </div>
                                                </div>
                                            </div>

                                            </div>
                                        
                                            <div class="modal-footer">
               
                                              <button class="btn btn-danger" style="float:right;border-radius: 30px;" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                                              <button class="btn btn-success " style="float:right;border-radius: 30px;" type="submit"  name="add"><i class="fas fa-check"></i> Submit</button>
              
              
            </div>
        </div>
      
    
            </div>
             </div>
            </form>
          </div>
        </div>
</div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog lg">
        <div class="modal-content">
          	<div class="modal-header">

            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="rid"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="action/event_edit.php"  enctype="multipart/form-data">
            		<input type="hidden" class="empid" name="id">
               <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Update Event Details</h5>
                                        </div>
                                         

                                        <div class="card-body">
                                                  
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Event Name</label>
                                                            <input type="text" class="form-control" id="events" name="events"  aria-describedby="" placeholder="Enter Event Name">
                                                           
                                                        </div>
                                                </div>
                                            </div>
                                            </div>
       <div class="modal-footer">
                                              <button class="btn btn-danger" style="float:right;border-radius: 30px;" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                                              <button class="btn btn-success " style="float:right;border-radius: 30px;" type="submit"  name="edit"><i class="fas fa-check"></i> Submit</button>
            </div>
        </div>
      
    
          	</div>
          	 </div>
            </form>
          </div>
        </div>
</div>
</div>
<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="action/event_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>DELETE Event</p>
	                	<h2 class="bold del_employee_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

