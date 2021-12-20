 <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>My Dashboard
                                <small>Dashboard </small>
                                (Live users : <b><?php echo e($live_user); ?>)</b>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                      
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            Home
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Dashboard</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                       
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                   <a href="https://ninja11.in/admin/user">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276"><?php echo e($users_count); ?></span>
                                        </h3>
                                        <small>Total Signup</small> | <span>Monthly : <?php echo e($musers_count); ?></span>
                                    </div>
                                </a>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                   <a href="https://ninja11.in/admin/user">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276"><?php echo e($total_reg); ?></span>
                                        </h3>
                                        <small>Today Registration</small>
                                    </div>
                                </a>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
    
                        

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <a href="https://ninja11.in/admin/match">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($match); ?></span>
                                        </h3>
                                        <small> Total Matches </small>
                                    </div>
                                    </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($match); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($banner); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                      


                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                   <a href="https://ninja11.in/admin/match?status=3">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($match_3); ?></span>
                                        </h3>
                                        <small> Live Matches </small>
                                    </div>
                                    </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($match_3); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($match_3); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($revenue); ?> INR</span>
                                        </h3>
                                        <small> Revenue   </small>
                                        <span>| Monthly : <?php echo e(round($monthly_revenue,2)); ?> INR</span>
                                    </div>
                                    
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($match_2); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($revenue); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <a href="<?php echo e(url('admin/match?match_start_date='.date('Y-m-d'))); ?>" target="_blank">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($match_1); ?></span>
                                        </h3>
                                        <small> Today Matches </small>
                                    </a>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($match_1); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($match_3); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <a href="https://ninja11.in/admin/paymentsHistory">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e(round($deposit,2)); ?> INR  </span>
                                        </h3>
                                        <small> Total Deposit </small>
                                        <span>| Monthly : <?php echo e(round($monthly_deposit,2)); ?> </span>
                                    </div>
                                </a>
                                   
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($deposit); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($deposit); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

 
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($today_profit); ?> INR  </span>
                                        </h3>
                                        <small> Today Profit </small>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($today_profit); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($today_profit); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e(round($affiliate,2)); ?> INR  </span>
                                        </h3>
                                        <small> Affiliate Amount </small>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($affiliate); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($affiliate); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <a href="https://ninja11.in/admin/paymentsHistory">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($today_deposit); ?> INR  </span>
                                        </h3>
                                        <small> Total Today Deposit </small>
                                    </div>
                                    </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($today_deposit); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($today_deposit); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <a href="https://ninja11.in/admin/paymentsHistory">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($today_deposit_paytm); ?> INR  </span>
                                        </h3>
                                        <small> Today Paytm Deposit </small>
                                    </div>
                                    </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($today_deposit_paytm); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($today_deposit_paytm); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <a href="https://ninja11.in/admin/paymentsHistory">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($today_deposit_razorpay); ?> INR  </span>
                                        </h3>
                                        <small> Today RazorPay Deposit </small>
                                    </div>
                                    </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($today_deposit_razorpay); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($today_deposit_razorpay); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e(round($total_bonus,2)); ?> INR   </span>
                                        </h3>
                                        <small> Today Bonus Given </small>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($total_bonus); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($total_bonus); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> -->


                     <!--    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e(round($total_bonus_used,2)); ?> INR   </span>
                                        </h3>
                                        <small> Remaining Bonus </small>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($total_bonus_used); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($total_bonus_used); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                   <a href="https://ninja11.in/admin/payments">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($today_withdrawal); ?> INR  </span>
                                        </h3>
                                        <small> Total Withdrawal  </small>
                                        <br>
                                        <span>Monthly Withdrawal : <?php echo e($monthly_withdrawal); ?></span>
                                    </div>
                                </a>
                                     
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($today_withdrawal); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($today_withdrawal); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class=" pending_doc col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                   <a href="<?php echo e(url('admin')); ?>/payments">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($today_withdrawal2); ?> INR  </span>
                                        </h3>
                                        <small> Today Withdrawal  </small>
                                    </div>
                                </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($today_withdrawal2); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($today_withdrawal2); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class=" pending_doc col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                   <a href="<?php echo e(url('admin')); ?>/payments">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($extra_income??0); ?> INR  </span>
                                        </h3>
                                        <small>  Monthly Extra Income  </small>
                                    </div>
                                </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($prize); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($prize); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class=" pending_doc col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                   <a href="<?php echo e(url('admin/documents')); ?>">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?php echo e($pending_doc); ?>    </span>
                                        </h3>
                                        <small> Pending Documents  </small>
                                    </div>
                                </a>
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: <?php echo e($pending_doc); ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo e($pending_doc); ?>% grow</span>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                   
                   
                    
                    <!-- END PAGE BASE CONTENT -->
                
                 
                     

                </div>

                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-sm-11 col-xs-12 " style=""><p class="alert alert-success  ">CRON JOB : 
                     <?php if(Session::has('flash_alert_notice')): ?>
                              
                           <span class="alert alert-danger">  <?php echo e(Session::get('flash_alert_notice')); ?> </span>
                             
                        <?php endif; ?>
                 </p> </div>
                     
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                      <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                    <!-- Button trigger modal -->

                                        <!-- Modal -->
                                        <div class="modal fade" id="UpcomingMatch" tabindex="-1" role="dialog" aria-labelledby="UpcomingMatch" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Match Status</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                Please wait..
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">
                                                <a class="btn btn-primary" data-toggle="modal" 
                                                data-target="#UpcomingMatch" 
                                                href="<?php echo e(env('api_base_url')); ?>/updateMatchDataByStatus/1?allow=ninja11"
                                                target="_blank">Update Upcoming Matches </a>
                                            </span>
                                        </h3>
                                    </div>
                                  
                                </div>
                                 
                            </div>
                    </div> 

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                     <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">
                                               
                                               <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">
                                                <a class="btn btn-primary" data-toggle="modal" 
                                                data-target="#UpcomingMatch" 
                                                href="<?php echo e(env('api_base_url')); ?>/updateMatchDataByStatus/2?allow=ninja11" 
                                                target="_blank">Update Completed Matches </a>
                                            </span>
                                        </h3>
                                    </div>

                                            </span>
                                        </h3>
                                    </div>
                                   
                                </div>
                                 
                            </div>
                    </div>

                       

                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                      <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">
                                                <a class="btn btn-primary" data-toggle="modal" 
                                                data-target="#UpcomingMatch" 
                                                href="<?php echo e(env('api_base_url')); ?>/updateMatchDataByStatus/3?allow=ninja11" 
                                                target="_blank">Update Live Matches </a>

                                            </span>
                                        </h3>
                                    </div>
                                     
                                </div>
                                 
                            </div>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                      <div class="icon">
                                        <i class="fa fa-folder-open-o"></i>
                                    </div>
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567">
                                                <a class="btn btn-primary" data-toggle="modal" 
                                                data-target="#UpcomingMatch" 
                                                href="<?php echo e(env('api_base_url')); ?>/updatePoints" 
                                                target="_blank">Update Points </a>

                                            </span>
                                        </h3>
                                    </div>
                                     
                                </div>
                                 
                            </div>
                    </div>

                    
                </div>


                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                <div class="page-quick-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                <span class="badge badge-danger">0</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                <span class="badge badge-success">7</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-bell"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-info"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-speech"></i> Activities </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                <h3 class="list-heading">Staff</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">0</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Admin</h4>
                                            <div class="media-heading-sub"> Super Admin </div>
                                        </div>
                                    </li>
                                     
                                </ul>
                                 
                            </div>
                          
                        </div>
                         
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <?php /**PATH /var/www/web/modules/Admin/views/dashboard/home.blade.php ENDPATH**/ ?>