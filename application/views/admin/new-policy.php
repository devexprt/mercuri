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
    <title>New Policy</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="assets/admin/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
       <link href="assets/admin/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
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

<?php include 'sidebar.php';?>    <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
           
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                  <div class="col-md-12 col-lg-12 col-xs-12 for_padd">
                        <div class="white-box">
                            <h3 class="box-title m-b-0 m-b-10 m-t-0">New Policy</h3>
					
	<section>
        <div class="wizard">
            
                <ul class="nav nav-wizard">
 <li class="active">
                        <a href="#step1" data-toggle="tab">Add Policy</a>
                    </li>
                    <li class="disabled">
                        <a href="#step2" data-toggle="tab">Named Insureds</a>
                    </li>

                    <li class="disabled">
                        <a href="#step3" data-toggle="tab">Policy Info</a>
                    </li>

                    <li class="disabled">
                        <a href="#step4" data-toggle="tab">Additional Info</a>
                    </li>
                    
                     <li class="disabled">
                        <a href="#step5" data-toggle="tab">Quote Info</a>
                    </li>
					
					                    <li class="disabled">
                        <a href="#step6" data-toggle="tab">Agency Fees</a>
                    </li>

                    <li class="disabled">
                        <a href="#step7" data-toggle="tab">Location Schedule</a>
                    </li>
                    
                     <li class="disabled">
                        <a href="#step8" data-toggle="tab">Additional Interest</a>
                    </li>
					 <li class="disabled">
                        <a href="#step9" data-toggle="tab">Name Of Business</a>
                    </li>
                </ul>
           

            <form>
                <div class="tab-content m-t-15">
				<div class="tab-pane active" id="step1">
				<div class="col-md-12">
				<div class="row">
							<fieldset class="my-field">
                         <legend>   <h3 class="box-title m-b-0 ">Add Policy</h3> </legend>
					<div class="row"> 									
