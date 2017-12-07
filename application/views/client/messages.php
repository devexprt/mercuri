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
      <title>Messages</title>
      <base href="<?php echo base_url(); ?>">
      <link href="assets/client/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/client/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/client/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="assets/client/css/editor.css">
      <link href="assets/client/css/animate.css" rel="stylesheet">
      <link href="assets/client/css/style.css" rel="stylesheet">
      <link href="assets/client/css/colors/default.css" id="theme" rel="stylesheet">
      <link rel="stylesheet" href="assets/client/css/chosen.css">
      <link rel="stylesheet" href="assets/client/css/bootstrap-tagsinput.css">
   </head>
   <body class="">
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
               <!-- Left sidebar -->
               <div class="col-md-12 for_padd">
                  <div class="white-box">
                     <!-- row -->
                     <div class="row">
                        <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                           <div>
                              <a href="#new-mail" data-toggle="modal" class="btn btn-info btn-block waves-effect waves-light">Compose</a>
                              <div class="list-group mail-list m-t-20"> 
							  <a href="#" class="list-group-item active">Inbox <span class="label label-rouded label-success pull-right">5</span></a>  <a href="#" class="list-group-item">Sent Mail</a>  </div>
                         
                           </div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                           <div class="inbox-center">
                              <div class="table-responsive">
                                 <table class="table table-hover">
                                    <thead>
                                       <tr>
                                          <th width="30">
                                             <div class="checkbox m-t-0 m-b-0 ">
                                                <input id="checkbox0" type="checkbox" class="checkbox-toggle" value="check all">
                                                <label for="checkbox0"></label>
                                             </div>
                                          </th>
                                          <th colspan="4">
                                         <button class="btn btn-danger waves-effect waves-light btn-sm"> Delete <i class="fa fa-trash"></i> </button>
                                          </th>
                                          <th class="hidden-xs" width="100">
                                             <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                             </div>
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="unread">
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch1">
                                                <label for="ch1"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Hritik Roshan</td>
                                          <td class="max-texts">
                                             <a href="inbox-detail.php" />
                                                <span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem
                                          </td>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> 12:30 PM </td>
                                       </tr>
                                       <tr class="unread">
                                       <td>
                                       <div class="checkbox m-t-0 m-b-0">
                                       <input type="checkbox" id="ch2">
                                       <label for="ch2"></label>
                                       </div>
                                       </td>
                                       <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                       <td class="hidden-xs">Genelia Roshan</td>
                                       <td class="max-texts"><a href="inbox-detail.php">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                       <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                       <td class="text-right"> May 13 </td>
                                       </tr>
                                       <tr class="unread">
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch3">
                                                <label for="ch3"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Ritesh Deshmukh</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-success">Imp</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 12 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch4">
                                                <label for="ch4"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Akshay Kumar</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 12 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch5">
                                                <label for="ch5"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Hritik Roshan</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 12 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch6">
                                                <label for="ch6"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                          <td class="hidden-xs">Genelia Roshan</td>
                                          <td class="max-texts"><a href="inbox-detail.php">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 11 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch7">
                                                <label for="ch7"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Ritesh Deshmukh</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-success">Imp</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 11 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch8">
                                                <label for="ch8"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Akshay Kumar</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 11 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch9">
                                                <label for="ch9"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Hritik Roshan</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 10 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch10">
                                                <label for="ch10"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                          <td class="hidden-xs">Genelia Roshan</td>
                                          <td class="max-texts"><a href="inbox-detail.php">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 10 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch11">
                                                <label for="ch11"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Ritesh Deshmukh</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-success">Imp</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 10 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch12">
                                                <label for="ch12"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Akshay Kumar</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 09 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch13">
                                                <label for="ch13"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Hritik Roshan</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 09 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch14">
                                                <label for="ch14"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                          <td class="hidden-xs">Genelia Roshan</td>
                                          <td class="max-texts"><a href="inbox-detail.php">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 09 </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="checkbox m-t-0 m-b-0">
                                                <input type="checkbox" id="ch15">
                                                <label for="ch15"></label>
                                             </div>
                                          </td>
                                          <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                          <td class="hidden-xs">Ritesh Deshmukh</td>
                                          <td class="max-texts"><a href="inbox-detail.php"><span class="label label-success">Imp</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                          <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                          <td class="text-right"> May 09 </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xs-7 m-t-20"> Showing 1 - 15 of 200 </div>
                              <div class="col-xs-5 m-t-20">
                                 <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                    <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.row -->
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
                  <form class="">
                     <div class="row">
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
                        </div>
                     </div>
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
                                 <option value="Not Started">Not Started</option>
                                 <option value="Waiting">Waiting</option>
                                 <option value="In Progress">In Progress</option>
                                 <option value="Deferred">Deferred</option>
                                 <option value="Completed">Completed</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Priority</label>
                              <select class="form-control">
                                 <option value="None">None</option>
                                 <option value="Low">Low</option>
                                 <option value="Medium">Medium</option>
                                 <option value="High">High</option>
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
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="row">
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
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
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
                              </div>
                           </div>
                        </div>
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
                     <button type="button" id="btn112" class="btn btn-default my-button btn-sm" >Cancel <i class="fa fa-remove"></i></button>
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
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel <i class="fa fa-remove"></i></button>
                  <button type="button" class="btn btn-success btn-sm">Reply <i class="fa fa-pencil"></i></button>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/client/plugins/components/jquery/dist/jquery.min.js"></script>
      <script src="assets/client/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="assets/client/js/jquery.slimscroll.js"></script>
      <script src="assets/client/js/waves.js"></script>
      <script src="assets/client/js/sidebarmenu.js"></script>
      <script src="assets/client/js/custom.js"></script>
      <script src="assets/client/plugins/components/chartist-js/dist/chartist.min.js"></script>
      <script src="assets/client/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
      <script src="assets/client/plugins/components/sparkline/jquery.sparkline.min.js"></script>
      <script src="assets/client/plugins/components/sparkline/jquery.charts-sparkline.js"></script>
      <script src="assets/client/plugins/components/knob/jquery.knob.js"></script>
      <script src="assets/client/plugins/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
      <script src="assets/client/js/db1.js"></script>
      <script src="assets/client/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
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