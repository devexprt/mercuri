<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Agents</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
	       <link href="../plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
		   <link rel="stylesheet" type="text/css" href="css/editor.css">
		     <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
    <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
  <?php include 'header.php';?>

<?php include 'sidebar.php';?>

  <div class="page-wrapper">
            <div class="container-fluid">
                <!-- /row -->
               
                    <div class="col-sm-12 for_padd">
                        <div class="white-box">
                            <div class="row">
								<div class="col-md-9">
									<h3 class="box-title m-t-0 m-b-0">Agents</h3>
								</div>
								<div class="col-md-3">
									<button data-target="#add-agent" data-toggle="modal" class="btn btn-success btn-sm m-t-5 pull-right"><i class="fa fa-plus"></i> Add Agent </button>
								</div>
							</div>
                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="myTable15" class="table table-striped">
                                    <thead>
                                        <tr>
											
											<th> # </th>
											<th> Profile </th>
                                            <th>Name</th>
                                            <th>Joining Date</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
											<th>No. of Clients</th>
											<th>Status</th>
											<th class="min-w-100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
											<td> 1252G </td>
											<td>
												<img src="../plugins/images/users/1.png" class="img-circle" width="35" alt="user">
											</td>
                                            <td>Maria Thomas</td>
											<td>24/09/2017</td>
											<td>26/09/1994</td>
											<td>Female</td>
                                            <td>3</td>
                                            <td> <span class="badge badge-success badge-rounded tab-badge"> Active </span> </td>
                                             <td>
												<button type="button" class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </button>
												<button  data-target="#edit-agent" data-toggle="modal" type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i> </button>
												<button data-target="#delete" data-toggle="modal" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
											</td>
                                        </tr>
                                        <tr>
											<td> 1232F </td>
											<td>
												<img src="../plugins/images/users/2.png" class="img-circle" width="35" alt="user">
											</td>
                                            <td>Tiger Nixon</td>
											<td>24/09/2017</td>
											<td>26/09/1994</td>
											<td>Male</td>
                                            <td>3</td>
                                            <td> <span class="badge badge-danger badge-rounded tab-badge"> Inactive </span> </td>
                                            <td>
												<button type="button" class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </button>
												<button  data-target="#edit-agent" data-toggle="modal" type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i> </button>
												<button data-target="#delete" data-toggle="modal" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
											</td>
                                        </tr>
										<tr>
											
											<td> 55533D </td>
											<td>
												<img src="../plugins/images/users/3.png" class="img-circle" width="35" alt="user">
											</td>
                                            <td>Marry James</td>
											<td>24/09/2017</td>
											<td>26/09/1994</td>
											<td>Female</td>
                                            <td>3</td>
                                            <td> <span class="badge badge-success badge-rounded tab-badge"> Active </span> </td>
                                            <td>
												<button type="button" class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </button>
												<button data-target="#edit-agent" data-toggle="modal" type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i> </button>
												<button data-target="#delete" data-toggle="modal" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
											</td>
                                        </tr>
										<tr>
											
											<td> 3332G </td>
											<td>
												<img src="../plugins/images/users/6.jpg" class="img-circle" width="35" alt="user">
											</td>
                                            <td>John Smith</td>
											<td>24/09/2017</td>
											<td>26/09/1994</td>
											<td>Male</td>
                                            <td>3</td>
                                            <td> <span class="badge badge-danger badge-rounded tab-badge"> Inactive </span> </td>
                                            <td>
												<button type="button" class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </button>
												<button  data-target="#edit-agent" data-toggle="modal" type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i> </button>
												<button data-target="#delete" data-toggle="modal" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
											</td>
                                        </tr>
										<tr>
											
											<td> 5543F </td>
											<td>
												<img src="../plugins/images/users/1.png" class="img-circle" width="35" alt="user">
											</td>
                                            <td>Jenny Thomas</td>
											<td>30/06/2017</td>
											<td>23/03/1992</td>
											<td>Female</td>
                                            <td>6</td>
                                            <td> <span class="badge badge-success badge-rounded tab-badge"> Active </span> </td>
                                           <td>
												<button type="button" class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </button>
												<button data-target="#edit-agent" data-toggle="modal" type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i> </button>
												<button data-target="#delete" data-toggle="modal" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
											</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      
                <!-- /.row -->
               
            </div>
            <!-- /.container-fluid -->
            <footer class="footer t-a-c">
                © 2017 All Rights Reserved | Designed By Indi IT Solutions
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
	
	 <div class="modal fade" id="add-agent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">ADD  AGENT</h4>
               </div>
               <div class="modal-body">
			   <div class="row">
			   <div class="col-md-12">
			<div class="form-group">
				<label>Name</label>
                <input type="text" class="form-control" placeholder=""/>
               </div>
			   </div> <div class="col-md-6">
			   <div class="form-group">
				<label>Joining Date</label>
                <input type="text" class="mydatepicker form-control" placeholder=""/>
               </div></div>
			    <div class="col-md-6">
			    <div class="form-group">
				<label>DOB</label>
                <input type="text" class="mydatepicker form-control" placeholder=""/>
               </div></div>
			    <div class="col-md-6">
			     <div class="form-group">
				<label>Gender</label>
                <select class=" form-control">
				<option>Male</option>
				<option>Female</option>
				</select>
               </div></div>
			    <div class="col-md-6">
			    <div class="form-group">
				<label>No Of Clients</label>
                <input type="text" class="mydatepicker form-control" placeholder=""/>
               </div></div> <div class="col-md-12">
                <div class="form-group">
				<label>Status</label>
                <select class=" form-control">
				<option>Active</option>
				<option>Inactive</option>
				</select>
               </div></div>
	
			    </div>
				  </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" >Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">Save <i class="fa fa-pencil"></i></button>
               </div>
            </div>
         </div>
       
      </div>
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
	  <div class="modal-content">
	  <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
         <h3 class="m-0">Delete</h3>
    </div> 
    <div class="modal-body">
        <h4>You are about to delete.</h4>
        <p>Do you want to proceed?</p>
    </div>
    <div class="modal-footer">
      <a href="#"  class="btn btn-danger">Yes</a>
      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-default">No</a>
    </div> </div></div>