<div class="col-md-12">
<form class=" m-b-20">	
<div class="row"> 
<div class="col-md-4">

                              <div class="form-group">
                                    <label>POLICY TYPE</label>
                                   
                                        <select class="form-control">
                                           <option value="S">Monoline</option><option value="P">Package</option>
                                        </select>
 </div>
									
									   </div><div class="col-md-4">
									<div class="form-group">
                                    <label>LINE OF BUSINESS </label>
                                   
                                        <select class="form-control">
                                          <option selected="selected"></option><option value="65">Accident</option><option value="66">Accidental Death/Dismemberment</option><option value="1">Agriculture Liability</option><option value="3">Agriculture Property</option><option value="2">Agriculture Scheduled &amp; Unscheduled Personal Property</option><option value="67">Annuity</option><option value="107">Antique Auto</option><option value="68">Aviation</option><option value="7">Boiler &amp; Machinery</option><option value="9">Boiler and Machinery Small Business Policy</option><option value="69">Bond</option><option value="128">Bond - Bail</option><option value="114">Bond - Bid</option><option value="121">Bond - Business Services</option><option value="120">Bond - ERISA</option><option value="126">Bond - Federal</option><option value="127">Bond - Fidelity</option><option value="29">Bond - Fiduciary</option><option value="115">Bond - License &amp; Permit</option><option value="125">Bond - Maintenance</option><option value="116">Bond - Notary Public</option><option value="123">Bond - Payment</option><option value="122">Bond - Performance</option><option value="117">Bond - Probate</option><option value="118">Bond - Public Official</option><option value="119">Bond - Regulatory &amp; Tax</option><option value="124">Bond - Supply</option><option value="57">Bond - Surety</option><option value="11">Business Owners</option><option value="70">Cancer Insurance</option><option value="108">Classic Auto</option><option value="16">Commercial Articles</option><option value="5">Commercial Auto</option><option value="113">Commercial Condos</option><option value="14">Commercial Fire</option><option value="36">Commercial Inland Marine</option><option value="45">Commercial Ocean Marine</option><option value="50">Commercial Property</option><option value="20">Commercial Umbrella</option><option value="24">Computers</option><option value="106">Condo</option><option value="17">Contractor's Equipment Floater</option><option value="71">Contractors Pollution Liability</option><option value="72">Course of Construction</option><option value="19">Crime</option><option value="73">Critical Illness</option><option value="74">Crop</option><option value="75">Cyber Liability</option><option value="76">Data Breach</option><option value="22">Dental</option><option value="23">Directors and Officers</option><option value="21">Dwelling Fire</option><option value="28">Earthquake</option><option value="25">Employers Liability</option><option value="27">Employment Practices Liability</option><option value="129">Equipment Floater</option><option value="26">Errors and Omissions</option><option value="77">Event Liability</option><option value="130">Excess Flood - Commercial</option><option value="131">Excess Flood - Personal</option><option value="78">Excess Liability</option><option value="54">Farm/Ranch</option><option value="30">Fine Arts</option><option value="79">Fishing Vessel</option><option value="64">Flood - Commercial</option><option value="31">Flood - Personal</option><option value="32">Garage and Dealers</option><option value="80">Garage Keepers Legal Liability</option><option value="15">General Liability</option><option value="33">Glass</option><option value="111">Golf Cart</option><option value="81">Group Accident</option><option value="82">Group Critical Illness</option><option value="83">Group Dental</option><option value="84">Group Health</option><option value="85">Group Long Term Disability</option><option value="86">Group Short Term Disability</option><option value="87">Group Term Life</option><option value="88">Group Universal Life</option><option value="89">Group Whole Life</option><option value="34">Health</option><option value="35">Homeowners</option><option value="90">Hospital Indemnity</option><option value="8">Installation/Builders Risk</option><option value="38">Internet Liability</option><option value="91">Jewelry</option><option value="39">Kidnap and Ransom</option><option value="40">Life</option><option value="41">Liquor Liability</option><option value="92">Long Term Care</option><option value="93">Long Term Disability</option><option value="48">Misc. Professional Liability</option><option value="42">Mobile Homeowners</option><option value="43">Motor Carrier</option><option value="44">Motor Truck Cargo</option><option value="110">Motorcycle</option><option value="94">Ocean Marine</option><option value="109">Off Road Vehicle</option><option value="6">Personal Auto</option><option value="37">Personal Inland Marine</option><option value="95">Personal Liability</option><option value="51">Personal Umbrella</option><option value="46">Physicians and Surgeons</option><option value="96">Pollution Liability</option><option value="47">Professional Liability</option><option value="52">Recreational Vehicles</option><option value="105">Renters</option><option value="53">Scheduled Property</option><option value="97">Sexual Misconduct Liability</option><option value="98">Short Term Disability</option><option value="55">Signs</option><option value="56">Special Multi-Peril</option><option value="99">Supplemental Health</option><option value="100">Term Life</option><option value="58">Transportation</option><option value="112">Travel Trailer</option><option value="59">Truckers</option><option value="101">Universal Life</option><option value="60">Valuable Papers</option><option value="102">Vision</option><option value="10">Watercraft (Small Boat)</option><option value="103">Whole life</option><option value="61">Wind - Personal</option><option value="62">Worker's Compensation</option><option value="63">Workplace Violence</option><option value="104">Yacht</option>
                                        </select>
                                    </div></div><div class="col-md-4">
                                <div class="form-group">
                                    <label>EFFECTIVE DATE</label>
                               
                                        <input type="text" class="mydatepicker form-control" value="">
                                </div></div><div class="col-md-4">
								  <div class="form-group">
                                    <label>POLICY NUMBER</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div><div class="col-md-4">
								<div class="form-group">
                                    <label>TERM</label>
                                   
                                        <select class="form-control">
                                         <option value="A">Annual</option><option value="S">Semi Annual</option><option value="Q">Quarterly</option><option value="M">Monthly</option><option value="V">Variable</option>
                                        </select>
                                    </div></div><div class="col-md-4">
								 <div class="form-group">
                                    <label>ESTIMATED PREMIUM</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div> </div> </div>
								<!---button class="btn btn-success">Next <i class="fa fa-long-arrow-right"></i></button> 								<button class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button-->
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
				
                    <div class="tab-pane " id="step2">
                      		<div class=" col-md-12"><div class="row">
                                                               <fieldset  class="my-field"> 
															   <legend>   <h3 class="box-title m-b-0">Named Insureds</h3> </legend>
															   
															   <div class="input_fields_wrap11 m-t-10">
															   <a class="add_field_button11 btn btn-success btn-xs m-b-10"><i class="fa fa-plus"></i>Add Named Insured</a>
                                                                  <div class="clearfix"></div>
                                                                  <div class="row m-b-10">
                                                                     
                                                                        <div class="col-md-11">
                                                                           <input type="text" class="form-control" placeholder="VYMARY CADIZ" name="mytext[]">
                                                                        </div>
                                                                       
    <div class="col-md-1"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                                        </div>
                                                                    
                                                                     </div>
                                                        </fieldset>
                                                                  </div>
																  
                                                               </div>
															 
                        <ul class="list-inline pull-right m-t-10">
                            <li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="step3">
                          <fieldset class="my-field">
                         <legend>   <h3 class="box-title m-b-0">Policy Info</h3> </legend>
					<div class="row"> 									
