<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo base_url(); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/plugins/images/favicon.png">
    <title>Dashboard</title>
     <link href="assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/plugins/components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/admin/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
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

<?php include 'sidebar.php';?>  <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            <div class="row m-0">
                <div class="col-md-2 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-info text-white"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">411</h3>
                            <p class="info-text font-12">Assign To Me</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-success text-white"><i class="fa fa-edit"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">68</h3>
                            <p class="info-text font-12">Total Policy</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-danger text-white"><i class="fa fa-edit"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">9475</h3>
                            <p class="info-text font-12 m-b-0">Total Policy Type</p>
							<small class="box-txt-btm">
								<p> Auto Policy: 43 </p>
								<p> Home Policy: 32 </p>
								<p> Business Policy: 12</p>
							</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-warning text-white"><i class="icon-book-open"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">68</h3>
                            <p class="info-text font-12 m-b-0">Total Task</p>
                           <small class="box-txt-btm">
								<p> Due Today: 20 </p>
								<p> Due in 5 Days: 54 </p>
								<p> Urgent: 10</p>
							</small>
                        </div>
                    </div>
                </div>
				<div class="col-md-2 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-info text-white"><i class="icon-chart"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">154</h3>
                            <p class="info-text font-12">Total Leads</p>
                            
                        </div>
                    </div>
                </div>
				<div class="col-md-2 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-primary text-white"><i class="icon-bubbles"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">154</h3>
                            <p class="info-text font-12">Total Messages</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid ">
                <div class="col-md-12 for_padd">
				<div class="row">
                    <div class="col-md-8 col-sm-12 ">
                        <div class="white-box stat-widget">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <h4 class="box-title">Statistics</h4>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="font-15"><i class="fa fa-circle m-r-5 text-success"></i>New Clients</h6>
                                        </li>
                                        <li>
                                            <h6 class="font-15"><i class="fa fa-circle m-r-5 text-primary"></i>Existing Clients</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="stat chart-pos"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="white-box activity-widget">
                            <h4 class="box-title">Recent Messages</h4>
                            <div class="steamline">
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <div>
                                            <img class="img-circle" alt="user" src="assets/admin/plugins/images/users/hanna.jpg">
                                        </div>
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0);" class="text-link font-semibold">Hanna Gover</a> left a message <a href="javascript:void(0);" class="text-link font-semibold">'The best tutorial for creating a blog'.</a></div>
                                        <p>2 min ago</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left">
                                        <div>
                                            <img class="img-circle" alt="user" src="assets/admin/plugins/images/users/2.png">
                                        </div>
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0);" class="text-link font-semibold">Kizzy Kennedy </a> left a message <a href="javascript:void(0);" class="text-link font-semibold">'Good day! Please give us a call...'.</a></div>
                                        <p>2 min ago</p>
                                    </div>
                                </div>
                                 <div class="sl-item">
                                    <div class="sl-left">
                                        <div>
                                            <img class="img-circle" alt="user" src="assets/admin/plugins/images/users/hanna.jpg">
                                        </div>
                                    </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0);" class="text-link font-semibold">Hanna Gover</a> left a message <a href="javascript:void(0);" class="text-link font-semibold">'The best tutorial for creating a blog'.</a></div>
                                        <p>2 min ago</p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
              
                    <div class="col-md-6">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="box-title">Tasks</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Contact Associate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Smith </td>
                                            <td>26/09/2017</td>
                                            <td>Not Started</td>
                                            <td><span class="label label-danger">No</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hanry James </td>
                                            <td>26/09/2017</td>
                                            <td>Not Started</td>
                                            <td><span class="label label-info">John Smith</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i> </button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>Marry Thomson </td>
                                            <td>26/09/2017</td>
                                            <td>Not Started</td>
                                            <td><span class="label label-danger">No</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i> </button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>Jenny</td>
                                            <td>26/09/2017</td>
                                            <td>Not Started</td>
                                            <td><span class="label label-danger">No</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-check"></i> </button>
                                            </td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
					<div class="col-md-6">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="box-title">Policies</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Expiration</th>
                                            <th>X-Date Policy</th>
                                            <th>Line of Business</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Smith </td>
                                            <td>26/09/2017</td>
                                            <td>20/10/2017</td>
                                            <td>General Liability</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-eye"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hanry  </td>
                                            <td>26/09/2017</td>
                                            <td>20/10/2017</td>
                                            <td>Commercial Auto</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-eye"></i> </button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>Marry James</td>
                                            <td>23/09/2017</td>
                                            <td>30/10/2017</td>
                                            <td>General Liability</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-eye"></i> </button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>Peter Parker </td>
                                            <td>26/09/2017</td>
                                            <td>20/10/2017</td>
                                            <td>Commercial Auto</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-eye"></i> </button>
                                            </td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
				</div>	
				</div>
               
            </div>
           <footer class="footer t-a-c">
                © 2017 All Rights Reserved | Designed By Indi IT Solutions
            </footer>
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
                  <button type="button" class="btn btn-default my-button btn-sm" >Cancel <i class="fa fa-remove"></i></button>
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
    <script src="assets/admin/js/jquery.slimscroll.js"></script>
    <script src="assets/admin/js/waves.js"></script>
    <script src="assets/admin/js/sidebarmenu.js"></script>
    <script src="assets/admin/js/custom.js"></script>
    <script src="assets/admin/plugins/components/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/admin/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/admin/plugins/components/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/admin/plugins/components/sparkline/jquery.charts-sparkline.js"></script>
    <script src="assets/admin/plugins/components/knob/jquery.knob.js"></script>
    <script src="assets/admin/plugins/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
    <script src="assets/admin/js/db1.js"></script>
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
