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
                         <div class="col-md-2 pull-right">
                                <div style="width: 150px;" class="input-group"> 
                                    <a href="<?php echo e(route('content.create')); ?>">
                                        <button  class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New Page</button> 
                                    </a>
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
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <form action="<?php echo e(route('content')); ?>" method="get" id="filter_data">
                                 
                                <div class="col-md-3">
                                    <input value="<?php echo e((isset($_REQUEST['search']))?$_REQUEST['search']:''); ?>" placeholder="Search " type="text" name="search" id="search" class="form-control" >
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value="Search" class="btn btn-primary form-control">
                                </div>
                               
                            </form>
                             <div class="col-md-2">
                                 <a href="<?php echo e(route('content')); ?>">   <input type="submit" value="Reset" class="btn btn-default form-control"> </a>
                            </div>
                           
                            </div>
                        </div>
                         
                        <table class="table table-striped table-hover table-bordered" id="contact">
                            <thead>
                                <tr>
                                  <td><div class="mt-checkbox-list">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" onclick="checkAll(this)"> 
                                                    <span></span>
                                                </label>
                                                </div></td>
                                    <th>Sno</th> 
                                        <th>Page Title</th>
                                        <th>Page description</th>
                                        <th>image </th> 
                                        <th>Created Date</th> 
                                        <th>Action</th>
                                </tr>
                                  <?php if(count($page )==0): ?>
                                        <tr>
                                          <td colspan="7">
                                            <div class="alert alert-danger alert-dismissable">
                                              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                                              <i class="icon fa fa-check"></i>  
                                              <?php echo e('Record not found. Try again !'); ?>

                                            </div>
                                          </td>
                                        </tr>
                                      <?php endif; ?>
                                   
                            </thead>
                            <tbody>
                             <?php $__currentLoopData = $page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                <tr>
                                  <td><div class="mt-checkbox-list">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" name="checkAll" id="chk_<?php echo e($result->id); ?>" value="<?php echo e($result->id); ?>">  
                                                    <span></span>
                                                </label>
                                                </div></td>
                                   <td><?php echo e(++$key); ?></td>
                                        <td><?php echo ucfirst($result->title); ?>


                                        </td>
                                       
                                        <td><?php echo substr(strip_tags($result->page_content),0,50); ?>...<a href="<?php echo e(route('content.show',$result->id)); ?>">
                                                <i class="glyphicon glyphicon-eye-open" title="view"></i> 
                                            </a>
                                        </td>


                                        <td>
                                          <!--   <?php echo substr(html_entity_decode($result->description, ENT_QUOTES, 'UTF-8'),0,50); ?>.. -->
                                          <?php if(file_exists(storage_path('pages/'.$result->images)) && $result->images!=null): ?>
                                          <img src="<?php echo e(url('storage/pages/'.$result->images)); ?>" width="100px"> 
                                          <?php else: ?>
                                           NA
                                          <?php endif; ?>
                                         </td>
                                         <td>
                                            <?php echo Carbon\Carbon::parse($result->created_at)->format('d-M-Y');; ?>

                                        </td>
                                        
                                        <td> 
                                            <a href="<?php echo e(route('content.edit',$result->id)); ?>">
                                                <i class="fa fa-fw fa-pencil-square-o" title="edit"></i> 
                                            </a>

                                            <?php echo Form::open(array('class' => 'form-inline pull-left deletion-form', 'method' => 'DELETE',  'id'=>'deleteForm_'.$result->id, 'route' => array('content.destroy', $result->id))); ?>

                                            <button class='delbtn btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete" id="<?php echo e($result->id); ?>"><i class="fa fa-fw fa-trash" title="Delete"></i></button>
                                             <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </tbody>
                        </table>
                        <?php if($page->count()): ?>
                              <span id="error_msg"></span>
                              <button class="btn btn-danger" onclick="deleteAll('<?php echo e(url('admin')); ?>','pages')">Delete All</button>
                         <?php endif; ?>
                         
                         <div class="center" align="center">  <?php echo $page->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render(); ?>

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
</div><?php /**PATH /var/www/web/modules/Admin/views/pages/home.blade.php ENDPATH**/ ?>