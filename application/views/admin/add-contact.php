
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
<title>Add  Contact</title>
<!-- ===== Bootstrap CSS ===== -->
<link href="assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- ===== Plugin CSS ===== -->
<link href="assets/admin/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/admin/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/admin/css/editor.css">
<link href="assets/admin/css/animate.css" rel="stylesheet">
<!-- ===== Custom CSS ===== -->
<link href="assets/admin/css/style.css" rel="stylesheet">
<!-- ===== Color CSS ===== -->
<link href="assets/admin/css/colors/default.css" id="theme" rel="stylesheet">
<link rel="stylesheet" href="assets/admin/css/chosen.css">
<link rel="stylesheet" href="assets/admin/css/bootstrap-tagsinput.css">
</head>
<body class="">
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
<!-- ===== Page-Content ===== -->
<div class="page-wrapper">

<!-- ===== Page-Container ===== -->
<div class="container-fluid">
<div class="col-md-12 col-lg-12 col-xs-12 for_padd">
<div class="white-box">
<h3 class="box-title m-b-0 m-b-10 m-t-0">Add Contact</h3>

<section>
<div class="wizard">

<ul class="nav nav-wizard">
<li class="active">
<a href="#step1" data-toggle="tab" aria-expanded="true">New Contact</a>
</li>
<li class="disabled">
<a href="#step2" data-toggle="tab" aria-expanded="false">Basic Info</a>
</li>

<li class="">
<a href="#step3" data-toggle="tab" aria-expanded="false">Business Contacts</a>
</li>

<li class="disabled">
<a href="#step4" data-toggle="tab" aria-expanded="false">Addresses</a>
</li>

<li class="disabled">
<a href="#step5" data-toggle="tab" aria-expanded="false">Business Information</a>
</li>

<li class="disabled">
<a href="#step6" data-toggle="tab" aria-expanded="false">Account Information</a>
</li>

<li class="disabled">
<a href="#step7" data-toggle="tab" aria-expanded="false">Linked Accounts</a>
</li>

<li class="disabled">
<a href="#step8" data-toggle="tab" aria-expanded="false">X-Date's</a>
</li>
<li class="disabled">
<a href="#step9" data-toggle="tab" aria-expanded="false">Employees</a>
</li>
<li class="disabled">
<a href="#step10" data-toggle="tab">Social Media</a>
</li>
</ul>


<form>
<div class="tab-content m-t-15">
<div class="tab-pane active" id="step1">
<div class="col-md-12">
<div class="row">
<fieldset class="my-field">
<legend>   <h3 class="box-title m-b-0 ">ADDING A NEW CONTACT</h3> </legend>
<div class="row">                   
<div class="col-md-12">

<p>In the fields below, you will select the type and status for the contact being added as well as choose the location to which this contact will be assigned. Be sure to give this contact a name so they can be easily identified.</p>
<div class="row"> 
<div class="col-md-4">

<div class="form-group">
<label>CONTACT TYPE</label>

<select class="form-control selec" id="sle">
<option value="Customers">Customers</option>
<option value="Prospects">Prospects</option>
<option id="carri" value="Carriers">Carriers</option>
<option value="MGAs">MGAs</option>
<option value="Cert Holders">Cert Holders</option>
<option value="Lienholders">Lienholders</option>
<option value="Finance Companies">Finance Companies</option>
<option value="Vendors">Vendors</option>
<option value="Employees">Employees</option>
</select>
</div>

</div>
<div class="col-md-4 div1">

<div class="form-group">
<label>CONTACT TYPE</label>
<select class="form-control select2" id="baba">
<option id="comer2" value="Personal" selected="selected">Personal</option>
<option id="comer" value="Commercial">Commercial</option>
</select>
</div>

</div>

<div class="col-md-4">

<div class="form-group">
<label>CUSTOMER STATUS</label>

<select class="form-control">
   <option value="Active" selected="selected">Active</option><option value="Inactive">Inactive</option>
</select>
     </div>

</div>
</div>




</div>
</div>              

</fieldset>


<fieldset class="my-field m-t-10">
<legend>   <h3 class="box-title m-b-0 div9">LOCATION AND NAME</h3> </legend>
<div class="row">                   
<div class="col-md-12">
<form class="m-b-20"> 

