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
                        <span class="caption-subject font-red sbold uppercase"><?php echo e($heading ?? ''); ?></span>
                    </div>
                     
                <div class="col-md-2 pull-right">
                                            <div style="width: 150px;" class="input-group"> 
                                                <a href="#" data-toggle="modal" data-target="#notification"> 
                                                    <button  class="btn btn-success"><i class="fa fa-plus-circle"></i> Send notification</button> 
                                                </a>
                                            </div>
                                        </div>

                </div>
                <div class="portlet-body table-responsive">
                    <div class="table-toolbar">
                        <div class="row">
                            <form action="<?php echo e(route('user')); ?>" method="get" id="filter_data">
                            <div class="col-md-2">
                                <select name="status" class="form-control" onChange="SortByStatus('filter_data')">
                                    <option value="">Search by Status</option>
                                    <option value="active" <?php if($status==='active'): ?> selected  <?php endif; ?>>Active</option>
                                    <option value="inActive" <?php if($status==='inActive'): ?> selected  <?php endif; ?>>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="role_type" class="form-control" onChange="SortByStatus('filter_data')">
                                    <option value="">Search by Role</option>
                                    <?php if($roles): ?>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($role->id); ?>" <?php if($role_type==$role->id): ?> selected <?php endif; ?> ><?php echo e($role->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input value="<?php echo e((isset($_REQUEST['search']))?$_REQUEST['search']:''); ?>" placeholder="search by Name/Email" type="text" name="search" id="search" class="form-control" >
                            </div>

                            <div class="col-md-2">
                                <input value="<?php echo e((isset($_REQUEST['mobile_number']))?$_REQUEST['mobile_number']:''); ?>" placeholder="search by mobile number" type="text" name="mobile_number" id="search" class="form-control" >
                            </div>
                            <div class="col-md-2">
                                <input type="submit" value="Search" class="btn btn-primary form-control">
                            </div>
                           
                        </form>
                         
                       <div class="col-md-2 pull-right">
                            <div style="width: 150px;" class="input-group"> 
                                <a href="<?php echo e(route('user.create')); ?>">
                                    <button class="btn  btn-primary"><i class="fa fa-user-plus"></i> Add User</button> 
                                </a>
                            </div>
                        </div> 
                        </div>
                    </div>

                     <?php if(Session::has('flash_alert_notice')): ?>
                         <div class="alert alert-success alert-dismissable" style="margin:10px">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                          <i class="icon fa fa-check"></i>  
                         <?php echo e(Session::get('flash_alert_notice')); ?> 
                         </div>
                    <?php endif; ?>
                    <?php if($users->count()==0): ?>
                   
                     <span class="caption-subject font-red sbold uppercase"> Record not found!</span>
                    <?php else: ?> 
                    <table class="table table-striped table-hover table-bordered" id="">
                        <thead>
                            <tr>
                                 <th> Sno. </th>
                                 <th>User Details</th>
                                 <th>Referral Code</th>
                                 <th>Team Name</th>
                                <th> Full Name </th>
                                <th> Email </th>
                                 <th> Account Details </th>
                                <th> Phone </th>
                                <th> <?php echo e(($heading=='Admin Users')?'User Type':''); ?> </th>
                                <th>Signup Date</th>
                                <th>Status</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>

                    
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                 <td> <?php echo e((($users->currentpage()-1)*15)+(++$key)); ?></td>
                                 <td>

                              <table class="table table-striped table-hover table-bordered">
                                <tr>
                                  <td>User Id</td>
                                  <td><?php echo e($result->id); ?></td>    
                                </tr>
                                <tr>
                                  <td>UserName</td>
                                  <td><?php echo e($result->user_name); ?></td>    
                                </tr>
                                <tr>
                                  <td>Referral</td>
                                  <td><?php echo e($result->referal_code); ?></td>
                                </tr>
                                <tr>
                                  <td>Used by</td>
                                  <td><?php echo e($result->ref_count); ?></td>
                                </tr>
                                <tr>
                                  <td>User deposit</td>
                                  <td><?php echo e(round($result->ref_deposit??0,2)); ?></td>
                                </tr>
                                <tr>  
                                  <td>Referral Deposit</td>
                                  <td><?php echo e(round($result->reference_deposit??0,2)); ?></td>
                                </tr>
                                <tr>  
                                  <td>Affiliate User</td>
                                  <td><?php echo e(($result->affiliate_user?'Yes':'No')); ?></td>
                                </tr>

                              </table>
                                 </td>
                                 <td> <?php echo e($result->reference_code); ?>

                                 </td>
                                 <td> <?php echo e($result->team_name); ?></td>
                                <td> <?php echo e($result->name); ?> </td>
                                <td> <?php echo e($result->email); ?> </td>
                                 <td>  


<table class="table table-striped table-hover table-bordered">
  <tr>
    <td>
      

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#account_<?php echo e($result->id); ?>">
         Total Balance : 
 <?php echo e(round($result->balance,2)); ?> INR
        </button>

    </td>
  </tr>
  <tr>
    <td>
      

<a href="<?php echo e(url('admin/wallets?search='.$result->email)); ?>" target="_blank">
<button type="button" class="btn btn-success">
 View Wallets
</button>
</a>
    </td>
  </tr>

    <tr>
      <td>
        <a href="<?php echo e(url('admin/wallets/create?user_id='.$result->id)); ?>" target="_blank">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#11account_<?php echo e($result->id); ?>">
         Add Money
        </button>
        </a>
    </td>
  </tr>

  <tr>
    <td>

<a href="<?php echo e(url('admin/documents?search='.$result->email)); ?>" target="_blank">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#1account_<?php echo e($result->id); ?>">
 View documents