<div class="col-md-12">
<form class=" m-b-20">	
<div class="row"> 
<div class="col-md-4">
									<div class="form-group">
                                    <label>LINE OF BUSINESS </label>
                                   
                                        <select class="form-control">
                                          <option selected="selected"></option><option value="65">Accident</option><option value="66">Accidental Death/Dismemberment</option><option value="1">Agriculture Liability</option><option value="3">Agriculture Property</option><option value="2">Agriculture Scheduled &amp; Unscheduled Personal Property</option><option value="67">Annuity</option><option value="107">Antique Auto</option><option value="68">Aviation</option><option value="7">Boiler &amp; Machinery</option><option value="9">Boiler and Machinery Small Business Policy</option><option value="69">Bond</option><option value="128">Bond - Bail</option><option value="114">Bond - Bid</option><option value="121">Bond - Business Services</option><option value="120">Bond - ERISA</option><option value="126">Bond - Federal</option><option value="127">Bond - Fidelity</option><option value="29">Bond - Fiduciary</option><option value="115">Bond - License &amp; Permit</option><option value="125">Bond - Maintenance</option><option value="116">Bond - Notary Public</option><option value="123">Bond - Payment</option><option value="122">Bond - Performance</option><option value="117">Bond - Probate</option><option value="118">Bond - Public Official</option><option value="119">Bond - Regulatory &amp; Tax</option><option value="124">Bond - Supply</option><option value="57">Bond - Surety</option><option value="11">Business Owners</option><option value="70">Cancer Insurance</option><option value="108">Classic Auto</option><option value="16">Commercial Articles</option><option value="5">Commercial Auto</option><option value="113">Commercial Condos</option><option value="14">Commercial Fire</option><option value="36">Commercial Inland Marine</option><option value="45">Commercial Ocean Marine</option><option value="50">Commercial Property</option><option value="20">Commercial Umbrella</option><option value="24">Computers</option><option value="106">Condo</option><option value="17">Contractor's Equipment Floater</option><option value="71">Contractors Pollution Liability</option><option value="72">Course of Construction</option><option value="19">Crime</option><option value="73">Critical Illness</option><option value="74">Crop</option><option value="75">Cyber Liability</option><option value="76">Data Breach</option><option value="22">Dental</option><option value="23">Directors and Officers</option><option value="21">Dwelling Fire</option><option value="28">Earthquake</option><option value="25">Employers Liability</option><option value="27">Employment Practices Liability</option><option value="129">Equipment Floater</option><option value="26">Errors and Omissions</option><option value="77">Event Liability</option><option value="130">Excess Flood - Commercial</option><option value="131">Excess Flood - Personal</option><option value="78">Excess Liability</option><option value="54">Farm/Ranch</option><option value="30">Fine Arts</option><option value="79">Fishing Vessel</option><option value="64">Flood - Commercial</option><option value="31">Flood - Personal</option><option value="32">Garage and Dealers</option><option value="80">Garage Keepers Legal Liability</option><option value="15">General Liability</option><option value="33">Glass</option><option value="111">Golf Cart</option><option value="81">Group Accident</option><option value="82">Group Critical Illness</option><option value="83">Group Dental</option><option value="84">Group Health</option><option value="85">Group Long Term Disability</option><option value="86">Group Short Term Disability</option><option value="87">Group Term Life</option><option value="88">Group Universal Life</option><option value="89">Group Whole Life</option><option value="34">Health</option><option value="35">Homeowners</option><option value="90">Hospital Indemnity</option><option value="8">Installation/Builders Risk</option><option value="38">Internet Liability</option><option value="91">Jewelry</option><option value="39">Kidnap and Ransom</option><option value="40">Life</option><option value="41">Liquor Liability</option><option value="92">Long Term Care</option><option value="93">Long Term Disability</option><option value="48">Misc. Professional Liability</option><option value="42">Mobile Homeowners</option><option value="43">Motor Carrier</option><option value="44">Motor Truck Cargo</option><option value="110">Motorcycle</option><option value="94">Ocean Marine</option><option value="109">Off Road Vehicle</option><option value="6">Personal Auto</option><option value="37">Personal Inland Marine</option><option value="95">Personal Liability</option><option value="51">Personal Umbrella</option><option value="46">Physicians and Surgeons</option><option value="96">Pollution Liability</option><option value="47">Professional Liability</option><option value="52">Recreational Vehicles</option><option value="105">Renters</option><option value="53">Scheduled Property</option><option value="97">Sexual Misconduct Liability</option><option value="98">Short Term Disability</option><option value="55">Signs</option><option value="56">Special Multi-Peril</option><option value="99">Supplemental Health</option><option value="100">Term Life</option><option value="58">Transportation</option><option value="112">Travel Trailer</option><option value="59">Truckers</option><option value="101">Universal Life</option><option value="60">Valuable Papers</option><option value="102">Vision</option><option value="10">Watercraft (Small Boat)</option><option value="103">Whole life</option><option value="61">Wind - Personal</option><option value="62">Worker's Compensation</option><option value="63">Workplace Violence</option><option value="104">Yacht</option>
                                        </select>
                                    </div>
									</div>
									<div class="col-md-4">
								<div class="form-group">
                                    <label>SUBLINE</label>
                                   
                                        <select class="form-control">
                                      <option value=""></option><option value="1">10-Year</option><option value="2">15-Year</option><option value="3">20-Year</option><option value="4">30-Year</option><option value="9">Health Care Insurance</option><option value="6">HO 3</option><option value="7">HO 4</option><option value="5">Liability Only</option><option value="8">Non-Emergency Transport</option>
                                        </select>
                                    </div></div>	<div class="col-md-4">
								 <div class="form-group">
                                    <label>ESTIMATED PREMIUM</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div> </div>
								
									<div class="col-md-4">
								  <div class="form-group">
                                    <label>POLICY NUMBER</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div><div class="col-md-4">
								<div class="form-group">
                                    <label>TERM</label>
                                   
                                        <select class="form-control">
                                         <option value="A">Annual</option><option value="S">Semi Annual</option><option value="Q">Quarterly</option><option value="M">Monthly</option><option value="V">Variable</option>
                                        </select>
                                    </div></div><div class="col-md-4">
                                <div class="form-group">
                                    <label>EFFECTIVE DATE</label>
                               
                                        <input type="text" class="mydatepicker form-control" value="">
                                </div></div> 
								<div class="col-md-4">
                                <div class="form-group">
                                    <label>EXPIRATION DATE</label>
                               
                                        <input type="text" class="mydatepicker form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>BINDER NUMBER</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
                                <div class="form-group">
                                    <label>BINDER DATE</label>
                               
                                        <input type="text" class="mydatepicker form-control" value="">
                                </div></div>
								<div class="col-md-4">
								<div class="form-group">
                                    <label>BUSINESS TYPE</label>
                                   
                                        <select class="form-control">
                                       <option value="N">New Business</option><option value="R">Renewal</option><option value="W">Rewrite</option>
                                        </select>
                                    </div></div>
								
								</div>
								 
							</form>
                                </div>
	</div>							