<div class="row"> 
<div class="col-md-4 div5">

<div class="form-group">
<label>LOCATION</label>

<select class="form-control">
 <option value="1" selected="selected">Plantation</option>
</select>
     </div>

</div>
<div class="col-md-4 div6">

<div class="form-group">
<label>FIRST NAME</label>
<input type="text" class="form-control" placeholder="">
</div>

</div>

<div class="col-md-4 div7">
<div class="form-group">
<label>LAST NAME</label>  
<input type="text" class="form-control" placeholder="">    
</div>
</div> 
<div class="col-md-4 div8">
<div class="form-group">                        
<input type="radio" checked="checked" name="method" id="import"><h5 style="display: inline;">IMPORT FROM LIST</h4>
<input type="radio" value="enet_manual" name="method" id="manaul"><h5 style="display: inline;">ENTER MANUALLY</h4>
</div>        
</div>
</div>
<div class="row div2"> 
<div class="col-md-4">
<div class="form-group">
<label>BUSINESS NAME</label>                            
<input type="text" class="form-control" name="Business">
</div>        
</div>
<div class="col-md-4 div3">
<div class="form-group">
<label>CONTACT FIRST NAME</label>
<input type="text" name="con_first" class="form-control" placeholder=""> 
</div>
</div>

<div class="col-md-4 div4">
<div class="form-group">
<label>CONTACT FIRST NAME</label>
<input type="text" class="form-control" name="con_last" placeholder="">
</div>
</div>
</div>          
</form>
</div>
</div>              

</fieldset>

</div>
</div>
<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>     
</div>

<div class="tab-pane" id="step2">
<div class=" col-md-12"><div class="row">
                       
<legend>   <h3 class="box-title m-b-0">BASIC CONTACT INFO</h3> </legend>
<div class="row">
<div class="input_fields_wrap1 col-md-4">
<label class="pull-left">CONTACT PREFERENCE</label>
<select class="form-control phone" id="sle">
<option value="Phone">Phone</option>
<option value="Email">Email</option>
<option value="Mail">Mail</option>
<option value="Text">Text</option>
</select>
</div>
</div>
<br>
<div class="input_fields_wrap1 col-md-12">
<label class="pull-left">Phone Numbers</label> <button class="add_field_button1 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add No</button>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Phone Number" name="mytext[]">
</div>
<div class="col-md-3 div10">
<select class="form-control conop">
<option value="Cell">Cell</option>
<option value="Buisness Cell">Buisness Cell</option>
<option value="Home">Home</option>
<option value="Work">Work</option>
<option value="Text">Fax</option>
<option value="Other">Other</option>
</select>
</div>
<div class="col-md-4 div13">
<div class="col-md-6  p-0">
<div class="form-group">
<div class="radio radio-success">
<input id="radio1" type="radio">
<label for="radio1">  Primary Phone </label>
</div>
</div>
</div>
<div class="col-md-6  p-0 divb11">
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
<div class="input_fields_wrap2 m-t-10  col-md-12">
<label class="pull-left">Email Addresses</label> <button class="add_field_button2 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add Email</button>
                          <div class="clearfix"></div>

<div class="row">
                                <div class="col-md-4">
                                   <input type="text" class="form-control" placeholder="Email Address" name="mytext[]">
                                </div>
                <div class="col-md-3">
                   <select class="form-control">
                    <option value="Cell">Cell</option>
                    <option value="Buisness Cell">Buisness Cell</option>
                    <option value="Home">Home</option>
                    <option value="Work">Work</option>
                    <option value="Text">Fax</option>
                    <option value="Other">Other</option>
                   </select>
                </div>
                                <div class="col-md-4 div12">
                                   <div class="col-md-6  p-0">
                                      <div class="form-group">
                                         <div class="radio radio-success">
                                            <input id="radio1" type="radio">
                                            <label for="radio1">  Primary Email </label>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-md-6  p-0 divz11">
                                      <div class="form-group">
                                         <div class="checkbox checkbox-success">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">  OPT-OUT </label>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>   </div>
                             </div>

</fieldset>
                          </div>

                       </div>

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>

<div class="tab-pane" id="step3">
<div class=" col-md-12"><div class="row">
                       <fieldset class="my-field"> 
