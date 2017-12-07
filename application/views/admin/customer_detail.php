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
      <title>Customer Detail</title>
      <base href="<?php echo base_url(); ?>">
      <!-- ===== Bootstrap CSS ===== -->
      <link href="assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- ===== Plugin CSS ===== -->
      <link href=".assets/admin/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
      <!-- ===== Animation CSS ===== -->
      <link href="assets/admin/assets/admin/css/animate.css" rel="stylesheet">
      <!-- ===== Custom CSS ===== -->
      <link href="assets/admin/css/style.css" rel="stylesheet">
      <!-- ===== Color CSS ===== -->
      <link href="assets/admin/css/colors/default.css" id="theme" rel="stylesheet">
	  <link href="assets/admin/css/owl.carousel.css" id="" rel="stylesheet">
	  <link href="assets/admin/css/owl.theme.default.css" id="" rel="stylesheet">
    <link href="assets/admin/plugins/components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">


      <link href="assets/admin/plugins/components/switchery/dist/switchery.min.css" rel="stylesheet" />
	 		   <link rel="stylesheet" type="text/css" href="assets/admin/css/editor.css">
		     <link rel="stylesheet" href="assets/admin/css/chosen.css">
    <link rel="stylesheet" href="assets/admin/css/bootstrap-tagsinput.css">  
      <style>
         .form-group {
         margin-bottom: 15px;
         }
      </style>
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