</button>
</a>
    </td>
  </tr>


  <tr>
    <td>
      Last Match Played: <br><br>
      <?php $__currentLoopData = $result->mat_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <p>
          <a  style="padding: 3px; width: 100%" class="btn-success" href="<?php echo e(url('admin/matchContest?match_id='.$val->match_id.'&email='.$result->email)); ?>">
            <?php echo e($val->short_title); ?> - <?php echo e($val->status_str); ?> </a>  
          </p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </td>
  </tr>

  <tr>
    <td></td>
  </tr>
</table>
                                    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="account_<?php echo e($result->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Account Summary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table  class="table table-striped table-hover table-bordered"> 
        <?php $__currentLoopData = $result->amount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e(ucfirst($key)); ?></td>
              <td><?php echo e(round($val,2)); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
              <td>Available Balance</td>
              <td><?php echo e(round($result->balance,2)); ?> INR</td>
          </tr>
        
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo e(url('admin/paymentsHistory?search='.$result->id)); ?>">
        <button type="button" class="btn btn-primary">
            View All Transaction
        </button>
      </div>
    </div>
  </div>
</div>

                                 </td>
                                <td> <?php echo e($result->mobile_number); ?> </td>
                                <td class="center"> 
                               
                                    <?php if($result->role_type==3): ?>
                                    <a href="<?php echo e(route('user.edit',$result->id)); ?>?role_type=<?php echo e($result->role_type); ?>">
                                        View Details
                                        <i class="glyphicon glyphicon-eye-open" title="edit"></i> 

                                    </a>
                                    <?php else: ?>
                                      <?php echo e((($result->role_type==1)?'admin':($result->role_type==2))

                                      ?'Sales':(($result->role_type==4)?'Support':'Admin')); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo Carbon\Carbon::parse($result->created_at)->format('d-m-Y');; ?>

                                </td>
                                <td>
                                    <span class="label label-<?php echo e(($result->status==1)?'success':'warning'); ?> status" id="<?php echo e($result->id); ?>"  data="<?php echo e($result->status); ?>"  onclick="changeStatus(<?php echo e($result->id); ?>,'user')" >
                                            <?php echo e(($result->status==1)?'Active':'Inactive'); ?>

                                        </span>
                                </td>
                                <td> 
                                    <a href="<?php echo e(route('user.edit',$result->id)); ?>?role_type=<?php echo e($result->role_type); ?>">
                                            <i class="fa fa-fw fa-pencil-square-o" title="edit"></i> 
                                        </a>

                                        <?php echo Form::open(array('class' => 'form-inline pull-left deletion-form', 'method' => 'DELETE',  'id'=>'deleteForm_'.$result->id, 'route' => array('user.destroy', $result->id))); ?>

                                        <button class='delbtn btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete" id="<?php echo e($result->id); ?>"><i class="fa fa-fw fa-trash" title="Delete"></i></button>
                                        
                                         <?php echo Form::close(); ?>


                                    </td>
                               
                            </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php endif; ?>   
                        </tbody>
                    </table>
                    Showing <?php echo e(($users->currentpage()-1)*$users->perpage()+1); ?> to <?php echo e($users->currentpage()*$users->perpage()); ?>

                    of  <?php echo e($users->total()); ?> entries
                     <div class="center" align="center">  <?php echo $users->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render(); ?></div>
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

<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notify User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">

<?php echo Form::model($users, ['route' => ['user.store'],'class'=>'form-horizontal user-form','id'=>'user-form','enctype'=>'multipart/form-data']); ?>


<div class="form-body">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> Please fill the required field! </div>
        <div class="form-group <?php echo e($errors->first('message_type', ' has-error')); ?>">
            <label class="control-label col-md-3">Message Type <span class="required"> * </span></label>
            <div class="col-md-7"> 
                <select class="form-control" name="message_type"> 
                        <option value="notify">Notify</option>
                </select>
                
                <span class="help-block"><?php echo e($errors->first('message_type', ':message')); ?></span>
            </div>
        </div> 

        <div class="form-group <?php echo e($errors->first('title', ' has-error')); ?>">
            <label class="control-label col-md-3">Email <span class="required"> * </span></label>
            <div class="col-md-7"> 
                <?php echo Form::email('email',null, ['class' => 'form-control','data-required'=>1]); ?> 
                <input type="hidden" name="notification" value="notification">
                <span class="help-block"><?php echo e($errors->first('title', ':message')); ?></span>
            </div>
        </div>
 
        <div class="form-group <?php echo e($errors->first('title', ' has-error')); ?>">
            <label class="control-label col-md-3">Title <span class="required"> * </span></label>
            <div class="col-md-7"> 
                <?php echo Form::text('title',null, ['class' => 'form-control','data-required'=>1]); ?> 
                
                <span class="help-block"><?php echo e($errors->first('title', ':message')); ?></span>
            </div>
        </div> 

          <div class="form-group <?php echo e($errors->first('message', ' has-error')); ?>">
            <label class="control-label col-md-3">Message<span class="required"> </span></label>
            <div class="col-md-7"> 
                <?php echo Form::textarea('message',null, ['class' => 'form-control','data-required'=>1,'rows'=>3,'cols'=>5]); ?> 
                
                <span class="help-block"><?php echo e($errors->first('message', ':message')); ?></span>
            </div>
        </div>

    
        
    <div class="form-actions">
        <div class="row" style="padding-right:12px">
            <div class="col-md-10">
              <?php echo Form::submit(' Send Notification ', ['class'=>'btn  btn-success pull-right','id'=>'saveBtn']); ?>

            </div>
        </div>
    </div>
</div>
<?php echo Form::close(); ?>   


   </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">

function SortByStatus(filter_data) {
$('#filter_data').submit();
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('packages::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/web/modules/Admin/views/users/user/index.blade.php ENDPATH**/ ?>