<legend>   <h3 class="box-title m-b-0">BUSINESS CONTACTS</h3> </legend>
<div class="col-md-12 col-sm-12 text-xs-center text-md-left p-0 div11" style="">
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
                    <tbody><tr>
                       <td>
                          John Smith
                       </td>
                       <td>
                          (786) 759-6539 
                       </td>
                       <td>
                          <div> Cell <span><b>Primary</b></span></div>
                       </td>
                       <td>
                          <a href="" class="btn btn-circle btn-success"><i class="fa fa-pencil"></i></a>
                       </td>
                    </tr>
                 </tbody></table>
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
                    </div>
                 </fieldset>
                 <fieldset class="my-field m-t-15">
                    <legend><b>RELATIONSHIP</b></legend>
                    <div class="row">
<div class="col-md-4">
                          <div class="form-group">
                             <label>&nbsp;</label>
                             <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1"> PRIMARY CONTACT </label>
                             </div>
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

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>

<div class="tab-pane" id="step4">
<div class=" col-md-12"><div class="row">
                       <fieldset class="my-field"> 
<legend>   <h3 class="box-title m-b-0">ADDRESSES</h3> </legend>

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

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>


<div class="tab-pane" id="step5">
<div class=" col-md-12"><div class="row">
                       <fieldset class="my-field"> 
<legend>   <h3 class="box-title m-b-0">BUSINESS INFORMATION</h3> </legend>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>BUSINESS NAME</label>

<input type="text" class=" form-control" value="">
</div></div>
<div class="col-md-6">
<div class="form-group">
<label>DBA</label>

<input type="text" class=" form-control" value="">
</div></div>    
<div class="col-md-4">
<div class="form-group">
<label>BUSINESS FEIN</label>

<input type="text" class=" form-control" value="">
</div></div>

<div class="col-md-4">

<div class="form-group">
<label>BUSINESS TYPE</label>

<select class="form-control">
<option value=""></option><option value="20">Corporation</option><option value="21">Individual</option><option value="22">Joint Venture</option><option value="23">LLC</option><option value="24">Not for Profit Organization</option><option value="25">Partnership</option><option value="26">Subchapter "S" Corporation</option><option value="27">Trust</option><option value="28">Unincorporated Association</option><option value="19">Other</option>                                        </select>
</div>

</div>



<div class="col-md-4">
<div class="form-group">
<label>DESCRIPTION IF OTHER</label>

<input type="text" class=" form-control" value="">
</div></div>

</div>                

</fieldset>
                          </div>

                       </div>

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>


<div class="tab-pane" id="step6">
<div class=" col-md-12"><div class="row">
<fieldset class="my-field"> 
<legend>   <h3 class="box-title m-b-0">ACCOUNT INFORMATION</h3> </legend>
<fieldset class="my-field"> 
<legend>GENERAL INFO </legend>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>CUSTOMER NUMBER</label>   
<input name="ClientNumber" type="text" class="form-control">    
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>PRIORITY</label>   
<select name="CustomerPriorityID" class="form-control">
<option value="1">High</option>
<option value="3">Low</option>
<option value="2">Normal</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="account-info-customer-since">       CUSTOMER SINCE</label> 
<input name="CustomerSinceString" type="text" class="mydatepicker form-control">      
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
<input name="CreatedByName" type="text" class="form-control" disabled="">
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
<select name="ClientSourceID" id="account-info-client-source" class="form-control">
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
<input name="SourceDetail" type="text" class="form-control">   
</div>
</div>
</div>  

</fieldset>
</fieldset>
</div>

</div>

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>


<div class="tab-pane" id="step7">
<div class=" col-md-12">
<div class="row">
<fieldset class="my-field"> 
<legend> <h3 class="box-title m-b-0">LINKED ACCOUNTS</h3> </legend>
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


</fieldset>
</div>                
</div>

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>


<div class="tab-pane" id="step8">
<div class=" col-md-12"><div class="row">
<fieldset class="my-field"> 
<legend>   <h3 class="box-title m-b-0">X-DATE'S</h3> </legend>

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
</tr></tbody>
</table>

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
<select name="" class="form-control">
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
<option value="A" <="" option="">
</option></select>      
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
</fieldset>
</div>

</div>

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>