<?php include 'sidebar.php';?> <div class="page-wrapper">
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
               <div class="col-md-2 p-0 f-h">
                  <div class="col-md-12 col-xs-12 p-7">
                     <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="assets/admin/plugins/images/large/img1.jpg"> 
                        </div>
                        <div class="user-btm-box">
                           <!-- .row -->
                           <div class="row  m-t-10">
                              <div class="col-md-12">
                                 <strong>Full Name</strong>
                                 </br>
                                 <p>Genelia</p>
                                 </p>
                              </div>
                              <hr class="f_f_w">
                              <div class="col-md-12">
                                 <strong>Business Name</strong>
                                 <p>Fitzroy Goode</p>
                              </div>
                           </div>
                           <!-- /.row -->
                           <hr>
                           <!-- .row -->
                           <div class="row m-t-10">
                              <div class="col-md-12">
                                 <strong>Email ID</strong>
                                 <p>genelia@gmail.com</p>
                              </div>
                              <hr class="f_f_w">
                              <div class="col-md-12">
                                 <strong>Phone No</strong>
                                 <p>+123 456 789</p>
                              </div>
                           </div>
                           <!-- /.row -->
                           <hr>
                           <!-- .row -->
                           <div class="row  m-t-10">
                              <div class="col-md-12">
                                 <strong>Primary Address</strong>
                                 <p>E/104, Minare SK, Istanbul
                                    <br> Turkey-34000
                                 </p>
                              </div>
                           </div>
                           <hr>
                           <div class="row  m-t-10">
                              <div class="col-md-12">
                                 <strong>Customer Since</strong>
                                 <p>10/28/2017
                                    <br>Plantation
                                 </p>
                              </div>
                           </div>
                           <hr>
                           <div class="row  m-t-10">
                              <div class="col-md-12">
                                 <strong>Bill Credit Info</strong>
                                 <p>10/28/2017
                                    <br>Plantation
                                 </p>
                              </div>
                           </div>
                           <!-- /.row -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-10 col-xs-12 p-0 p-r-7">
                  <div class="white-box">
                     <ul class="nav nav-tabs for_tab for_tab_color">
                        <li class="active tab">
                           <a href="#home" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Customer Info</span> </a>
                        </li>
                        <li class="tab">
                           <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-newspaper-o"></i></span> <span class="hidden-xs">Policies</span> </a>
                        </li>
                        <li class="tab">
                           <a href="#messages" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-balance-scale"></i></span> <span class="hidden-xs">Claims</span> </a>
                        </li>
                        <li class="tab">
                           <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-money"></i></span> <span class="hidden-xs">Billing</span> </a>
                        </li>
                        <li class="tab">
                           <a href="#files" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-files-o"></i></span> <span class="hidden-xs">Files</span> </a>
                        </li>
                        <li class="tab">
                           <a href="#email" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> <span class="hidden-xs">Emails</span> </a>
                        </li>
                        <li class="tab">
                           <a href="#acord" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-exchange"></i></span> <span class="hidden-xs">Acord</span> </a>
                        </li>
                        <li class="tab">
                           <a href="#tasks" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-tasks"></i></span> <span class="hidden-xs">Tasks/Notes</a>
                        </li>
                        <li class="tab">
                           <a href="#msg" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-commenting-o"></i></span> <span class="hidden-xs">Text Messages</a>
                        </li>
                       
                        <li class="tab">
                           <a href="#logs" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cogs"></i></span> <span class="hidden-xs">Logs</a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="home">
                           <div class="steamline">
                              <div class="col-md-12">
                                 <div class="row">
                                    <!-- Nav tabs -->
                                    <div class="card-body f-l-h">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">BASIC CONTACT INFO</h2>
                                                   </legend>
                                                   <div class="hide-contact div1">
                                                      <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                                         <ul class="px-0 list-unstyled font-new-list">
                                                            <li><b> Phone No. : </b>  1234567</li>
                                                            <li><b> Cell : </b>  Primary</li>
                                                         </ul>
                                                      </div>
                                                      <div class="col-md-6 col-sm-12 ">
                                                         <ul class="px-0 list-unstyled font-new-list">
                                                            <li><b> Email: </b>  10userdemo@gmail.com</li>
                                                         </ul>
                                                      </div>
                                                      <div class="col-md-12">
                                                         <div class="row">
                                                            <button type="button"  id="btn1" class="btn btn-success my-button btn-xs pull-right">Edit    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix"></div>
                                                   <div class="show-contact div2" style="display:none">
                                                      <div class="col-md-4">
                                                         <div class="row">
                                                            <div class="form-group">
                                                               <label>CONTACT PREFERENCE</label>
                                                               <select class="form-control">
                                                                  <option>Phone</option>
                                                                  <option>Email</option>
                                                                  <option>Mail</option>
                                                                  <option>Text</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                      <fieldset class="my-field m-b-10">
                                                         <legend>PHONE NUMBERS</legend>
                                                         <div class="input_fields_wrap">
                                                            <button class="add_field_button btn btn-success btn-xs m-b-10"><i class="fa fa-plus"></i> Add No</button>
                                                            <div class="clearfix"></div>
                                                            <div class="row">
                                                               <div class="col-md-4">
                                                                  <input type="text" class="form-control" placeholder="" name="mytext[]">
                                                               </div>
                                                               <div class="col-md-3">
                                                                  <select class="form-control">
                                                                     <option value="17">Main</option>
                                                                     <option value="18">Fax</option>
                                                                     <option value="19">Accounting</option>
                                                                     <option value="57">Administration</option>
                                                                     <option value="59">Advertising</option>
                                                                     <option value="20">Billing</option>
                                                                     <option value="21">Customer Service</option>
                                                                     <option value="22">Human Resources</option>
                                                                     <option value="79">Inventory</option>
                                                                     <option value="23">IT</option>
                                                                     <option value="63">Legal</option>
                                                                     <option value="62">Logistics</option>
                                                                     <option value="78">Maintenance</option>
                                                                     <option value="24">Marketing</option>
                                                                     <option value="25">Operations</option>
                                                                     <option value="26">Public Relations</option>
                                                                     <option value="58">Research</option>
                                                                     <option value="27">Sales</option>
                                                                     <option value="53">Technical Support</option>
                                                                     <option value="28">Other</option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="col-md-6  p-0">
                                                                     <div class="form-group">
                                                                        <div class="radio radio-success">
                                                                           <input id="radio1" type="radio">
                                                                           <label for="radio1">  Primary Phone </label>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-6  p-0">
                                                                     <div class="form-group">
                                                                        <div class="checkbox checkbox-success">
                                                                           <input id="checkbox1" type="checkbox">
                                                                           <label for="checkbox1">  OPT-OUT </label>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                            </div>
                                                         </div>
                                                      </fieldset>
                                                      <fieldset class="my-field m-b-10">
                                                         <legend>Email Addresses</legend>
                                                         <div class="input_fields_wrap1">
                                                            <button class=" btn btn-success btn-xs m-b-10 add_field_button1"><i class="fa fa-plus"></i> Add Email</button>
                                                            <div class="clearfix"></div>
                                                            <div class="row">
                                                               <div class="col-md-4">
                                                                  <input type="text" class="form-control" placeholder="" name="mytext[]">
                                                               </div>
                                                               <div class="col-md-3">
                                                                  <select class="form-control">
                                                                     <option value="17">Main</option>
                                                                     <option value="18">Fax</option>
                                                                     <option value="19">Accounting</option>
                                                                     <option value="57">Administration</option>
                                                                     <option value="59">Advertising</option>
                                                                     <option value="20">Billing</option>
                                                                     <option value="21">Customer Service</option>
                                                                     <option value="22">Human Resources</option>
                                                                     <option value="79">Inventory</option>
                                                                     <option value="23">IT</option>
                                                                     <option value="63">Legal</option>
                                                                     <option value="62">Logistics</option>
                                                                     <option value="78">Maintenance</option>
                                                                     <option value="24">Marketing</option>
                                                                     <option value="25">Operations</option>
                                                                     <option value="26">Public Relations</option>
                                                                     <option value="58">Research</option>
                                                                     <option value="27">Sales</option>
                                                                     <option value="53">Technical Support</option>
                                                                     <option value="28">Other</option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="col-md-6  p-0">
                                                                     <div class="form-group">
                                                                        <div class="radio radio-success">
                                                                           <input id="radio1" type="radio">
                                                                           <label for="radio1">  Primary Email </label>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-6  p-0">
                                                                     <div class="form-group">
                                                                        <div class="checkbox checkbox-success">
                                                                           <input id="checkbox1" type="checkbox">
                                                                           <label for="checkbox1">  OPT-OUT </label>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                            </div>
                                                         </div>
                                                      </fieldset>
                                                      <button type="button" class="btn my-button btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                      <button type="button"  id="btn2" class="btn my-button btn-default btn-xs pull-right  m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                   </div>
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">ADDITIONAL CONTACTS</h2>
                                                   </legend>
                                                   <div class="col-md-12 col-sm-12 text-xs-center text-md-left p-0 div11">
                                                      <button type="button" id="btn11" class="btn btn-success my-button btn-xs pull-right m-b-10">   <i class="fa fa-plus" aria-hidden="true"></i> Add Contact </button>
                                                      <div class="clearfix"></div>
                                                      <div class="table-responsive">
                                                         <table class="table default-table dataTable table-striped m-t-0">
                                                            <thead>
                                                               <tr>
                                                                  <th>CONTACT</th>
                                                                  <th>CONTACT INFO</th>
                                                                  <th>CONTACT INFO DETAILS</th>
                                                                  <th>ACTION</th>
                                                               </tr>
                                                            </thead>
                                                            <tr>
                                                               <td>
                                                                  John Smith
                                                               </td>
                                                               <td>
                                                                  (786) 759-6539 
                                                               </td>
                                                               <td>
                                                                  <div>	Cell <span><b>Primary</b></span></div>
                                                               </td>
                                                               <td>
                                                                  <a href="" class="btn btn-circle btn-success"><i class="fa fa-pencil"></i></a>
                                                               </td>
                                                            </tr>
                                                         </table>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-12 div22" style="display:none">
                                                      <div class="row">
                                                         <fieldset class="my-field">
                                                            <legend><b>CONTACT</b></legend>
                                                            <div class="row">
                                                               <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>Salutation</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="Atty.">Atty.</option>
                                                                        <option value="Br.">Br.</option>
                                                                        <option value="Capt.">Capt.</option>
                                                                        <option value="Col.">Col.</option>
                                                                        <option value="Dr.">Dr.</option>
                                                                        <option value="Dr. &amp; Dr.">Dr. &amp; Dr.</option>
                                                                        <option value="Dr. &amp; Mr.">Dr. &amp; Mr.</option>
                                                                        <option value="Dr. &amp; Mrs.">Dr. &amp; Mrs.</option>
                                                                        <option value="Fr.">Fr.</option>
                                                                        <option value="Gen.">Gen.</option>
                                                                        <option value="Honorable">Honorable</option>
                                                                        <option value="Lt.">Lt.</option>
                                                                        <option value="Major">Major</option>
                                                                        <option value="Mr.">Mr.</option>
                                                                        <option value="Mr. &amp; Mr.">Mr. &amp; Mr.</option>
                                                                        <option value="Mr. &amp; Mrs.">Mr. &amp; Mrs.</option>
                                                                        <option value="Mr. &amp; Ms.">Mr. &amp; Ms.</option>
                                                                        <option value="Mrs.">Mrs.</option>
                                                                        <option value="Mrs. &amp; Mrs.">Mrs. &amp; Mrs.</option>
                                                                        <option value="Ms.">Ms.</option>
                                                                        <option value="Ms. &amp; Ms.">Ms. &amp; Ms.</option>
                                                                        <option value="Pres.">Pres.</option>
                                                                        <option value="Prof.">Prof.</option>
                                                                        <option value="Rev.">Rev.</option>
                                                                        <option value="Sr.">Sr.</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>Nick Name</label>
                                                                     <input type="text" class="form-control" placeholder="Nick Name"/>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>First Name</label>
                                                                     <input type="text" class="form-control" placeholder="First Name"/>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Middle Name</label>
                                                                     <input type="text" class="form-control" placeholder="Middle Name"/>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Last Name</label>
                                                                     <input type="text" class="form-control" placeholder="Last Name"/>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </fieldset>
                                                         <fieldset class="my-field m-t-15">
                                                            <legend><b>RELATIONSHIP</b></legend>
                                                            <div class="row">
                                                               <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>Relation Type</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="1">Relative</option>
                                                                        <option value="2">Non Relative</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>Relationship To Primary</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="16">Aunt</option>
                                                                        <option value="17">Brother</option>
                                                                        <option value="27">Brother-In-Law</option>
                                                                        <option value="5">Child</option>
                                                                        <option value="6">Cousin</option>
                                                                        <option value="7">Daughter</option>
                                                                        <option value="29">Domestic Partner</option>
                                                                        <option value="1">Father</option>
                                                                        <option value="11">Father-in-law</option>
                                                                        <option value="8">Granddaughter</option>
                                                                        <option value="26">Grandfather</option>
                                                                        <option value="25">Grandmother</option>
                                                                        <option value="9">Grandson</option>
                                                                        <option value="2">Mother</option>
                                                                        <option value="10">Mother-in-law</option>
                                                                        <option value="12">Nephew</option>
                                                                        <option value="13">Niece</option>
                                                                        <option value="14">Other (Relative)</option>
                                                                        <option value="18">Sister</option>
                                                                        <option value="28">Sister-In-Law</option>
                                                                        <option value="4">Son</option>
                                                                        <option value="3">Spouse</option>
                                                                        <option value="15">Uncle</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </fieldset>
                                                         <fieldset class="my-field m-t-15">
                                                            <legend><b>CONTACT ADDRESS</b></legend>
                                                            <div class="row">
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Street</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Apt/Suite/Other</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>City</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Relation Type</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="1">Relative</option>
                                                                        <option value="2">Non Relative</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>County</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Zip</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Country</label>
                                                                     <select class="form-control">
                                                                        <option value="USA">United States</option>
                                                                        <option value="AFG">Afghanistan</option>
                                                                        <option value="ALB">Albania</option>
                                                                        <option value="ALA">Aland Islands</option>
                                                                        <option value="DZA">Algeria</option>
                                                                        <option value="ASM">American Samoa</option>
                                                                        <option value="AND">Andorra</option>
                                                                        <option value="AGO">Angola</option>
                                                                        <option value="AIA">Anguilla</option>
                                                                        <option value="ATA">Antarctica</option>
                                                                        <option value="ATG">Antigua and Barbuda</option>
                                                                        <option value="ARG">Argentina</option>
                                                                        <option value="ARM">Armenia</option>
                                                                        <option value="ABW">Aruba</option>
                                                                        <option value="AUS">Australia</option>
                                                                        <option value="AUT">Austria</option>
                                                                        <option value="AZE">Azerbaijan</option>
                                                                        <option value="BHS">Bahamas</option>
                                                                        <option value="BHR">Bahrain</option>
                                                                        <option value="BGD">Bangladesh</option>
                                                                        <option value="BRB">Barbados</option>
                                                                        <option value="BLR">Belarus</option>
                                                                        <option value="BEL">Belgium</option>
                                                                        <option value="BLZ">Belize</option>
                                                                        <option value="BEN">Benin</option>
                                                                        <option value="BMU">Bermuda</option>
                                                                        <option value="BTN">Bhutan</option>
                                                                        <option value="BOL">Bolivia</option>
                                                                        <option value="BIH">Bosnia and Herzegovina</option>
                                                                        <option value="BWA">Botswana</option>
                                                                        <option value="BVT">Bouvet Island</option>
                                                                        <option value="BRA">Brazil</option>
                                                                        <option value="IOT">British Indian Ocean Territory</option>
                                                                        <option value="BRN">Brunei Darussalam</option>
                                                                        <option value="BGR">Bulgaria</option>
                                                                        <option value="BFA">Burkina Faso</option>
                                                                        <option value="BDI">Burundi</option>
                                                                        <option value="KHM">Cambodia</option>
                                                                        <option value="CMR">Cameroon</option>
                                                                        <option value="CAN">Canada</option>
                                                                        <option value="CPV">Cape Verde</option>
                                                                        <option value="CYM">Cayman Islands</option>
                                                                        <option value="CAF">Central African Republic</option>
                                                                        <option value="TCD">Chad</option>
                                                                        <option value="CHL">Chile</option>
                                                                        <option value="CHN">China</option>
                                                                        <option value="CXR">Christmas Island</option>
                                                                        <option value="CCK">Cocos (Keeling) Islands</option>
                                                                        <option value="COL">Colombia</option>
                                                                        <option value="COM">Comoros</option>
                                                                        <option value="COG">Congo</option>
                                                                        <option value="COD">Congo, Democratic Republic of the</option>
                                                                        <option value="COK">Cook Islands</option>
                                                                        <option value="CRI">Costa Rica</option>
                                                                        <option value="CIV">Côte d'Ivoire</option>
                                                                        <option value="HRV">Croatia</option>
                                                                        <option value="CUB">Cuba</option>
                                                                        <option value="CYP">Cyprus</option>
                                                                        <option value="CZE">Czech Republic</option>
                                                                        <option value="DNK">Denmark</option>
                                                                        <option value="DJI">Djibouti</option>
                                                                        <option value="DMA">Dominica</option>
                                                                        <option value="DOM">Dominican Republic</option>
                                                                        <option value="ECU">Ecuador</option>
                                                                        <option value="EGY">Egypt</option>
                                                                        <option value="SLV">El Salvador</option>
                                                                        <option value="GNQ">Equatorial Guinea</option>
                                                                        <option value="ERI">Eritrea</option>
                                                                        <option value="EST">Estonia</option>
                                                                        <option value="ETH">Ethiopia</option>
                                                                        <option value="FLK">Falkland Islands (Malvinas)</option>
                                                                        <option value="FRO">Faroe Islands</option>
                                                                        <option value="FJI">Fiji</option>
                                                                        <option value="FIN">Finland</option>
                                                                        <option value="FRA">France</option>
                                                                        <option value="GUF">French Guiana</option>
                                                                        <option value="PYF">French Polynesia</option>
                                                                        <option value="ATF">French Southern Territories</option>
                                                                        <option value="GAB">Gabon</option>
                                                                        <option value="GMB">Gambia</option>
                                                                        <option value="GEO">Georgia</option>
                                                                        <option value="DEU">Germany</option>
                                                                        <option value="GHA">Ghana</option>
                                                                        <option value="GIB">Gibraltar</option>
                                                                        <option value="GRC">Greece</option>
                                                                        <option value="GRL">Greenland</option>
                                                                        <option value="GRD">Grenada</option>
                                                                        <option value="GLP">Guadeloupe</option>
                                                                        <option value="GUM">Guam</option>
                                                                        <option value="GTM">Guatemala</option>
                                                                        <option value="GGY">Guernsey</option>
                                                                        <option value="GIN">Guinea</option>
                                                                        <option value="GNB">Guinea-Bissau</option>
                                                                        <option value="GUY">Guyana</option>
                                                                        <option value="HTI">Haiti</option>
                                                                        <option value="HMD">Heard Island and McDonald Islands</option>
                                                                        <option value="VAT">Holy See (Vatican City State)</option>
                                                                        <option value="HND">Honduras</option>
                                                                        <option value="HKG">Hong Kong</option>
                                                                        <option value="HUN">Hungary</option>
                                                                        <option value="ISL">Iceland</option>
                                                                        <option value="IND">India</option>
                                                                        <option value="IDN">Indonesia</option>
                                                                        <option value="IRN">Iran, Islamic Republic of</option>
                                                                        <option value="IRQ">Iraq</option>
                                                                        <option value="IRL">Ireland</option>
                                                                        <option value="IMN">Isle of Man</option>
                                                                        <option value="ISR">Israel</option>
                                                                        <option value="ITA">Italy</option>
                                                                        <option value="JAM">Jamaica</option>
                                                                        <option value="JPN">Japan</option>
                                                                        <option value="JEY">Jersey</option>
                                                                        <option value="JOR">Jordan</option>
                                                                        <option value="KAZ">Kazakhstan</option>
                                                                        <option value="KEN">Kenya</option>
                                                                        <option value="KIR">Kiribati</option>
                                                                        <option value="PRK">Korea, Democratic People's Republic of</option>
                                                                        <option value="KOR">Korea, Republic of</option>
                                                                        <option value="KWT">Kuwait</option>
                                                                        <option value="KGZ">Kyrgyzstan</option>
                                                                        <option value="LAO">Lao People's Democratic Republic</option>
                                                                        <option value="LVA">Latvia</option>
                                                                        <option value="LBN">Lebanon</option>
                                                                        <option value="LSO">Lesotho</option>
                                                                        <option value="LBR">Liberia</option>
                                                                        <option value="LBY">Libyan Arab Jamahiriya</option>
                                                                        <option value="LIE">Liechtenstein</option>
                                                                        <option value="LTU">Lithuania</option>
                                                                        <option value="LUX">Luxembourg</option>
                                                                        <option value="MAC">Macao</option>
                                                                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                                        <option value="MDG">Madagascar</option>
                                                                        <option value="MWI">Malawi</option>
                                                                        <option value="MYS">Malaysia</option>
                                                                        <option value="MDV">Maldives</option>
                                                                        <option value="MLI">Mali</option>
                                                                        <option value="MLT">Malta</option>
                                                                        <option value="MHL">Marshall Islands</option>
                                                                        <option value="MTQ">Martinique</option>
                                                                        <option value="MRT">Mauritania</option>
                                                                        <option value="MUS">Mauritius</option>
                                                                        <option value="MYT">Mayotte</option>
                                                                        <option value="MEX">Mexico</option>
                                                                        <option value="FSM">Micronesia, Federated States of</option>
                                                                        <option value="MDA">Moldova</option>
                                                                        <option value="MCO">Monaco</option>
                                                                        <option value="MNG">Mongolia</option>
                                                                        <option value="MNE">Montenegro</option>
                                                                        <option value="MSR">Montserrat</option>
                                                                        <option value="MAR">Morocco</option>
                                                                        <option value="MOZ">Mozambique</option>
                                                                        <option value="MMR">Myanmar</option>
                                                                        <option value="NAM">Namibia</option>
                                                                        <option value="NRU">Nauru</option>
                                                                        <option value="NPL">Nepal</option>
                                                                        <option value="NLD">Netherlands</option>
                                                                        <option value="ANT">Netherlands Antilles</option>
                                                                        <option value="NCL">New Caledonia</option>
                                                                        <option value="NZL">New Zealand</option>
                                                                        <option value="NIC">Nicaragua</option>
                                                                        <option value="NER">Niger</option>
                                                                        <option value="NGA">Nigeria</option>
                                                                        <option value="NIU">Niue</option>
                                                                        <option value="NFK">Norfolk Island</option>
                                                                        <option value="MNP">Northern Mariana Islands</option>
                                                                        <option value="NOR">Norway</option>
                                                                        <option value="OMN">Oman</option>
                                                                        <option value="PAK">Pakistan</option>
                                                                        <option value="PLW">Palau</option>
                                                                        <option value="PSE">Palestinian Territory, Occupied</option>
                                                                        <option value="PAN">Panama</option>
                                                                        <option value="PNG">Papua New Guinea</option>
                                                                        <option value="PRY">Paraguay</option>
                                                                        <option value="PER">Peru</option>
                                                                        <option value="PHL">Philippines</option>
                                                                        <option value="PCN">Pitcairn</option>
                                                                        <option value="POL">Poland</option>
                                                                        <option value="PRT">Portugal</option>
                                                                        <option value="PRI">Puerto Rico</option>
                                                                        <option value="QAT">Qatar</option>
                                                                        <option value="REU">Réunion</option>
                                                                        <option value="ROU">Romania</option>
                                                                        <option value="RUS">Russian Federation</option>
                                                                        <option value="RWA">Rwanda</option>
                                                                        <option value="BLM">Saint Barthélemy</option>
                                                                        <option value="SHN">Saint Helena</option>
                                                                        <option value="KNA">Saint Kitts and Nevis</option>
                                                                        <option value="LCA">Saint Lucia</option>
                                                                        <option value="MAF">Saint Martin (French part)</option>
                                                                        <option value="SPM">Saint Pierre and Miquelon</option>
                                                                        <option value="VCT">Saint Vincent and the Grenadines</option>
                                                                        <option value="WSM">Samoa</option>
                                                                        <option value="SMR">San Marino</option>
                                                                        <option value="STP">Sao Tome and Principe</option>
                                                                        <option value="SAU">Saudi Arabia</option>
                                                                        <option value="SEN">Senegal</option>
                                                                        <option value="SRB">Serbia</option>
                                                                        <option value="SYC">Seychelles</option>
                                                                        <option value="SLE">Sierra Leone</option>
                                                                        <option value="SGP">Singapore</option>
                                                                        <option value="SVK">Slovakia</option>
                                                                        <option value="SVN">Slovenia</option>
                                                                        <option value="SLB">Solomon Islands</option>
                                                                        <option value="SOM">Somalia</option>
                                                                        <option value="ZAF">South Africa</option>
                                                                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                                        <option value="ESP">Spain</option>
                                                                        <option value="LKA">Sri Lanka</option>
                                                                        <option value="SDN">Sudan</option>
                                                                        <option value="SUR">Suriname</option>
                                                                        <option value="SJM">Svalbard and Jan Mayen</option>
                                                                        <option value="SWZ">Swaziland</option>
                                                                        <option value="SWE">Sweden</option>
                                                                        <option value="CHE">Switzerland</option>
                                                                        <option value="SYR">Syrian Arab Republic</option>
                                                                        <option value="TWN">Taiwan, Province of China</option>
                                                                        <option value="TJK">Tajikistan</option>
                                                                        <option value="TZA">Tanzania, United Republic of</option>
                                                                        <option value="THA">Thailand</option>
                                                                        <option value="TLS">Timor-Leste</option>
                                                                        <option value="TGO">Togo</option>
                                                                        <option value="TKL">Tokelau</option>
                                                                        <option value="TON">Tonga</option>
                                                                        <option value="TTO">Trinidad and Tobago</option>
                                                                        <option value="TUN">Tunisia</option>
                                                                        <option value="TUR">Turkey</option>
                                                                        <option value="TKM">Turkmenistan</option>
                                                                        <option value="TCA">Turks and Caicos Islands</option>
                                                                        <option value="TUV">Tuvalu</option>
                                                                        <option value="UGA">Uganda</option>
                                                                        <option value="UKR">Ukraine</option>
                                                                        <option value="ARE">United Arab Emirates</option>
                                                                        <option value="GBR">United Kingdom</option>
                                                                        <option value="UMI">United States Minor Outlying Islands</option>
                                                                        <option value="URY">Uruguay</option>
                                                                        <option value="UZB">Uzbekistan</option>
                                                                        <option value="VUT">Vanuatu</option>
                                                                        <option value="VEN">Venezuela</option>
                                                                        <option value="VNM">Vietnam</option>
                                                                        <option value="VGB">Virgin Islands, British</option>
                                                                        <option value="VIR">Virgin Islands, U.S.</option>
                                                                        <option value="WLF">Wallis and Futuna</option>
                                                                        <option value="ESH">Western Sahara</option>
                                                                        <option value="YEM">Yemen</option>
                                                                        <option value="ZMB">Zambia</option>
                                                                        <option value="ZWE">Zimbabwe</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </fieldset>
                                                         <fieldset class="my-field m-t-15">
                                                            <legend><b>CONTACT DETAILS</b></legend>
                                                            <div class="row">
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Date Of Birth</label>
                                                                     <input type="text" class="form-control mydatepicker" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Martial Status</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="7">Civil Union</option>
                                                                        <option value="3">Divorced</option>
                                                                        <option value="6">Domestic Partner</option>
                                                                        <option value="8">Fiancé / Fiancée</option>
                                                                        <option value="1">Married</option>
                                                                        <option value="10">Other</option>
                                                                        <option value="5">Separated</option>
                                                                        <option value="2">Single</option>
                                                                        <option value="9">Unknown</option>
                                                                        <option value="4">Widowed</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Gender</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Social Security</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Driver License Number</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Driver License State</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="AK">Alaska</option>
                                                                        <option value="AL">Alabama</option>
                                                                        <option value="AR">Arkansas</option>
                                                                        <option value="AZ">Arizona</option>
                                                                        <option value="CA">California</option>
                                                                        <option value="CO">Colorado</option>
                                                                        <option value="CT">Connecticut</option>
                                                                        <option value="DC">District of Columbia</option>
                                                                        <option value="DE">Delaware</option>
                                                                        <option value="FL">Florida</option>
                                                                        <option value="GA">Georgia</option>
                                                                        <option value="HI">Hawaii</option>
                                                                        <option value="IA">Iowa</option>
                                                                        <option value="ID">Idaho</option>
                                                                        <option value="IL">Illinois</option>
                                                                        <option value="IN">Indiana</option>
                                                                        <option value="KS">Kansas</option>
                                                                        <option value="KY">Kentucky</option>
                                                                        <option value="LA">Louisiana</option>
                                                                        <option value="MA">Massachusetts</option>
                                                                        <option value="MD">Maryland</option>
                                                                        <option value="ME">Maine</option>
                                                                        <option value="MI">Michigan</option>
                                                                        <option value="MN">Minnesota</option>
                                                                        <option value="MO">Missouri</option>
                                                                        <option value="MS">Mississippi</option>
                                                                        <option value="MT">Montana</option>
                                                                        <option value="NC">North Carolina</option>
                                                                        <option value="ND">North Dakota</option>
                                                                        <option value="NE">Nebraska</option>
                                                                        <option value="NH">New Hampshire</option>
                                                                        <option value="NJ">New Jersey</option>
                                                                        <option value="NM">New Mexico</option>
                                                                        <option value="NV">Nevada</option>
                                                                        <option value="NY">New York</option>
                                                                        <option value="OH">Ohio</option>
                                                                        <option value="OK">Oklahoma</option>
                                                                        <option value="OR">Oregon</option>
                                                                        <option value="PA">Pennsylvania</option>
                                                                        <option value="PR">Puerto Rico</option>
                                                                        <option value="RI">Rhode Island</option>
                                                                        <option value="SC">South Carolina</option>
                                                                        <option value="SD">South Dakota</option>
                                                                        <option value="TN">Tennessee</option>
                                                                        <option value="TX">Texas</option>
                                                                        <option value="UT">Utah</option>
                                                                        <option value="VA">Virginia</option>
                                                                        <option value="VT">Vermont</option>
                                                                        <option value="WA">Washington</option>
                                                                        <option value="WI">Wisconsin</option>
                                                                        <option value="WV">West Virginia</option>
                                                                        <option value="WY">Wyoming</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>Contact'S Web Page</label>
                                                                     <input type="text" class="form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>&nbsp;</label>
                                                                     <div class="radio radio-success">
                                                                        <input id="radio1" type="radio">
                                                                        <label for="radio1">  Emergency Contact </label>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix"></div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Industry</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="1">Agriculture/Forestry/Fishing</option>
                                                                        <option value="2">Art/Design/Media</option>
                                                                        <option value="3">Banking/Finance/Real Estate</option>
                                                                        <option value="4">Business/Sales/Office</option>
                                                                        <option value="5">Construction/Energy Trades </option>
                                                                        <option value="6">Disabled</option>
                                                                        <option value="7">Education/Library</option>
                                                                        <option value="8">Engineer/Architect/Science/Math</option>
                                                                        <option value="9">Government/Military</option>
                                                                        <option value="10">Homemaker/House person</option>
                                                                        <option value="11">Information Technology</option>
                                                                        <option value="12">Insurance</option>
                                                                        <option value="13">Legal/Law Enforcement/Security</option>
                                                                        <option value="14">Maintenance/Repair/Housekeeping</option>
                                                                        <option value="15">Manufacturing/Production</option>
                                                                        <option value="16">Medical/Social Services/Religion</option>
                                                                        <option value="18">Personal Care/Service</option>
                                                                        <option value="19">Restaurant/Hotel Services</option>
                                                                        <option value="20">Retired</option>
                                                                        <option value="21">Sports/Recreation</option>
                                                                        <option value="22">Student</option>
                                                                        <option value="23">Travel/Transportation/Warehousing</option>
                                                                        <option value="24">Unemployed</option>
                                                                        <option value="17">Other</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Occupation</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>Preferred Language</label>
                                                                     <select class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="1">Chinese</option>
                                                                        <option value="2">English</option>
                                                                        <option value="3">Spanish</option>
                                                                        <option value="4">French</option>
                                                                        <option value="5">German</option>
                                                                        <option value="6">Italian</option>
                                                                        <option value="7">Japanese</option>
                                                                        <option value="8">Korean</option>
                                                                        <option value="9">Kreyol</option>
                                                                        <option value="10">Portugesse</option>
                                                                        <option value="11">Russian</option>
                                                                        <option value="12">Vietnamese</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="input_fields_wrap3 col-md-12">
                                                                  <label class="pull-left">Phone Numbers</label> <button class="add_field_button3 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add No</button>
                                                                  <div class="clearfix"></div>
                                                                  <div class="row">
                                                                     <div class="col-md-4">
                                                                        <input type="text" class="form-control" placeholder="Phone Number" name="mytext[]">
                                                                     </div>
                                                                     <div class="col-md-3">
                                                                        <select class="form-control">
                                                                           <option value="17">Cell</option>
                                                                           <option value="18">Business Cell</option>
                                                                           <option value="19">Home</option>
                                                                           <option value="57">Work</option>
                                                                           <option value="59">Fax</option>
                                                                           <option value="20">Other</option>
                                                                        </select>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                        <div class="col-md-6  p-0">
                                                                           <div class="form-group">
                                                                              <div class="radio radio-success">
                                                                                 <input id="radio1" type="radio">
                                                                                 <label for="radio1">  Primary Phone </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                        <div class="col-md-6  p-0">
                                                                           <div class="form-group">
                                                                              <div class="checkbox checkbox-success">
                                                                                 <input id="checkbox1" type="checkbox">
                                                                                 <label for="checkbox1">  OPT-OUT </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                                  </div>
                                                               </div>
                                                               <div class=" col-md-12">
                                                                  <label class="pull-left">Email Addresses</label> <button class="add_field_button4 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add Email</button>
                                                                  <div class="clearfix"></div>
                                                                  <div class="row">
                                                                     <div class="input_fields_wrap4">
                                                                        <div class="col-md-4">
                                                                           <input type="text" class="form-control" placeholder="Email Address" name="mytext[]">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                           <select class="form-control">
                                                                              <option value="17">Personal</option>
                                                                              <option value="18">Professional</option>
                                                                              <option value="19">Billing</option>
                                                                              <option value="20">Other</option>
                                                                           </select>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                           <div class="col-md-12  p-0">
                                                                              <div class="form-group">
                                                                                 <div class="radio radio-success">
                                                                                    <input id="radio1" type="radio">
                                                                                    <label for="radio1">  Primary Email </label>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                          
                                                                        </div>
                                                                        <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                        <div class="form-group">
                                                                           <div class="checkbox checkbox-success">
                                                                              <input id="checkbox1" type="checkbox">
                                                                              <label for="checkbox1">  Business Owner </label>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                        <label>Residence Type</label>
                                                                        <select class="form-control">
                                                                           <option value=""></option>
                                                                           <option value="1">Own Home/Condo</option>
                                                                           <option value="2">Own Mobile Home</option>
                                                                           <option value="3">Other</option>
                                                                        </select>
                                                                     </div>
                                                                     <div class="col-md-12">
                                                                        <label>Comments</label>
                                                                        <textarea class="form-control" rows="4" placeholder=""></textarea>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </fieldset>
                                                         <button type="button" class="btn   m-t-10 btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                         <button id="btn22" type="button" class="btn my-button  m-t-10 btn-default btn-xs pull-right m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">ADDRESSES</h2>
                                                   </legend>
                                                   <div class="col-md-12 col-sm-12 text-xs-center text-md-left p-0 div31">
                                                      <button type="button" id="btn31" class="btn btn-success my-button btn-xs pull-right m-b-10">   <i class="fa fa-plus" aria-hidden="true"></i> Add An Address </button>
                                                      <div class="clearfix"></div>
                                                      <div class="table-responsive">
                                                         <table class="table default-table dataTable table-striped m-t-0">
                                                            <thead>
                                                               <tr>
                                                                  <th>ADDRESS</th>
                                                                  <th>ADDRESS TYPE</th>
                                                                  <th>PRIMARY</th>
                                                                  <th>ACTION</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>
                                                                     2690 FL7, Hollywood, FL 33023, United States
                                                                     Hollywood, FL 33023
                                                                  </td>
                                                                  <td>
                                                                     Mailing
                                                                  </td>
                                                                  <td>
                                                                     <div>Yes</div>
                                                                  </td>
                                                                  <td>
                                                                     <a href="" class="btn btn-circle btn-success"><i class="fa fa-pencil"></i></a>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12 div32" style="display:none">
                                                         <div class="row">
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>Street</label>
                                                                  <input type="text" class="form-control" placeholder="">
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>Apt/Suite/Other</label>
                                                                  <input type="text" class="form-control" placeholder="">
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>City</label>
                                                                  <input type="text" class="form-control" placeholder="">
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>State / Province</label>
                                                                  <select class="form-control">
                                                                     <option value=""></option>
                                                                     <option value="AK">Alaska</option>
                                                                     <option value="AL">Alabama</option>
                                                                     <option value="AR">Arkansas</option>
                                                                     <option value="AZ">Arizona</option>
                                                                     <option value="CA">California</option>
                                                                     <option value="CO">Colorado</option>
                                                                     <option value="CT">Connecticut</option>
                                                                     <option value="DC">District of Columbia</option>
                                                                     <option value="DE">Delaware</option>
                                                                     <option value="FL">Florida</option>
                                                                     <option value="GA">Georgia</option>
                                                                     <option value="HI">Hawaii</option>
                                                                     <option value="IA">Iowa</option>
                                                                     <option value="ID">Idaho</option>
                                                                     <option value="IL">Illinois</option>
                                                                     <option value="IN">Indiana</option>
                                                                     <option value="KS">Kansas</option>
                                                                     <option value="KY">Kentucky</option>
                                                                     <option value="LA">Louisiana</option>
                                                                     <option value="MA">Massachusetts</option>
                                                                     <option value="MD">Maryland</option>
                                                                     <option value="ME">Maine</option>
                                                                     <option value="MI">Michigan</option>
                                                                     <option value="MN">Minnesota</option>
                                                                     <option value="MO">Missouri</option>
                                                                     <option value="MS">Mississippi</option>
                                                                     <option value="MT">Montana</option>
                                                                     <option value="NC">North Carolina</option>
                                                                     <option value="ND">North Dakota</option>
                                                                     <option value="NE">Nebraska</option>
                                                                     <option value="NH">New Hampshire</option>
                                                                     <option value="NJ">New Jersey</option>
                                                                     <option value="NM">New Mexico</option>
                                                                     <option value="NV">Nevada</option>
                                                                     <option value="NY">New York</option>
                                                                     <option value="OH">Ohio</option>
                                                                     <option value="OK">Oklahoma</option>
                                                                     <option value="OR">Oregon</option>
                                                                     <option value="PA">Pennsylvania</option>
                                                                     <option value="PR">Puerto Rico</option>
                                                                     <option value="RI">Rhode Island</option>
                                                                     <option value="SC">South Carolina</option>
                                                                     <option value="SD">South Dakota</option>
                                                                     <option value="TN">Tennessee</option>
                                                                     <option value="TX">Texas</option>
                                                                     <option value="UT">Utah</option>
                                                                     <option value="VA">Virginia</option>
                                                                     <option value="VT">Vermont</option>
                                                                     <option value="WA">Washington</option>
                                                                     <option value="WI">Wisconsin</option>
                                                                     <option value="WV">West Virginia</option>
                                                                     <option value="WY">Wyoming</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>County</label>
                                                                  <input type="text" class="form-control" placeholder="">
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>Zip</label>
                                                                  <input type="text" class="form-control" placeholder="">
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>Country</label>
                                                                  <select class="form-control">
                                                                     <option value="USA">United States</option>
                                                                     <option value="AFG">Afghanistan</option>
                                                                     <option value="ALB">Albania</option>
                                                                     <option value="ALA">Aland Islands</option>
                                                                     <option value="DZA">Algeria</option>
                                                                     <option value="ASM">American Samoa</option>
                                                                     <option value="AND">Andorra</option>
                                                                     <option value="AGO">Angola</option>
                                                                     <option value="AIA">Anguilla</option>
                                                                     <option value="ATA">Antarctica</option>
                                                                     <option value="ATG">Antigua and Barbuda</option>
                                                                     <option value="ARG">Argentina</option>
                                                                     <option value="ARM">Armenia</option>
                                                                     <option value="ABW">Aruba</option>
                                                                     <option value="AUS">Australia</option>
                                                                     <option value="AUT">Austria</option>
                                                                     <option value="AZE">Azerbaijan</option>
                                                                     <option value="BHS">Bahamas</option>
                                                                     <option value="BHR">Bahrain</option>
                                                                     <option value="BGD">Bangladesh</option>
                                                                     <option value="BRB">Barbados</option>
                                                                     <option value="BLR">Belarus</option>
                                                                     <option value="BEL">Belgium</option>
                                                                     <option value="BLZ">Belize</option>
                                                                     <option value="BEN">Benin</option>
                                                                     <option value="BMU">Bermuda</option>
                                                                     <option value="BTN">Bhutan</option>
                                                                     <option value="BOL">Bolivia</option>
                                                                     <option value="BIH">Bosnia and Herzegovina</option>
                                                                     <option value="BWA">Botswana</option>
                                                                     <option value="BVT">Bouvet Island</option>
                                                                     <option value="BRA">Brazil</option>
                                                                     <option value="IOT">British Indian Ocean Territory</option>
                                                                     <option value="BRN">Brunei Darussalam</option>
                                                                     <option value="BGR">Bulgaria</option>
                                                                     <option value="BFA">Burkina Faso</option>
                                                                     <option value="BDI">Burundi</option>
                                                                     <option value="KHM">Cambodia</option>
                                                                     <option value="CMR">Cameroon</option>
                                                                     <option value="CAN">Canada</option>
                                                                     <option value="CPV">Cape Verde</option>
                                                                     <option value="CYM">Cayman Islands</option>
                                                                     <option value="CAF">Central African Republic</option>
                                                                     <option value="TCD">Chad</option>
                                                                     <option value="CHL">Chile</option>
                                                                     <option value="CHN">China</option>
                                                                     <option value="CXR">Christmas Island</option>
                                                                     <option value="CCK">Cocos (Keeling) Islands</option>
                                                                     <option value="COL">Colombia</option>
                                                                     <option value="COM">Comoros</option>
                                                                     <option value="COG">Congo</option>
                                                                     <option value="COD">Congo, Democratic Republic of the</option>
                                                                     <option value="COK">Cook Islands</option>
                                                                     <option value="CRI">Costa Rica</option>
                                                                     <option value="CIV">Côte d'Ivoire</option>
                                                                     <option value="HRV">Croatia</option>
                                                                     <option value="CUB">Cuba</option>
                                                                     <option value="CYP">Cyprus</option>
                                                                     <option value="CZE">Czech Republic</option>
                                                                     <option value="DNK">Denmark</option>
                                                                     <option value="DJI">Djibouti</option>
                                                                     <option value="DMA">Dominica</option>
                                                                     <option value="DOM">Dominican Republic</option>
                                                                     <option value="ECU">Ecuador</option>
                                                                     <option value="EGY">Egypt</option>
                                                                     <option value="SLV">El Salvador</option>
                                                                     <option value="GNQ">Equatorial Guinea</option>
                                                                     <option value="ERI">Eritrea</option>
                                                                     <option value="EST">Estonia</option>
                                                                     <option value="ETH">Ethiopia</option>
                                                                     <option value="FLK">Falkland Islands (Malvinas)</option>
                                                                     <option value="FRO">Faroe Islands</option>
                                                                     <option value="FJI">Fiji</option>
                                                                     <option value="FIN">Finland</option>
                                                                     <option value="FRA">France</option>
                                                                     <option value="GUF">French Guiana</option>
                                                                     <option value="PYF">French Polynesia</option>
                                                                     <option value="ATF">French Southern Territories</option>
                                                                     <option value="GAB">Gabon</option>
                                                                     <option value="GMB">Gambia</option>
                                                                     <option value="GEO">Georgia</option>
                                                                     <option value="DEU">Germany</option>
                                                                     <option value="GHA">Ghana</option>
                                                                     <option value="GIB">Gibraltar</option>
                                                                     <option value="GRC">Greece</option>
                                                                     <option value="GRL">Greenland</option>
                                                                     <option value="GRD">Grenada</option>
                                                                     <option value="GLP">Guadeloupe</option>
                                                                     <option value="GUM">Guam</option>
                                                                     <option value="GTM">Guatemala</option>
                                                                     <option value="GGY">Guernsey</option>
                                                                     <option value="GIN">Guinea</option>
                                                                     <option value="GNB">Guinea-Bissau</option>
                                                                     <option value="GUY">Guyana</option>
                                                                     <option value="HTI">Haiti</option>
                                                                     <option value="HMD">Heard Island and McDonald Islands</option>
                                                                     <option value="VAT">Holy See (Vatican City State)</option>
                                                                     <option value="HND">Honduras</option>
                                                                     <option value="HKG">Hong Kong</option>
                                                                     <option value="HUN">Hungary</option>
                                                                     <option value="ISL">Iceland</option>
                                                                     <option value="IND">India</option>
                                                                     <option value="IDN">Indonesia</option>
                                                                     <option value="IRN">Iran, Islamic Republic of</option>
                                                                     <option value="IRQ">Iraq</option>
                                                                     <option value="IRL">Ireland</option>
                                                                     <option value="IMN">Isle of Man</option>
                                                                     <option value="ISR">Israel</option>
                                                                     <option value="ITA">Italy</option>
                                                                     <option value="JAM">Jamaica</option>
                                                                     <option value="JPN">Japan</option>
                                                                     <option value="JEY">Jersey</option>
                                                                     <option value="JOR">Jordan</option>
                                                                     <option value="KAZ">Kazakhstan</option>
                                                                     <option value="KEN">Kenya</option>
                                                                     <option value="KIR">Kiribati</option>
                                                                     <option value="PRK">Korea, Democratic People's Republic of</option>
                                                                     <option value="KOR">Korea, Republic of</option>
                                                                     <option value="KWT">Kuwait</option>
                                                                     <option value="KGZ">Kyrgyzstan</option>
                                                                     <option value="LAO">Lao People's Democratic Republic</option>
                                                                     <option value="LVA">Latvia</option>
                                                                     <option value="LBN">Lebanon</option>
                                                                     <option value="LSO">Lesotho</option>
                                                                     <option value="LBR">Liberia</option>
                                                                     <option value="LBY">Libyan Arab Jamahiriya</option>
                                                                     <option value="LIE">Liechtenstein</option>
                                                                     <option value="LTU">Lithuania</option>
                                                                     <option value="LUX">Luxembourg</option>
                                                                     <option value="MAC">Macao</option>
                                                                     <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                                     <option value="MDG">Madagascar</option>
                                                                     <option value="MWI">Malawi</option>
                                                                     <option value="MYS">Malaysia</option>
                                                                     <option value="MDV">Maldives</option>
                                                                     <option value="MLI">Mali</option>
                                                                     <option value="MLT">Malta</option>
                                                                     <option value="MHL">Marshall Islands</option>
                                                                     <option value="MTQ">Martinique</option>
                                                                     <option value="MRT">Mauritania</option>
                                                                     <option value="MUS">Mauritius</option>
                                                                     <option value="MYT">Mayotte</option>
                                                                     <option value="MEX">Mexico</option>
                                                                     <option value="FSM">Micronesia, Federated States of</option>
                                                                     <option value="MDA">Moldova</option>
                                                                     <option value="MCO">Monaco</option>
                                                                     <option value="MNG">Mongolia</option>
                                                                     <option value="MNE">Montenegro</option>
                                                                     <option value="MSR">Montserrat</option>
                                                                     <option value="MAR">Morocco</option>
                                                                     <option value="MOZ">Mozambique</option>
                                                                     <option value="MMR">Myanmar</option>
                                                                     <option value="NAM">Namibia</option>
                                                                     <option value="NRU">Nauru</option>
                                                                     <option value="NPL">Nepal</option>
                                                                     <option value="NLD">Netherlands</option>
                                                                     <option value="ANT">Netherlands Antilles</option>
                                                                     <option value="NCL">New Caledonia</option>
                                                                     <option value="NZL">New Zealand</option>
                                                                     <option value="NIC">Nicaragua</option>
                                                                     <option value="NER">Niger</option>
                                                                     <option value="NGA">Nigeria</option>
                                                                     <option value="NIU">Niue</option>
                                                                     <option value="NFK">Norfolk Island</option>
                                                                     <option value="MNP">Northern Mariana Islands</option>
                                                                     <option value="NOR">Norway</option>
                                                                     <option value="OMN">Oman</option>
                                                                     <option value="PAK">Pakistan</option>
                                                                     <option value="PLW">Palau</option>
                                                                     <option value="PSE">Palestinian Territory, Occupied</option>
                                                                     <option value="PAN">Panama</option>
                                                                     <option value="PNG">Papua New Guinea</option>
                                                                     <option value="PRY">Paraguay</option>
                                                                     <option value="PER">Peru</option>
                                                                     <option value="PHL">Philippines</option>
                                                                     <option value="PCN">Pitcairn</option>
                                                                     <option value="POL">Poland</option>
                                                                     <option value="PRT">Portugal</option>
                                                                     <option value="PRI">Puerto Rico</option>
                                                                     <option value="QAT">Qatar</option>
                                                                     <option value="REU">Réunion</option>
                                                                     <option value="ROU">Romania</option>
                                                                     <option value="RUS">Russian Federation</option>
                                                                     <option value="RWA">Rwanda</option>
                                                                     <option value="BLM">Saint Barthélemy</option>
                                                                     <option value="SHN">Saint Helena</option>
                                                                     <option value="KNA">Saint Kitts and Nevis</option>
                                                                     <option value="LCA">Saint Lucia</option>
                                                                     <option value="MAF">Saint Martin (French part)</option>
                                                                     <option value="SPM">Saint Pierre and Miquelon</option>
                                                                     <option value="VCT">Saint Vincent and the Grenadines</option>
                                                                     <option value="WSM">Samoa</option>
                                                                     <option value="SMR">San Marino</option>
                                                                     <option value="STP">Sao Tome and Principe</option>
                                                                     <option value="SAU">Saudi Arabia</option>
                                                                     <option value="SEN">Senegal</option>
                                                                     <option value="SRB">Serbia</option>
                                                                     <option value="SYC">Seychelles</option>
                                                                     <option value="SLE">Sierra Leone</option>
                                                                     <option value="SGP">Singapore</option>
                                                                     <option value="SVK">Slovakia</option>
                                                                     <option value="SVN">Slovenia</option>
                                                                     <option value="SLB">Solomon Islands</option>
                                                                     <option value="SOM">Somalia</option>
                                                                     <option value="ZAF">South Africa</option>
                                                                     <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                                     <option value="ESP">Spain</option>
                                                                     <option value="LKA">Sri Lanka</option>
                                                                     <option value="SDN">Sudan</option>
                                                                     <option value="SUR">Suriname</option>
                                                                     <option value="SJM">Svalbard and Jan Mayen</option>
                                                                     <option value="SWZ">Swaziland</option>
                                                                     <option value="SWE">Sweden</option>
                                                                     <option value="CHE">Switzerland</option>
                                                                     <option value="SYR">Syrian Arab Republic</option>
                                                                     <option value="TWN">Taiwan, Province of China</option>
                                                                     <option value="TJK">Tajikistan</option>
                                                                     <option value="TZA">Tanzania, United Republic of</option>
                                                                     <option value="THA">Thailand</option>
                                                                     <option value="TLS">Timor-Leste</option>
                                                                     <option value="TGO">Togo</option>
                                                                     <option value="TKL">Tokelau</option>
                                                                     <option value="TON">Tonga</option>
                                                                     <option value="TTO">Trinidad and Tobago</option>
                                                                     <option value="TUN">Tunisia</option>
                                                                     <option value="TUR">Turkey</option>
                                                                     <option value="TKM">Turkmenistan</option>
                                                                     <option value="TCA">Turks and Caicos Islands</option>
                                                                     <option value="TUV">Tuvalu</option>
                                                                     <option value="UGA">Uganda</option>
                                                                     <option value="UKR">Ukraine</option>
                                                                     <option value="ARE">United Arab Emirates</option>
                                                                     <option value="GBR">United Kingdom</option>
                                                                     <option value="UMI">United States Minor Outlying Islands</option>
                                                                     <option value="URY">Uruguay</option>
                                                                     <option value="UZB">Uzbekistan</option>
                                                                     <option value="VUT">Vanuatu</option>
                                                                     <option value="VEN">Venezuela</option>
                                                                     <option value="VNM">Vietnam</option>
                                                                     <option value="VGB">Virgin Islands, British</option>
                                                                     <option value="VIR">Virgin Islands, U.S.</option>
                                                                     <option value="WLF">Wallis and Futuna</option>
                                                                     <option value="ESH">Western Sahara</option>
                                                                     <option value="YEM">Yemen</option>
                                                                     <option value="ZMB">Zambia</option>
                                                                     <option value="ZWE">Zimbabwe</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>Address Type</label>
                                                                  <select class="form-control">
                                                                     <option value="B">Billing</option>
                                                                     <option value="G">Garage</option>
                                                                     <option value="L">Location/Property</option>
                                                                     <option value="M">Mailing</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>&nbsp;</label>
                                                                  <div class="checkbox checkbox-success">
                                                                     <input id="checkbox1" type="checkbox">
                                                                     <label for="checkbox1">  Primary Address</label>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                               <label>Comments</label>
                                                               <textarea class="form-control" rows="4" placeholder=""></textarea>
                                                            </div>
                                                         </div>
                                                         <button type="button" class="btn  m-t-10 btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                         <button type="button" id="btn32" class="btn my-button  m-t-10 btn-default btn-xs pull-right m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                      </div>
                                                   
												   
												   </div>
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">PERSONAL INFORMATION</h2>
                                                   </legend>
                                                   <div class="div41">
                                                      <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                                         <ul class="px-0 list-unstyled font-new-list">
                                                            <li><b> Salutation : </b></li>
                                                            <li><b> Nick Name : </b></li>
                                                            <li><b> First Name : </b>Fitzroy</li>
                                                            <li><b> Middle Name : </b>Fitzroy</li>
                                                            <li><b>	Last Name : </b>Goode</li>
                                                            <li><b> Date Of Birth : </b>09/09/1970</li>
                                                            <li><b>	Martial Status : </b>Single</li>
                                                            <li><b>	Gender : </b>Female</li>
                                                         </ul>
                                                      </div>
                                                      <div class="col-md-6 col-sm-12 ">
                                                         <ul class="px-0 list-unstyled font-new-list">
                                                            <li><b> Social Security : </b>1234567891</li>
                                                            <li><b>	Preferred Language : </b>English</li>
                                                            <li><b> Residence Type : </b>Own</li>
                                                            <li><b>	Bussiness Owner : </b>No</li>
                                                            <li><b> Industry : </b></li>
                                                            <li><b>	Occupation : </b></li>
                                                            <li><b> Driving License No : </b></li>
                                                            <li><b>	Driving License State : </b></li>
                                                         </ul>
                                                      </div>
                                                      <div class="col-md-12">
                                                         <button type="button" id="btn41" class="btn btn-success my-button btn-xs pull-right">Edit    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                      </div>
                                                   </div>
                                                   <div class="div42" style="display:none;">
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>Salutation</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="Atty.">Atty.</option>
                                                                  <option value="Br.">Br.</option>
                                                                  <option value="Capt.">Capt.</option>
                                                                  <option value="Col.">Col.</option>
                                                                  <option value="Dr.">Dr.</option>
                                                                  <option value="Dr. &amp; Dr.">Dr. &amp; Dr.</option>
                                                                  <option value="Dr. &amp; Mr.">Dr. &amp; Mr.</option>
                                                                  <option value="Dr. &amp; Mrs.">Dr. &amp; Mrs.</option>
                                                                  <option value="Fr.">Fr.</option>
                                                                  <option value="Gen.">Gen.</option>
                                                                  <option value="Honorable">Honorable</option>
                                                                  <option value="Lt.">Lt.</option>
                                                                  <option value="Major">Major</option>
                                                                  <option value="Mr.">Mr.</option>
                                                                  <option value="Mr. &amp; Mr.">Mr. &amp; Mr.</option>
                                                                  <option value="Mr. &amp; Mrs.">Mr. &amp; Mrs.</option>
                                                                  <option value="Mr. &amp; Ms.">Mr. &amp; Ms.</option>
                                                                  <option value="Mrs.">Mrs.</option>
                                                                  <option value="Mrs. &amp; Mrs.">Mrs. &amp; Mrs.</option>
                                                                  <option value="Ms.">Ms.</option>
                                                                  <option value="Ms. &amp; Ms.">Ms. &amp; Ms.</option>
                                                                  <option value="Pres.">Pres.</option>
                                                                  <option value="Prof.">Prof.</option>
                                                                  <option value="Rev.">Rev.</option>
                                                                  <option value="Sr.">Sr.</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>Nick Name</label>
                                                               <input type="text" class="form-control" placeholder="Nick Name">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>First Name</label>
                                                               <input type="text" class="form-control" placeholder="First Name">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Middle Name</label>
                                                               <input type="text" class="form-control" placeholder="Middle Name">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Last Name</label>
                                                               <input type="text" class="form-control" placeholder="Last Name">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Date Of Birth</label>
                                                               <input type="text" class="form-control mydatepicker" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Martial Status</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="7">Civil Union</option>
                                                                  <option value="3">Divorced</option>
                                                                  <option value="6">Domestic Partner</option>
                                                                  <option value="8">Fiancé / Fiancée</option>
                                                                  <option value="1">Married</option>
                                                                  <option value="10">Other</option>
                                                                  <option value="5">Separated</option>
                                                                  <option value="2">Single</option>
                                                                  <option value="9">Unknown</option>
                                                                  <option value="4">Widowed</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Gender</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="1">Male</option>
                                                                  <option value="2">Female</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Social Security</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Preferred Language</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="1">Chinese</option>
                                                                  <option value="2">English</option>
                                                                  <option value="3">Spanish</option>
                                                                  <option value="4">French</option>
                                                                  <option value="5">German</option>
                                                                  <option value="6">Italian</option>
                                                                  <option value="7">Japanese</option>
                                                                  <option value="8">Korean</option>
                                                                  <option value="9">Kreyol</option>
                                                                  <option value="10">Portugesse</option>
                                                                  <option value="11">Russian</option>
                                                                  <option value="12">Vietnamese</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <label>Residence Type</label>
                                                            <select class="form-control">
                                                               <option value=""></option>
                                                               <option value="1">Own Home/Condo</option>
                                                               <option value="2">Own Mobile Home</option>
                                                               <option value="3">Other</option>
                                                            </select>
                                                         </div>
                                                         <div class="clearfix"></div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label></label>
                                                               <div class="checkbox checkbox-success m-0">
                                                                  <input id="checkbox1" type="checkbox">
                                                                  <label for="checkbox1">  Business Owner</label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Industry</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="1">Agriculture/Forestry/Fishing</option>
                                                                  <option value="2">Art/Design/Media</option>
                                                                  <option value="3">Banking/Finance/Real Estate</option>
                                                                  <option value="4">Business/Sales/Office</option>
                                                                  <option value="5">Construction/Energy Trades </option>
                                                                  <option value="6">Disabled</option>
                                                                  <option value="7">Education/Library</option>
                                                                  <option value="8">Engineer/Architect/Science/Math</option>
                                                                  <option value="9">Government/Military</option>
                                                                  <option value="10">Homemaker/House person</option>
                                                                  <option value="11">Information Technology</option>
                                                                  <option value="12">Insurance</option>
                                                                  <option value="13">Legal/Law Enforcement/Security</option>
                                                                  <option value="14">Maintenance/Repair/Housekeeping</option>
                                                                  <option value="15">Manufacturing/Production</option>
                                                                  <option value="16">Medical/Social Services/Religion</option>
                                                                  <option value="18">Personal Care/Service</option>
                                                                  <option value="19">Restaurant/Hotel Services</option>
                                                                  <option value="20">Retired</option>
                                                                  <option value="21">Sports/Recreation</option>
                                                                  <option value="22">Student</option>
                                                                  <option value="23">Travel/Transportation/Warehousing</option>
                                                                  <option value="24">Unemployed</option>
                                                                  <option value="17">Other</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Occupation</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Driver License Number</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Driver License State</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="AK">Alaska</option>
                                                                  <option value="AL">Alabama</option>
                                                                  <option value="AR">Arkansas</option>
                                                                  <option value="AZ">Arizona</option>
                                                                  <option value="CA">California</option>
                                                                  <option value="CO">Colorado</option>
                                                                  <option value="CT">Connecticut</option>
                                                                  <option value="DC">District of Columbia</option>
                                                                  <option value="DE">Delaware</option>
                                                                  <option value="FL">Florida</option>
                                                                  <option value="GA">Georgia</option>
                                                                  <option value="HI">Hawaii</option>
                                                                  <option value="IA">Iowa</option>
                                                                  <option value="ID">Idaho</option>
                                                                  <option value="IL">Illinois</option>
                                                                  <option value="IN">Indiana</option>
                                                                  <option value="KS">Kansas</option>
                                                                  <option value="KY">Kentucky</option>
                                                                  <option value="LA">Louisiana</option>
                                                                  <option value="MA">Massachusetts</option>
                                                                  <option value="MD">Maryland</option>
                                                                  <option value="ME">Maine</option>
                                                                  <option value="MI">Michigan</option>
                                                                  <option value="MN">Minnesota</option>
                                                                  <option value="MO">Missouri</option>
                                                                  <option value="MS">Mississippi</option>
                                                                  <option value="MT">Montana</option>
                                                                  <option value="NC">North Carolina</option>
                                                                  <option value="ND">North Dakota</option>
                                                                  <option value="NE">Nebraska</option>
                                                                  <option value="NH">New Hampshire</option>
                                                                  <option value="NJ">New Jersey</option>
                                                                  <option value="NM">New Mexico</option>
                                                                  <option value="NV">Nevada</option>
                                                                  <option value="NY">New York</option>
                                                                  <option value="OH">Ohio</option>
                                                                  <option value="OK">Oklahoma</option>
                                                                  <option value="OR">Oregon</option>
                                                                  <option value="PA">Pennsylvania</option>
                                                                  <option value="PR">Puerto Rico</option>
                                                                  <option value="RI">Rhode Island</option>
                                                                  <option value="SC">South Carolina</option>
                                                                  <option value="SD">South Dakota</option>
                                                                  <option value="TN">Tennessee</option>
                                                                  <option value="TX">Texas</option>
                                                                  <option value="UT">Utah</option>
                                                                  <option value="VA">Virginia</option>
                                                                  <option value="VT">Vermont</option>
                                                                  <option value="WA">Washington</option>
                                                                  <option value="WI">Wisconsin</option>
                                                                  <option value="WV">West Virginia</option>
                                                                  <option value="WY">Wyoming</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <button type="button" class="btn  btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                      <button type="button" id="btn42" class="btn my-button btn-default btn-xs pull-right  m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                   </div>
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">ACCOUNT INFORMATION</h2>
                                                   </legend>
                                                   <div class="div51">
                                                      <fieldset class="my-field ">
                                                         <legend><b>GENERAL INFO</b></legend>
                                                         <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0 f-l-h">
                                                            <ul class="px-0 list-unstyled font-new-list">
                                                               <li><b> Customer Number : </b> 26-00920</li>
                                                               <li><b>	Agent : </b> Damion A McKenzie</li>
                                                               <li><b> Customer Type : </b> Personal</li>
                                                               <li><b>	Priority : </b> Normal</li>
                                                               <li><b> CSR : </b> Kath Calcaben</li>
                                                               <li><b>Location : </b> Plantation</li>
                                                            </ul>
                                                         </div>
                                                         <div class="col-md-6 col-sm-12 f-l-h">
                                                            <ul class="px-0 list-unstyled font-new-list">
                                                               <li><b> Customer Since : </b> 05/17/2016</li>
                                                               <li><b> Created  By : </b> Reyvie Paz</li>
                                                               <li><b> Customer Source : </b></li>
                                                               <li><b>	Source Detail : </b></li>
                                                            </ul>
                                                         </div>
                                                      </fieldset>
                                                      <button type="button" id="btn51" class="btn btn-success m-t-10 my-button btn-xs pull-right">Edit    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                   </div>
                                                   <div class="div52" style="display:none;">
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>CUSTOMER NUMBER</label>   
                                                               <input name="ClientNumber" type="text"  class="form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>PRIORITY</label>   
                                                               <select  name="CustomerPriorityID" class="form-control">
                                                                  <option value="1">High</option>
                                                                  <option value="3">Low</option>
                                                                  <option value="2">Normal</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="account-info-customer-since">       CUSTOMER SINCE</label> 
                                                               <input name="CustomerSinceString" type="text" class="mydatepicker form-control" >      
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="account-info-agent">AGENT</label>                   
                                                               <select name="AgentID" id="account-info-agent" class="form-control">
                                                                  <option value="2">Damion A McKenzie</option>
                                                                  <option value="2231">Kath Calcaben</option>
                                                                  <option value="659">REYVIE PAZ</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="account-info-csr">        CSR</label>                 
                                                               <select name="CSRID" id="account-info-csr" class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="2">Damion A McKenzie</option>
                                                                  <option value="2231">Kath Calcaben</option>
                                                                  <option value="659">REYVIE PAZ</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="creator">     CREATED BY</label>
                                                               <input name="CreatedByName" type="text" class="form-control" disabled>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-3">
                                                            <div class="form-group">
                                                               <label for="contact-type">     CUSTOMER TYPE</label>
                                                               <div>Personal    </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-3">
                                                            <div class="form-group">
                                                               <label for="account-info-location">     LOCATION</label>            
                                                               <div>Plantation  </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="account-info-client-source">     CUSTOMER SOURCE</label><br>    
                                                               <select name="ClientSourceID" id="account-info-client-source"  class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="32">Access2Care</option>
                                                                  <option value="16">Billboard</option>
                                                                  <option value="17">Bing</option>
                                                                  <option value="42">Bravo's Supermarket Plazza</option>
                                                                  <option value="39">Car Connection</option>
                                                                  <option value="18">Corporate Website</option>
                                                                  <option value="19">Email Campaign</option>
                                                                  <option value="20">Facebook</option>
                                                                  <option value="40">Flexx Fm Comm</option>
                                                                  <option value="43">Fmap</option>
                                                                  <option value="37">FSR Financial Services</option>
                                                                  <option value="21">Google</option>
                                                                  <option value="33">Honda Accord - 2005-Email</option>
                                                                  <option value="22">Lead Generator</option>
                                                                  <option value="23">Linkedln</option>
                                                                  <option value="34">Nemts -Email</option>
                                                                  <option value="35">Online Clutch Insurance</option>
                                                                  <option value="24">Radio Commercial</option>
                                                                  <option value="25">Referral</option>
                                                                  <option value="38">Sunrise Auto MAll</option>
                                                                  <option value="36">Swap Shop</option>
                                                                  <option value="31">The All Law Center</option>
                                                                  <option value="26">TV Commercial</option>
                                                                  <option value="27">Twitter</option>
                                                                  <option value="28">Walk In</option>
                                                                  <option value="30">Yellow Pages</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="account-info-source-detail">     SOURCE DETAIL</label>  
                                                               <input name="SourceDetail" type="text"  class="form-control">   
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <button type="button" class="btn  btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button><button type="button" id="btn52" class="btn my-button btn-default btn-xs pull-right  m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                   </div>
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">LINKED ACCOUNTS</h2>
                                                   </legend>
                                                   <div class="div61">
												   <table class="table default-table dataTable table-striped m-t-0 m-b-0">
                                                            <thead>
                                                               <tr>
                                                                  <th>LINKED ACCOUNT</th>
                                                                  <th>RELATIONSHIP</th>
                                                                
                                                               </tr>
                                                            </thead>
                                                            <tbody><tr>
                                                               <td>
                                                                1CALL24 TRANSPORT
                                                               </td>
                                                               <td>
                                                                  
                                                               </td>
                                                               
                                                         </tbody></table>
                                                 
                                                      <button type="button" id="btn61" class="btn btn-success my-button btn-xs pull-right">Edit    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                   </div>
                                                   <div class="div62" style="display:none">
                                                      <div class="input_fields_wrap5">
                                                         <button class="add_field_button5 btn btn-success btn-xs m-b-10"><i class="fa fa-plus"></i> Add a Linked Account</button>
                                                         <div class="row">
                                                            <div class="col-md-6">
                                                               <div class="form-group">
                                                                  <label>LINKED ACCOUNT</label>   
                                                                  <div class="input-group">
                                                                     <input name="" type="text" class="form-control">   
                                                                     <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                               <div class="form-group">
                                                                  <label>RELATIONSHIP</label>   
                                                                  <input name="" type="text" class="form-control">    
                                                               </div>
                                                            </div>
                                                            <div class="col-md-1 m-t-20">
                                                               <a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">	<button type="button" class="btn  btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                         <button type="button" id="btn62" class="btn my-button btn-default btn-xs pull-right  m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">
                                                      <h2 class="font-17 head-tit">X DATES</h2>
                                                   </legend>
                                                   <div class="div71">
												    <table class="table default-table dataTable table-striped m-t-0 m-b-0">
                                                            <thead>
                                                               <tr>
                                                                  <th>X-DATE <br> EXPIRING PREMIUM</th>
                                                                  <th>LINE OF BUSINESS <br> RELATED POLICY</th>
                                                                 <th>X-DATE DESCRIPTION <br> X-DATE STATUS</th>
																    <th></th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
															<tr>
                                                               <td>
