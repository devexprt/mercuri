<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Expiring Policy</title>
    <base href="<?php echo base_url(); ?>">
    <link href="assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/colors/default.css" id="theme" rel="stylesheet">
			   <link rel="stylesheet" type="text/css" href="assets/admin/css/editor.css">
		     <link rel="stylesheet" href="assets/admin/css/chosen.css">
    <link rel="stylesheet" href="assets/admin/css/bootstrap-tagsinput.css">
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

<?php include 'sidebar.php';?>     <div class="page-wrapper">
            <div class="container-fluid">
                <!-- /row -->
                
                    <div class="col-sm-12 for_padd">
                        <div class="white-box">
                            <div class="row">
								<div class="col-md-12">
									<h3 class="box-title m-b-0">Expiring Policies</h3>
								</div>
								
							</div>
							   <div class=" top-search search-policy">
							<div class="col-md-12 p-0">
							 <div class="row">
                             <div class="col-md-4">
											<div class="form-group">
												<label for="">ENTER SEARCH CRITERIA</label>
												<div class="input-group">
												<input type="form-control" class="form-control" />
                              <div class="input-group-addon"><i class="fa fa-search"></i></div>
													</div>	
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="form-group">
												<label for="exampleInputEmail1">LINE OF BUSINESS</label>
												<select class="form-control">
													<option value="-1">(All)</option><option value="65">Accident</option><option value="68">Aviation</option><option value="7">Boiler &amp; Machinery</option><option value="114">Bond - Bid</option><option value="120">Bond - ERISA</option><option value="126">Bond - Federal</option><option value="11">Business Owners</option><option value="108">Classic Auto</option><option value="5">Commercial Auto</option><option value="31">Flood - Personal</option><option value="15">General Liability</option><option value="34">Health</option><option value="35">Homeowners</option><option value="6">Personal Auto</option><option value="62">Worker's Compensation</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="exampleInputEmail1">LOCATION FILTER</label>
												  <select class="form-control">
													  <option>All</option>
													  <option>Plantation</option>
												  </select>
											</div>
										</div>
									</div>
                            </div>

							<div class="col-md-12 morediv p-0">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">
	<div class="row">						 
<div class="col-md-5">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>EFFECTIVE FROM </label>
<div class="input-group">
<input type="text" class="mydatepicker form-control"/>
<div class="input-group-addon">
<i class="fa fa-calendar-o"></i>
</div>
</div>
</div>

</div>



<div class="col-md-6">
<div class="form-group">
<label>EFFECTIVE TO </label>
<div class="input-group">
<input type="text" class="mydatepicker form-control"/>
<div class="input-group-addon">
<i class="fa fa-calendar-o"></i>
</div>
</div>
</div>

</div>

</div>
</div>
<div class="col-md-5">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>EXPIRATION  FROM </label>
<div class="input-group">
<input type="text" class="mydatepicker form-control"/>
<div class="input-group-addon">
<i class="fa fa-calendar-o"></i>
</div>
</div>
</div>

</div>



<div class="col-md-6">
<div class="form-group">
<label>EXPIRATION  TO </label>
<div class="input-group">
<input type="text" class="mydatepicker form-control"/>
<div class="input-group-addon">
<i class="fa fa-calendar-o"></i>
</div>
</div>
</div>

</div>

</div>
</div>


<div class="col-md-2 m-t-5">
<button class="btn btn-success m-t-20">Search</button>
</div>
					</div>
					</div>
					</div>
					</div>
                           
                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Policy Number</th>
                                            <th>Effective</th>
                                            <th>Expiration</th>
											<th>Line Of Business</th>
											<th>Carrier</th>
											<th>Customer Name</th>
											<th>Agent</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                            <td><a href="admin/customer_detail">Assisted Transport Service Corp</a></td>
                                            <td>Damion</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                            <td><a href="admin/customer_detail">Vymary Cadiz</a></td>
                                            <td>Reyvie Paz</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                            <td><a href="admin/customer_detail">Assisted Transport Service Corp</a></td>
                                            <td>Damion</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                            <td><a href="admin/customer_detail">Vymary Cadiz</a></td>
                                            <td>Reyvie Paz</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                            <td><a href="admin/customer_detail">Assisted Transport Service Corp</a></td>
                                            <td>Damion</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                            <td><a href="admin/customer_detail">Vymary Cadiz</a></td>
                                            <td>Reyvie Paz</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                            <td><a href="admin/customer_detail">Assisted Transport Service Corp</a></td>
                                            <td>Damion</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                            <td><a href="admin/customer_detail">Vymary Cadiz</a></td>
                                            <td>Reyvie Paz</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                            <td><a href="admin/customer_detail">Assisted Transport Service Corp</a></td>
                                            <td>Damion</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                            <td><a href="admin/customer_detail">Vymary Cadiz</a></td>
                                            <td>Reyvie Paz</td>
											<td><span class="badge badge-primary">Expired</span></td>
                                        </tr>
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
                  <button type="button" class="btn btn-default my-button btn-sm">Cancel <i class="fa fa-remove"></i></button>
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
    <script src="assets/admin/plugins/components/jquery/dist/jquery.min.js"></script>
    <script src="assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/admin/js/sidebarmenu.js"></script>
    <script src="assets/admin/js/jquery.slimscroll.js"></script>
    <script src="assets/admin/js/waves.js"></script>
	<script src="assets/admin/js/custom.js"></script>
    <script src="assets/admin/plugins/components/datatables/jquery.dataTables.min.js"></script>
		<script>
	$(document).ready(function(){
	$('.more-btn').on('click', function(e){
		e.preventDefault();
		$(this).text( $(this).text() == "Less" ? "More" : "Less" );
		$(this).closest('.morediv').find('.hidden-content').slideToggle()
	});
	});
	</script>

    <script>
    $(function() {
        $('#myTable').DataTable();

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
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!--Style Switcher -->
    <script src="assets/admin/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
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
	 <script src="assets/admin/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	    <script>
         $(function(){
               // Enables popover
               $("[data-toggle=popover]").popover();
                           });
         			
         			
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
	       <script src="assets/admin/js/chosen.jquery.js" type="text/javascript"></script>

  <script src="assets/admin/js/init.js" type="text/javascript" charset="utf-8"></script>

<script src="assets/admin/js/editor.js"></script>
	<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>

    <script src="assets/admin/js/typeahead.bundle.min.js"></script>
    <script src="assets/admin/js/bootstrap-tagsinput.js"></script>
	    <script src="assets/admin/js/app_bs3.js"></script>
</body>

</html>