<div class="tab-pane" id="step9">
<div class=" col-md-12"><div class="row">
<fieldset class="my-field"> 
<legend>   <h3 class="box-title m-b-0">EMPLOYEES</h3> </legend>

<div class="div81">
<table class="table default-table dataTable table-striped m-t-0 m-b-0">
<thead>
<tr>
<th>COMPANY</th>
<th>TITLE</th>
<th>EMPLOYED FROM
</th><th>EMPLOYED FROM</th>
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
</tr></tbody></table>
<button type="button" id="btn81" class="m-t-10 btn my-button btn-success btn-xs pull-right">Edit    <i class="fa fa-pencil" aria-hidden="true"></i></button>
</div>
<div class="row div82" style="display:none">
<div class="col-md-12 ">
<div class="row">
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
</div><div class="col-md-4">
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
<label>Street</label>
<input type="text" class="form-control " placeholder="">
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
<label>Title</label>
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
EMPLOYED FROM                  <input type="text" class="form-control" placeholder="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
EMPLOYED TO                  <input type="text" class="form-control" placeholder="">
</div>
</div>
<div class="clearfix"></div>
<div class="input_fields_wrap6 col-md-12">
<label class="pull-left">Phone Numbers</label> <button class="add_field_button6 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add No</button>
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
<div class="col-md-12  p-0">
<div class="form-group">
<div class="radio radio-success">
<input id="radio1" type="radio">
<label for="radio1">  Primary Phone </label>
</div>
</div>
</div>

</div>
<div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
</div>
</div>
<div class=" col-md-12">
<label class="pull-left">Email Addresses</label> <button class="add_field_button7 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i> Add Email</button>
<div class="clearfix"></div>
<div class="row">
<div class="input_fields_wrap7">
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
<div class="col-md-12">
<label>X-DATE DESCRIPTION</label>
<textarea class="form-control" rows="4" placeholder=""></textarea>
</div>
<div class="col-md-12">
<label>Comments</label>
<textarea class="form-control" rows="4" placeholder=""></textarea>
</div>
</div>
</div>
<button type="button" class="btn   m-t-10 btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button>
<button id="btn22" type="button" class="btn my-button  m-t-10 btn-default btn-xs pull-right m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
</div></div></div>

</fieldset>
</div>

</div>

<ul class="list-inline pull-right m-t-10">
<li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
</ul>
</div>


<div class="tab-pane " id="step10">
<div class=" col-md-12"><div class="row">
<fieldset class="my-field"> 
<legend>   <h3 class="box-title m-b-0">SOCIAL MEDIA</h3> </legend>

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
<div class="input_fields_wrap8">
<button class="add_field_button8 btn btn-success btn-xs m-b-10"><i class="fa fa-plus"></i>Add Another Web Page</button>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control" placeholder="" name="mytext[]">
</div>
<div class="col-md-2"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
</div>
</div>


</fieldset>
                          </div>

                       </div>

<ul class="list-inline pull-right m-t-10">
<button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button>
</ul>
</div>




</div></form>
</div></section>



</div>

</div>
</div>
</div>


</div>
<footer class="footer t-a-c">
© 2017 All Rights Reserved | Designed By Indi IT Solutions
</footer>



<div class="modal fade" id="import-address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myModalLabel">IMPORT ADDRESSES TO LOCATION SCHEDULE</h4>
</div>
<div class="modal-body">
<table class="table default-table dataTable table-striped m-t-0">
<thead>
<tr><th></th>
<th>ADDRESS</th>
<th>ADDRESS TYPE</th>
</tr></thead>
<tbody>
<tr>
<td><div class="checkbox checkbox-success m-0">
        <input id="checkbox1" type="checkbox">
        <label for="checkbox1"></label>
    </div></td>
      <td>209 E Gladyst St Tampa, Florida 33602</td>
<td>Mailing</td>
</tr>
</tbody>

</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
<button type="button" class="btn btn-success btn-sm">Import <i class="fa fa-pencil"></i></button>
</div>
</div>
</div>

</div>

<div class="modal fade" id="import-interest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myModalLabel">IMPORT</h4>
</div>
<div class="modal-body">
<h5 class="m-0">SELECT CERT / LIENHOLDERS</h5>
<table class="table default-table dataTable table-striped m-t-10">
<thead>
<tr><th></th>
<th>NAME</th>
<th>PAYEE TYPE</th>
</tr></thead>
<tbody>
<tr>
<td><div class="checkbox checkbox-success m-0">
        <input id="checkbox1" type="checkbox">
        <label for="checkbox1"></label>
    </div></td>
      <td>