<span class="badge badge-sucess ">10/05/2017</span>
                                                               </td>
                                                               <td>
                                                                  Bond - ERISA
                                                               </td>
                                                               <td>
                                                                  
                                                               </td>
															   <td>
                                                                  <a href="" class="btn btn-success btn-circle"><i class="fa fa-refresh"></i></a>
                                                               </td>
                                                         </tbody></table>
                                                    
                                                      <button type="button" id="btn71" class="btn btn-success m-t-10 my-button btn-xs pull-right"> <i class="fa fa-plus" aria-hidden="true"></i> Add an X-Date</button>
                                                   </div>
                                                   <div class="div72" style="display:none">
                                                      <div class="row">
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>X-DATE</label>   
                                                               <input name="" type="text" class="mydatepicker form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label for="">LINE OF BUSINESS</label>                   
                                                               <select name=""  class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="65">Accident</option>
                                                                  <option value="66">Accidental Death/Dismemberment</option>
                                                                  <option value="132">Agriculture</option>
                                                                  <option value="1">Agriculture Liability</option>
                                                                  <option value="4">Agriculture Package</option>
                                                                  <option value="3">Agriculture Property</option>
                                                                  <option value="2">Agriculture Scheduled &amp; Unscheduled Personal Property</option>
                                                                  <option value="67">Annuity</option>
                                                                  <option value="107">Antique Auto</option>
                                                                  <option value="68">Aviation</option>
                                                                  <option value="7">Boiler &amp; Machinery</option>
                                                                  <option value="9">Boiler and Machinery Small Business Policy</option>
                                                                  <option value="69">Bond</option>
                                                                  <option value="128">Bond - Bail</option>
                                                                  <option value="114">Bond - Bid</option>
                                                                  <option value="121">Bond - Business Services</option>
                                                                  <option value="120">Bond - ERISA</option>
                                                                  <option value="126">Bond - Federal</option>
                                                                  <option value="127">Bond - Fidelity</option>
                                                                  <option value="29">Bond - Fiduciary</option>
                                                                  <option value="115">Bond - License &amp; Permit</option>
                                                                  <option value="125">Bond - Maintenance</option>
                                                                  <option value="116">Bond - Notary Public</option>
                                                                  <option value="123">Bond - Payment</option>
                                                                  <option value="122">Bond - Performance</option>
                                                                  <option value="117">Bond - Probate</option>
                                                                  <option value="118">Bond - Public Official</option>
                                                                  <option value="119">Bond - Regulatory &amp; Tax</option>
                                                                  <option value="124">Bond - Supply</option>
                                                                  <option value="57">Bond - Surety</option>
                                                                  <option value="12">BOP Liability</option>
                                                                  <option value="13">BOP Property</option>
                                                                  <option value="11">Business Owners</option>
                                                                  <option value="70">Cancer Insurance</option>
                                                                  <option value="108">Classic Auto</option>
                                                                  <option value="16">Commercial Articles</option>
                                                                  <option value="5">Commercial Auto</option>
                                                                  <option value="113">Commercial Condos</option>
                                                                  <option value="14">Commercial Fire</option>
                                                                  <option value="36">Commercial Inland Marine</option>
                                                                  <option value="45">Commercial Ocean Marine</option>
                                                                  <option value="18">Commercial Package</option>
                                                                  <option value="50">Commercial Property</option>
                                                                  <option value="20">Commercial Umbrella</option>
                                                                  <option value="24">Computers</option>
                                                                  <option value="106">Condo</option>
                                                                  <option value="17">Contractor's Equipment Floater</option>
                                                                  <option value="71">Contractors Pollution Liability</option>
                                                                  <option value="72">Course of Construction</option>
                                                                  <option value="19">Crime</option>
                                                                  <option value="73">Critical Illness</option>
                                                                  <option value="74">Crop</option>
                                                                  <option value="75">Cyber Liability</option>
                                                                  <option value="76">Data Breach</option>
                                                                  <option value="22">Dental</option>
                                                                  <option value="23">Directors and Officers</option>
                                                                  <option value="21">Dwelling Fire</option>
                                                                  <option value="28">Earthquake</option>
                                                                  <option value="25">Employers Liability</option>
                                                                  <option value="27">Employment Practices Liability</option>
                                                                  <option value="129">Equipment Floater</option>
                                                                  <option value="26">Errors and Omissions</option>
                                                                  <option value="77">Event Liability</option>
                                                                  <option value="130">Excess Flood - Commercial</option>
                                                                  <option value="131">Excess Flood - Personal</option>
                                                                  <option value="78">Excess Liability</option>
                                                                  <option value="54">Farm/Ranch</option>
                                                                  <option value="30">Fine Arts</option>
                                                                  <option value="79">Fishing Vessel</option>
                                                                  <option value="64">Flood - Commercial</option>
                                                                  <option value="31">Flood - Personal</option>
                                                                  <option value="32">Garage and Dealers</option>
                                                                  <option value="80">Garage Keepers Legal Liability</option>
                                                                  <option value="15">General Liability</option>
                                                                  <option value="33">Glass</option>
                                                                  <option value="111">Golf Cart</option>
                                                                  <option value="81">Group Accident</option>
                                                                  <option value="82">Group Critical Illness</option>
                                                                  <option value="83">Group Dental</option>
                                                                  <option value="84">Group Health</option>
                                                                  <option value="85">Group Long Term Disability</option>
                                                                  <option value="86">Group Short Term Disability</option>
                                                                  <option value="87">Group Term Life</option>
                                                                  <option value="88">Group Universal Life</option>
                                                                  <option value="89">Group Whole Life</option>
                                                                  <option value="34">Health</option>
                                                                  <option value="35">Homeowners</option>
                                                                  <option value="90">Hospital Indemnity</option>
                                                                  <option value="8">Installation/Builders Risk</option>
                                                                  <option value="38">Internet Liability</option>
                                                                  <option value="91">Jewelry</option>
                                                                  <option value="39">Kidnap and Ransom</option>
                                                                  <option value="40">Life</option>
                                                                  <option value="41">Liquor Liability</option>
                                                                  <option value="92">Long Term Care</option>
                                                                  <option value="93">Long Term Disability</option>
                                                                  <option value="48">Misc. Professional Liability</option>
                                                                  <option value="42">Mobile Homeowners</option>
                                                                  <option value="43">Motor Carrier</option>
                                                                  <option value="44">Motor Truck Cargo</option>
                                                                  <option value="110">Motorcycle</option>
                                                                  <option value="94">Ocean Marine</option>
                                                                  <option value="109">Off Road Vehicle</option>
                                                                  <option value="6">Personal Auto</option>
                                                                  <option value="37">Personal Inland Marine</option>
                                                                  <option value="95">Personal Liability</option>
                                                                  <option value="49">Personal Package</option>
                                                                  <option value="51">Personal Umbrella</option>
                                                                  <option value="46">Physicians and Surgeons</option>
                                                                  <option value="96">Pollution Liability</option>
                                                                  <option value="47">Professional Liability</option>
                                                                  <option value="52">Recreational Vehicles</option>
                                                                  <option value="105">Renters</option>
                                                                  <option value="53">Scheduled Property</option>
                                                                  <option value="97">Sexual Misconduct Liability</option>
                                                                  <option value="98">Short Term Disability</option>
                                                                  <option value="55">Signs</option>
                                                                  <option value="56">Special Multi-Peril</option>
                                                                  <option value="99">Supplemental Health</option>
                                                                  <option value="100">Term Life</option>
                                                                  <option value="58">Transportation</option>
                                                                  <option value="112">Travel Trailer</option>
                                                                  <option value="59">Truckers</option>
                                                                  <option value="101">Universal Life</option>
                                                                  <option value="60">Valuable Papers</option>
                                                                  <option value="102">Vision</option>
                                                                  <option value="10">Watercraft (Small Boat)</option>
                                                                  <option value="103">Whole life</option>
                                                                  <option value="133">Wind - Commercial</option>
                                                                  <option value="61">Wind - Personal</option>
                                                                  <option value="62">Worker's Compensation</option>
                                                                  <option value="63">Workplace Violence</option>
                                                                  <option value="104">Yacht</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label for="account-info-customer-since">  EXPIRING PREMIUM</label> 
                                                               <input name="" type="text" class=" form-control">      
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="">TERM</label>                   
                                                               <select name="" id="" class="form-control">
                                                                  <option value="A">Annual</option>
                                                                  <option value="S">Semi Annual</option>
                                                                  <option value="Q">Quarterly</option>
                                                                  <option value="M">Monthly</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="">RELATED POLICY</label>                   
                                                               <select name="" id="" class="form-control">
                                                               <option value="A"</option>
                                                               </select>      
                                                            </div>
                                                         </div>
                                                         <div class="col-md-12">
                                                            <div class="form-group">
                                                               <label for="">X-DATE DESCRIPTION</label>  
                                                               <textarea name="" rows="5" type="text" class="form-control"></textarea>  
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <button type="button" class="btn  btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button><button type="button" id="btn52" class="btn my-button btn-default btn-xs pull-right  m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                   </div>
                                             </div>
                                             </fieldset>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                <legend>
                                                   <h2 class="font-17 head-tit">
                                                   <h2 class="font-17 head-tit">EMPLOYERS</h2>
                                                </legend>
                                                <div class="div81">
                                                   	    <table class="table default-table dataTable table-striped m-t-0 m-b-0">
                                                            <thead>
                                                               <tr>
                                                                  <th>COMPANY</th>
                                                                  <th>TITLE</th>
                                                                 <th>EMPLOYED FROM
																    <th>EMPLOYED FROM</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
															<tr>
                                                               <td>