</fieldset>
                       

					   <ul class="list-inline pull-right m-t-10">
                           <li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="step4">
					<fieldset class="my-field">
                         <legend>   <h3 class="box-title m-b-0">Additional Info</h3> </legend>
					<div class="row"> 									
<div class="col-md-12">
<form class=" m-b-20">	
<div class="row"> 
<div class="col-md-4">
									<div class="form-group">
                                    <label>POLICY SOURCE</label>
                                   
                                        <select class="form-control">
                                         <option value=""></option><option value="16">Access2Care</option><option value="1">Billboard</option><option value="2">Bing</option><option value="20">CHRIS MYERS AUTO SALES</option><option value="3">Corporate Website</option><option value="4">Email Campaign</option><option value="5">Facebook</option><option value="6">Google</option><option value="7">Lead Generator</option><option value="8">LinkedIn</option><option value="17">Obamacare website</option><option value="9">Radio Commercial</option><option value="10">Referral</option><option value="18">SUNRISE AUTO MALL</option><option value="19">TELEMARKETING PHONE CALLS</option><option value="11">TV Commercial</option><option value="12">Twitter</option><option value="13">Walk In</option><option value="14">Yahoo</option><option value="15">Yellow Pages</option>
                                        </select>
                                    </div>
									</div>
											<div class="col-md-4">
								 <div class="form-group">
                                    <label>SOURCE DETAILS</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div> </div>
									<div class="col-md-4">
								<div class="form-group">
                                    <label>RELATED X-DATE</label>
                                   
                                        <select class="form-control">
                                     <option value=""></option>
                                        </select>
                                    </div></div>
							<div class="col-md-4">
								<div class="form-group">
                                    <label>AGENT</label>
                                   
                                        <select class="form-control">
                                   <option value="2">Damion A McKenzie</option><option value="2231">Kath Calcaben</option><option value="659">REYVIE PAZ</option>
                                        </select>
                                    </div></div>
									<div class="col-md-4">
								<div class="form-group">
                                    <label>CSR</label>
                                   
                                        <select class="form-control">
                                    <option value=""></option><option value="2">Damion A McKenzie</option><option value="2231">Kath Calcaben</option><option value="659">REYVIE PAZ</option>
                                        </select>
                                    </div></div>
										<div class="col-md-4">
								<div class="form-group">
                                    <label>OWNER</label>
                                   
                                        <select class="form-control">
			<option value="">Agent on Policy</option><option value="2">Damion A McKenzie</option><option value="2231">Kath Calcaben</option><option value="659">REYVIE PAZ</option>
                                        </select>
                                    </div></div>
                                                     <div class="col-md-12">
                                                                  <div class="form-group">
                                                                     <label>PRODUCERS</label>
                                                                     <select class="chosen-select-width" multiple  data-placeholder="Add Producers To Policy">
																	   <option value=""></option><option value="2">Damion A McKenzie</option><option value="2231">Kath Calcaben</option><option value="659">REYVIE PAZ</option>
																	 </select>
                                                                  </div>
                                                               </div>	
					
<div class="col-md-12">
                                <div class="form-group">
                                    <label>POLICY DESCRIPTION</label>
                               
                                        <textarea rows="4" class=" form-control" value=""></textarea>
                                </div></div>
							
								
								</div>
								 
							</form>
                                </div>
	</div>							

</fieldset>
                       
                       <ul class="list-inline pull-right m-t-10">
                            <li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    </div>
					    <div class="tab-pane" id="step5">
                         <fieldset class="my-field">
                         <legend>   <h3 class="box-title m-b-0">Quote Info</h3> </legend>
					<div class="row"> 									
<div class="col-md-12">
<form class=" m-b-20">	
<div class="row"> 

											<div class="col-md-3">
								 <div class="form-group">
                                    <label>QUOTE NUMBER</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div> </div>
									<div class="col-md-3">
								<div class="form-group">
                                    <label>QUOTE STATUS</label>                                   
                                        <select class="form-control">
