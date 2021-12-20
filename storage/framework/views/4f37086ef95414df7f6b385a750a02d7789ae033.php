<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
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
                                        <span class="caption-subject font-red sbold uppercase"><?php echo e($heading); ?>s</span>
                                    </div>
                                    <div class="col-md-3 pull-right">
                                            
        <a href="<?php echo e(route('documents','status=2')); ?>">
                    <button  class="btn btn-info">  Approved : <?php echo e($approved??0); ?> </button>
                                                    </a>

        <a href="<?php echo e(route('documents','status=1')); ?>">
                                                     <button  class="btn btn-success">  Pending : <?php echo e($pending??0); ?> </button> 
                                            </a>    
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
                                            <form action="<?php echo e(route('documents')); ?>" method="get" id="filter_data">
                                             
                                            <div class="col-md-3">
                                                <input value="<?php echo e((isset($_REQUEST['search']))?$_REQUEST['search']:''); ?>" placeholder="Search by  name" type="text" name="search" id="search" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="Search" class="btn btn-primary form-control">
                                            </div>
                                           
                                        </form>
                                         <div class="col-md-2">
                                             <a href="<?php echo e(route('documents')); ?>">   <input type="submit" value="Reset" class="btn btn-default form-control"> </a>
                                        </div>
                                       
                                        </div>
                                    </div>
                                     
                                    <table class="table table-striped table-hover table-bordered" id="">
                                        <thead>
                                            <tr>
                                                <th> Sno. </th>
                                                <th> Bank details </th>
                                                <th>Passbook</th>
                                                <th> Doc Type </th> 
                                                <th> Doc Number</th> 
                                                <th> Doc Proof </th> 
                                                <th> Balance </th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                 <td>   <?php echo e((($documents->currentpage()-1)*15)+(++$key)); ?> 
                                                </td>

                                                <td>

<!-- Button trigger modal -->
<p>Name : <?php echo e($result->user->name??'NA'); ?></p>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#UserDetails_<?php echo e($result->id); ?>">
  User Details
</button>
<br></br>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#BankDetails_<?php echo e($result->id); ?>">
  Bank Details
</button>


<!-- Modal -->
<div class="modal fade" id="BankDetails_<?php echo e($result->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bank Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if($result->bankAccount): ?>
    <h4>Bank Details</h4>
    <table class="table table-striped table-hover table-bordered table-responsive">
                    
                  <tr>
                      <td>
                      Acc Holder: 
                      </td>
                      <td> <?php echo e($result->bankAccount->account_name); ?>

                    </td>
                  </tr>
                  <tr>
                      <td>
                        Bank Name: 
                      </td>
                      <td><?php echo e($result->bankAccount->bank_name); ?>

                    </td>
                    </tr>
                  <tr>
                    <td>
                      Acc Number: 
                    </td>
                    <td> <?php echo e($result->bankAccount->account_number); ?>

                    </td>
                  </tr>
                  <tr><td>
                      Ifsc: 
                    </td>
                    <td><?php echo e($result->bankAccount->ifsc_code); ?></td>
                  </tr>
                  <tr>
                      <td>
                      Acc Type: 
                    </td>
                    <td>
                      <?php echo e($result->bankAccount->account_type); ?>

                    </td>
                    
                  </tr>
                  <tr>
                    <td>User Id</td>
                    <td>
                      <?php echo e($result->bankAccount->user_id); ?>

                    </td>
                  </tr>

                  <tr>
                    <td>UPI ID</td>
                    <td>
                      <?php echo e($result->upi_id); ?>

                    </td>
                  </tr>
    </table>
    <?php else: ?>
    Bank Details is not available!
    <?php endif; ?>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="UserDetails_<?php echo e($result->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          
          <!-- <hr><b>User Details</b></hr> -->
          <div class="col-md-12 form-group ">
         <h4>Personel Info </h4>
        <table class="table table-striped table-hover table-bordered table-responsive">
          <tr>
            <td>User ID/Name</td>
            <td><?php echo e($result->user->id??'NA'); ?>/<?php echo e($result->user->user_name??'NA'); ?></td>
          </tr>
          <tr>
            <td>Profile Name</td>
            <td><?php echo e($result->user->name??'NA'); ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo e($result->user->email??'NA'); ?></td>
          </tr>

          <tr>
            <td>Mobile</td>
            <td><?php echo e($result->user->mobile_number??'NA'); ?></td>
          </tr>

          <tr>
            <td>State</td>
            <td><?php echo e($result->user->state??'NA'); ?></td>
          </tr>

          <tr>
            <td>Date of Birth</td>
            <td><?php echo e($result->user->dateOfBirth??'NA'); ?></td>
          </tr>

          <tr>
            <td>Reference Code</td>
            <td><?php echo e($result->user->reference_code??'NA'); ?></td>
          </tr>
          <tr>
            <td>Referral Code</td>
            <td><?php echo e($result->user->referal_code??'NA'); ?></td>
          </tr>

          <tr>
            <td>Team Name</td>
            <td><?php echo e($result->user->team_name??'NA'); ?></td>
          </tr>

        </table>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo e(route('user.edit',$result->user->id)); ?>?role_type=3">
        <button type="button" class="btn btn-primary">Edit or View</button>
      </a>
      </div>
    </div>
  </div>
</div></td>

<td>

 <img src="<?php echo e($result->bankAccount->bank_passbook_url??'#'); ?>" width="100px" height="50px;"  data-toggle="modal" data-target="#Passbook_<?php echo e($result->id); ?>"> 

 