Info System
                                                               </td>
                                                               <td>
                                                               lorem porem
                                                               </td>
                                                               <td>
                                                                  
                                                               </td>
															   <td>
                                                                 
                                                               </td>
                                                         </tbody></table>
                                                   <button type="button" id="btn81" class="m-t-10 btn my-button btn-success btn-xs pull-right">Edit    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                </div>
                                                <div class="row div82" style="display:none">
                                                   <div class="col-md-12 " >
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>COMPANY</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>TITLE</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Street</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Apt/Suite/Other</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>City</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>State / Province</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="AK">Alaska</option>
                                                                  <option value="AL">Alabama</option>
                                                                  <option value="AR">Arkansas</option>
                                                                  <option value="AZ">Arizona</option>
                                                                  <option value="CA">California</option>
                                                                  <option value="CO">Colorado</option>
                                                                  <option value="CT">Connecticut</option>
                                                                  <option value="DC">District of Columbia</option>
                                                                  <option value="DE">Delaware</option>
                                                                  <option value="FL">Florida</option>
                                                                  <option value="GA">Georgia</option>
                                                                  <option value="HI">Hawaii</option>
                                                                  <option value="IA">Iowa</option>
                                                                  <option value="ID">Idaho</option>
                                                                  <option value="IL">Illinois</option>
                                                                  <option value="IN">Indiana</option>
                                                                  <option value="KS">Kansas</option>
                                                                  <option value="KY">Kentucky</option>
                                                                  <option value="LA">Louisiana</option>
                                                                  <option value="MA">Massachusetts</option>
                                                                  <option value="MD">Maryland</option>
                                                                  <option value="ME">Maine</option>
                                                                  <option value="MI">Michigan</option>
                                                                  <option value="MN">Minnesota</option>
                                                                  <option value="MO">Missouri</option>
                                                                  <option value="MS">Mississippi</option>
                                                                  <option value="MT">Montana</option>
                                                                  <option value="NC">North Carolina</option>
                                                                  <option value="ND">North Dakota</option>
                                                                  <option value="NE">Nebraska</option>
                                                                  <option value="NH">New Hampshire</option>
                                                                  <option value="NJ">New Jersey</option>
                                                                  <option value="NM">New Mexico</option>
                                                                  <option value="NV">Nevada</option>
                                                                  <option value="NY">New York</option>
                                                                  <option value="OH">Ohio</option>
                                                                  <option value="OK">Oklahoma</option>
                                                                  <option value="OR">Oregon</option>
                                                                  <option value="PA">Pennsylvania</option>
                                                                  <option value="PR">Puerto Rico</option>
                                                                  <option value="RI">Rhode Island</option>
                                                                  <option value="SC">South Carolina</option>
                                                                  <option value="SD">South Dakota</option>
                                                                  <option value="TN">Tennessee</option>
                                                                  <option value="TX">Texas</option>
                                                                  <option value="UT">Utah</option>
                                                                  <option value="VA">Virginia</option>
                                                                  <option value="VT">Vermont</option>
                                                                  <option value="WA">Washington</option>
                                                                  <option value="WI">Wisconsin</option>
                                                                  <option value="WV">West Virginia</option>
                                                                  <option value="WY">Wyoming</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>County</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Zip</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Country</label>
                                                               <select class="form-control">
                                                                  <option value="USA">United States</option>
                                                                  <option value="AFG">Afghanistan</option>
                                                                  <option value="ALB">Albania</option>
                                                                  <option value="ALA">Aland Islands</option>
                                                                  <option value="DZA">Algeria</option>
                                                                  <option value="ASM">American Samoa</option>
                                                                  <option value="AND">Andorra</option>
                                                                  <option value="AGO">Angola</option>
                                                                  <option value="AIA">Anguilla</option>
                                                                  <option value="ATA">Antarctica</option>
                                                                  <option value="ATG">Antigua and Barbuda</option>
                                                                  <option value="ARG">Argentina</option>
                                                                  <option value="ARM">Armenia</option>
                                                                  <option value="ABW">Aruba</option>
                                                                  <option value="AUS">Australia</option>
                                                                  <option value="AUT">Austria</option>
                                                                  <option value="AZE">Azerbaijan</option>
                                                                  <option value="BHS">Bahamas</option>
                                                                  <option value="BHR">Bahrain</option>
                                                                  <option value="BGD">Bangladesh</option>
                                                                  <option value="BRB">Barbados</option>
                                                                  <option value="BLR">Belarus</option>
                                                                  <option value="BEL">Belgium</option>
                                                                  <option value="BLZ">Belize</option>
                                                                  <option value="BEN">Benin</option>
                                                                  <option value="BMU">Bermuda</option>
                                                                  <option value="BTN">Bhutan</option>
                                                                  <option value="BOL">Bolivia</option>
                                                                  <option value="BIH">Bosnia and Herzegovina</option>
                                                                  <option value="BWA">Botswana</option>
                                                                  <option value="BVT">Bouvet Island</option>
                                                                  <option value="BRA">Brazil</option>
                                                                  <option value="IOT">British Indian Ocean Territory</option>
                                                                  <option value="BRN">Brunei Darussalam</option>
                                                                  <option value="BGR">Bulgaria</option>
                                                                  <option value="BFA">Burkina Faso</option>
                                                                  <option value="BDI">Burundi</option>
                                                                  <option value="KHM">Cambodia</option>
                                                                  <option value="CMR">Cameroon</option>
                                                                  <option value="CAN">Canada</option>
                                                                  <option value="CPV">Cape Verde</option>
                                                                  <option value="CYM">Cayman Islands</option>
                                                                  <option value="CAF">Central African Republic</option>
                                                                  <option value="TCD">Chad</option>
                                                                  <option value="CHL">Chile</option>
                                                                  <option value="CHN">China</option>
                                                                  <option value="CXR">Christmas Island</option>
                                                                  <option value="CCK">Cocos (Keeling) Islands</option>
                                                                  <option value="COL">Colombia</option>
                                                                  <option value="COM">Comoros</option>
                                                                  <option value="COG">Congo</option>
                                                                  <option value="COD">Congo, Democratic Republic of the</option>
                                                                  <option value="COK">Cook Islands</option>
                                                                  <option value="CRI">Costa Rica</option>
                                                                  <option value="CIV">Côte d'Ivoire</option>
                                                                  <option value="HRV">Croatia</option>
                                                                  <option value="CUB">Cuba</option>
                                                                  <option value="CYP">Cyprus</option>
                                                                  <option value="CZE">Czech Republic</option>
                                                                  <option value="DNK">Denmark</option>
                                                                  <option value="DJI">Djibouti</option>
                                                                  <option value="DMA">Dominica</option>
                                                                  <option value="DOM">Dominican Republic</option>
                                                                  <option value="ECU">Ecuador</option>
                                                                  <option value="EGY">Egypt</option>
                                                                  <option value="SLV">El Salvador</option>
                                                                  <option value="GNQ">Equatorial Guinea</option>
                                                                  <option value="ERI">Eritrea</option>
                                                                  <option value="EST">Estonia</option>
                                                                  <option value="ETH">Ethiopia</option>
                                                                  <option value="FLK">Falkland Islands (Malvinas)</option>
                                                                  <option value="FRO">Faroe Islands</option>
                                                                  <option value="FJI">Fiji</option>
                                                                  <option value="FIN">Finland</option>
                                                                  <option value="FRA">France</option>
                                                                  <option value="GUF">French Guiana</option>
                                                                  <option value="PYF">French Polynesia</option>
                                                                  <option value="ATF">French Southern Territories</option>
                                                                  <option value="GAB">Gabon</option>
                                                                  <option value="GMB">Gambia</option>
                                                                  <option value="GEO">Georgia</option>
                                                                  <option value="DEU">Germany</option>
                                                                  <option value="GHA">Ghana</option>
                                                                  <option value="GIB">Gibraltar</option>
                                                                  <option value="GRC">Greece</option>
                                                                  <option value="GRL">Greenland</option>
                                                                  <option value="GRD">Grenada</option>
                                                                  <option value="GLP">Guadeloupe</option>
                                                                  <option value="GUM">Guam</option>
                                                                  <option value="GTM">Guatemala</option>
                                                                  <option value="GGY">Guernsey</option>
                                                                  <option value="GIN">Guinea</option>
                                                                  <option value="GNB">Guinea-Bissau</option>
                                                                  <option value="GUY">Guyana</option>
                                                                  <option value="HTI">Haiti</option>
                                                                  <option value="HMD">Heard Island and McDonald Islands</option>
                                                                  <option value="VAT">Holy See (Vatican City State)</option>
                                                                  <option value="HND">Honduras</option>
                                                                  <option value="HKG">Hong Kong</option>
                                                                  <option value="HUN">Hungary</option>
                                                                  <option value="ISL">Iceland</option>
                                                                  <option value="IND">India</option>
                                                                  <option value="IDN">Indonesia</option>
                                                                  <option value="IRN">Iran, Islamic Republic of</option>
                                                                  <option value="IRQ">Iraq</option>
                                                                  <option value="IRL">Ireland</option>
                                                                  <option value="IMN">Isle of Man</option>
                                                                  <option value="ISR">Israel</option>
                                                                  <option value="ITA">Italy</option>
                                                                  <option value="JAM">Jamaica</option>
                                                                  <option value="JPN">Japan</option>
                                                                  <option value="JEY">Jersey</option>
                                                                  <option value="JOR">Jordan</option>
                                                                  <option value="KAZ">Kazakhstan</option>
                                                                  <option value="KEN">Kenya</option>
                                                                  <option value="KIR">Kiribati</option>
                                                                  <option value="PRK">Korea, Democratic People's Republic of</option>
                                                                  <option value="KOR">Korea, Republic of</option>
                                                                  <option value="KWT">Kuwait</option>
                                                                  <option value="KGZ">Kyrgyzstan</option>
                                                                  <option value="LAO">Lao People's Democratic Republic</option>
                                                                  <option value="LVA">Latvia</option>
                                                                  <option value="LBN">Lebanon</option>
                                                                  <option value="LSO">Lesotho</option>
                                                                  <option value="LBR">Liberia</option>
                                                                  <option value="LBY">Libyan Arab Jamahiriya</option>
                                                                  <option value="LIE">Liechtenstein</option>
                                                                  <option value="LTU">Lithuania</option>
                                                                  <option value="LUX">Luxembourg</option>
                                                                  <option value="MAC">Macao</option>
                                                                  <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                                  <option value="MDG">Madagascar</option>
                                                                  <option value="MWI">Malawi</option>
                                                                  <option value="MYS">Malaysia</option>
                                                                  <option value="MDV">Maldives</option>
                                                                  <option value="MLI">Mali</option>
                                                                  <option value="MLT">Malta</option>
                                                                  <option value="MHL">Marshall Islands</option>
                                                                  <option value="MTQ">Martinique</option>
                                                                  <option value="MRT">Mauritania</option>
                                                                  <option value="MUS">Mauritius</option>
                                                                  <option value="MYT">Mayotte</option>
                                                                  <option value="MEX">Mexico</option>
                                                                  <option value="FSM">Micronesia, Federated States of</option>
                                                                  <option value="MDA">Moldova</option>
                                                                  <option value="MCO">Monaco</option>
                                                                  <option value="MNG">Mongolia</option>
                                                                  <option value="MNE">Montenegro</option>
                                                                  <option value="MSR">Montserrat</option>
                                                                  <option value="MAR">Morocco</option>
                                                                  <option value="MOZ">Mozambique</option>
                                                                  <option value="MMR">Myanmar</option>
                                                                  <option value="NAM">Namibia</option>
                                                                  <option value="NRU">Nauru</option>
                                                                  <option value="NPL">Nepal</option>
                                                                  <option value="NLD">Netherlands</option>
                                                                  <option value="ANT">Netherlands Antilles</option>
                                                                  <option value="NCL">New Caledonia</option>
                                                                  <option value="NZL">New Zealand</option>
                                                                  <option value="NIC">Nicaragua</option>
                                                                  <option value="NER">Niger</option>
                                                                  <option value="NGA">Nigeria</option>
                                                                  <option value="NIU">Niue</option>
                                                                  <option value="NFK">Norfolk Island</option>
                                                                  <option value="MNP">Northern Mariana Islands</option>
                                                                  <option value="NOR">Norway</option>
                                                                  <option value="OMN">Oman</option>
                                                                  <option value="PAK">Pakistan</option>
                                                                  <option value="PLW">Palau</option>
                                                                  <option value="PSE">Palestinian Territory, Occupied</option>
                                                                  <option value="PAN">Panama</option>
                                                                  <option value="PNG">Papua New Guinea</option>
                                                                  <option value="PRY">Paraguay</option>
                                                                  <option value="PER">Peru</option>
                                                                  <option value="PHL">Philippines</option>
                                                                  <option value="PCN">Pitcairn</option>
                                                                  <option value="POL">Poland</option>
                                                                  <option value="PRT">Portugal</option>
                                                                  <option value="PRI">Puerto Rico</option>
                                                                  <option value="QAT">Qatar</option>
                                                                  <option value="REU">Réunion</option>
                                                                  <option value="ROU">Romania</option>
                                                                  <option value="RUS">Russian Federation</option>
                                                                  <option value="RWA">Rwanda</option>
                                                                  <option value="BLM">Saint Barthélemy</option>
                                                                  <option value="SHN">Saint Helena</option>
                                                                  <option value="KNA">Saint Kitts and Nevis</option>
                                                                  <option value="LCA">Saint Lucia</option>
                                                                  <option value="MAF">Saint Martin (French part)</option>
                                                                  <option value="SPM">Saint Pierre and Miquelon</option>
                                                                  <option value="VCT">Saint Vincent and the Grenadines</option>
                                                                  <option value="WSM">Samoa</option>
                                                                  <option value="SMR">San Marino</option>
                                                                  <option value="STP">Sao Tome and Principe</option>
                                                                  <option value="SAU">Saudi Arabia</option>
                                                                  <option value="SEN">Senegal</option>
                                                                  <option value="SRB">Serbia</option>
                                                                  <option value="SYC">Seychelles</option>
                                                                  <option value="SLE">Sierra Leone</option>
                                                                  <option value="SGP">Singapore</option>
                                                                  <option value="SVK">Slovakia</option>
                                                                  <option value="SVN">Slovenia</option>
                                                                  <option value="SLB">Solomon Islands</option>
                                                                  <option value="SOM">Somalia</option>
                                                                  <option value="ZAF">South Africa</option>
                                                                  <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                                  <option value="ESP">Spain</option>
                                                                  <option value="LKA">Sri Lanka</option>
                                                                  <option value="SDN">Sudan</option>
                                                                  <option value="SUR">Suriname</option>
                                                                  <option value="SJM">Svalbard and Jan Mayen</option>
                                                                  <option value="SWZ">Swaziland</option>
                                                                  <option value="SWE">Sweden</option>
                                                                  <option value="CHE">Switzerland</option>
                                                                  <option value="SYR">Syrian Arab Republic</option>
                                                                  <option value="TWN">Taiwan, Province of China</option>
                                                                  <option value="TJK">Tajikistan</option>
                                                                  <option value="TZA">Tanzania, United Republic of</option>
                                                                  <option value="THA">Thailand</option>
                                                                  <option value="TLS">Timor-Leste</option>
                                                                  <option value="TGO">Togo</option>
                                                                  <option value="TKL">Tokelau</option>
                                                                  <option value="TON">Tonga</option>
                                                                  <option value="TTO">Trinidad and Tobago</option>
                                                                  <option value="TUN">Tunisia</option>
                                                                  <option value="TUR">Turkey</option>
                                                                  <option value="TKM">Turkmenistan</option>
                                                                  <option value="TCA">Turks and Caicos Islands</option>
                                                                  <option value="TUV">Tuvalu</option>
                                                                  <option value="UGA">Uganda</option>
                                                                  <option value="UKR">Ukraine</option>
                                                                  <option value="ARE">United Arab Emirates</option>
                                                                  <option value="GBR">United Kingdom</option>
                                                                  <option value="UMI">United States Minor Outlying Islands</option>
                                                                  <option value="URY">Uruguay</option>
                                                                  <option value="UZB">Uzbekistan</option>
                                                                  <option value="VUT">Vanuatu</option>
                                                                  <option value="VEN">Venezuela</option>
                                                                  <option value="VNM">Vietnam</option>
                                                                  <option value="VGB">Virgin Islands, British</option>
                                                                  <option value="VIR">Virgin Islands, U.S.</option>
                                                                  <option value="WLF">Wallis and Futuna</option>
                                                                  <option value="ESH">Western Sahara</option>
                                                                  <option value="YEM">Yemen</option>
                                                                  <option value="ZMB">Zambia</option>
                                                                  <option value="ZWE">Zimbabwe</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>EMPLOYER'S WEB PAGE</label>
                                                               <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Industry</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                                  <option value="1">Agriculture/Forestry/Fishing</option>
                                                                  <option value="2">Art/Design/Media</option>
                                                                  <option value="3">Banking/Finance/Real Estate</option>
                                                                  <option value="4">Business/Sales/Office</option>
                                                                  <option value="5">Construction/Energy Trades </option>
                                                                  <option value="6">Disabled</option>
                                                                  <option value="7">Education/Library</option>
                                                                  <option value="8">Engineer/Architect/Science/Math</option>
                                                                  <option value="9">Government/Military</option>
                                                                  <option value="10">Homemaker/House person</option>
                                                                  <option value="11">Information Technology</option>
                                                                  <option value="12">Insurance</option>
                                                                  <option value="13">Legal/Law Enforcement/Security</option>
                                                                  <option value="14">Maintenance/Repair/Housekeeping</option>
                                                                  <option value="15">Manufacturing/Production</option>
                                                                  <option value="16">Medical/Social Services/Religion</option>
                                                                  <option value="18">Personal Care/Service</option>
                                                                  <option value="19">Restaurant/Hotel Services</option>
                                                                  <option value="20">Retired</option>
                                                                  <option value="21">Sports/Recreation</option>
                                                                  <option value="22">Student</option>
                                                                  <option value="23">Travel/Transportation/Warehousing</option>
                                                                  <option value="24">Unemployed</option>
                                                                  <option value="17">Other</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>Occupation</label>
                                                               <select class="form-control">
                                                                  <option value=""></option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               EMPLOYED FROM									<input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               EMPLOYED TO									<input type="text" class="form-control" placeholder="">
                                                            </div>
                                                         </div>
                                                         <div class="clearfix"></div>
                                                         <div class="input_fields_wrap3 col-md-12">
                                                            <label class="pull-left">Phone Numbers</label> <button class="add_field_button3 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add No</button>
                                                            <div class="clearfix"></div>
                                                            <div class="row">
                                                               <div class="col-md-4">
                                                                  <input type="text" class="form-control" placeholder="Phone Number" name="mytext[]">
                                                               </div>
                                                               <div class="col-md-3">
                                                                  <select class="form-control">
                                                                     <option value="17">Cell</option>
                                                                     <option value="18">Business Cell</option>
                                                                     <option value="19">Home</option>
                                                                     <option value="57">Work</option>
                                                                     <option value="59">Fax</option>
                                                                     <option value="20">Other</option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="col-md-6  p-0">
                                                                     <div class="form-group">
                                                                        <div class="radio radio-success">
                                                                           <input id="radio1" type="radio">
                                                                           <label for="radio1">  Primary Phone </label>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-6  p-0">
                                                                     <div class="form-group">
                                                                        <div class="checkbox checkbox-success">
                                                                           <input id="checkbox1" type="checkbox">
                                                                           <label for="checkbox1">  OPT-OUT </label>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                            </div>
                                                         </div>
                                                         <div class=" col-md-12">
                                                            <label class="pull-left">Email Addresses</label> <button class="add_field_button4 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add Email</button>
                                                            <div class="clearfix"></div>
                                                            <div class="row">
                                                               <div class="input_fields_wrap4">
                                                                  <div class="col-md-4">
                                                                     <input type="text" class="form-control" placeholder="Email Address" name="mytext[]">
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                     <select class="form-control">
                                                                        <option value="17">Personal</option>
                                                                        <option value="18">Professional</option>
                                                                        <option value="19">Billing</option>
                                                                        <option value="20">Other</option>
                                                                     </select>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                     <div class="col-md-6  p-0">
                                                                        <div class="form-group">
                                                                           <div class="radio radio-success">
                                                                              <input id="radio1" type="radio">
                                                                              <label for="radio1">  Primary Email </label>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="col-md-6  p-0">
                                                                        <div class="form-group">
                                                                           <div class="checkbox checkbox-success">
                                                                              <input id="checkbox1" type="checkbox">
                                                                              <label for="checkbox1">  OPT-OUT </label>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                               </div>
                                                               <div class="col-md-12">
                                                                  <label>Comments</label>
                                                                  <textarea class="form-control" rows="4" placeholder=""></textarea>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <button type="button" class="btn   m-t-10 btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                         <button id="btn22" type="button" class="btn my-button  m-t-10 btn-default btn-xs pull-right m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="f_f_w">
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div id="invoice-company-details">
                                                <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">
                                                      <h2 class="font-17 head-tit">SOCIAL MEDIA</h2>
                                                   </legend>
                                                   <div class="div91">
                                                      <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                                         <ul class="px-0 list-unstyled font-new-list">
                                                            <li><b> Facebook : </b></li>
                                                            <li><b> Twitter  : </b></li>
                                                            <li><b> Linedin : </b></li>
                                                            <li><b> Other : </b></li>
                                                         </ul>
                                                      </div>
                                                      <div class="col-md-6 col-sm-12">
                                                         <ul class="px-0 list-unstyled font-new-list">
                                                            <li><b> RSS Feed 1 : </b></li>
                                                            <li><b> RSS Feed 2 : </b></li>
                                                            <li><b> Sms/Texting : </b></li>
                                                            <li><b> Web Page Address : </b></li>
                                                         </ul>
                                                      </div>
                                                      <button type="button"  id="btn91" class="btn btn-success my-button btn-xs pull-right">Edit    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                   </div>
                                                   <div class="div92" style="display:none">
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>Facebook</label>   
                                                               <input name="" type="text" class=" form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>Twitter</label>   
                                                               <input name="" type="text" class=" form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>Linkedln</label>   
                                                               <input name="" type="text" class=" form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label>Other</label>   
                                                               <input name="" type="text" class=" form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>SMS/TEXTING </label>   
                                                               <input name="" type="text" class=" form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>RSS FEED 1 </label>   
                                                               <input name="" type="text" class=" form-control">    
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label>RSS FEED 2 </label>   
                                                               <input name="" type="text" class=" form-control">    
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="input_fields_wrap6">
                                                         <button class="add_field_button6 btn btn-success btn-xs m-b-10"><i class="fa fa-plus"></i>Add Another Web Page</button>
                                                         <div class="clearfix"></div>
                                                         <div class="row">
                                                            <div class="col-md-6">
                                                               <input type="text" class="form-control" placeholder="" name="mytext[]">
                                                            </div>
                                                            <div class="col-md-2"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                         </div>
                                                      </div>
                                                      <button type="button" class="btn  btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button><button type="button" id="btn52" class="btn my-button btn-default btn-xs pull-right  m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
                                                   </div>
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="profile">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-17 c-b">VIEW BY</label>
                                    <select id="select-policy" class="form-control">
									 <option value=""></option>
                                       <option value="policy-list" selected="selected">Policy List</option>
                                       <option value="driver">Drivers</option>
                                       <option value="location">Locations</option>
                                       <option value="vehicle">Vehicles</option>
                                    </select>
                                 </div>
                              </div>
							   <div class="col-sm-12 box" id="policy-list" style="display:block">
                           <h4>Policy List</h4>
                                    <div class="table-responsive">
                                       <table id="" class="table default-table dataTable table-striped m-t-0">
                                          <thead>
                                             <tr>
                                                <th>Effective</th>
                                                <th>Line Of Business</th>
                                                <th>Carrier</th>
                                                <th>Premium</th>
                                                <th>Status</th>
                                                <th>Agent/CSR</th>
                                               
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td><span class="badge badge-success">08/09/2016</span></td>
                                                <td>General Liability</td>
                                                <td>Scottsdale Ins Co (41297)</td>
                                                <td>$920.06</td>
                                                <td><span class="badge badge-primary">Expired</span></td>
                                                <td>Joh Smith</td>


                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
									
									 <h4>Opportunities</h4>
                                    <div class="table-responsive">
                                       <table id="" class="table default-table dataTable table-striped m-t-0">
                                          <thead>
                                             <tr>
                                                <th>Effective</th>
                                                <th>Line Of Business</th>

                                                <th>Prior Policy</th>
                                                <th>Status</th>
                                                <th></th>
                                               
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td><span class="badge badge-success">08/09/2016</span>
												<div class="expdate"><span class="badge badge-default">01/01/2017</span></div>
												</td>
                                                <td><div>General Liability</div>
												
												<div><a href="/Policies/Policy/Details/229">No Description Provided - Personal Auto</a></div>
												</td>
                                                <td></td>
                                                <td><span class="badge badge-primary">Expired</span></td>
                                                <td><button class="btn btn-success btn-circle btn-sm" data-toggle="collapse" data-target="#demo1"><i class="fa fa-plus"></i></button></td>


                                             </tr>
											    <tr  id="demo1" class="collapse">
												<td colspan="6">
												<table class="table default-table dataTable table-striped m-t-0">
												<thead>
												 <th>Carrier</th>
												 <th>MGA / Broker</th>
												 <th>Submission Date</th>
												 <th>Business Type</th>
												 <th>Premium</th>
												 <th>Status</th>
												</thead>
													<tbody>
												<tr>
												 <td>Ocean Harbor Cas Ins Co</td>
												 <td></td>
											    <td><span class="badge badge-primary">12/11/2017</span></td>
												 <td>New Business</td>
												 <td>$1,137.00</td>
												 <td>Quoted</td>
												</tr>
												</tbody>
												</td>
												</table>
											
												
												
												   </tr>
                                          </tbody>
                                       </table>
                                    </div>
                               
                              </div>
							   <div class="col-sm-12  box" id="driver" style="display:none">
                           <h4>Drivers</h4>
                                    <div class="table-responsive">
                                       <table id="" class="table default-table dataTable table-striped m-t-0">
                                          <thead>
                                             <tr>
                                                <th>Driver Name</th>
                                                <th>Driver's License</th>
                                                <th>Date Of Birth</th>
                                                <th>State Licensed</th>
                                                <th>Line Of Business</th>
                                                <th>Writing Carrier</th>
                                                <th>Policy Number</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>John Smith</td>
                                                <td>567567567</td>
                                                <td><span class="badge badge-primary">28/7/1989</span></td>
                                                <td>435AM3445D</td>
                                                <td>Lorem Ipsum</td>
                                                <td>XXXXXX</td>
                                                <td>34547</td>
                                           
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                               
                              </div>
							   <div class="col-sm-12  box" id="location" style="display:none">
                           <h4>Locations</h4>
                                    <div class="table-responsive">
                                       <table id="" class="table default-table dataTable table-striped m-t-0">
                                          <thead>
                                             <tr>
                                                <th>Street Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip Code</th>
                                                <th>Line Of Business</th>
                                                <th>Writing Carrier</th>
                                                <th>Policy Number</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>123 Street New York NY</td>
                                                <td>New York</td>
                                                <td>California</td>
                                                <td>567567</td>
                                                <td>Lorem Ipsum</td>
                                                <td>XXXXXX</td>
                                                <td>34547</td>
                                             
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                               
                              </div>
                              <div class="col-sm-12  box"  id="vehicle" style="display:none">
                           <h4>Vehicles</h4>
                                    <div class="table-responsive">
                                       <table id="" class="table default-table dataTable table-striped m-t-0">
                                          <thead>
                                             <tr>
                                                <th>Year</th>
                                                <th>Make</th>
                                                <th>Model</th>
                                                <th>Vin</th>
                                                <th>Line Of Business</th>
                                                <th>Writing Carrier</th>
                                                <th>Policy Number</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>2016</td>
                                                <td>Bosh</td>
                                                <td>H591</td>
                                                <td>Rst1</td>
                                                <td>Lorem Ipsum</td>
                                                <td>XXXXXX</td>
                                                <td>34547</td>
                                             <tr>
                                                <td>2017</td>
                                                <td>Honda</td>
                                                <td>H591</td>
                                                <td>Bst1</td>
                                                <td>Lorem Ipsum</td>
                                                <td>XXXXXX</td>
                                                <td>34547</td>
                                             </tr>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                               
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="messages">
                           <div class="steamline">

                                 <!-- Nav tabs -->
                                 <div class="card-body f-l-h">
								 <div class="claims div101">
								 <button type="button" id="btn101" class="btn btn-success my-button btn-xs pull-right m-b-10">   <i class="fa fa-plus" aria-hidden="true"></i> Add Claims </button>
                                    <div class="col-md-12"><div class="row">
                                       <div id="invoice-company-details">
									   <fieldset class="my-field">
                                                   <legend>
                                                  <h2 class="font-17 head-tit">CLAIM INFO</h2>
                                                   </legend>
                                         
                                          <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Claim No. : </b></li>
                                                <li><b> Claim Status : </b></li>
                                                <li><b> Claimed Type : </b></li>
                                                <li><b>  Date Opened: </b></li>
                                                <li><b> Date of loss : </b></li>
                                                <li><b> Date of Reported : </b></li>
                                                <li><b> Created By : </b></li>
                                                <li><b> Coverage: </b></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-6 col-sm-12 ">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Date of Closed : </b></li>
                                                <li><b> Disputed Suit Pending : </b></li>
                                                <li><b> Chargeable To Company : </b></li>
                                                <li><b> Amount of Loss : </b></li>
                                                <li><b> Amount Salvaged: </b></li>
                                                <li><b> Amount Reserved : </b></li>
                                                <li><b> Amount Paid : </b></li>
                                             </ul>
                                          </div>
										  </fieldset>
                                       </div>
                                    </div></div>
                                    <hr class="f_f_w">
                                    <div class="col-md-12"><div class="row">
                                       <div id="invoice-company-details">
									   <fieldset class="my-field">
                                                   <legend>
                                                      <h2 class="font-17 head-tit">  <h2 class="font-17 head-tit">LOCATION OF LOSS</h2></h2>
                                                   </legend>
                                        
                                          <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Street : </b></li>
                                                <li><b> City : </b></li>
                                                <li><b> State / Province : </b></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-6 col-sm-12 ">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b>  State/ Province : </b></li>
                                                <li><b> Zip : </b></li>
                                                <li><b> Country : </b></li>
                                             </ul>
                                          </div>
										   </fieldset>
                                       </div>
                                    </div></div>
                                    <hr class="f_f_w">
                                    <div class="col-md-12"><div class="row">
                                       <div id="invoice-company-details">
									   <fieldset class="my-field">
                                                   <legend>
                                                    <h2 class="font-17 head-tit">INSURED VEHICLE</h2>
                                                   </legend>
                         
                                          <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Year : </b></li>
                                                <li><b> Make : </b></li>
                                                <li><b> Model : </b></li>
                                                <li><b> Vin : </b></li>
                                                <li><b> Vehicle Type : </b></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-6 col-sm-12 ">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Country : </b></li>
                                                <li><b> Incident Description : </b></li>
                                                <li><b> Damaged Description : </b></li>
                                                <li><b> Country : </b></li>
                                             </ul>
                                          </div>
										   </fieldset>
                                       </div>
                                    </div></div>
                                    <hr class="f_f_w">
                                    <div class="col-md-12"><div class="row">
                                       <div id="invoice-company-details">
									   <fieldset class="my-field">
                                                   <legend>
                                                                                              <h2 class="font-17 head-tit">CLAIM PARTIES</h2>
                                                   </legend>

                                          <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Full Name : </b></li>
                                                <li><b> Email : </b></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-6 col-sm-12 ">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Phone No : </b></li>
                                                <li><b> Party Type : </b></li>
                                             </ul>
                                          </div>
									</fieldset>
                                       </div>
                                    </div></div>
                                    <hr class="f_f_w">
                                    <div class="col-md-12"><div class="row">
                                       <div id="invoice-company-details">
									   <fieldset class="my-field">
                                                   <legend>
                                                        <h2 class="font-17 head-tit">CLAIM PAYMENTS</h2>
                                                   </legend>
                                        
                                          <div class="col-md-6 col-sm-12 text-xs-center text-md-left p-0">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Date : </b></li>
                                                <li><b> Check Number : </b></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-6 col-sm-12 ">
                                             <ul class="px-0 list-unstyled font-new-list">
                                                <li><b> Amount : </b></li>
                                                <li><b> Comments : </b></li>
                                             </ul>
                                          </div>
										 
										  	</fieldset>
                                       </div> 
										  </div>

                                    </div>
                                 </div>
                              <div class="div102" style="display:none">
							  
							 <fieldset class="my-field">
                                                            <legend><b>CLAIM INFO</b></legend>
                                                            <div class="row">
                                                            
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>CLAIM NUMBER</label>
                                                                     <input type="text" class="form-control" placeholder="CLAIM NUMBER">
                                                                  </div>
                                                               </div>
															   <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>CLAIM STATUS</label>
                                                                     <select class="form-control">
                                                                        <option value="0">Unknown</option><option value="1">Open</option><option value="2">Closed</option><option value="3">Declined</option><option value="4">Reopened</option><option value="5">Subrogated</option><option value="6">Other</option><option value="7">Voided</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>CLAIM TYPE</label>
                                                                     <select class="form-control">