</div>
	  <div class="modal fade" id="edit-agent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">EDIT  AGENT</h4>
               </div>
               <div class="modal-body">
			   <div class="row">
			   <div class="col-md-12">
			<div class="form-group">
				<label>Name</label>
                <input type="text" class="form-control" placeholder="John Smith"/>
               </div>
			   </div> <div class="col-md-6">
			   <div class="form-group">
				<label>Joining Date</label>
                <input type="text" class="mydatepicker form-control" placeholder="30/12/2017"/>
               </div></div>
			    <div class="col-md-6">
			    <div class="form-group">
				<label>DOB</label>
                <input type="text" class="mydatepicker form-control" placeholder="12/2/1989"/>
               </div></div>
			    <div class="col-md-6">
			     <div class="form-group">
				<label>Gender</label>
                <select class=" form-control">
				<option selected>Male</option>
				<option>Female</option>
				</select>
               </div></div>
			    <div class="col-md-6">
			    <div class="form-group">
				<label>No Of Clients</label>
                <input type="text" class="mydatepicker form-control" placeholder="3"/>
               </div></div> <div class="col-md-12">
                <div class="form-group">
				<label>Status</label>
                <select class=" form-control">
				<option selected>Active</option>
				<option>Inactive</option>
				</select>
               </div></div>
	
			    </div>
				  </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" >Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">Save <i class="fa fa-pencil"></i></button>
               </div>
            </div>
         </div>
       
      </div>
	   <div class="modal fade" id="add-task" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">ADD TASK</h4>
               </div>
               <div class="modal-body">
			  <form class=""><div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" placeholder="New Business Quote">
										</div>	
										</div>
										<div class="col-md-6">
						<div class="form-group">
                         <label>Contact </label>
                        <select data-placeholder="Contact"  class="chosen-select-width" tabindex="16">
						<option value=""></option>
		 				<option>ICONOGISTICS LLC</option>                   
                       </select>
                        </div> 
						</div></div>

										<div class="form-group">
                                    <label>Assigned To</label>
                       <select data-placeholder="Assigned To" multiple class="chosen-select-width" tabindex="16">
            <option value=""></option>
            <option>Damion A McKenzie</option>
            <option>REYVIE PAZ</option>
          
          </select>
 </div>