ACCESS ON TIME
3210 Lake Emma Road, 3090, Lake Mary, FL 32746</td>
<td>Cert Holder</td>
</tr>
</tbody>

</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
<button type="button" class="btn btn-success btn-sm">Import <i class="fa fa-pencil"></i></button>
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
</div>    <div class="form-group">
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
</div>   </div></div>
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

<script src="assets/admin/js/custom.js"></script>
<script src="assets/admin/plugins/components/chartist-js/dist/chartist.min.js"></script>
<script src="assets/admin/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="assets/admin/plugins/components/sparkline/jquery.sparkline.min.js"></script>
<script src="assets/admin/plugins/components/sparkline/jquery.charts-sparkline.js"></script>
<script src="assets/admin/plugins/components/knob/jquery.knob.js"></script>
<script src="assets/admin/plugins/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
<script src="js/db1.js"></script>
<script src="assets/admin/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="assets/admin/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>

<script>
$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $( ".input_fields_wrap1"); //Fields wrapper
var add_button      = $(".add_field_button1"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="row"> <div class="col-md-4"> <input type="text" class="form-control" placeholder="Phone Number" name="mytext[]"> </div> <div class="col-md-3"> <select class="form-control"> <option value="17">Main</option><option value="18">Fax</option><option value="19">Accounting</option><option value="57">Administration</option><option value="59">Advertising</option><option value="54">Audit</option><option value="20">Billing</option><option value="51">Claims</option><option value="21">Customer Service</option><option value="56">Hearing Impaired</option><option value="22">Human Resources</option><option value="23">IT</option><option value="63">Legal</option><option value="62">Logistics</option><option value="24">Marketing</option><option value="25">Operations</option><option value="55">Policyholder Services</option><option value="61">Promotions</option><option value="26">Public Relations</option><option value="58">Research</option><option value="52">Roadside Assistance</option><option value="27">Sales</option><option value="53">Technical Support</option><option value="60">Training</option><option value="50">Underwriting</option><option value="28">Other</option> </select> </div> <div class="col-md-4"> <div class="col-md-12 p-0"> <div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Phone </label> </div> </div> </div> </div> <div class="col-md-1 remove_field1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div> </div>'); //add input box
}
});


$(wrapper).on("click",".remove_field1", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});
$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $( ".input_fields_wrap2"); //Fields wrapper
var add_button      = $(".add_field_button2"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="row"> <div class="col-md-4"> <input type="text" class="form-control" placeholder="Email Address" name="mytext[]"> </div> <div class="col-md-3"> <select class="form-control"> <option value="17">Main</option><option value="18">Fax</option><option value="19">Accounting</option><option value="57">Administration</option><option value="59">Advertising</option><option value="54">Audit</option><option value="20">Billing</option><option value="51">Claims</option><option value="21">Customer Service</option><option value="56">Hearing Impaired</option><option value="22">Human Resources</option><option value="23">IT</option><option value="63">Legal</option><option value="62">Logistics</option><option value="24">Marketing</option><option value="25">Operations</option><option value="55">Policyholder Services</option><option value="61">Promotions</option><option value="26">Public Relations</option><option value="58">Research</option><option value="52">Roadside Assistance</option><option value="27">Sales</option><option value="53">Technical Support</option><option value="60">Training</option><option value="50">Underwriting</option><option value="28">Other</option> </select> </div> <div class="col-md-4"> <div class="col-md-6 p-0"> <div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Phone </label> </div> </div> </div> <div class="col-md-6 p-0"> <div class="form-group"> <div class="checkbox checkbox-success"> <input id="checkbox1" type="checkbox"> <label for="checkbox1"> OPT-OUT </label> </div> </div> </div> </div> <div class="col-md-1 remove_field2"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div> </div>'); //add input box
}
});