<option value="13">Animal - Maul/Bite/Attack</option><option value="14">Burglary</option><option value="15">Collapse</option><option value="17">Collision</option><option value="16">Comprehensive</option><option value="18">Counterfeit</option><option value="19">Earthquake/Earth Movement</option><option value="20">Explosion</option><option value="1">Fire</option><option value="11">Flood</option><option value="21">Forgery</option><option value="22">Freezing of Plumbing</option><option value="10">Hail</option><option value="2">Hit Animal</option><option value="23">Ice and Snow</option><option value="24">Injury - Electrical Shock</option><option value="25">Injury - Falling Object</option><option value="26">Injury - Machinery</option><option value="27">Injury - Mutilation</option><option value="28">Injury - Overexertion</option><option value="29">Injury - Reaction</option><option value="30">Injury - Slip/Trip/Fall</option><option value="31">Injury - Struck by Object</option><option value="32">Injury - Workplace Violence</option><option value="9">Lightning</option><option value="33">Machinery Breakdown</option><option value="3">Material Damage</option><option value="0">Other</option><option value="34">Riot/Civil Disturbance</option><option value="35">Robbery</option><option value="36">Sinkhole</option><option value="37">Smoke</option><option value="38">Struck Animal/Object</option><option value="39">Theft</option><option value="4">Theft of Vehicle - Full loss</option><option value="5">Theft of Vehicle - Not recovered</option><option value="6">Towing and Labor</option><option value="7">Vandalism/Malicious Mischief</option><option value="40">Water</option><option value="12">Wind/Storm</option><option value="8">Window/Windshield/Glass Breakage</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>DATE OPENED</label>
                                                                     <input type="text" class="mydatepicker form-control" placeholder="MM/DD/YY">
                                                                  </div>
                                                               </div>
															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>DATE OF LOSS</label>
                                                                     <input type="text" class="mydatepicker form-control" placeholder="MM/DD/YY">
                                                                  </div>
                                                               </div>
															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>DATE REPORTED</label>
                                                                     <input type="text" class="mydatepicker form-control" placeholder="MM/DD/YY">
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>CREATED BY</label>
                                                              <div>REYVIE PAZ</div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>COVERAGE</label>
                                                                     <select class="chosen-select-width"  data-placeholder="text">
																	 <option>Accessory Coverage</option>
																	 <option> Accident Forgiveness </option>
																	 </select>
                                                                  </div>
                                                               </div>															   
															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>DATE CLOSED</label>
                                                                     <input type="text" class="mydatepicker form-control" placeholder="MM/DD/YY">
                                                                  </div>
                                                               </div>
															   <div class="col-md-4">
                                                                           <div class="form-group">
                                                                              <div class="checkbox checkbox-success">
                                                                                 <input id="checkbox1" type="checkbox">
                                                                                 <label for="checkbox1">  DISPUTED SUIT PENDING </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
																		
																		<div class="col-md-4">
                                                                           <div class="form-group">
                                                                              <div class="checkbox checkbox-success">
                                                                                 <input id="checkbox1" type="checkbox">
                                                                                 <label for="checkbox1">  Chargeable To Company </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
																		 <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>AMOUNT OF LOSS</label>
                                                                     <input type="text" class=" form-control" placeholder="0.00">
                                                                  </div>
                                                               </div>
															   
															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>AMOUNT SALVAGED</label>
                                                                     <input type="text" class=" form-control" placeholder="0.00">
                                                                  </div>
                                                               </div>
															   
															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>AMOUNT RESERVED</label>
                                                                     <input type="text" class=" form-control" placeholder="0.00">
                                                                  </div>
                                                               </div>
															   
															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>AMOUNT PAID</label>
                                                                     <input type="text" class=" form-control" placeholder="0.00">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </fieldset> 
							   <fieldset class="my-field m-t-10">
                                                            <legend><b>LOCATION OF LOSS</b></legend>
                                                            <div class="row">
                                                            
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>STREET</label>
                                                                     <input type="text" class="form-control" placeholder="STREET">
                                                                  </div>
                                                               </div>
															                                                                  <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>CITY</label>
                                                                     <input type="text" class="form-control" placeholder="CITY">
                                                                  </div>
                                                               </div>
															                                                                  
															   <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>STATE / PROVINCE</label>
                                                                     <select class="form-control">
