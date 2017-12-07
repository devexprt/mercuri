

            <!-- Edit Form Start here -->
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">EDIT  AGENT</h4>
               </div>
             <form action="admin/edit" method="post" enctype='multipart/form-data'>
             <?php /*echo'<pre>';
         print_r($lists);
         echo '</pre>';*/
         foreach($lists as $list)
         {
         ?>
        <div class="modal-body">
         <div class="row">
         <div class="col-md-12">
         <div class="form-group">
        <label>Name</label>
        <input type="hidden" name="id" value="<?php echo $list->id; ?>">
          <input type="text" name="name" required="" value="<?php echo $list->name; ?>" class="form-control" placeholder=""/>
        </div>
        </div> 
        <div class="col-md-6">
        <div class="form-group">
        <label>Joining Date</label>
          <input type="text" name="join_date" required="" value="<?php echo $list->joining_date; ?>" class="mydatepicker form-control" placeholder=""/>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label>DOB</label>
           <input type="text" name="dob" required="" value="<?php echo $list->dob; ?>" class="mydatepicker form-control" placeholder=""/>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label>Email</label>
           <input type="email" name="email" value="<?php echo $list->email; ?>" class="email form-control" placeholder=""/>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label>Password</label>
          <input type="password" name="password" value="<?php echo $list->password; ?>" class=" form-control" placeholder=""/>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label>Gender</label>
          <select name="gender"  class=" form-control">
            <?php 
            $gen = $list->gender;
             if($gen == 'male')
             {
            ?>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <?php 
            } 
            else
            { ?>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <?php }?>
          </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <label>Status</label>
          <select name="status" class=" form-control">
          <?php 
            $stat = $list->status;
             if($stat == 1)
             {
            ?>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
            <?php 
            } 
            else
            { ?>
            <option value="0">Inactive</option>
            <option value="1">Active</option>
            <?php }?>
          </select>
       </div>
       </div>
       <div class="col-md-12">
        <div class="form-group">
          <label>Image</label>
          <?php if(file_exists('assets/uploads/agent/'.$list->image) && !empty($list->image)) { ?> 
          <img src="assets/uploads/agent/<?php echo $list->image; ?>" width="150px" height="150px" /> 
          <?php } else { ?>
          <img src="assets/uploads/agent/default-profile.png" style=""  width="150px" height="150px"/>
          <?php } ?>
          <input type="file" class="file orm-control" value="<?php echo $list->image; ?>" name="profile_pic">
       </div>
       </div>
       </div>
       </div>
       <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" >Cancel <i class="fa fa-remove"></i></button>
          <button type="submit" class="btn btn-success btn-sm">Save <i class="fa fa-pencil"></i></button>
       </div>
       <?php } ?>
      </form>
               <!-- End of Edit Form -->
