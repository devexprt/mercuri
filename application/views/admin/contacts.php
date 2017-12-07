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
    <title>Contacts</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/admin/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/admin/css/animate.css" rel="stylesheet">
	 <link href="assets/admin/plugins/components/icheck/skins/all.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">

    <link href="assets/admin/css/colors/default.css" id="theme" rel="stylesheet">
	 <link rel="stylesheet" href="assets/admin/css/chosen.css">
 <link rel="stylesheet" href="assets/admin/css/bootstrap-tagsinput.css">
	<link rel="stylesheet" type="text/css" href="assets/admin/css/editor.css">
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
           
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                  <div class="col-md-12 col-lg-12 col-xs-12 for_padd">
                        <div class="white-box">
                            <h3 class="box-title m-b-20">Contacts</h3>
                            <!-- Nav tabs -->
                            <ul class="nav  nav-tabs for_tab_color" role="tablist">
                                <li role="presentation" class=""><a href="#home6" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Customers</span></a></li>
                                <li role="presentation" class=""><a href="#profile6" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Prospects</span></a></li>
                                <li role="presentation" class="active"><a href="#messages6" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Carriers</span></a></li>
                                <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">MGAs</span></a></li>
								<li role="presentation" class=""><a href="#certholders" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Cert Holders</span></a></li>
								<li role="presentation" class=""><a href="#leienholders" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Lien Holders</span></a></li>
								<li role="presentation" class=""><a href="#finance_company" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Finance Companies</span></a></li>
								<li role="presentation" class=""><a href="#employees" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Employees</span></a></li>
								<li role="presentation" class=""><a href="#vendors" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Vendors</span></a></li>
								
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content for_border">
                                <div role="tabpanel" class="tab-pane fade" id="home6">
                                    
									<div class="col-sm-12">
                       <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                            <div class="table-responsive m-t-25">
                               
								 <table id="" class="stripe example11 table-striped row-border order-column" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>CONTACT /</br> ADDRESS</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>CUSTOMER</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											<th>PRIORITY</th>
											<th>STATUS</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>(347) 854-2046(Home)</td>
                                            <td>26-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
										<td><button class="btn btn-info btn-circle btn-sm show-table"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
							

										 <tr>
                                            <td><a href="customer_detail.php">AMERISTAR LIMO</a></td>
                                            <td>(727) 698-7328
												Main</td>
                                            <td>26-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
													<td><button class="btn btn-info btn-circle btn-sm show-table"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
										
										 <tr>
                                            <td><a href="customer_detail.php">ASSISTED TRANSP</a></td>
                                            <td>(407) 636-7900(Main)</td>
                                            <td>26-00001</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
													<td><button class="btn btn-info btn-circle btn-sm show-table"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
										
										   <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>(347) 854-2046(Home)</td>
                                            <td>26-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
													<td><button class="btn btn-info btn-circle btn-sm show-table"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>

										 <tr>
                                            <td><a href="customer_detail.php">AMERISTAR LIMO</a></td>
                                            <td>(727) 698-7328
												Main</td>
                                            <td>26-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
													<td><button class="btn btn-info btn-circle  show-table"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
										
										 <tr>
                                            <td><a href="customer_detail.php">ASSISTED TRANSP…
													
													United States </a>
												</td>
                                            <td>(407) 636-7900(Main)</td>
                                            <td>26-00001</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
													<td><button class="btn btn-info btn-circle btn-sm show-table"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                     
                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile6">
                                    <div class="col-sm-12">
 <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                                         <div class="table-responsive m-t-25">
                             <table id="" class=" example11 stripe  table-striped row-border order-column" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>CONTACT /</br> ADDRESS</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>CUSTOMER</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											<th>PRIORITY</th>
											<th>STATUS</th>
											<th>ACTION</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>(347) 854-2046(Home)</td>
                                            <td>26-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
											<td><button class="btn btn-info btn-circle btn-sm" data-toggle="collapse" data-target="#demo11"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
											
										 <tr>
                                            <td><a href="customer_detail.php">AMERISTAR LIMO</a></td>
                                            <td>(727) 698-7328
												Main</td>
                                            <td>26-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
											<td><button class="btn btn-info btn-circle btn-sm" data-toggle="collapse" data-target="#demo12"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
											
										 <tr>
                                            <td><a href="customer_detail.php">ASSISTED TRANSP</a></td>
                                            <td>(407) 636-7900(Main)</td>
                                            <td>26-00001</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
											<td><button class="btn btn-info btn-circle btn-sm" data-toggle="collapse" data-target="#demo13"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
										
										   <tr>
                                            <td><a href="customer_detail.php">Abner Raymond</a></td>
                                            <td>(333) 854-2046(Home)</td>
                                            <td>66-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
											<td><button class="btn btn-info btn-circle btn-sm" data-toggle="collapse" data-target="#demo14"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
											
										 <tr>
                                            <td><a href="customer_detail.php">Coventry ONE</a></td>
											 <td>(353) 854-2046(Main)</td>
                                            <td>26-00810</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                             <td>Active</td>
											 <td><button class="btn btn-info btn-circle btn-sm" data-toggle="collapse" data-target="#demo15"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
											
										 <tr>
                                            <td><a href="customer_detail.php">ASSISTED TRANSP</a></td>
                                            <td>(407) 636-7900(Main)</td>
                                            <td>26-00001</td>
                                            <td>Commercial Customer</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                             <td>Active</td><td><button class="btn btn-info btn-circle btn-sm" data-toggle="collapse" data-target="#demo16"><i class="fa fa-caret-down"></i></button>
										