<div class="row">
<div class="col-md-4">

      <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="text" class="form-control mydatepicker" placeholder="MM/DD/YY">
										</div>
</div>
<div class="col-md-4">

      <div class="form-group">
                                        <label>Due Date</label>
                                        <input type="text" class="form-control mydatepicker" placeholder="MM/DD/YY">
										</div>
</div>
<div class="col-md-4">

									<div class="form-group">
                                    <label>Status</label>
                       <select class="form-control">
           <option value="Not Started">Not Started</option> <option value="Waiting">Waiting</option> <option value="In Progress">In Progress</option> <option value="Deferred">Deferred</option> <option value="Completed">Completed</option>
          
          </select>
 </div>
</div>
</div>
<div class="row">
<div class="col-md-6">

									<div class="form-group">
                                    <label>Priority</label>
                       <select class="form-control">
<option value="None">None</option> <option value="Low">Low</option> <option value="Medium">Medium</option> <option value="High">High</option>
          </select>
 </div>
</div>
<div class="col-md-6">

      <div class="form-group">
                                        <label>% Complete</label>
                                        <input type="text" class="form-control mydatepicker" placeholder="20">
										</div>
</div>

<div class="col-md-4">
<div class="checkbox checkbox-success">
                                            <input id="checkbox33" type="checkbox" checked>
                                            <label for="checkbox33"> Set Reminder</label>
                                        </div>    </div>
											<div class="col-md-8"><div class="row">
										<div class="col-md-6">
										  <div class="form-group">
                                        <label>Reminder Date</label>
                                        <input type="text" class="form-control mydatepicker" placeholder="13/10/17">
										</div>
										
										</div>
										<div class="col-md-6">
										  <div class="form-group">
                                        <label>Reminder Time</label>
                                        <input type="text" class="form-control clockpicker" placeholder="11:00 AM">
										</div>
										
										</div></div>

                </div>
    	</div>	  <div class="form-group">
                                        <label>Details</label>
                                        <textarea rows="4" placeholder="- appt need to be submitted, to" class="form-control"></textarea>
										</div>	
									  <div class="form-group">
                                      <a class="btn btn-primary btn-sm" href="#policy" data-toggle="modal">Policies</a>  <label>  Click policies to associated policies with this task.</label>
                                      
										</div>	
										
			  </form>
			    </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">OK <i class="fa fa-pencil"></i></button>
               </div>
            </div>
         </div>
       
      </div>
      
<div class="modal fade" id="new-mail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
			<div class="div111">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">EMAIL</h4>
               </div>
               <div class="modal-body">
			  <form class="">
			 
		
		 <div class="form-group example example_typeahead">


          <div class="bs-example"> <label>To</label>
            <input type="text" class=""  value="" />
          </div>
		  </div>
 <div class="form-group example example_typeahead">


          <div class="bs-example"> <label>CC</label>
            <input type="text" class=""  value="" />
          </div>
		  </div>

 <div class="form-group example example_typeahead">


          <div class="bs-example"> <label>BCC</label>
            <input type="text" class=""  value="" />
          </div> 
		  </div>		  	 

 <div class="row">
 <div class="col-md-6">
		  <div class="form-group">
                                    <label>From</label>
                       <select  class="form-control">
            <option value=""></option>
            <option>squarelinkquotes@gmail.com</option>
          
          
          </select>
 </div>
 </div>
			
     							<div class="col-md-6">
						<div class="form-group">
                         <label>Subject </label>
                        <input type="text" class="form-control">
						
                        </div> 
					
						
						</div>	
						<div class="clearfix"></div>
								<div class="col-md-6">
						<div class="form-group">
                         <label>Attached </label>
                        <input type="text" class="form-control" disabled="">
						
                        </div> 
					
						
						</div>	
				
<div class="col-md-6">
										<div class="form-group">
                                    <label>Template</label>
                       <select data-placeholder="Select One" multiple class="chosen-select-width" tabindex="16">
           <optgroup label="Ageny Library">
            <option>Introduction</option>
           </optgroup>
          </select>
 </div>		</div></div>
