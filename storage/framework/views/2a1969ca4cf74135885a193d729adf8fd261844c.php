
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
                                        <span class="caption-subject font-red sbold uppercase"><?php echo e($heading); ?></span>
                                    </div>
                                      
                                     
                                </div>
                                  
                                    <?php if(Session::has('flash_alert_notice') || isset($msg)): ?>
                                         <div class="alert alert-success alert-dismissable" style="margin:10px">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                          <i class="icon fa fa-check"></i>  
                                         <?php echo e(Session::get('flash_alert_notice')); ?> 
                                         <?php echo e($msg??null); ?>

                                         </div>
                                    <?php endif; ?>
                                <div class="portlet-body table-responsive">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <form action="<?php echo e(route('payments')); ?>" method="get" id="filter_data">
                                             
                                            <div class="col-md-3">
                                                <input value="<?php echo e((isset($_REQUEST['search']))?$_REQUEST['search']:''); ?>" placeholder="Search by  name" type="text" name="search" id="search" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="Search" class="btn btn-primary form-control">
                                            </div>
                                           
                                        </form>
                                         <div class="col-md-2">
                                             <a href="<?php echo e(route('payments')); ?>">   <input type="submit" value="Reset" class="btn btn-default form-control"> </a>
                                        </div>
                                       
                                        </div>
                                    </div>
                                     
                                    <table class="table table-striped table-hover table-bordered" id="">
                                        <thead>
                                            <tr>
                                                <th> Sno. </th>
                                                <th>   Name </th>
                                                <th>Bank details</th>
                                                <th>Transaction</th>
                                                <th> Available Balance</th> 
                                                <th> Request Amount </th> 
                                                <th> Status</th>  
                                                <th> </th> 
                                                <th>Date</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php if($transaction->count()==0): ?>
                                          <div class="alert alert-danger alert-dismissable" style="margin:10px">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                          <i class="icon fa fa-check"></i>  
                                            No Payment request found
                                         </div>
                                          
                                          <?php endif; ?>
                                        <?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                 <td><?php echo e((($transaction->currentpage()-1)*10)+(++$key)); ?> 
                                                </td>
                                                <td> 
                                                  <a href="<?php echo e(url('admin/user?search='.$result->email)); ?>" target="_blank"> 
                                                  <?php echo 'Customer Id: '.$result->user_id.'<br>'.$result->name; ?>,
                                                  <br><?php echo e($result->email); ?>

                                                </a>
                                                   </td>
                                                   <td>
                                                    <a href="<?php echo e(url('admin/documents?search='.$result->email)); ?>" target="_blank">
                                                   View Account
                                                 </a>
                                                 </td>

                                                 <td>
                                                    <a href="<?php echo e(url('admin/wallets?search='.$result->email)); ?>" target="_blank">
                                                   View Wallet
                                                 </a>
                                                 </td>

                                                <td>INR <?php echo e($result->total_balance-$result->paid_balance); ?> </td>
                                                 <td>INR <?php echo e($result->amount); ?> 
                                                  <br>
                                                  <b>
                                                    <?php echo e($result->payment_taken_in); ?>

                                                 </b>
                                                 </td>
                                                 <td>
                                                  <p class="btn <?php if($result->payment_type==5): ?> btn-success <?php else: ?> btn-danger <?php endif; ?>"> 
                                                  <?php echo e($result->withdraw_status); ?>

                                                 </p>
                                                 <br> <br>
       
                                                 <!-- Button trigger modal -->

<?php if($result->payment_taken_in=="paytm" && $result->status==1 || $result->status==2 ): ?>
<!-- <a  href="https://rest.fancode11.com/api/v3/releaseFund?user_id=<?php echo e($result->user_id); ?>&paytm_no=<?php echo e($result->paytm_num); ?>&withdrawal_amount=<?php echo e($result->amount); ?>"  class="btn btn-danger" data-toggle="modal" data-target="#releaseFund">
  Release Fund
</a> -->


<!-- Modal -->
<div class="modal fade" id="releaseFund" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Release Fund</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="">
        <button type="button" class="btn btn-primary">Send Amount</button>
        </a>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
                                                 </td>                     
                                                <td>  
                                                   
     <ul class="nav navbar-nav">
       
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle btn-danger btn btn-sm" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payment Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo e(url('admin/payments?status=2&txt_id='.$result->id)); ?>">Payment Initiated</a></li>
            <li><a href="<?php echo e(url('admin/payments?status=3&txt_id='.$result->id)); ?>">Payment Hold</a></li>
            <!-- <li><a href="<?php echo e(url('admin/payments?status=4&txt_id='.$result->id)); ?>">Payment Refund</a></li> -->
            <li role="separator" class="divider"></li>
            <li><a href="#"   data-toggle="modal" data-target="#myModal" onclick="payment('<?php echo e($result->id); ?>',<?php echo e($result->amount); ?>)">Release Fund</a></li>
            <li role="separator" class="divider"></li> 
          </ul>
        </li>
      </ul>

                                                     
                                                 </td>
                                                <td>
                                                         

                                                        <?php echo Carbon\Carbon::parse($result->updated_at)->format('d-m-Y h:i:s A');; ?>



                                                </td>
                                                
                                               
                                            </tr>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </tbody>
                                    </table>
<span>
  Showing <?php echo e(($transaction->currentpage()-1)*$transaction->perpage()+1); ?> to <?php echo e($transaction->currentpage()*$transaction->perpage()); ?>

  of  <?php echo e($transaction->total()); ?> entries 
</span>

                                     <div class="center" align="center">  <?php echo $transaction->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render(); ?></div>
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
        <h4 class="modal-title">Add Fund to Editor Wallets</h4>
      </div>
      <form method="post">
      <div class="modal-body">
        <input type="hidden" name="payment_id" value="" id="payment_id"> 
         <label>Amount</label>
         <input type="number" class="form-control" required="" readonly="" name="amount" id="amount">
         <label>Remarks</label>
         <textarea class="form-control"  required="" name="remarks" id="service_charge">Released</textarea>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-danger"  > Save </button>
      </div>
      </form>
    </div>

  </div>
</div>



<script type="text/javascript">
    
    function payment(payment_id,amount) {
        document.getElementById("payment_id").value     = payment_id;
        document.getElementById("amount").value         = amount;


    }
</script><?php /**PATH /var/www/web/modules/Admin/views/payments/home.blade.php ENDPATH**/ ?>