<option value=""></option><option value="W">Waiting on Customer</option><option value="S">App Submitted For Quote</option><option value="Q">Quoted</option><option value="D">Declined-Carrier</option>
                                        </select>
                                    </div></div>
							<div class="col-md-3">
								<div class="form-group">
                                    <label>QUOTE SUB STATUS</label>
                                <div>None</div>
                                    </div></div>
									<div class="col-md-3">
								<div class="form-group">
                                    <label>WRITING CARRIER </label>
                                   
                                        <select class="form-control">
                                   <option data-parentname="" data-parentid="" value=""></option><option value="201">AIG</option><option value="10">American Platinum Prop &amp; Cas Ins Co (13563)</option><option value="18">Berkshir  Hathaway</option><option value="299">Coventry ONE</option><option value="2167">Dairyland Auto</option><option value="284">Humana</option><option value="600">IAT AUTO INSURANCE (225)</option><option value="298">MOLINA HEALTHCARE</option><option value="19">National Indemnity Company (42137)</option><option value="6">National Independent Truckers Ic Rrg (11197)</option><option value="5">National Interstate Ins Co (32620)</option><option value="4">National Interstate Ins Co Of Hi Inc (11051)</option><option value="644">Occidental Fire &amp; Cas Co Of NC (23248)</option><option value="637">Ocean Harbor Cas Ins Co (12360)</option><option value="13">Scottsdale Ind Co (15580)</option><option value="213">Scottsdale Ind Company</option><option value="14">Scottsdale Ins Co (41297)</option><option value="12">Scottsdale Surplus Lines Ins Co (10672)</option><option value="15">Security First Ins Co (10117)</option><option value="300">UnitedHealthcare</option><option value="9">Universal Prop &amp; Cas Ins (10861)</option><option value="216">Windhaven</option><option value="7">Windhaven Ins Co (12541)</option><option value="347">Wright Natl Flood Ins Co (11523)</option>
                                        </select>
                                    </div></div>
										<div class="col-md-4">
								<div class="form-group">
                                    <label>MGA / BROKER</label>
                                   
                                        <select class="form-control">
	<option value=""></option><option value="209"> Risk Placement Services (RPS)</option><option value="214">TAPCO UNDERWRITERS, INC</option>
                                        </select>
                                    </div></div>
									 <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>PARENT CARRIER</label>
                                                                    <div></div>
                                                                  </div>
                                                               </div>
									
                                                     <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label>BUSINESS TYPE</label>
                                                                     <select class="chosen-select-width" multiple  data-placeholder="Business Type">
																	<option value="N">New Business</option><option value="R">Renewal</option><option value="W">Rewrite</option>
																	 </select>
                                                                  </div>
                                                               </div>	
															   <div class="col-md-4">
                                <div class="form-group">
                                    <label>SUBMISSION DATE</label>
                               
                                        <input type="text" class="mydatepicker form-control" value="">
                                </div></div>
								
								<div class="col-md-4">
                                <div class="form-group">
                                    <label>QUOTE EXPIRATION DATE</label>
                               
                                        <input type="text" class="mydatepicker form-control" value="">
                                </div></div>
											<div class="col-md-4">
								<div class="form-group">
                                    <label>QUOTED BY</label>
                                   
                                        <select class="form-control">
									   <option value="2">Damion A McKenzie</option>
									   <option value="2231">Kath Calcaben</option>
									   <option value="659">REYVIE PAZ</option>
                                          </select>
                                    </div></div>
					
<div class="col-md-12">
                                <div class="form-group">
                                    <label>CONDITIONS / ENDORSEMENTS & EXCLUSIONS</label>
                               
                                        <textarea rows="4" class=" form-control" value=""></textarea>
                                </div></div>
								
				
								</div>
								 			<fieldset class="my-field">
							<legend>PREMIUM / CARRIER FEES</legend>
							<div class="col-md-4"><div class="row">
                                <div class="form-group">
                                    <label>BASE PREMIUM </label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div></div>
								
								<div class="clearfix"></div>
								<div class="input_fields_wrap12 ">
															  <label class="pull-left">CARRIER FEES</label> <a class="add_field_button12 btn btn-success btn-xs m-b-10 pull-right"><i class="fa fa-plus"></i>Add Carrier Fee</a>
                                                                  <div class="clearfix"></div>
                                                                  <div class="row m-b-10">
                                                                     <div class="col-md-5">
								<div class="form-group">
                                    <label>FEE NAME</label>                                   
                                        <select class="form-control">
									 <option value="">Select A Fee</option><option value="5">Fee</option><option value="8">Other Fee</option><option value="7">Policy Fee</option><option value="6">Tax</option>
                                          </select>
                                    </div></div>
                                                                        <div class="col-md-6">
																		<label>Amount
																		</label>
																		<div class="row">
																    <div class="col-md-4">
                                                                           <select class="form-control">

															<option value="">$</option>
															<option value="">%</option>
                                          </select>
																		   </div>
																		       <div class="col-md-8">
																			    <input type="text" class="form-control" placeholder="0" name="mytext[]">
																			   </div>  </div>
                                                                        </div>
                                                                       
    <div class="col-md-1 m-t-20"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                                        </div>
                                                                    
                                                                     </div>
																	 <button type="button" class="btn  m-t-10 btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button><button type="button" id="" class="btn   m-t-10 btn-default btn-xs pull-right m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
							</fieldset>
								
							</form>
                                </div>
	</div>							