<option value=""></option><option value="AK">Alaska</option><option value="AL">Alabama</option><option value="AR">Arkansas</option><option value="AZ">Arizona</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DC">District of Columbia</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="IA">Iowa</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="MA">Massachusetts</option><option value="MD">Maryland</option><option value="ME">Maine</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MO">Missouri</option><option value="MS">Mississippi</option><option value="MT">Montana</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="NE">Nebraska</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NV">Nevada</option><option value="NY">New York</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VA">Virginia</option><option value="VT">Vermont</option><option value="WA">Washington</option><option value="WI">Wisconsin</option><option value="WV">West Virginia</option><option value="WY">Wyoming</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
															    <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>ZIP</label>
                                                                     <input type="text" class=" form-control" placeholder="MM/DD/YY">
                                                                  </div>
                                                               </div>
															     <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>COUNTRY</label>
                                                                     <select class="form-control">
																	 <option value="USA">United States</option><option value="AFG">Afghanistan</option><option value="ALB">Albania</option><option value="ALA">Aland Islands</option><option value="DZA">Algeria</option><option value="ASM">American Samoa</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATA">Antarctica</option><option value="ATG">Antigua and Barbuda</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus</option><option value="BEL">Belgium</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia</option><option value="BIH">Bosnia and Herzegovina</option><option value="BWA">Botswana</option><option value="BVT">Bouvet Island</option><option value="BRA">Brazil</option><option value="IOT">British Indian Ocean Territory</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic</option><option value="TCD">Chad</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="CXR">Christmas Island</option><option value="CCK">Cocos (Keeling) Islands</option><option value="COL">Colombia</option><option value="COM">Comoros</option><option value="COG">Congo</option><option value="COD">Congo, Democratic Republic of the</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="CIV">Côte d'Ivoire</option><option value="HRV">Croatia</option><option value="CUB">Cuba</option><option value="CYP">Cyprus</option><option value="CZE">Czech Republic</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic</option><option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea</option><option value="ERI">Eritrea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FLK">Falkland Islands (Malvinas)</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option><option value="FIN">Finland</option><option value="FRA">France</option><option value="GUF">French Guiana</option><option value="PYF">French Polynesia</option><option value="ATF">French Southern Territories</option><option value="GAB">Gabon</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GRD">Grenada</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GGY">Guernsey</option><option value="GIN">Guinea</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="HMD">Heard Island and McDonald Islands</option><option value="VAT">Holy See (Vatican City State)</option><option value="HND">Honduras</option><option value="HKG">Hong Kong</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IDN">Indonesia</option><option value="IRN">Iran, Islamic Republic of</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="IMN">Isle of Man</option><option value="ISR">Israel</option><option value="ITA">Italy</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JEY">Jersey</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="KIR">Kiribati</option><option value="PRK">Korea, Democratic People's Republic of</option><option value="KOR">Korea, Republic of</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan</option><option value="LAO">Lao People's Democratic Republic</option><option value="LVA">Latvia</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LBY">Libyan Arab Jamahiriya</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania</option><option value="LUX">Luxembourg</option><option value="MAC">Macao</option><option value="MKD">Macedonia, the former Yugoslav Republic of</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MHL">Marshall Islands</option><option value="MTQ">Martinique</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MYT">Mayotte</option><option value="MEX">Mexico</option><option value="FSM">Micronesia, Federated States of</option><option value="MDA">Moldova</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar</option><option value="NAM">Namibia</option><option value="NRU">Nauru</option><option value="NPL">Nepal</option><option value="NLD">Netherlands</option><option value="ANT">Netherlands Antilles</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NIU">Niue</option><option value="NFK">Norfolk Island</option><option value="MNP">Northern Mariana Islands</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PLW">Palau</option><option value="PSE">Palestinian Territory, Occupied</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="PCN">Pitcairn</option><option value="POL">Poland</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Réunion</option><option value="ROU">Romania</option><option value="RUS">Russian Federation</option><option value="RWA">Rwanda</option><option value="BLM">Saint Barthélemy</option><option value="SHN">Saint Helena</option><option value="KNA">Saint Kitts and Nevis</option><option value="LCA">Saint Lucia</option><option value="MAF">Saint Martin (French part)</option><option value="SPM">Saint Pierre and Miquelon</option><option value="VCT">Saint Vincent and the Grenadines</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome and Principe</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="SLB">Solomon Islands</option><option value="SOM">Somalia</option><option value="ZAF">South Africa</option><option value="SGS">South Georgia and the South Sandwich Islands</option><option value="ESP">Spain</option><option value="LKA">Sri Lanka</option><option value="SDN">Sudan</option><option value="SUR">Suriname</option><option value="SJM">Svalbard and Jan Mayen</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland</option><option value="SYR">Syrian Arab Republic</option><option value="TWN">Taiwan, Province of China</option><option value="TJK">Tajikistan</option><option value="TZA">Tanzania, United Republic of</option><option value="THA">Thailand</option><option value="TLS">Timor-Leste</option><option value="TGO">Togo</option><option value="TKL">Tokelau</option><option value="TON">Tonga</option><option value="TTO">Trinidad and Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey</option><option value="TKM">Turkmenistan</option><option value="TCA">Turks and Caicos Islands</option><option value="TUV">Tuvalu</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="UMI">United States Minor Outlying Islands</option><option value="URY">Uruguay</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela</option><option value="VNM">Vietnam</option><option value="VGB">Virgin Islands, British</option><option value="VIR">Virgin Islands, U.S.</option><option value="WLF">Wallis and Futuna</option><option value="ESH">Western Sahara</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
															   <div class="col-md-12">
                                                                  <div class="form-group">
                                                                     <label>DESCRIBE LOCATION OF LOSS IF NOT AT A SPECIFIC ADDRESS</label>
                                                                     <input type="text" class="mydatepicker form-control" placeholder="">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </fieldset> 
							    <fieldset class="my-field m-t-10">
                                                            <legend><b>INSURED VEHICLE</b></legend>
                                                            <div class="row">
                                                            
                                                                                                                
															   <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>YEAR</label>
                                                                     <select class="form-control">