<div class="row">
<div class="col-md-12">

      <div class="form-group">
                                     <textarea id="txtEditor"></textarea> 
										</div>
</div>

				<div class="col-md-3">
                                                                    
                              <button type="button" id="btn111" class="btn btn-success my-button btn-sm m-t-20">Add Attachment <i class="fa fa-pencil"></i></button>                                            
                                                                               
																			  </div>  
                                                                          

				<div class="col-md-3 m-t-5">
                                                                    
                                                                          
                                                                              <div class="form-group m-t-20">
                                                                                 <div class="checkbox  checkbox-success">
                                                                                    <input id="checkbox1" type="checkbox">
                                                                                    <label for="checkbox1">  CREATE TASK </label>
                                                                                 </div>
                                                                              </div>   
																			  </div>  
                                                                          
                               <div class="col-md-6">                                      		

							<div class="form-group">
                                    <label>Assigned To</label>
                       <select data-placeholder="Assigned To" multiple class="chosen-select-width" tabindex="16">
            <option value=""></option>
            <option>Damion A McKenzie</option>
            <option>REYVIE PAZ</option>
          
          </select>
		  </div>
 </div>
 </div>
										
			  </form>
			    </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">Send <i class="fa fa-pencil"></i></button>
               </div>
            </div>
			<div class="div112" style="display:none">
               <div class="modal-header">
               
                  <h4 class="modal-title" id="myModalLabel">ATTACHMENTS</h4>
               </div>
               <div class="modal-body">
			   <h4>Files</h4>
			   <div class="table-responsive">
                                       <table id="" class="table default-table dataTable table-striped m-t-0">
                                          <thead>
                                             <tr>
                                                <th>FILE NAME</th>
                                                <th>DATE ADDED</th>
                                                <th>TYPE</th>
                                                <th>ADDED BY</th>
                                                <th>POLICY #</th>
                                               
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>                                               
                                                <td>Img_323434.jpg</td>
												<td><span class="badge badge-success">12/10/2017</span></td>
												<td>-</td>
												<td>-</td>
												<td>-</td>

                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
			  </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default my-button btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">Save <i class="fa fa-pencil"></i></button>
               </div>
            </div>
			
			</div>
         </div>
       
      </div>
     
	  
	  <div class="modal fade" id="text-message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">TEXT MESSAGE</h4>
               </div>
               <div class="modal-body">
			<div class="form-group">
				<label>Contact</label>
                <input type="text" class="form-control"/>
               </div>
			   <div class="form-group">
				<label>Phone</label>
                <input type="text" class="form-control"/>
               </div>
                <div class="form-group">
				<label>Message</label>
                  <textarea rows="5" class="form-control"></textarea>
               </div>
	
			    </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" >Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">Reply <i class="fa fa-pencil"></i></button>
               </div>
            </div>
         </div>
       
      </div>	
  <script src="../plugins/components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/sidebarmenu.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
	<script src="js/custom.js"></script>
    <script src="../plugins/components/datatables/jquery.dataTables.min.js"></script>
 <script>
    $(function() {
        $('#myTable15').DataTable();

        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
    
    });
  
    </script>
	 <script src="../plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	 <script>
	     $('.my-button').click(function(){    
         if(this.id == 'btn111'){
           $('.div112').show();
           $('.div111').hide();
         }else{
           $('.div112').hide();
           $('.div111').show();
         }
		 })
	 </script>
    <script>
   
	
	
	      jQuery('.mydatepicker, #datepicker').datepicker();
           jQuery('#datepicker-autoclose').datepicker({
               autoclose: true,
               todayHighlight: true
           });
 $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
	       <script src="js/chosen.jquery.js" type="text/javascript"></script>

  <script src="js/init.js" type="text/javascript" charset="utf-8"></script>

<script src="js/editor.js"></script>
	<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>

    <script src="js/typeahead.bundle.min.js"></script>
    <script src="js/bootstrap-tagsinput.js"></script>
	    <script src="js/app_bs3.js"></script>
</body>

</html>