</fieldset>
                        <ul class="list-inline pull-right m-t-10">
                              <li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    </div>
					    <div class="tab-pane" id="step6">
                   <fieldset class="my-field">
							<legend><h3 class="box-title m-b-0">Agency Fees</h3></legend>
							
								<div class="input_fields_wrap13">
															<a class="add_field_button13 btn btn-success btn-xs m-b-10"><i class="fa fa-plus"></i>Add Agency Fee</a>
                                                                  <div class="clearfix"></div>
                                                                  <div class="row m-b-10">
                                                                     <div class="col-md-5">
								<div class="form-group">
                                    <label>FEE NAME</label>                                   
                                        <select class="form-control">
									 <option value="">Select A Fee</option><option value="6">Application fee on PIP/PD policy</option><option value="11">Auto Tag Renew</option><option value="1">Comm. Policy Setup Fee</option><option value="14">Decal</option><option value="4">Delivery of Doc to sign Fee</option><option value="5">Down Payment A</option><option value="2">Endorsement Fee</option><option value="15">Hard Florida Plate</option><option value="7">Inspection fee</option><option value="10">MVR Commercial</option><option value="3">MVR Personal Fee</option><option value="13">Registration</option><option value="8">Six month towing packages</option><option value="12">Title Transfer</option><option value="9">Twelve month towing package</option>
                                          </select>
                                    </div></div>
                                                                        <div class="col-md-6">
																		<label>Amount
																		</label>
																		<div class="row">
																    <div class="col-md-4">
                                                                           <select class="form-control">

															<option value="">$</option>
															<option value="">%</option>
                                          </select>
																		   </div>
																		       <div class="col-md-8">
																			    <input type="text" class="form-control" placeholder="0" name="mytext[]">
																			   </div>  </div>
                                                                        </div>
                                                                       
    <div class="col-md-1 m-t-20"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div>
                                                                        </div>
                                                                    
                                                                     </div>
																	 
							</fieldset>
                        <ul class="list-inline pull-right m-t-10">
                            <li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    </div>
					    <div class="tab-pane" id="step7">
                        
						<div class="col-md-12">
						<div class="row">
						<fieldset class="my-field">
						<legend>
						<h3 class="box-title m-b-0">Location Schedule</h3>
						</legend>
						<div class="div1">
						<a  href="#import-address" data-toggle="modal" class=" btn btn-success btn-xs m-b-10 m-r-5"><i class="fa fa-plus"></i> Import </a>
						<a class=" btn btn-success btn-xs m-b-10 my-button" id="btn1"><i class="fa fa-plus"></i> Add Location</a>
						
						</div>
						<div class="div2" style="display:none;">
<form>
<div class="row">
<div class="col-md-4">
								  <div class="form-group">
                                    <label>LOCATION #</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>STREET ADDRESS</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>CITY</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>State</label>
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
                                    <label>COUNTY</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>ZIP + 4</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
</div>
<fieldset class="my-field"> 
															   <legend> BUILDINGS</legend>
															   
															   <div class="input_fields_wrap14">
															   <a class="add_field_button14 btn btn-success btn-xs m-b-10"><i class="fa fa-plus"></i>Add Building</a>
                                                                  <div class="clearfix"></div>
                                                                  <div class="row m-b-10">
                                                                     
                                                                       <div class="col-md-5">
								 <div class="form-group">
                                    <label>BUILDING #</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div> </div>
								<div class="col-md-5">
								 <div class="form-group">
                                    <label>SQ FT</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div> </div>
                                                                       
    <div class="col-md-2 m-t-20"><a href="#" class=" btn btn-danger btn-xs m-t-10 pull-rigt"><i class="fa fa-trash"></i></a></div>
                                                                        </div>
                                                                    
                                                                     </div>
                                                        </fieldset>
</form><button type="button" class="btn  m-t-10 btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button><button type="button" id="btn2" class="btn my-button  m-t-10 btn-default btn-xs pull-right m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
						
						</div>
						</fieldset>
						</div>
						
						</div>
						
						
                        <ul class="list-inline pull-right m-t-10">
                             <li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    </div>
					  <div class="tab-pane" id="step8">
        <div class="col-md-12">
						<div class="row">
						<fieldset class="my-field">
						<legend>
  <h3 class="box-title m-b-0"> Additional Interest </h3>					

</legend>
						<div class="div3">
						<a  href="#import-interest" data-toggle="modal" class=" btn btn-success btn-xs m-b-10 m-r-5"><i class="fa fa-plus"></i> Import </a>
						<a class=" btn btn-success btn-xs m-b-10 my-button" id="btn3"><i class="fa fa-plus"></i> Add Interest</a>
						
						</div>
						<div class="div4" style="display:none;">
<form>
<fieldset class="my-field">
<legend>INTEREST</legend>