<option value=""></option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
															    <div class="col-md-6">
                                                                  <div class="form-group">
                                                                     <label>MAKE</label>
                                                                     <input type="text" class=" form-control" placeholder="MAKE">
                                                                  </div>
                                                               </div>
															   															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>MODEL</label>
                                                                     <input type="text" class=" form-control" placeholder="MODEL">
                                                                  </div>
                                                               </div>
															   															    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>VIN</label>
                                                                     <input type="text" class=" form-control" placeholder="VIN">
                                                                  </div>
                                                               </div>
															   											    <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>VEHICLE TYPE</label>
                                                                     <input type="text" class=" form-control" placeholder="VEHICLE TYPE">
                                                                  </div>
                                                               </div>
															   <div class="col-md-12">
                                                                  <div class="form-group">
                                                                     <label>INCIDENT DESCRIPTION</label>
                                                                     <textarea rows="4" class=" form-control" placeholder=""></textarea>
                                                                  </div>
                                                               </div>
															   	   <div class="col-md-12">
                                                                  <div class="form-group">
                                                                     <label>DAMAGE DESCRIPTION</label>
                                                                     <textarea rows="4" class=" form-control" placeholder=""></textarea>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </fieldset> 
							  <fieldset class="my-field m-t-10">
							  <legend>CLAIM PARTIES</legend><div class="input_fields_wrap7 col-md-12">
                                                                  <button class="add_field_button7 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add Claim Party</button>
																  <div class="clearfix"></div>
							  <div class="row">
                                                                     <div class="col-md-3">
																	  <label>FULL NAME</label>
                                                                        <input type="text" class="form-control" placeholder="FULL NAME" name="mytext[]">
                                                                     </div>
																	  <div class="col-md-3">
																	   <label>PHONE NUMBER</label>
                                                                        <input type="text" class="form-control" placeholder="PHONE NUMBER" name="mytext[]">
                                                                     </div>
																	  <div class="col-md-3">
																	   <label>EMAIL</label>
                                                                        <input type="text" class="form-control" placeholder="EMAIL" name="mytext[]">
                                                                     </div>
                                                                     <div class="col-md-3">
																	 <label>PARTY TYPE</label>
                                                                        <select class="form-control">
                                                                          <option value="0">Claimant</option><option value="1">Adjuster</option><option value="2">Witness</option><option value="3">Injured</option><option value="99">Other</option>
                                                                        </select>
                                                                     </div>
                                                                   
                                                                     <div class="col-md-12"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                                  </div> </div>
							  </fieldset>  
							    <fieldset class="my-field m-t-10">
							  <legend>CLAIM PAYMENTS</legend><div class="input_fields_wrap8 col-md-12">
                                                                  <button class="add_field_button8 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add Claim Payment</button>
																  <div class="clearfix"></div>
							  <div class="row">
                                                                     <div class="col-md-3">
																	  <label>DATE</label>
                                                                        <input type="text" class="form-control" placeholder="MM/DD/YY" name="mytext[]">
                                                                     </div>
																	  <div class="col-md-3">
																	   <label>CHECK NUMBER</label>
                                                                        <input type="text" class="form-control" placeholder="" name="mytext[]">
                                                                     </div>
																	  <div class="col-md-3">
																	   <label>AMOUNT</label>
                                                                        <input type="text" class="form-control" placeholder="" name="mytext[]">
                                                                     </div>
                                                                    <div class="col-md-3">
																	   <label>COMMENTS</label>
                                                                        <input type="text" class="form-control" placeholder="" name="mytext[]">
                                                                     </div>
                                                                   
                                                                     <div class="col-md-12"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                                  </div> </div>
							  </fieldset>  
<button type="button" class="btn my-button btn-success btn-xs pull-right m-t-10">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
<button type="button" id="btn102" class="btn my-button btn-default btn-xs pull-right  m-r-5 m-t-10">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
							  </div>
							  </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="settings">
                           <div class="row ">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-17 c-b">View</label>
                                    <select class="form-control">
                                       <option>Last 30 Day</option>
                                       <option>Last 60 Day</option>
                                       <option>Last 90 Day</option>
                                       <option>All</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-17 c-b">Account</label>
                                    <select class="form-control">
                                       <option>Customer</option>
                                       <option>Carrier Commission</option>
                                       <option>Carrier Premium</option>
                                       <option>Finance Company Premium</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                
                                    <div class="table-responsive">
                                       <table id="myTable" class="table default-table dataTable table-striped m-t-0">
                                          <thead>                                            
                                             <tr>
                                                <th>Transaction Date</th>
                                                <th>Due Date</th>
                                                <th>Description</th>
                                                <th>Policy Number</th>
                                                <th>Due</th>
                                                <th>Received</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td><span class="badge badge-primary">22/11/2016</span></td>
                                                <td><span class="badge badge-default">21/11/2016</span></td>
                                                <td>Lorem Ispem</td>
                                                <td>XXXXXX</td>
                                                <td>434344</td>
                                                <td>400000</td>
                                             </tr>
                                             <tr>
                                                <td><span class="badge badge-primary">12/10/2016</span></td>
                                                <td><span class="badge badge-default">21/10/2016</span></td>
                                                <td>Lorem Ispem</td>
                                                <td>XXXXXX</td>
                                                <td>664344</td>
                                                <td>500000</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="files">
						<div class="row">
                        <div class="col-md-9">
						  <ul class="nav nav-tabs files-view">
                        <li class="tab active">
                           <a href="#list-view" data-toggle="tab" ><i class="fa fa-list"></i></a>
                        </li>
                        <li class="tab">
                           <a href="#grid-view" data-toggle="tab"><i class="fa fa-th"></i></a>
                        </li>
						 <li class="tab">
                           <a href="#carousel-view" data-toggle="tab"><i class="fa fa-file-image-o"></i></a>
                        </li>
					
						
						<li  class="pull-right">
                           <a href="#"  data-toggle="modal" data-target="#myModal"><i class="fa fa-folder-open-o"></i></a>
                        </li>	<li class="pull-right">
                           <a href="#">
						   <label for="file-image" class="m-0"><i class="fa fa-file-o"></i></label>
						   <input type="file" name="file-image" id="file-image" style="display:none;"/>
						   
						   </a>
                        </li>
						</ul>
						<div class="tab-content m-t-0">
						<div class="tab-pane active" id="list-view">
								  <div class="row m-t-20">
							  		  <div class="col-md-6">
									  <h4>Files</h4>
									  </div>
							  <div class="col-md-6">
							  <div class="form-group">
							  <div class="input-group">
							  <input type="text" class="form-control" placeholder="Search"/>
							  <div class="input-group-addon"><i class="fa fa-search"></i></div>
							  </div>
							  </div>
							    </div>
							  </div>
                              <div class="table-responsive">
					
                                 <table id="myTable" class="table default-table dataTable table-striped cursor_pointer bbb m-t-0">
                                    <thead>                                      
                                       <tr>
									      <th>Image</th>
                                          <th>File Name</th>
                                          <th>Date Added</th>
                                          <th>Type</th>
                                          <th>Added By</th>
                                          <th>Policy Number</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr data-toggle="modal" data-target="#file-detail">
									      <td><img src="img/thumbfile-jpg.png" width="24"/></td>
                                          <td><a href="#"tabindex="0">Abc.jpg</a></td>
                                          <td><a href="#" >12/11/2016</a></td>
                                          <td><a href="#">JPG</a></td>
                                          <td><a href="#">REYVIE PAZ</a></td>
                                          <td><a href="#">354657</a></td>
                                       </tr>
     <tr data-toggle="modal" data-target="#file-detail">
									     <td><img src="img/thumbfile-pdf.png" width="24"/></td>
                                          <td>Bonn.jpg</td>
                                          <td>09/11/2016</td>
                                          <td>PNG</td>
                                          <td>ROBB</td>
                                          <td>666657</td>
                                       </tr>
                                           <tr data-toggle="modal" data-target="#file-detail">
									     <td><img src="img/thumbfile-pdf.png" width="24"/></td>
                                          <td>Gh.jpg</td>
                                          <td>12/10/2017</td>
                                          <td>JPG</td>
                                          <td>Haddin PAZ</td>
                                          <td>222657</td>
                                       </tr>
                                       <tr data-toggle="modal" data-target="#file-detail">
									     <td><img src="img/thumbfile-jpg.png" width="24"/></td>
                                          <td>Abc.jpg</td>
                                          <td>12/11/2016</td>
                                          <td>JPG</td>
                                          <td>REYVIE PAZ</td>
                                          <td>354657</td>
                                       </tr>
                                           <tr data-toggle="modal" data-target="#file-detail">
									     <td><img src="img/thumbfile-pdf.png" width="24"/></td>
                                          <td>Bonn.jpg</td>
                                          <td>09/11/2016</td>
                                          <td>PNG</td>
                                          <td>ROBB</td>
                                          <td>666657</td>
                                       </tr>
                                            <tr data-toggle="modal" data-target="#file-detail">
									     <td><img src="img/thumbfile-jpg.png" width="24"/></td>
                                          <td>Gh.jpg</td>
                                          <td>12/10/2017</td>
                                          <td>JPG</td>
                                          <td>Haddin PAZ</td>
                                          <td>222657</td>
                                       </tr>
                                    </tbody>
                                 </table>
                            
                           </div>
</div>
					  
					  <div  class="tab-pane" id="grid-view">
					<div  class="row list-group">
        <div class="item  col-xs-3 col-lg-3 text-center" data-target="#file-grid" data-toggle="modal">
            <div class="thumbnail p-0 br-0">
			<div class="image-main">
                <img class="group list-group-image" src="img/car1.jpg" alt="" />
				<div class="overlay">
				<i class="fa fa-link"></i>
				</div>
				</div>
                <div class="caption">
                 <h5 class="m-0">
                        IMG_0322.JPG</h5>
                  

                </div>
            </div>
        </div>
   <div class="item  col-xs-3 col-lg-3 text-center" data-target="#file-grid" data-toggle="modal">
             <div class="thumbnail p-0 br-0">
			<div class="image-main">
                <img class="group list-group-image" src="img/pdf1.jpg" />
				<div class="overlay">
				<i class="fa fa-link"></i>
				</div>
				</div>
                <div class="caption">
                <h5 class="m-0">
                        IMG_0332.JPG</h5>
                  

                </div>
            </div>
        </div>
		        <div class="item  col-xs-3 col-lg-3 text-center" data-target="#file-grid" data-toggle="modal">
            <div class="thumbnail p-0 br-0">
			<div class="image-main">
                <img class="group list-group-image" src="img/car3.jpg" alt="" />
				<div class="overlay">
				<i class="fa fa-link"></i>
				</div>
				</div>
                <div class="caption">
                    <h5 class="m-0">
                        IMG_4322.JPG</h5>
                  

                </div>
            </div>
        </div>
		 <div class="item  col-xs-3 col-lg-3 text-center"  data-target="#file-grid" data-toggle="modal">
            <div class="thumbnail p-0 br-0">
			<div class="image-main">
                <img class="group list-group-image" src="img/car1.jpg" alt="" />
				<div class="overlay">
				<i class="fa fa-link"></i>
				</div>
				</div>
                <div class="caption">
                 <h5 class="m-0">
                        IMG_0322.JPG</h5>
                  

                </div>
            </div>
        </div>
		       <div class="item  col-xs-3 col-lg-3 text-center"  data-target="#file-grid" data-toggle="modal">
             <div class="thumbnail p-0 br-0">
			<div class="image-main">
                <img class="group list-group-image" src="img/pdf1.jpg" />
				<div class="overlay">
				<i class="fa fa-link"></i>
				</div>
				</div>
                <div class="caption">
                <h5 class="m-0">
                         PDF_43234lrt2.pdf</h5>
                  

                </div>
            </div>
        </div>
		       <div class="item  col-xs-3 col-lg-3 text-center"  data-target="#file-grid" data-toggle="modal">
            <div class="thumbnail p-0 br-0">
			<div class="image-main">
                <img class="group list-group-image" src="img/pdf2.jpg"/>
				<div class="overlay">
				<i class="fa fa-link"></i>
				</div>
				</div>
                <div class="caption">
                    <h5 class="m-0">
                        PDF_4322.pdf</h5>
                  

                </div>
            </div>
        </div>
		
		
		
		 <div class="item  col-xs-3 col-lg-3 text-center"  data-target="#file-grid" data-toggle="modal">
            <div class="thumbnail p-0 br-0">
			<div class="image-main">
                <img class="group list-group-image" src="img/car1.jpg" alt="" />
				<div class="overlay">
				<i class="fa fa-link"></i>
				</div>
				</div>
                <div class="caption">
                 <h5 class="m-0">
                        IMG_5667.JPG</h5>
                  

                </div>
            </div>
        </div>
		      
		       
		</div>
					  </div>
					  
					  
					  <div class="tab-pane" id="carousel-view">
					<div class="owl-carousel owl-theme m-t-20">
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img class="img-responsive thumbnail" src="img/car1.jpg" alt="" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img class="img-responsive thumbnail" src="img/car2.jpg" alt="" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img class="img-responsive thumbnail" src="img/car3.jpg" alt="" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img  class="img-responsive thumbnail" src="img/pdf1.jpg" height="134" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img  class="img-responsive thumbnail"  src="img/pdf2.jpg" height="134" /></div>
	  <div class="item"  data-target="#file-grid" data-toggle="modal">    <img class="img-responsive thumbnail" src="img/car1.jpg" alt="" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img class="img-responsive thumbnail" src="img/car2.jpg" alt="" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img class="img-responsive thumbnail" src="img/car3.jpg" alt="" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img  class="img-responsive thumbnail" src="img/pdf1.jpg" height="134" /></div>
    <div class="item"  data-target="#file-grid" data-toggle="modal">    <img  class="img-responsive thumbnail"  src="img/pdf2.jpg" height="134" /></div>
    
</div>
					  </div>
					 

					 </div>
</div>
<div class="col-md-3">

                       <div class="white-box">
                            <h4 class="box-title">Add Files <i class="fa fa-plus"></i></h3>
                            <label class="input-file" for="input-file-now">Drag & Drop Files  Anywhere</label>
                            <input type="file" id="input-file-now" class="dropify" style="display:none;" /> 	<button class="m-t-10 btn btn-success btn-sm">Continue <i class="fa fa-long-arrow-right"></i></button></div>
						

                    
</div></div>
					  </div>
                     
                  <div class="tab-pane" id="email">
                     <div class="row">
                        <div class="col-sm-12">
                         
                              <div class="table-responsive">
                           <table id="myTable9" class="table table-striped">

                                          <thead>                                            
                                             <tr>
                                                <th>Date / Time</th>
                                                <th>From / To</th>
												<th></th>
                                                <th>Subject / Description</th>
                                                <th>Added By</th>
                                                <th>Date Added</th>
                                               
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td><span class="badge badge-primary">22/11/2016</span> <br> <span class="badge badge-default">03:46:23 PM</span></td>
                                                <td><div><a href=""> sqlinsurance@gmail.com </a></div> <div><a href=""> soundtransportation@aol.com
    Gini.Miller@evhc.net </a></div></td>
	<td>
	<img width="28px" src="img/thumbfile-pdf.png"/>
	</td>
                                                <td><a class="emailSubject" href="javascript:void(0)">coi-sound 001</a></td>
                                                <td>John Smith</td>
                                               
                                                <td><span class="badge badge-primary">22/11/2016</span></td>
                                             </tr>
                                           
                                          </tbody>
                                       </table>
                              </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="acord">
                     <div class="row ">
                        <div class="col-sm-12">