<!-- Modal -->
<div class="modal fade" id="Passbook_<?php echo e($result->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Passbook</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo e($result->bankAccount->bank_passbook_url??''); ?>" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</td> 
                                    <td>  <?php echo e($result->doc_type); ?> </td> 
                                         <td>  <?php echo e($result->doc_number); ?>

                                          <hr>
                                          <?php echo e($result->upi_id); ?>


                                          </td> 
                                  <td>
<?php if($result->doc_type=='adharcard'): ?>
Front Adhar<br>
<img src="<?php echo e($result->doc_url_front); ?>" width="100px" height="50px;"  data-toggle="modal" data-target="#doc_url_front_<?php echo e($result->id); ?>">  

                                                 <!-- Modal -->
  <div class="modal fade" id="doc_url_front_<?php echo e($result->id); ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo e($result->doc_type); ?></h4>
        </div>
        <div class="modal-body">
          <img src="<?php echo e($result->doc_url_front); ?>" width="100px" height="500px" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<br>Back Adhar<br>

                                                   
                                                  <img src="<?php echo e($result->doc_url_back); ?>" width="100px" height="50px;" data-toggle="modal" data-target="#doc_url_back_<?php echo e($result->id); ?>">  



  <!-- Modal -->
  <div class="modal fade" id="doc_url_back_<?php echo e($result->id); ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo e($result->doc_type); ?></h4>
        </div>
        <div class="modal-body">
          <img src="<?php echo e($result->doc_url_back); ?>" width="100px" height="500px" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


                                                <?php else: ?>
                                                  <?php if($result->doc_type=='pancard'): ?>
                                                 
  <img src="<?php echo e($result->doc_url_front); ?>" width="100px" height="50px;" data-toggle="modal" data-target="#doc_url_front<?php echo e($result->id); ?>">  
                                                  <!-- Modal -->
  <div class="modal fade" id="doc_url_front<?php echo e($result->id); ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo e($result->doc_type); ?></h4>
        </div>
        <div class="modal-body">
          <img src="<?php echo e($result->doc_url_front); ?>" width="100%" height="500px" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


                                                  <?php else: ?>
                                                    NA
                                                  <?php endif; ?>

                                                <?php endif; ?>

                                                </td>
                                              <td>
                                                <?php echo '₹'.round($result->wallet_balance,2); ?>

                                              </td>
                                                <td> 
                                                  <?php if($result->status==2): ?> 
                                                  <span class="btn btn-success">Approved</span>
                                                  <?php elseif($result->status==3): ?> <span class="btn btn-danger">Rejected</span>
                                                  <?php elseif($result->status==4): ?> <span class="btn btn-default">ReUpload </span>
                                                  <?php else: ?>
                                                  <span class="btn btn-warning">Pending </span>
                                                  <?php endif; ?> 

                                                 </td>
                                                 <td>
                                                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" onclick="getCategory('<?php echo e($result->id); ?>','<?php echo e($result->bankAccount->id??0); ?>',
                                                  '<?php echo e($result->status); ?>')" >Approve</button>
                                                    
                                                    <?php if($result->status==2): ?>
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                    <?php endif; ?>
                                                    <ion-icon name="close-circle-outline"></ion-icon>
                                                  </td>
                                                <td>
 
 <?php 
$date  = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $result->updated_at, 'UTC');

echo $date->setTimezone('Asia/Kolkata');
?>

                                                </td>
                                                    



                                                <!-- 

                                                <?php echo Carbon\Carbon::parse($result->created_at)->format('h:i:s A');; ?> -->

                                                       <!--  <?php echo Form::open(array('class' => 'form-inline pull-left deletion-form', 'method' => 'DELETE',  'id'=>'deleteForm_'.$result->id, 'route' => array('documents.destroy', $result->id))); ?>

                                                        <button class='delbtn btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete" id="<?php echo e($result->id); ?>"><i class="fa fa-fw fa-trash" title="Delete"></i></button> 
                                                        
                                                         <?php echo Form::close(); ?> -->
                                                         <!-- <a href="<?php echo e(route('documents.edit',$result->id)); ?>">
                                            <i class="fa fa-fw fa-pencil-square-o" title="edit"></i> 
                                        </a> -->
                                               
                                            </tr>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </tbody>
                                    </table>
<span>
  Showing <?php echo e(($documents->currentpage()-1)*$documents->perpage()+1); ?> to <?php echo e($documents->currentpage()*$documents->perpage()); ?>

  of  <?php echo e($documents->total()); ?> entries 
</span>

<div class="center" align="center">  
  <?php echo $documents->appends([
      'search' => isset($_GET['search'])?$_GET['search']:'',
      'status'=> isset($_GET['status'])?$_GET['status']:''
      ]
      )->render(); ?>

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
        
        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are you sure want to approve?</h4>
      </div>
      <form method="post">
      <div class="modal-body">   
        <div class="form-group">
          <input type="hidden" name="doc_id" id="doc_id">
          <input type="hidden" name="bank_doc_id" id="bank_doc_id">
            <label for="sel1">Select Status:</label>
        <select class="form-control" id="document_status" name="document_status">
          <option value="0">Select Status</option> 
          <option value="2">Approved</option>
          <option value="4">Rejected/Reupload</option>
        </select>
      </div>
      <div class="form-group">
      <label for="comment">Note:</label>
      <textarea class="form-control" rows="5" id="notes" name="notes"></textarea>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-danger"  > Save </button>
      </div>
      </form>
    </div>
  </div>
</div>
notes

<script type="text/javascript">
    
    function getCategory(doc_id,bank_doc_id,status) {
        document.getElementById("doc_id").value  = doc_id;
        document.getElementById("bank_doc_id").value  = bank_doc_id;
        var doc_id = $("#document_status option[value='"+status+"']").attr("selected","selected");

    }
</script><?php /**PATH /var/www/web/modules/Admin/views/documents/home.blade.php ENDPATH**/ ?>