<div class="row">
<div class="col-md-6">

                              <div class="form-group">
                                    <label>INTEREST</label>
                                   
                                        <select class="form-control">
                                        <option value=""></option><option value="AI">Additional Insured</option><option value="BW">Breach of Warranty</option><option value="CO">Co-Owner</option><option value="EL">Employee As Lessor</option><option value="LO">Leaseback Owner</option><option value="LH">Lienholder</option><option value="LP">Loss Payee</option><option value="MG">Mortgagee</option><option value="OW">Owner</option><option value="RG">Registrant</option><option value="TT">Trustee</option><option value="OT">Other</option>
                                        </select>
 </div>
									
									   </div>
								<div class="col-md-6">
								  <div class="form-group">
                                    <label>DESCRIPTION IF OTHER</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								
								
								</div>
								
					</fieldset>		
								<fieldset class="my-field">
								
								<legend>
								NAME AND ADDRESS
								</legend>
								<div class="row">
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>NAME</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>STREET ADDRESS</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
									<div class="col-md-4">
								  <div class="form-group">
                                    <label>APT / SUITE / OTHER</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>CITY</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label>State</label>
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
                                    <label>ZIP CODE</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-6">
								  <div class="form-group">
                                    <label>RANK</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
									<div class="col-md-6">
								  <div class="form-group">
                                    <label>REFERENCE/LOAN #</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
                                                            <div class="form-group">
                                                               <label></label>
                                                               <div class="checkbox checkbox-success m-0">
                                                                  <input id="checkbox11" type="checkbox">
                                                                  <label for="checkbox11">  EVIDENCE: CERTIFICATE</label>
                                                               </div>
                                                            </div>
                                                         </div>
														 
														 <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label></label>
                                                               <div class="checkbox checkbox-success m-0">
                                                                  <input id="checkbox12" type="checkbox">
                                                                  <label for="checkbox12">  EVIDENCE: POLICY</label>
                                                               </div>
                                                            </div>
                                                         </div>
														 
														 <div class="col-md-4">
                                                            <div class="form-group">
                                                               <label></label>
                                                               <div class="checkbox checkbox-success m-0">
                                                                  <input id="checkbox13" type="checkbox">
                                                                  <label for="checkbox13">  EVIDENCE: SEND BIL</label>
                                                               </div>
                                                            </div>
                                                         </div>
								
									
								
</div>
<fieldset class="my-field"> 
															   <legend>INTEREST IN ITEM NUMBER</legend>
							<div class="row">
<div class="col-md-4">
								  <div class="form-group">
                                    <label>LOCATION</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>BUILDING</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>VEHICLE</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>BOAT</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>ITEM CLASS</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>ITEM</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div></div>
								
								<div class="col-md-12">
                                <div class="form-group">
                                    <label>ITEM DESCRIPTION</label>
                               
                                        <textarea rows="4" class=" form-control" value=""></textarea>
                                </div></div>
</div>							
														
														
														
														</fieldset>
</form><button type="button" class="btn  m-t-10 btn-success btn-xs pull-right">Save    <i class="fa fa-pencil" aria-hidden="true"></i></button><button type="button" id="btn4" class="btn my-button  m-t-10 btn-default btn-xs pull-right m-r-5">Cancel    <i class="fa fa-remove" aria-hidden="true"></i></button>
						
						</div>
						</fieldset>
						</div>
						
						</div>
						
						
                        <ul class="list-inline pull-right m-t-10">
                            <li><button type="button" class="btn btn-success btn-continue m-r-5">Continue <i class="fa fa-long-arrow-right"></i></button> <button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="step9">
                       			 
        <div class="col-md-12">
						<div class="row">
						<fieldset class="my-field">
						<legend>
  <h3 class="box-title m-b-0">Nature Of Business</h3>					

</legend>
<form>
<div class="row">
<div class="col-md-4">

                              <div class="form-group">
                                    <label>NATURE OF BUSINESS</label>
                                   
                                        <select class="form-control">
                                           <option value=""></option><option value="AP">Apartments</option><option value="CD">Condominiums</option><option value="CT">Contractor</option><option value="FA">Farm</option><option value="IN">Institutional</option><option value="MN">Manufacturing</option><option value="OF">Office</option><option value="RS">Restaurant</option><option value="RT">Retail</option><option value="SV">Service</option><option value="WL">Wholesale</option><option value="OT">Other</option>
                                        </select>
 </div>
									
									   </div>
<div class="col-md-4">
								  <div class="form-group">
                                    <label>OTHER </label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div>
								</div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>DATE BUSINESS STARTED</label>
                               
                                        <input type="text" class="mydatepicker form-control" value="">
                                </div>
								</div>
								
								<div class="col-md-12">
								  <div class="form-group">
                                    <label>DESCRIPTION OF PRIMARY OPERATIONS</label>
                               
                                        <textarea type="text" rows="5" class=" form-control" value=""></textarea>
                                </div>
								</div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>RETAIL STORES OR SERVICE OPERATIONS % OF TOTAL SALES:</label>
                               
                                     <div></div>
                                </div>
								</div>
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>INSTALLATION, SERVICE OR REPAIR WORK</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div>
								</div>
								
								<div class="col-md-4">
								  <div class="form-group">
                                    <label>OFF PREMISES INSTALLATION, SERVICE OR REPAIR WORK</label>
                               
                                        <input type="text" class=" form-control" value="">
                                </div>
								</div>
								<div class="col-md-12">
								  <div class="form-group">
                                    <label>DESCRIPTION OF OPERATIONS OF OTHER NAMED INSUREDS</label>
                               
                                        <textarea type="text" rows="5" class=" form-control" value=""></textarea>
                                </div>
								</div>
								</div>