$(wrapper).on("click",".remove_field2", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});
$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $( ".input_fields_wrap3"); //Fields wrapper
var add_button      = $(".add_field_button3"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="row"><div class="col-md-4"><input type="text" class="form-control" placeholder="Phone Number" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Cell</option><option value="18">Business Cell</option><option value="19">Home</option><option value="57">Work</option><option value="59">Fax</option><option value="20">Other</option></select></div> <div class="col-md-4"><div class="col-md-6 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Phone </label> </div> </div> </div> <div class="col-md-6 p-0"><div class="form-group"> <div class="checkbox checkbox-success"> <input id="checkbox1" type="checkbox"> <label for="checkbox1"> OPT-OUT </label> </div> </div></div></div><div class="col-md-1 remove_field3"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
}
});


$(wrapper).on("click",".remove_field3", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});

$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $( ".input_fields_wrap4"); //Fields wrapper
var add_button      = $(".add_field_button4"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class=""><div class="col-md-4"><input type="text" class="form-control" placeholder="Email Address" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Personal</option><option value="18">Professional</option><option value="19">Billing</option><option value="20">Other</option></select></div> <div class="col-md-4"><div class="col-md-12 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Email </label> </div> </div> </div></div><div class="col-md-1 remove_field4"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
}
});


$(wrapper).on("click",".remove_field4", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});



$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $( ".input_fields_wrap6"); //Fields wrapper
var add_button      = $(".add_field_button6"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="row"><div class="col-md-4"><input type="text" class="form-control" placeholder="Phone Number" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Cell</option><option value="18">Business Cell</option><option value="19">Home</option><option value="57">Work</option><option value="59">Fax</option><option value="20">Other</option></select></div> <div class="col-md-4"><div class="col-md-12 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Phone </label> </div> </div> </div></div><div class="col-md-1 remove_field6"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
}
});


$(wrapper).on("click",".remove_field6", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});

$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $( ".input_fields_wrap7"); //Fields wrapper
var add_button      = $(".add_field_button7"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class=""><div class="col-md-4"><input type="text" class="form-control" placeholder="Email Address" name="mytext[]"></div><div class="col-md-3"><select class="form-control"><option value="17">Personal</option><option value="18">Professional</option><option value="19">Billing</option><option value="20">Other</option></select></div> <div class="col-md-4"><div class="col-md-12 p-0"><div class="form-group"> <div class="radio radio-success"> <input id="radio1" type="radio"> <label for="radio1"> Primary Email </label> </div> </div> </div></div><div class="col-md-1 remove_field7"><a href="#" class="  btn btn-danger  btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
}
});


$(wrapper).on("click",".remove_field7", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});   
$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $( ".input_fields_wrap8"); //Fields wrapper
var add_button      = $(".add_field_button8"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="row m-t-15"><div class="col-md-6"><input type="text" class="form-control" placeholder="" name="mytext[]"></div><div class="col-md-2 remove_field8"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div></div>'); //add input box
}
});


$(wrapper).on("click",".remove_field8", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});

$('.my-button').click(function(){    
if(this.id == 'btn11'){
$('.div22').show();
$('.div11').hide();
}else{
$('.div22').hide();
$('.div11').show();
}
})
$('.my-button').click(function(){    
if(this.id == 'btn71'){
$('.div72').show();
$('.div71').hide();
}else{
$('.div72').hide();
$('.div71').show();
}
})
$('.my-button').click(function(){    
if(this.id == 'btn81'){
$('.div82').show();
$('.div81').hide();
}else{
$('.div82').hide();
$('.div81').show();
}
})

$('.my-button').click(function(){    
if(this.id == 'btn111'){
$('.div112').show();
$('.div111').hide();
}else{
$('.div112').hide();
$('.div111').show();
}
})
$('.my-button').click(function(){    
if(this.id == 'btn31'){
$('.div32').show();
$('.div31').hide();
}else{
$('.div32').hide();
$('.div31').show();
}
})

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
<script>
/*---------Step Wizard------------*/
$(document).ready(function () {

//Wizard
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

var $target = $(e.target);

if ($target.parent().hasClass('disabled')) {
return false;
}
});

$(".btn-continue").click(function (e) {

var $active = $('.wizard .nav-wizard li.active');
$active.next().removeClass('disabled');
nextTab($active);

});
});

function nextTab(elem) {
$(elem).next().find('a[data-toggle="tab"]').click();
}

/*---------Step Wizard------------*/
</script>
<script src="assets/js/custom.js"></script>
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
</body></html>