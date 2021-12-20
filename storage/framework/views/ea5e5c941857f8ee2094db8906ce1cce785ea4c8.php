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
                                        <span class="caption-subject font-red sbold uppercase">Payments History</span>
                                    </div>

                                    <div class="col-md-2 pull-right">
                                                <input type="submit" value="Today  : <?php echo e(round($today,2)); ?>" class="btn btn-info form-control">
                                            </div>
                                          <div class="col-md-2 pull-right">
                                                <input type="submit" value="Monthly  : <?php echo e(round($month,2)); ?>" class="btn btn-info form-control">
                                            </div>
                                            <div class="col-md-2 pull-right">
                                                <input type="submit" value="Weekly : <?php echo e(round($week,2)); ?>" class="btn btn-info form-control">
                                            </div>
                                            <div class="col-md-3 pull-right">
                                                <input type="submit" value="Total Deposit : <?php echo e(round($deposit,2)); ?>" class="btn btn-info form-control">
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
                                            <form action="<?php echo e(route('paymentsHistory')); ?>" method="get" id="filter_data">
                                             
                                            <div class="col-md-3">
                                                <input value="<?php echo e((isset($_REQUEST['search']))?$_REQUEST['search']:''); ?>" placeholder="Search by  name" type="text" name="search" id="search" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="Search" class="btn btn-primary form-control">
                                            </div>
                                           
                                        </form>
                                         <div class="col-md-2">
                                             <a href="<?php echo e(route('paymentsHistory')); ?>">   <input type="submit" value="Reset" class="btn btn-default form-control"> </a>
                                        </div>
                                       
                                        </div>
                                    </div>
                                     
                                    <table class="table-responsive table  table-condensed table-striped table-hover table-bordered" id="">
                                        <thead>
                                            <tr>
                                                <th> Sno. </th>
                                                <th> Txt ID </th>
                                                <th> Name </th>
                                                <th>Type</th>
                                                <th>   Amount </th>  
                                                <th> Status</th>
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
                                                 <td>   <?php echo e((($transaction->currentpage()-1)*10)+(++$key)); ?> 
                                                </td>
                                                <td>
                                                	
                                                	<a href="<?php echo e(url('admin/matchTeams')); ?>?search=<?php echo e($result->match_id); ?>&contest_id=<?php echo e($result->contest_id); ?>&entry_fees=<?php echo e($result->entry_fees); ?>" target="_blank"> 
                                                	<?php echo e($result->transaction_id); ?> 
                                                </a> 
                                                  <br>
                                                  <?php echo e($result->match_name); ?> 
                                                  <?php echo e($result->contest_name); ?> 
                                                  <?php if($result->total_spots): ?> 
                                                  <hr>
                                                   Entry Fees : <?php echo e($result->entry_fees); ?>

                                                  <br>
                                                  Total Spot : <?php echo e($result->total_spots??null); ?> 
                                                   <br> 
                                                  Filled Spot : <?php echo e($result->filled_spot); ?>

                                                  <br> 
                                                  
                                                  Total Winning : <?php echo e($result->total_winning_prize); ?>

                                                <?php endif; ?>
                                                </td> 
                                                <td>
                                                   ID: <?php echo e($result->user_id); ?>,
                                                   <br>
                                                   Team Name : <?php echo e($result->team_name??null); ?>

                                                   <br>
            <a href="<?php echo e(url('admin/user?search='.$result->email)); ?>">
                                                   Name: <?php echo e($result->name); ?>,<br>
                                                   Email : <?php echo e($result->email); ?>

                                                   <br>
                                                   Phone : <?php echo e($result->phone); ?>

                                                 </a>
                                                </td>
                                                
                                                <td><?php echo e($result->payment_type_string); ?> </td>
                                                 <td>
                                                  <?php if($result->debit_credit_status=="+"): ?>
                                                  <div class=" alert-success"> <?php echo e(' '.$result->debit_credit_status.' '.$result->amount); ?> INR</div>
                                                  <?php else: ?>
                                                  <div class=" alert-danger">
                                                  <?php echo e(' '.$result->debit_credit_status.' '.$result->amount); ?> INR
                                                </div>
                                                  <?php endif; ?>
                                                   </td>
                                                 
                                                 <td><?php echo e($result->payment_status); ?>

                                                 </td>                         
                                                
                                                <td>
                                                        <?php echo Carbon\Carbon::parse($result->created_at)->format('d-m-Y h:i:s A');; ?>

                                                </td> 
                                                
                                               
                                            </tr>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </tbody>
                                    </table>
<span>
  Showing <?php echo e(($transaction->currentpage()-1)*$transaction->perpage()+1); ?> to <?php echo e($transaction->currentpage()*$transaction->perpage()); ?>

  of  <?php echo e($transaction->total()); ?> entries 
</span>

                                     <div class="center" align="center">  <?php echo $transaction->appends(['search' => isset($_GET['search'])?$_GET['search']:'','payment_type'=>$_GET['payment_type']??''])->render(); ?></div>


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
         <textarea class="form-control"  required="" name="remarks" id="service_charge"></textarea>
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
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('packages::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/web/modules/Admin/views/payments/paymentHistory.blade.php ENDPATH**/ ?>