<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Policy</title>
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
									<h3 class="box-title m-t-0">Policies</h3>
								</div>
								
							</div>
                                <ul class="nav  nav-tabs for_tab_color" role="tablist">
                                <li role="presentation" class="active">
								<a href="#active-policy" aria-controls="active-policy" role="tab" data-toggle="tab" aria-expanded="false">
								<span class="visible-xs"><i class="fa fa-balance-sale"></i></span><span class="hidden-xs">
								Active Policy
								</span>
								
								</a>
								
								</li>
								
                                <li role="presentation" class=""><a href="#inactive-policy" aria-controls="inactive-policy" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-file"></i></span> <span class="hidden-xs">Inactive Policy</span></a></li>                               
                            </ul>
     <div class="tab-content for_border">
                                <div role="tabpanel" class="tab-pane fade active in" id="active-policy">
                          <div class="col-sm-12"> 
						  <div class="table-responsive m-t-20">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>POLICY NUMBER</th>
                                            <th>EFFECTIVE</th>
                                            <th>EXPIRATION</th>
											<th>LINE OF BUSINESS</th>
											<th>CARRIER</th>											
											<th>STATUS</th>	
											<th>AGENTS</th>
											<th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                               
											<td><span class="badge badge-primary">Active</span></td>
											<td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                           
											<td><span class="badge badge-primary">Active</span></td> <td><a href="#">David Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                          <td><span class="badge badge-primary">Active</span></td> <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                           
											<td><span class="badge badge-primary">Active</span></td> <td><a href="#">John Doe</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                    <td><span class="badge badge-primary">Active</span></td> <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                              <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                           <td><span class="badge badge-primary">Active</span></td>
										    <td><a href="#">David Willey</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                           <td><span class="badge badge-primary">Active</span></td> <td><a href="#">Steve Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                           <td><span class="badge badge-primary">Active</span></td> <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                          <td><span class="badge badge-primary">Active</span></td> <td><a href="#">David Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                            <td><span class="badge badge-primary">Active</span></td> <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                </table>
                            </div></div>
                        </div>
                    
					    <div role="tabpanel" class="tab-pane fade" id="inactive-policy">
						   <div class="col-sm-12"> 
						  <div class="table-responsive m-t-20">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>POLICY NUMBER</th>
                                            <th>EFFECTIVE</th>
                                            <th>EXPIRATION</th>
											<th>LINE OF BUSINESS</th>
											<th>CARRIER</th>
	<th>STATUS</th>											
                                             <th>AGENTS</th>											
											
											<th>ACTION</th>	
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                               
											     <td><span class="badge badge-danger">Pending</span></td>
												 <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                           
										     <td><span class="badge badge-danger">Pending</span></td>
											 <td><a href="#">David Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                              <td><span class="badge badge-danger">Pending</span></td>
											  	 <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                           
											     <td><span class="badge badge-danger">Pending</span></td>
												 	 <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                         <td><span class="badge badge-danger">Pending</span></td>
										 	 <td><a href="#">Steve Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                              <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                               <td><span class="badge badge-danger">Pending</span></td>
											   	 <td><a href="#">David Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                               <td><span class="badge badge-danger">Pending</span></td>
											   	 <td><a href="#">John Doe</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                           <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                                <td><span class="badge badge-danger">Pending</span></td>
													 <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
										<tr>
                                            <td><a href="policy-detail.php">74APS063250</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">16/10/2017</span></td>
											<td><span class="badge badge-danger">24/09/2018</span></td>
											<td>Commercial Auto</td>
                                            <td>National Indemnit…</td>
                                             <td><span class="badge badge-danger">Pending</span></td>
											 	 <td><a href="#">David Willey</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                  <tr>
                                            <td><a href="policy-detail.php">Pending</a><div>PREMIUM :$0.00</div></td>											
											<td><span class="badge badge-success">10/17/2017</span></td>
											<td><span class="badge badge-danger">10/17/2018</span></td>
											<td>Bond - ERISA</td>
                                            <td>-</td>
                                            <td><span class="badge badge-danger">Pending</span></td>	 <td><a href="#">John Smith</a></td>
											 <td>
											 <a href="policy-detail.php" class="btn btn-info btn-circle m-r-5">
											<i class="fa fa-eye"></i>
											</a>
											<a href="javascript:void(0)" class="btn btn-success btn-circle m-r-5">
											<i class="fa fa-pencil"></i>
											</a>
											
											<a href="javascript:void(0)" class="btn btn-danger btn-circle">
											<i class="fa fa-trash"></i>
											</a>
											
											</td>
                                        </tr>
                                </table>
                            </div></div>
						</div>
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
	
    <script src="assets/client/plugins/components/jquery/dist/jquery.min.js"></script>
    <script src="assets/client/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/client/js/sidebarmenu.js"></script>
    <script src="assets/client/js/jquery.slimscroll.js"></script>
    <script src="assets/client/js/waves.js"></script>
	<script src="assets/client/js/custom.js"></script>
    <script src="assets/client/plugins/components/datatables/jquery.dataTables.min.js"></script>
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