<a href="">
<button title="Add A Policy" data-toggle="tooltip" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-plus"></i></button>
</a>
										</td>
                                        </tr>
											
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade active in" id="messages6">
                                    <div class="col-sm-12">
                         <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                             <div class="table-responsive m-t-25">
                                <table id="myTable2" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>BUSINESS NAME/</br>ADDRESS</th>
											<th>PRIMARY CONTACT</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											
											<th>STATUS</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">AIG</a></td>
                                            <td>0120124444</td>
                                            <td>(954) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(999) 958-1200(Main)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(222) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										     <tr>
                                            <td><a href="customer_detail.php">AIG</a></td>
                                            <td>0120124444</td>
                                            <td>(954) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(999) 958-1200(Main)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(222) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                      
                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings6">
                                     <div class="col-sm-12">
                        <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                            <div class="table-responsive m-t-25">
                                <table id="myTable3" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>BUSINESS NAME/</br>ADDRESS</th>
											<th>PRIMARY CONTACT</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											
											<th>STATUS</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">Risk Placement Services (RPS)</a></td>
                                            <td>Amanda Miller Miller</td>
                                            <td>(866) 582-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(999) 958-1200(Main)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(777) 345-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										     <tr>
                                            <td><a href="customer_detail.php">AIG</a></td>
                                            <td>0120124444</td>
                                            <td>(954) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(777) 345-2547(Work)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(222) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                     
                    </div>
                                    <div class="clearfix"></div>
                                </div>
								
								<div role="tabpanel" class="tab-pane fade" id="certholders">
                                       <div class="col-sm-12">
                  <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                             <div class="table-responsive m-t-25">
                                <table id="myTable4" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>BUSINESS NAME/</br>ADDRESS</th>
											<th>PRIMARY CONTACT</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											
											<th>STATUS</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">Risk Placement Services (RPS)</a></td>
                                            <td>Amanda Miller Miller</td>
                                            <td>(866) 582-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(999) 958-1200(Main)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</td>
                                            <td>1213445798</td>
                                            <td>(777) 345-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										     <tr>
                                            <td><a href="customer_detail.php">AIG</a></td>
                                            <td>0120124444</td>
                                            <td>(954) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(777) 345-2547(Work)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(222) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                    
                    </div>
                                    <div class="clearfix"></div>
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="leienholders">
                                     <div class="col-sm-12">
                     <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                            <div class="table-responsive m-t-25">
                                <table id="myTable5" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>BUSINESS NAME/</br>ADDRESS</th>
											<th>PRIMARY CONTACT</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											
											<th>STATUS</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">Risk Placement Services (RPS)</a></td>
                                            <td>Amanda Miller Miller</td>
                                            <td>(866) 582-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(999) 958-1200(Main)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(777) 345-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										     <tr>
                                            <td><a href="customer_detail.php">AIG</a></td>
                                            <td>0120124444</td>
                                            <td>(954) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(777) 345-2547(Work)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(222) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                    
                    </div>
                                    <div class="clearfix"></div>
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="finance_company">
                                     <div class="col-sm-12">
                                    <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                            
                            <div class="table-responsive m-t-25">
                                <table id="myTable6" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>BUSINESS NAME/</br>ADDRESS</th>
											<th>PRIMARY CONTACT</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											
											<th>STATUS</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">Risk Placement Services (RPS)</a></td>
                                            <td>Amanda Miller Miller</td>
                                            <td>(866) 582-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(999) 958-1200(Main)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(777) 345-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										     <tr>
                                            <td><a href="customer_detail.php">AIG</a></td>
                                            <td>0120124444</td>
                                            <td>(954) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(777) 345-2547(Work)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(222) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                       
                    </div>
                                    <div class="clearfix"></div>
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="employees">
                                     <div class="col-sm-12">
                            <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                            
                            
                            <div class="table-responsive m-t-25">
                                <table id="myTable7" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>CONTACT / ADDRESS</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>EMAIL ADDRESS</th>
                                            <th>TITLE</th>
											<th>LOCATION</th>
                                            <th>PERMISSION LEVEL</th>
											<th>STATUS</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">Damion A McKenzie</a></td>
                                            <td>(954) 687-4795(Cell)</td>
                                            <td>sqlinsurance@gmail.com</td>
                                            <td>Agent</td>
                                            <td>Plantation</td>
											<td>Super Admin</td>
                                            <td>Active</td>
                                        </tr>
										<tr>
                                            <td><a href="customer_detail.php">Jhoanna Suarez</a></td>
                                            <td>(954) 688-3130(Cell)</td>
                                            <td>agentsoncall4u2@gmail.com</td>
                                            <td>Admin</td>
                                            <td>Plantation</td>
											<td>User</td>
                                            <td>Active</td>
                                        </tr>
										<tr>
                                            <td><a href="customer_detail.php">Regina McKenzie</a></td>
                                            <td>(954) 881-3160(Cell)</td>
                                            <td>soncall4u2@gmail.com</td>
                                            <td>ginasrt04@gmail.com</td>
                                            <td>Plantation</td>
											<td>User</td>
                                            <td>Active</td>
                                        </tr>
										 <tr>
                                            <td><a href="customer_detail.php">Damion A McKenzie</a></td>
                                            <td>(954) 687-4795(Cell)</td>
                                            <td>sqlinsurance@gmail.com</td>
                                            <td>Agent</td>
                                            <td>Plantation</td>
											<td>Super Admin</td>
                                            <td>Active</td>
                                        </tr>
										<tr>
                                            <td><a href="customer_detail.php">Jhoanna Suarez</a></td>
                                            <td>(954) 688-3130(Cell)</td>
                                            <td>agentsoncall4u2@gmail.com</td>
                                            <td>Admin</td>
                                            <td>Plantation</td>
											<td>User</td>
                                            <td>Active</td>
                                        </tr>
										<tr>
                                            <td><a href="customer_detail.php">Regina McKenzie</a></td>
                                            <td>(954) 881-3160(Cell)</td>
                                            <td>soncall4u2@gmail.com</td>
                                            <td>ginasrt04@gmail.com</td>
                                            <td>Plantation</td>
											<td>User</td>
                                            <td>Active</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                      
                    </div>
                                    <div class="clearfix"></div>
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="vendors">
                                     <div class="col-sm-12">
               <div class="row top-search">
							<div class="col-md-12">
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
												<label for="exampleInputEmail1">PROSPECT TYPE</label>
												<select class="form-control">
													<option>All</option>
													<option>Commercial</option>
													<option>Person</option>
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

							<div class="col-md-12 morediv">

			<a class="btn  btn-outline btn-default pull-right more-btn btn-xs"> More</a>
	<div class="col-md-12  hidden-content">	<div class="row">						 
 <ul class="icheck-list col-md-12 p-0">
                                                <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Contact Name</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Email</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Phone No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Address</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Customer No
													</label>
                                                </li>
                                               
											   
											     <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Policy No</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">DBA</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Name Insured</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">NAIC</label>
                                                </li>
												 <li class="col-md-2">
                                                    <input type="checkbox" class="check" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Inactive</label>
                                                </li>
                                                <li>
                                                   <button type="button" class="btn btn-outline btn-default btn-sm">Set As Default</button>
                                                </li>
                                              
                                            </ul>


					</div>
					</div>
					</div>
					</div>
                              <div class="table-responsive m-t-25">
                                <table id="myTable7" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>BUSINESS NAME/</br>ADDRESS</th>
											<th>PRIMARY CONTACT</th>
                                            <th>PRIMARY PHONE</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>AGENT</th>
											
											<th>STATUS</th>
												
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="customer_detail.php">Risk Placement Services (RPS)</a></td>
                                            <td>Amanda Miller Miller</td>
                                            <td>(866) 582-2547(Work)</td>
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(999) 958-1200(Main)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(777) 345-2547(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										     <tr>
                                            <td><a href="customer_detail.php">AIG</a></td>
                                            <td>0120124444</td>
                                            <td>(954) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>0120123234</td>
                                            <td>(777) 345-2547(Work)</td>
                                            
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										  <tr>
                                            <td><a href="customer_detail.php">1CALL24 TRANSPORT</a></td>
                                            <td>1213445798</td>
                                            <td>(222) 958-1200(Work)</td>
                                           
                                            <td>Plantation</td>
                                            <td>Damion A </td>
											<td>Normal</td>
                                            <td>Active</td>
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
                       
                    </div>
                                    <div class="clearfix"></div>
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
    <script src="assets/admin/plugins/components/jquery/dist/jquery.min.js"></script>
     <script src="assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
  
   <script src="assets/admin/js/jquery.slimscroll.js"></script>
    <script src="assets/admin/js/waves.js"></script>
    <script src="assets/admin/js/sidebarmenu.js"></script>
	  <script src="assets/admin/plugins/components/icheck/icheck.min.js"></script>
    <script src="assets/admin/plugins/components/icheck/icheck.init.js"></script>

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
	$(document).ready(function(){
	$('.more-btn').on('click', function(e){
		e.preventDefault();
		$(this).text( $(this).text() == "Less" ? "More" : "Less" );
		$(this).closest('.morediv').find('.hidden-content').slideToggle()
	});
	});
	</script>
	<script src="assets/admin/plugins/components/datatables/jquery.dataTables.min.js"></script>
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