<fieldset class="my-field">
                              <legend><h2 class="font-17 head-tit">ACCORDS FORM</h2></legend>
                              <div class="table-responsive">
                                 <table id="myTable10" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Form Id</th>
                                          <th>Form Name</th>
                                          <th>State</th>
                                          <th>Edition Date</th>
                                          <th>Policy Number</th>
                                          <th>Date Added</th>
                                          <th>Added By</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>4546</td>
                                          <td>Demo</td>
                                          <td>Sydney</td>
                                          <td><span class="badge badge-success">12/10/16</span></td>
                                          <td>456575</td>
                                           <td><span class="badge badge-default">15/11/16</span></td>
                                          <td>Jhon</td>
                                       </tr>
                                       <tr>
                                          <td>2226</td>
                                          <td>Demo</td>
                                          <td>Rome</td>
                                           <td><span class="badge badge-success">11/10/16</span></td>
                                          <td>456575</td>
                                          <td><span class="badge badge-default">02/11/16</span></td>
                                          <td>Robb</td>
                                       </tr>
                                       <tr>
                                          <td>9999</td>
                                          <td>Demo</td>
                                          <td>Brisbin</td>
                                          <td><span class="badge badge-success">2/10/16</span></td>
                                          <td>567575</td>
                                          <td><span class="badge badge-default">08/11/16</span></td>
                                          <td>David</td>
                                       </tr>
                                       <tr>
                                          <td>4546</td>
                                          <td>Demo</td>
                                          <td>Sydney</td>
                                          <td><span class="badge badge-success">19/11/16</span></td>
                                          <td>456575</td>
                                          <td><span class="badge badge-default">11/11/16</span></td>
                                          <td>Jhon</td>
                                       </tr>
                                       <tr>
                                          <td>2226</td>
                                          <td>Demo</td>
                                          <td>Rome</td>
                                           <td><span class="badge badge-success">09/10/16</span></td>
                                          <td>456575</td>
                                       <td><span class="badge badge-default">11/11/16</span></td>
                                          <td>Robb</td>
                                       </tr>
                                       <tr>
                                          <td>9999</td>
                                          <td>Demo</td>
                                          <td>Brisbin</td>
                                            <td><span class="badge badge-success">12/10/16</span></td>
                                          <td>567575</td>
                                            <td><span class="badge badge-default">15/11/16</span></td>
                                          <td>David</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
							  </fieldset>
                           </div>
                        
                        <div class="col-sm-12">
                          
                        <fieldset class="my-field">
                              <legend><h2 class="font-17 head-tit">HISTORY</h2></legend>
                              <div class="table-responsive">
                                 <table id="myTable11" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Form Id</th>
                                          <th>Form Name</th>
                                          <th>State</th>
                                          <th>Edition Date</th>
                                          <th>Policy Number</th>
                                          <th>Delivered On</th>
                                          <th>Delivered By</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>4546</td>
                                          <td>Demo</td>
                                          <td>Sydney</td>
                                        <td><span class="badge badge-success">12/10/16</span></td>
                                          <td>456575</td>
                                         <td><span class="badge badge-default">15/11/16</span></td>
                                          <td>Jhon</td>
                                       </tr>
                                       <tr>
                                          <td>2226</td>
                                          <td>Demo</td>
                                          <td>Rome</td>
                                           <td><span class="badge badge-success">17/10/16</span></td>
                                          <td>456575</td>
                                         <td><span class="badge badge-default">19/11/16</span></td>
                                          <td>Robb</td>
                                       </tr>
                                       <tr>
                                          <td>9999</td>
                                          <td>Demo</td>
                                          <td>Brisbin</td>
                                        <td><span class="badge badge-success">11/10/16</span></td>
                                          <td>567575</td>
                                           <td><span class="badge badge-default">03/11/16</span></td>
                                          <td>David</td>
                                       </tr>
                                       <tr>
                                          <td>4546</td>
                                          <td>Demo</td>
                                          <td>Sydney</td>
  <td><span class="badge badge-success">08/10/16</span></td>
                                          <td>456575</td>
                                       <td><span class="badge badge-default">13/11/16</span></td>
                                          <td>Jhon</td>
                                       </tr>
                                       <tr>
                                          <td>2226</td>
                                          <td>Demo</td>
                                          <td>Rome</td>
                                          <td><span class="badge badge-success">05/10/16</span></td>
                                          <td>456575</td>
                                           <td><span class="badge badge-default">02/11/16</span></td>
                                          <td>Robb</td>
                                       </tr>
                                       <tr>
                                          <td>9999</td>
                                          <td>Demo</td>
                                          <td>Brisbin</td>
                                         <td><span class="badge badge-success">12/10/16</span></td>
                                          <td>567575</td>
  <td><span class="badge badge-default">15/11/16</span></td>
                                          <td>David</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
							  </fieldset>
                           </div>
                        
                     </div>
                  </div>
                  <div class="tab-pane" id="tasks">
                     <div class="row">

                        <div class="col-sm-12">
                        <fieldset class="my-field">
                           <legend>   <h2 class="font-17 head-tit p-0">TASKS</h2>  </legend> 
						   <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="exampleInputEmail1" class="font-17 c-b">Sort By</label>
                              <select class="form-control">
                                 <option>Due Date</option>
                                 <option>Status</option>
                                 <option>Priority</option>                               
                              </select>
                           </div>
                        </div>
						  <div class="col-md-8  switchery-demo m-t-20 pull-right k-v">
                           <input type="checkbox" checked class="js-switch" data-color="#13dafe" /><span class="pull-right m-r-10 m-t-5">Show Completed</span>
                        </div>
						   </div>
                              <div class="table-responsive">
                                 <table id="myTable12" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Image</th>
                                          <th>Subject</th>
                                          <th>Due Date</th>
										  <th>Task<br>Detail</th>
										   <th>Assigned<br>Contact</th>
										    <th>Assigned<br>Employee</th>
											 <th>Created<br>By</th>
											  <th>Priority</th>
											   <th>Status</th>
											    <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><img src="img/task1.png"/></td>
                                          <td>New Business Quote</td>
                                          <td><span class="badge badge-success"> 10/06/2015</span></td>
										    <td>appt need to be submitted, to</td>
                                          <td>ICONOGISTICS LLC</td>
                                          <td>Damion A McKenzie</td>
										    <td>Damion A McKenzie</td>
                                        <td><span class="badge badge-danger">High</span></td>
                                         <td><span class="badge badge-primary">In Progress</span></td>
										  <td><a href="" class="btn m-b-5 btn-info btn-circle btn-sm" title="Mark Completed" data-toggle="tooltip"><i class="fa fa-check"></i></a>
										  <a href="#edit-task" data-toggle="modal"><button  class="btn btn-success m-b-5 btn-circle btn-sm" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></button></a>
										  <a href=""><button  class="btn btn-danger btn-circle btn-sm" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button></a>
										  
										  </td>
                                       </tr>
                                      
                                    </tbody>
                                 </table>
                              </div>
							  </fieldset>
                           </div>
                       
                        <div class="col-sm-12">
                           <fieldset class="my-field">
                           <legend>   <h2 class="font-17 head-tit p-0">NOTES</h2>  </legend> 
						   <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="exampleInputEmail1" class="font-17 c-b">Sort By</label>
                              <select class="form-control">
                                 <option>Date</option>
                                 <option>Created By</option>
                                 <option>Policy</option>                               
                              </select>
                           </div>
                        </div>
						
						   </div>
                              <div class="table-responsive">
                                 <table id="myTable12" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Image</th>
                                          <th>Created By</th>                                          
										  <th>Task Detail</th>
										 
											    <th>Date/Time</th>
												<th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                           <td><img src="img/notes1.png"/></td>
                                          <td>REYVIE PAZ</td>
                                          <td>Called Ana but was routed to VM, left VM message.</td>
										    <td>04/17/2017 12:40 PM</td>
                                        <td>  
										<a href="#add-comment" data-toggle="modal">
											 <button class="btn btn-info m-b-5 btn-circle btn-sm" title="Add Comment" data-toggle="tooltip">
										     <i class="fa fa-comment"></i></button>
											 </button>
										</a>
										  <a href="">
										 <button  class="btn btn-success m-b-5 btn-circle btn-sm" title="Add To Important Notes" data-toggle="tooltip"> <i class="fa fa-sticky-note"></i>	</button>									  
										  </a>
										</td>
                                       </tr>
                                      
                                    </tbody>
                                 </table>
                              </div>
							  </fieldset>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="msg">
                     <div class="row ">
                        <div class="col-sm-12">
                           
                              <h2 class="font-17 head-tit">TEXT MESSAGES</h2>
                              <div class="table-responsive">
                                 <table id="myTable14" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Direction</th>
                                          <th>From No.</th>
                                          <th>To No.</th>
                                          <th>Date/Time</th>
                                          <th>Attachment</th>
                                          <th>Message</th>
                                          <th>Employee</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Outbound</td>
                                          <td>(954) 613-2995</td>
                                          <td>(954) 657-3547</td>
                                          <td>10/05/2017 03:05:48 PM	</td>
                                          <td></td>
                                          <td>Good day!</td>
                                          <td>REYVIE PAZ</td>
                                       </tr>
                                       <tr>
                                          <td>Outbound</td>
                                          <td>(120) 613-2995</td>
                                          <td>(222) 657-3547</td>
                                          <td>10/12/2017 02:05:48 PM	</td>
                                          <td></td>
                                          <td>Thank You!</td>
                                          <td>Robb</td>
                                       </tr>
                                       <tr>
                                          <td>Outbound</td>
                                          <td>(122) 613-2995</td>
                                          <td>(245) 657-3547</td>
                                          <td>10/11/2017 02:05:48 PM	</td>
                                          <td></td>
                                          <td>Thank You!</td>
                                          <td>jhon</td>
                                       </tr>
                                       <tr>
                                          <td>Outbound</td>
                                          <td>(954) 613-2995</td>
                                          <td>(954) 657-3547</td>
                                          <td>10/05/2017 03:05:48 PM	</td>
                                          <td></td>
                                          <td>Good day!</td>
                                          <td>REYVIE PAZ</td>
                                       </tr>
                                       <tr>
                                          <td>Outbound</td>
                                          <td>(120) 613-2995</td>
                                          <td>(222) 657-3547</td>
                                          <td>10/12/2017 02:05:48 PM	</td>
                                          <td></td>
                                          <td>Thank You!</td>
                                          <td>Robb</td>
                                       </tr>
                                       <tr>
                                          <td>Outbound</td>
                                          <td>(122) 613-2995</td>
                                          <td>(245) 657-3547</td>
                                          <td>10/11/2017 02:05:48 PM	</td>
                                          <td></td>
                                          <td>Thank You!</td>
                                          <td>jhon</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           
                        </div>
                     </div>
                  </div>
                
                  <div class="tab-pane" id="logs">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="exampleInputEmail1" class="font-17 c-b">Category</label>
                              <select class="form-control">
                                 <option>All</option>
                                 <option>ACORD Form</option>
                                 <option>Claim</option>
                                 <option>Communication</option>
                                 <option>Contact</option>
                                 <option>eSignature</option>
                                 <option>File</option>
                                 <option>Financial</option>
                                 <option>Note</option>
                                 <option>Policy</option>
                                 <option>Quote</option>
                                 <option>Task</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="exampleInputEmail1" class="font-17 c-b">Sub Category</label>
                              <select class="form-control">
                                 <option>None</option>
                              </select>
                           </div>
                        </div>
						 <div class="col-md-4 m-t-20">
						 <div class="form-group m-t-10">
						 <button data-target="#export-file" data-toggle="modal" class="btn btn-success pull-right">Export</button>
						 </div>
						  </div>
                        <div class="col-sm-12">
                         
                              <div class="table-responsive">
                                 <table id="myTable15" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th>Date</th>
                                          <th>Time</th>
                                          <th>User</th>
                                          <th>Description</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>22/11/2016</td>
                                          <td>9.40</td>
                                          <td>Jhon</td>
                                          <td>	
	
Document pdf2.jpg has been deleted</td>
                                       </tr>
                                       <tr>
                                          <td>12/10/2016</td>
                                          <td>10.52</td>
                                          <td>Robb</td>
                                          <td>	
	
Document pdf2.jpg has been deleted</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div></div>  <footer class="footer t-a-c">
            © 2017 All Rights Reserved | Designed By Indi IT Solutions
         </footer>
                  </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog  modal-sm" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Enter Folder Name</h4>
               </div>
               <div class="modal-body">
                  <label> Enter Folder Name</label>
                  <input type="text" class="form-control">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
               </div>
            </div>
         </div>
       
      </div>
      </div>
	  
	  <div id="file-detail" class="modal fade list-files" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     
      <div class="modal-body">  <button type="button" class="close" data-dismiss="modal">&times;</button>

 <div class='row'><div class='col-md-12 for_context'>
                                             <div class='col-md-6'>
                                             <div class='for_list'>
                                             <ul>
                                             <li><a href='#' >View/Print</a></li>
                                             <li><a href='#'>Preview</a></li>
                                             <li><a href='#'>Quick Send</a></li>
                                             <li class="dropdown"><a href='#' class="dropdown-toggle" type="button" data-toggle="dropdown">e-Sign
											  <span class="caret pull-right"></span></button></a>
  <ul class="dropdown-menu">
    <li><a href="#">InsureSign</a></li>

  </ul>
											 
											 </li>
                                             <li><a href='#'>Edit</a></li>
                                             <li><a href='#'>Add Folder</a></li>
                                             <li><a href='#'>Set As Avatar</a></li>
                                             <li><a href='#'>Delete</a></li>
                                             </ul>
                                             </div>
                                             </div>
                                             <div class='col-md-6'>
                                             <div class='for_right_file'>
                                             <img src='../plugins/images/users/DownloadQuickFile.jpg' alt='user-img'>
                                             </div>
                                             </div>
                                             </div>
                                             </div></div>

   
    </div>

  </div>
</div>

  <div id="file-grid" class="modal fade list-files" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
     
      <div class="modal-body">  <button type="button" class="close" data-dismiss="modal">&times;</button>

 <div class='row'><div class='col-md-12 for_context'>

                                             <div class='for_list'>
                                             <ul>
                                             <li><a href='#' >View/Print</a></li>
                                             <li><a href='#'>Preview</a></li>
                                             <li><a href='#'>Quick Send</a></li>
                                             <li class="dropdown"><a href='#' class="dropdown-toggle" type="button" data-toggle="dropdown">e-Sign
											  <span class="caret pull-right"></span></button></a>
											  <ul class="dropdown-menu">
												<li><a href="#">InsureSign</a></li>

											  </ul>											 
											 </li>
                                             <li><a href='#'>Edit</a></li>
                                             <li><a href='#'>Add Folder</a></li>
                                             <li><a href='#'>Set As Avatar</a></li>
                                             <li><a href='#'>Delete</a></li>
                                             </ul>
                                            
                                             </div>
                                             
                                             </div>
                                             </div></div>

   
    </div>

  </div>
</div>
      <div class="modal fade" id="export-file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">EXPORT</h4>
               </div>
               <div class="modal-body">
			   <p>Enter the email address(es) that you would like to send this contact history to. Separate recipients with a comma or a semi-colon.</p>
                <div class="form-group">
				<label>Recipients</label>
                  <textarea rows="5" class="form-control"></textarea>
               </div>
			    </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">OK <i class="fa fa-pencil"></i></button>
               </div>
            </div>
         </div>
       
      </div>
      </div>
	  
	        <div class="modal fade" id="add-comment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">ADD COMMENT</h4>
               </div>
               <div class="modal-body">
			
                <div class="form-group">
				<label>Write A Comment About This Contact</label>
                  <textarea rows="5" class="form-control"></textarea>
               </div>
			   <div class="checkbox checkbox-success">
                                            <input id="checkbox33" type="checkbox">
                                            <label for="checkbox33"> Create Task</label>
                                        </div> 
			    </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">Add Comment <i class="fa fa-plus"></i></button>
               </div>
            </div>
         </div>
       
      </div>
      
<div class="modal fade" id="edit-task" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">EDIT TASK</h4>
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
      </div>
	  <div class="modal fade" id="policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background:rgba(0,0,0,0.09)">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Policies</h4>
               </div>
               <div class="modal-body">
			 <table id="myTable" class="table default-table dataTable table-striped m-t-0">
                                          <thead>                                            
                                             <tr>
                                              <th> <div class="checkbox checkbox-info">
                                        <input id="checkbox31" type="checkbox">
										 <label for="checkbox31"></label>
                                        </div>  </th>
											  
											 

                                                <th>Policy Number</th>
                                                 <th>Line Of Business</th>
                                                <th>Effective</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
<td>                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox33" type="checkbox"> <label for="checkbox33"></label>
                                        </div>   
										
										</td>
                                                <td>MHKY-01</td>
                                                <td>General Liability</td>
                                                <td><span class="badge badge-primary">22/11/2016</span></td>
                                              
                                             </tr>
                                             <tr><td>                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox34" type="checkbox">  <label for="checkbox34"></label>
                                        </div>   
										
										</td>

                                                <td>MHKY-01</td>
                                                <td>General Liability</td>
                                                <td><span class="badge badge-primary">22/11/2016</span></td>
                                              
                                             </tr>
                                          </tbody>
                                       </table>
			    </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">OK <i class="fa fa-pencil"></i></button>
               </div>
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
      <script src="assets/admin/js/main.js"></script>
	    <script src="assets/admin/js/owl.carousel.js"></script>
		<script>
		
		$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
		</script>
      <script src="assets/admin/plugins/components/switchery/dist/switchery.min.js"></script>
      <script src="assets/admin/js/jquery.slimscroll.js"></script>
      <script src="assets/admin/js/waves.js"></script>
      <script src="assets/admin/js/sidebarmenu.js"></script>
      <script src="assets/admin/js/custom.js"></script>
      <script src="assets/admin/plugins/components/chartist-js/dist/chartist.min.js"></script>
      <script src="assets/admin/plugins/components/sparkline/jquery.sparkline.min.js"></script>
      <script src="assets/admin/plugins/components/sparkline/jquery.charts-sparkline.js"></script>
      <script src="assets/admin/plugins/components/knob/jquery.knob.js"></script>
      <script src="assets/admin/plugins/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
      <script src="assets/admin/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>

      <script src="assets/admin/plugins/components/datatables/jquery.dataTables.min.js"></script>
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
    $(function() {
        $('#myTable9 , #myTable10 , #myTable11 , #myTable12 , #myTable13 , #myTable14 , #myTable15').DataTable();

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
      <!-- start - This is for export functionality only -->
      <script>
         jQuery(document).ready(function() {
             // Switchery
             var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
             $('.js-switch').each(function() {
                 new Switchery($(this)[0], $(this).data());
             });
             // For select 2
             $(".select2").select2();
             $('.selectpicker').selectpicker();
             //Bootstrap-TouchSpin
             $(".vertical-spin").TouchSpin({
                 verticalbuttons: true,
                 verticalupclass: 'ti-plus',
                 verticaldownclass: 'ti-minus'
             });
             var vspinTrue = $(".vertical-spin").TouchSpin({
                 verticalbuttons: true
             });
             if (vspinTrue) {
                 $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
             }
             $("input[name='tch1']").TouchSpin({
                 min: 0,
                 max: 100,
                 step: 0.1,
                 decimals: 2,
                 boostat: 5,
                 maxboostedstep: 10,
                 postfix: '%'
             });
             $("input[name='tch2']").TouchSpin({
                 min: -1000000000,
                 max: 1000000000,
                 stepinterval: 50,
                 maxboostedstep: 10000000,
                 prefix: '$'
             });
             $("input[name='tch3']").TouchSpin();
             $("input[name='tch3_22']").TouchSpin({
                 initval: 40
             });
             $("input[name='tch5']").TouchSpin({
                 prefix: "pre",
                 postfix: "post"
             });
         
         });
      </script>
      <script>
         jQuery(document).ready(function() {
             // Switchery
             var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
             $('.js-switch').each(function() {
                 new Switchery($(this)[0], $(this).data());
             });
             // For select 2
             $(".select2").select2();
             $('.selectpicker').selectpicker();
             //Bootstrap-TouchSpin
             $(".vertical-spin").TouchSpin({
                 verticalbuttons: true,
                 verticalupclass: 'ti-plus',
                 verticaldownclass: 'ti-minus'
             });
             var vspinTrue = $(".vertical-spin").TouchSpin({
                 verticalbuttons: true
             });
             if (vspinTrue) {
                 $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
             }
             $("input[name='tch1']").TouchSpin({
                 min: 0,
                 max: 100,
                 step: 0.1,
                 decimals: 2,
                 boostat: 5,
                 maxboostedstep: 10,
                 postfix: '%'
             });
             $("input[name='tch2']").TouchSpin({
                 min: -1000000000,
                 max: 1000000000,
                 stepinterval: 50,
                 maxboostedstep: 10000000,
                 prefix: '$'
             });
             $("input[name='tch3']").TouchSpin();
             $("input[name='tch3_22']").TouchSpin({
                 initval: 40
             });
             $("input[name='tch5']").TouchSpin({
                 prefix: "pre",
                 postfix: "post"
             });
         
         });
      </script>
    
      <!--Style Switcher -->
	  	   <script src="assets/admin/plugins/components/clockpicker/dist/jquery-clockpicker.min.js"></script>
      <script src="assets/admin/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script>
         $(function() {
         
         
            $('#myTable , #myTable1 , #myTable2 , #myTable3 , #myTable4 , #myTable5 , #myTable6 , #myTable7 , #myTable8  ').DataTable({			
         	oLanguage: {
           sSearch: "SEARCH"
         	}		
         });
		 });
           
      </script>
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