<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Settings</title>
    <base href="<?php echo base_url(); ?>">
    <!-- ===== Bootstrap CSS ===== -->
    <link href="assets/client/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/client/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/client/css/animate.css" rel="stylesheet">
	 <link href="assets/client/plugins/components/icheck/skins/all.css" rel="stylesheet">
    <link href="assets/client/css/style.css" rel="stylesheet">

    <link href="assets/client/css/colors/default.css" id="theme" rel="stylesheet">
	 <link rel="stylesheet" href="assets/client/css/chosen.css">
 <link rel="stylesheet" href="assets/client/css/bootstrap-tagsinput.css">
	<link rel="stylesheet" type="text/css" href="assets/client/css/editor.css">
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

<?php include 'sidebar.php';?>    <div class="page-wrapper">
           
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                  <div class="col-md-12 col-lg-12 col-xs-12 for_padd">
                  <div class="white-box">
                            <h3 class="box-title m-t-0  ">Settings</h3>
                         
                            <form>
<div class="row">

<div class="col-md-6">
<h5><b>Manage Personal Info</b></h5>
                                <div class="form-group ">
                                    <label>First Name</label>
                                  
                                        <input type="text" class="form-control" value="First Name"> 

</div>


                                <div class="form-group ">
                                    <label>Last Name</label>
                                  
                                        <input type="text" class="form-control" value="First Name"> 

</div>


                                <div class="form-group ">
                                    <label>Email </label>
                                  
                                        <input type="email" class="form-control" value="Email"> 

</div>
                     <div class="form-group ">
                                    <label>Facebook </label>
                                  
                                        <input type="email" class="form-control" value="Facebook"> 

</div>

              

                                <div class="form-group ">
                                    <label>Phone </label>
                                  
                                        <input type="phone" class="form-control" value="Phone"> 

</div>



<div class="form-group">
                                    <label>Upload Image</label>
                              
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                   
                                </div>                        <div class="form-group ">
                                    <label>Address</label>
                                  
                                        <textarea  class="form-control" rows="4" placeholder="Address"></textarea>

</div>

                                <div class="form-group ">
                                    <label>Description</label>
                                  
                                        <textarea  class="form-control" rows="4" placeholder="Description"></textarea>

</div>
</div>
<div class="col-md-6">
                 <h5><b>Manage Password</b></h5>             

                                <div class="form-group ">
                                    <label>Old Password</label>
                                  
                                        <input type="password" class="form-control" value="Old Password"> 


</div>


                                <div class="form-group ">
                                    <label>New Password</label>
                                  
                                        <input type="password" class="form-control" value="New Password"> 

</div>


                                <div class="form-group ">
                                    <label>Confirm Password</label>
                                  
                                        <input type="password" class="form-control" value="Confirm Password"> 


</div>


</div>


<div class="col-md-12">
                                <div class="form-group ">
                        <button class="btn btn-success">Submit</button>

</div>
</div>
</div>
                               
                                
                            </form>
                        </div> </div>
               
               
            </div>
           <footer class="footer t-a-c">
                © 2017 All Rights Reserved | Designed By Indi IT Solutions
            </footer>
        </div>
    </div>
	
    <script src="assets/client/plugins/components/jquery/dist/jquery.min.js"></script>
     <script src="assets/client/bootstrap/dist/js/bootstrap.min.js"></script>
  
   <script src="assets/client/js/jquery.slimscroll.js"></script>
    <script src="assets/client/js/waves.js"></script>
    <script src="assets/client/js/sidebarmenu.js"></script>
	  <script src="assets/client/plugins/components/icheck/icheck.min.js"></script>
    <script src="assets/client/plugins/components/icheck/icheck.init.js"></script>

    <script src="assets/client/js/custom.js"></script>
    <script src="assets/client/plugins/components/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/client/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/client/plugins/components/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/client/plugins/components/sparkline/jquery.charts-sparkline.js"></script>
    <script src="assets/client/plugins/components/knob/jquery.knob.js"></script>
    <script src="assets/client/plugins/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
    <script src="assets/client/js/db1.js"></script>
    <script src="assets/client/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
		<script>
	$(document).ready(function(){
	$('.more-btn').on('click', function(e){
		e.preventDefault();
		$(this).text( $(this).text() == "Less" ? "More" : "Less" );
		$(this).closest('.morediv').find('.hidden-content').slideToggle()
	});
	});
	</script>
	<script src="assets/client/plugins/components/datatables/jquery.dataTables.min.js"></script>
	<script>
   var table = $('.example11').DataTable();

$('.example11 tbody').on('click', 'td:last-child .show-table', function () {
  var tr = $(this).closest('tr');
  var row = table.row( tr );

  if (row.child.isShown()) {
    // This row is already open - close it.
    row.child.hide();
    tr.removeClass('shown');
  } else {
    // Open row.
    row.child('<table cellpadding="9" cellspacing="0" class="table default-table dataTable table-striped m-t-0"><thead> <th>Effective</th> <th>Expiration</th> <th>Line Of Business</th> <th>Carrier</th> <th>Policy No</th> <th>Premium</th> <th>Agent</th> <th>Status</th></thead><tbody><tr> <td><span class="badge badge-primary">12/11/2017</span></td> <td><span class="badge badge-default">09/12/2017</span></td> <td>General Liability</td> <td>Scottsdale Ins Co</td> <td>MHKY-01</td> <td>$920.00</td> <td>John Smith</td> <td><span class="badge badge-success">Active</span></td></tr></tbody></table>').show();
    tr.addClass('shown');
  }
});
    </script>
		
		<script>

	 $(function() {

	
	    $('#myTable2 , #myTable3 , #myTable4 , #myTable5 , #myTable6 , #myTable7 , #myTable8 ').DataTable({			
			oLanguage: {
    sSearch: "ENTER SEARCH CRITERIA"
			}		
  }); });
  
  

    </script>
	          <script src="assets/client/js/chosen.jquery.js" type="text/javascript"></script>

  <script src="assets/client/js/init.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/client/js/editor.js"></script>
	<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>
		<script>
			$(document).ready(function() {
				$("#txtEditor1").Editor();
			});
		</script>
		<script>
			$(document).ready(function() {
				$("#txtEditor2").Editor();
			});
		</script>
		<script>
			$(document).ready(function() {
				$("#txtEditor3").Editor();
			});
		</script>

    <script src="assets/client/js/typeahead.bundle.min.js"></script>
    <script src="assets/client/js/bootstrap-tagsinput.js"></script>
	    <script src="assets/client/js/app_bs3.js"></script>

</body>

</html>
