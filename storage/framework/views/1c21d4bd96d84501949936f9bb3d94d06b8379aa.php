 
  
<div class="form-body">
<div class="alert alert-danger display-hide">
    <button class="close" data-close="alert"></button> Please fill the required field! </div>


    <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="form-group <?php echo e($errors->first($col_name, ' has-error')); ?>  <?php if(session('field_errors')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
        <label class="control-label col-md-3">  <?php echo e(str_replace('_',' ', $col_name)); ?> <span class="required"> * </span></label>
        <div class="col-md-4"> 
            <?php echo Form::text($col_name,null, ['class' => 'form-control','data-required'=>1,'required'=>true]); ?> 
            <?php if($col_name=='payment_type'): ?>
                Example(Use Either) : 1,2,3,4 <br>
                1=Bonus, 2=Refferal,3=Deposit,4=Withdraw  
            <?php endif; ?>
            <?php if($col_name=='payment_type_string'): ?>
           Example :  Bonus or Refferal or Deposit or Withdrawal   
            <?php endif; ?>
            <span class="help-block" style="color:red"><?php echo e($errors->first($col_name, ':message')); ?> <?php if(session('field_errors')): ?> <?php echo e('The  Title name already been taken!'); ?> <?php endif; ?></span>
        </div>
    </div>  



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="form-group">
             <label class="control-label col-md-3"> Payment Type  <span class="required"> * </span></label>
        <div class="col-md-4"> 
            <select class="form-control" name="payment_type" required="">
                <option>Select Type</option>
                <option value="1" <?php if(isset($_REQUEST['payment_type']) && $_REQUEST['payment_type']==1): ?> selected="" <?php endif; ?>>Bonus</option>
                <option value="3" <?php if(isset($_REQUEST['payment_type']) && $_REQUEST['payment_type']==3): ?> selected="" <?php endif; ?>>Deposit</option>
                <option value="4" <?php if(isset($_REQUEST['payment_type']) && $_REQUEST['payment_type']==4): ?> selected="" <?php endif; ?>>Prize</option>
                <option value="5">Withdrawal</option>
            </select>
       </div>
   </div>
<div class="form-actions">
<div class="row">
    <div class="col-md-offset-3 col-md-9">
      <?php echo Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']); ?>



       <a href="<?php echo e(URL::previous()); ?>">
<?php echo Form::button('Back', ['class'=>'btn btn-warning text-white']); ?> </a>
    </div>
</div>
</div>


<?php /**PATH /var/www/web/modules/Admin/views/wallets/form.blade.php ENDPATH**/ ?>