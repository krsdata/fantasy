 
  
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> Please fill the required field! </div>
                                          <!--   <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
  -->
										 	<div class="form-group <?php echo e($errors->first('title', ' has-error')); ?>  <?php if(session('field_errors')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
										        <label class="control-label col-md-3">  Banner Title <span class="required"> * </span></label>
										        <div class="col-md-4"> 
										            <?php echo Form::text('title',null, ['class' => 'form-control','data-required'=>1]); ?> 
										            
										            <span class="help-block" style="color:red"><?php echo e($errors->first('title', ':message')); ?> <?php if(session('field_errors')): ?> <?php echo e('The  Banner name already been taken!'); ?> <?php endif; ?></span>
										        </div>
										    </div> 
                                            


                                        <div class="form-group  <?php echo e($errors->first('photo', ' has-error')); ?>">
                                                <label class="control-label col-md-3"> Image Upload <span class="required"> * </span></label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src=" <?php echo e($url ?? 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'); ?>" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select photo </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                               
                                            <?php echo Form::file('photo',null,['class' => 'form-control form-cascade-control input-small']); ?>

 

                                                                 </span>
                                                                  <span class="help-block" style="color:#e73d4a"><?php echo e($errors->first('photo', ':message')); ?></span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="help-block">NOTE!</span> Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead. </div>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            <div class="form-group <?php echo e($errors->first('description', ' has-error')); ?>">
                                                <label class="control-label col-md-3">Description<span class="required"> </span></label>
                                                <div class="col-md-4"> 
                                                    <?php echo Form::textarea('description',null, ['class' => 'form-control','data-required'=>1,'rows'=>3,'cols'=>5]); ?> 
                                                    
                                                    <span class="help-block"><?php echo e($errors->first('description', ':message')); ?></span>
                                                </div>
                                            </div> 
                                            
                                            
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                  <?php echo Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']); ?>



                                                   <a href="<?php echo e(route('banner')); ?>">
            <?php echo Form::button('Back', ['class'=>'btn btn-warning text-white']); ?> </a>
                                                </div>
                                            </div>
                                        </div>




    <div class="form-body">

 



</div> 

<?php /**PATH /var/www/web/modules/Admin/views/banner/form.blade.php ENDPATH**/ ?>