</form>

</fieldset>
                    </div> </div>
					<ul class="list-inline pull-right m-t-10">
                            <li><button type="button" class="btn btn-info">Finish <i class="fa fa-long-arrow-right"></i></button></li>
                        </ul>
                    <div class="clearfix"></div>
                
				</div></div>
            </form>
        </div>
    </section>


	
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
	
	      <div class="modal fade" id="import-address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
    <script src="assets/admin/js/custom.js"></script>
    <script src="assets/admin/plugins/components/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/admin/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/admin/plugins/components/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/admin/plugins/components/sparkline/jquery.charts-sparkline.js"></script>
    <script src="assets/admin/plugins/components/knob/jquery.knob.js"></script>
    <script src="assets/admin/plugins/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
    <script src="assets/admin/js/db1.js"></script>
	 <script src="assets/admin/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/admin/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
	      <script type="javascript" src="assets/admin/js/policy.js">	 </script>
<script>
$(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap11"); //Fields wrapper
           var add_button      = $(".add_field_button11"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row m-b-10"> <div class="col-md-11"> <input type="text" class="form-control" placeholder="VYMARY CADIZ" name="mytext[]"> </div> <div class="col-md-1 remove_field11"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div> </div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field11", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
		 $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap12"); //Fields wrapper
           var add_button      = $(".add_field_button12"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row m-b-10"> <div class="col-md-5"><div class="form-group"> <label>FEE NAME</label> <select class="form-control"> <option value="">Select A Fee</option><option value="5">Fee</option><option value="8">Other Fee</option><option value="7">Policy Fee</option><option value="6">Tax</option> </select> </div></div> <div class="col-md-6"><label>Amount</label><div class="row"> <div class="col-md-4"> <select class="form-control"><option value="">$</option><option value="">%</option> </select> </div> <div class="col-md-8"> <input type="text" class="form-control" placeholder="0" name="mytext[]"> </div> </div> </div> <div class="col-md-1 remove_field12 m-t-20"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div> </div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field12", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
		  $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap13"); //Fields wrapper
           var add_button      = $(".add_field_button13"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row m-b-10"> <div class="col-md-5"><div class="form-group"> <label>FEE NAME</label> <select class="form-control"><option value="">Select A Fee</option><option value="6">Application fee on PIP/PD policy</option><option value="11">Auto Tag Renew</option><option value="1">Comm. Policy Setup Fee</option><option value="14">Decal</option><option value="4">Delivery of Doc to sign Fee</option><option value="5">Down Payment A</option><option value="2">Endorsement Fee</option><option value="15">Hard Florida Plate</option><option value="7">Inspection fee</option><option value="10">MVR Commercial</option><option value="3">MVR Personal Fee</option><option value="13">Registration</option><option value="8">Six month towing packages</option><option value="12">Title Transfer</option><option value="9">Twelve month towing package</option></select> </div></div> <div class="col-md-6"><label>Amount</label><div class="row"> <div class="col-md-4"> <select class="form-control"><option value="">$</option><option value="">%</option> </select> </div> <div class="col-md-8"> <input type="text" class="form-control" placeholder="0" name="mytext[]"> </div> </div> </div> <div class="col-md-1 remove_field13 m-t-20"><a href="#" class=" btn btn-danger btn-xs m-t-10 "><i class="fa fa-trash"></i></a></div> </div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field13", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });

		  $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $( ".input_fields_wrap14"); //Fields wrapper
           var add_button      = $(".add_field_button14"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div class="row m-b-10"> <div class="col-md-5"> <div class="form-group"> <label>BUILDING #</label> <input type="text" class=" form-control" value=""> </div> </div><div class="col-md-5"> <div class="form-group"> <label>SQ FT</label> <input type="text" class=" form-control" value=""> </div> </div> <div class="col-md-2 m-t-20 remove_field14"><a href="#" class=" btn btn-danger btn-xs m-t-10 pull-rigt"><i class="fa fa-trash"></i></a></div> </div>'); //add input box
               }
           });
           
         
           $(wrapper).on("click",".remove_field14", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
         });
    $('.my-button').click(function(){    
         if(this.id == 'btn1'){
           $('.div2').show();
           $('.div1').hide();
         }else{
           $('.div2').hide();
           $('.div1').show();
         }
         })
	    $('.my-button').click(function(){    
         if(this.id == 'btn3'){
           $('.div4').show();
           $('.div3').hide();
         }else{
           $('.div4').hide();
           $('.div3').show();
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
