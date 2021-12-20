  <?php $__env->startSection('title', 'Dashboard'); ?>
    <?php $__env->startSection('header'); ?>
    <h1>Dashboard</h1>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?> 
      <?php echo $__env->make('packages::partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php echo $__env->make('packages::partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                   <?php echo $__env->make('packages::partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->

                        <div class="row">
                            <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase"> Matches Reports(<?php echo e($total_match??0); ?>) </span>
                                    </div>
                                     <div class="col-md-12 pull-right">
                                         

                                       

                                      <button type="button" class="btn pull-right btn-success" data-toggle="modal" data-target="#getMatchReport" data-whatever="@" style="margin-right: 10px">Download Report</button>
                                         
                                    </div>
                                     
                                </div>
                                  
                                    <?php if(Session::has('flash_alert_notice')): ?>
                                         <div class="alert alert-success alert-dismissable" style="margin:10px">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                          <i class="icon fa fa-check"></i>  
                                         <?php echo e(Session::get('flash_alert_notice')); ?> 
                                         </div>
                                    <?php endif; ?>
                                <div class="portlet-body table-responsive">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <form action="<?php echo e(route('getMatchReport')); ?>" method="get" id="filter_data">
                                            
                                            <div class="col-md-2">
                                              <input id="" class="form-control   valid s_date" data-required="1" size="16" data-date-format="yyyy-mm-dd"   name="start_date" type="text" aria-invalid="false" placeholder="Start Date" value="<?php echo e((isset($_REQUEST['start_date']))?$_REQUEST['start_date']:''); ?>"> 

                                            </div>

                                             <div class="col-md-2">
                                              <input id="" class="form-control end_date e_date" data-required="1" size="16" data-date-format="dd-mm-yyyy" name="end_date" type="text" placeholder="End Date" value="<?php echo e((isset($_REQUEST['end_date']))?$_REQUEST['end_date']:''); ?>">

                                            </div>

                                            <div class="col-md-2">
                                                <input value="<?php echo e((isset($_REQUEST['search']))?$_REQUEST['search']:''); ?>" placeholder="Search by id or name" type="text" name="search" id="search" class="form-control" >
                                            </div>
                                              <div class="col-md-2">
                                                <select class="form-control" name="status">
                                                    <option value="">Select Status</option>
                                                    <option value="1" <?php if(isset($_REQUEST['status']) && $_REQUEST['status']==1): ?> selected <?php endif; ?>>Upcoming</option>
                                                     <option value="2" <?php if(isset($_REQUEST['status']) && $_REQUEST['status']==2) { echo "selected"; }  ?>> Completed</option>
                                                      <option value="3" <?php if(isset($_REQUEST['status']) && $_REQUEST['status']==3): ?> selected <?php endif; ?>>Live</option>
                                                      <option value="4" <?php if(isset($_REQUEST['status']) && $_REQUEST['status']==4): ?> selected <?php endif; ?>>Cancelled</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="Search" class="btn btn-primary form-control">
                                            </div>
                                           
                                        </form>
                                         <div class="col-md-2">
                                             <a href="<?php echo e(route('getMatchReport')); ?>">   <input type="submit" value="Reset" class="btn btn-default form-control"> </a>
                                        </div>
                                       
                                        </div>
                                    </div>
                                     
                                    <table class="table table-striped table-hover table-bordered" id="contact">
                                        <thead>
                                            <tr>
                                                <th> Sno.</th>
                                                <th> Match Id</th>
                                                <th> Match Name </th>  
                                                <th> Contest Joined</th>
                                                <th>  Main User</th>
                                                <th>  System User</th>
                                                <th>
                                                  System Prize
                                                </th>
                                                <th>  Prize Given</th>
                                                <th>Amount Recieved</th>
                                                <th> Status</th> 
                                                <th> Date </th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $match; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                              <td>
                                                <?php echo e($key+1); ?>

                                            </td>
                                                <td> <?php echo e($result->match_id); ?> </td>
                                                 <td> <?php echo e($result->short_title); ?> </td>
                                                 
                                                 <td> 
                                                  <?php echo e($result->join_contest); ?>

                                                </td>
                                                <td> 
                                                  <?php echo e($result->total_main_user); ?>

                                                </td>
                                               
                                                <td> 
                                                  <?php echo e($result->total_system_user); ?>

                                                </td>

                                                 <td>
                                                  Sys : <?php echo e(round($result->system_user_prize)); ?> INR
                                                  <br>
                                                  User :
                                                  <?php echo e(round($result->user_prize)); ?> INR
                                                  <br>
                                                  Collection : <?php echo e($result->total_amount_collection); ?> INR
                                                </td>
                                                
                                                <td> 
                                                  <?php echo e(round($result->
                                                total_prize_distributed)); ?>

                                                </td>
                                                <th><?php echo e(round($result->total_amt_rcv)); ?></th>
                                                
                                               
                                      <td> <?php echo e($result->status_str); ?> </td>
                                      <td><?php echo e(date('d,M Y, h:i A',$result->timestamp_end)); ?>

                                      </td>
                                         
                                    </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
                            Showing <?php echo e(($match->currentpage()-1)*$match->perpage()+1); ?> to <?php echo e($match->currentpage()*$match->perpage()); ?>

                                    of  <?php echo e($match->total()); ?> entries <br><br>

                             <span id="error_msg"></span>
                               
                        <div class="center" align="center">  <?php echo $match->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render(); ?>

                         </div>
                             
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    
    
    <!-- END QUICK SIDEBAR -->
</div>  


<!-- start match -->
<div class="modal fade" id="changeMatchStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Match Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
           
          <input type="hidden" name="change_status" value="change_status">
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Match Id:</label>
            <input type="text" class="form-control" id="match_id"  name="match_id" required="" >
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Match Status:</label>
             <select class="form-control" name="status" required="">
                <option value="">Select Status</option>
                <option value="1">Upcoming</option>
                <option value="2">Completed</option>
                <option value="3">Live</option>
                <option value="4">Cancelled</option>
             </select> 
          </div>
         <!--  <div class="form-group">
            <label for="message-text" class="col-form-label">Match Id:</label>
            <textarea class="form-control" id="message-text" ></textarea>
          </div> -->
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"> Save </button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
<!-- End status -->

<div class="modal fade" id="changeDate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Match Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" name="change_date" value="change_date">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Start Date:</label>
            <input type="text" class="form-control form_datetime_start form_datetime" id="start_date" value="<?php echo e(date('Y-m-d H:i')); ?>" readonly name="date_start">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" >End Date:</label>
            <input type="text" class="form-control form_datetime_end form_datetime" id="end_date" value="<?php echo e(date('Y-m-d H:i')); ?>" readonly name="date_end">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Match Id:</label>
            <input type="text" class="form-control" id="match_id"  name="match_id" >
          </div>
            
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"> Save </button>
        </div>

        </form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="popMsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Email sent successfully</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="popMsg2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Prize distributed successfully!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="saveMatch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Save Match information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p> Please wait while match information is getting saved </p>
      </div> 
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>




<div class="modal fade" id="getMatchReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Download Reports</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(url('admin/downloadMatchReport')); ?>">
          <input type="hidden" name="change_date" value="change_date">
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Start Date:</label>
            <input type="text" class="form-control s_date" id=""   readonly name="date_start" data-date-format="yyyy-mm-dd"> 


          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" >End Date:</label>
            <input type="text" class="form-control e_date" id=""  readonly name="date_end">
          </div> 
          
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Montly:</label>
             <select class="form-control" name="month">
                <option value="">Select Month</option>
                <option value="1">JAN</option>
                <option value="3">FEB</option>
                <option value="3">MARCH</option>
                <option value="4">APRIL</option>
                <option value="5">MAY</option>
                <option value="6">JUNE</option>
                <option value="7">JULY</option>
                <option value="8">AUG</option>
                <option value="9">SEP</option>
                <option value="10">OCT</option>
                <option value="11">NOV</option>
                <option value="12">DEC</option> 
                
             </select> 
          </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"> Save </button>
        </div>

        </form>
      </div>
     
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('packages::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/web/modules/Admin/views/report/matchReport.blade.php ENDPATH**/ ?>