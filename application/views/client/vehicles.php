<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vehicles</title>
    <base href="<?php echo base_url(); ?>">
    <link href="assets/client/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/client/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/client/css/animate.css" rel="stylesheet">
    <link href="assets/client/css/style.css" rel="stylesheet">
    <link href="assets/client/css/colors/default.css" id="theme" rel="stylesheet">
			   <link rel="stylesheet" type="text/css" href="assets/client/css/editor.css">
		     <link rel="stylesheet" href="assets/client/css/chosen.css">
    <link rel="stylesheet" href="assets/client/css/bootstrap-tagsinput.css">
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
            <div class="container-fluid">
                <!-- /row -->
                
                    <div class="col-sm-12 for_padd">
                        <div class="white-box">
                            <div class="row">
								<div class="col-md-12">
									<h3 class="box-title m-b-0">Vehicles</h3>
								</div>
								
							</div>
						             <div class="table-responsive m-t-25">
                               
								 <table id="myTable15" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>IMAGE</th>
                                            <th>NAME</th>
											<th>TYPE</th>
											<th>MODEL</th>
                                            <th>DESCRIPTION</th>                                                              
											<th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img width="100px" height="100px" src="assets/client/plugins/images/car1.jpg" class="img-responsive img-circle"/></td>
                                            <td>Maruti </td>
											 <td>Car</td>
											  <td>ZDI</td>
                                            <td>Lorem porem ipsum dolor sit amet</td>                                           
                                            <td>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle m-r-5">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                            
                                        </tr>
							<tr>
                                            <td><img width="100px" height="100px" src="assets/client/plugins/images/car2.jpg" class="img-responsive img-circle"/></td>
                                            <td>Mercedez </td>
											 <td>Car</td>
											  <td>ZDI</td>
                                            <td>Lorem porem ipsum dolor sit amet</td>                                           
                                            <td>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle m-r-5">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                            
                                        </tr>
										<tr>
                                            <td><img width="100px" height="100px" src="assets/client/plugins/images/car3.jpg" class="img-responsive img-circle"/></td>
                                            <td>Maruti </td>
											 <td>Car</td>
											  <td>ZDI</td>
                                            <td>Lorem porem ipsum dolor sit amet</td>                                           
                                            <td>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle m-r-5">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                            
                                        </tr>
										<tr>
                                            <td><img width="100px" height="100px" src="assets/client/plugins/images/car4.jpg" class="img-responsive img-circle"/></td>
                                            <td>Mercedez </td>
											 <td>Car</td>
											  <td>ZDI</td>
                                            <td>Lorem porem ipsum dolor sit amet</td>                                           
                                            <td>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle m-r-5">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                            
                                        </tr>
										<tr>
                                            <td><img width="100px" height="100px" src="assets/client/plugins/images/car5.jpg" class="img-responsive img-circle"/></td>
                                            <td>Maruti </td>
											 <td>Car</td>
											  <td>ZDI</td>
                                            <td>Lorem porem ipsum dolor sit amet</td>                                           
                                            <td>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle m-r-5">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
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
	
    <script src="assets/client/plugins/components/jquery/dist/jquery.min.js"></script>
    <script src="assets/client/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/client/js/sidebarmenu.js"></script>
    <script src="assets/client/js/jquery.slimscroll.js"></script>
    <script src="assets/client/js/waves.js"></script>
	<script src="assets/client/js/custom.js"></script>
    <script src="assets/client/plugins/components/datatables/jquery.dataTables.min.js"></script>
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
  
    </script>
		<script>
	$(document).ready(function(){
	$('.more-btn').on('click', function(e){
		e.preventDefault();
		$(this).text( $(this).text() == "Less" ? "More" : "Less" );
		$(this).closest('.morediv').find('.hidden-content').slideToggle()
	});
	});
	</script>
    <!--Style Switcher -->
    <script src="assets/client/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
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
	 <script src="assets/client/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
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
	       <script src="assets/client/js/chosen.jquery.js" type="text/javascript"></script>

  <script src="assets/client/js/init.js" type="text/javascript" charset="utf-8"></script>

<script src="assets/client/js/editor.js"></script>
	<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>

    <script src="assets/client/js/typeahead.bundle.min.js"></script>
    <script src="assets/client/js/bootstrap-tagsinput.js"></script>
	    <script src="assets/client/js/app_bs3.js"></script>
</body>

</html>
