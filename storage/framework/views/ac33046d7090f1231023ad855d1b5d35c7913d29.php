<div class="tab-pane active" id="tab_1_1"> 
<div class="portlet light bordered">
 <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Personel Info
                </span>
            </div> 
        </div>
    
    <div class="form-group <?php echo e($errors->first('name', ' has-error')); ?>" >
        <label class="control-label">Full Name</label>
        <input type="text" placeholder="Name" class="form-control" name="name" value="<?php echo e(($user->name)?$user->name:old('name')); ?>">  
    </div>
     <div class="form-group <?php echo e($errors->first('email', ' has-error')); ?>">
        <label class="control-label ">Email</label>
        <input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo e(($user->email)?$user->email:old('email')); ?>"> 
    </div>
    <div class="form-group <?php echo e($errors->first('block_referral', ' has-error')); ?>">
        <label class="control-label">Block Referral</label>
        <select class="form-control" name="block_referral">
            <option value="0" <?php echo e(($user->block_referral==0)?'selected':''); ?>>No</option>
            <option value="1" <?php echo e(($user->block_referral==1)?'selected':''); ?>>Yes</option>
        </select> 
    </div>
    <div class="form-group <?php echo e($errors->first('affiliate_user', ' has-error')); ?>">
        <label class="control-label">Affiliate User</label>
        <select class="form-control" name="affiliate_user">
            <option value="0" <?php echo e(($user->affiliate_user==0)?'selected':''); ?>>No</option>
            <option value="1" <?php echo e(($user->affiliate_user==1)?'selected':''); ?>>Yes</option>
        </select> 
    </div>

    <div class="form-group <?php echo e($errors->first('affiliate_commission', ' has-error')); ?>">
        <label class="control-label">Affiliate Commission(%)</label>
        <input type="text" placeholder="Affiliate commission %" class="form-control" name="affiliate_commission" value="<?php echo e(($user->affiliate_commission)?$user->affiliate_commission:old('affiliate_commission')); ?>">     
    </div>

    

    <?php if($user->role_type==3): ?>
     <div class="form-group <?php echo e($errors->first('password', ' has-error')); ?>">
        <label class="control-label">Role Type</label>
          <select name="role_type" class="form-control select2me">
               <option value="">Select Roles...</option>
                 <option value="3" selected="selected">Customer</option>
                
                </select>
                <span class="help-block"><?php echo e($errors->first('role_type', ':message')); ?></span>
    </div>

    <?php else: ?>
     <div class="form-group <?php echo e($errors->first('role_type', ' has-error')); ?>">
        <label class="control-label">Role Type</label>
          <select name="role_type" class="form-control select2me">
               <option value="">Select Roles...</option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($value->id); ?>" <?php echo e(($value->id ==$role_id)?"selected":"selected"); ?>><?php echo e($value->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <span class="help-block"><?php echo e($errors->first('role_type', ':message')); ?></span>
    </div>

    <?php endif; ?> 
   
     <div class="form-group <?php echo e($errors->first('mobile_number', ' has-error')); ?>">
        <label class="control-label">Mobile Number</label>
        <input type="text" placeholder="Mobile or Phone" class="form-control phone" name="mobile_number"  value="<?php echo e(($user->mobile_number)?$user->mobile_number:old('mobile_number')); ?>"> </div>

        <div class="form-group <?php echo e($errors->first('referal_code', ' has-error')); ?>">
        <label class="control-label">User Referral Code</label>
        <input type="text" placeholder="Referral Code" class="form-control " name="referal_code"  value="<?php echo e(($user->referal_code)?$user->referal_code:old('referal_code')); ?>"> </div>

        <div class="form-group <?php echo e($errors->first('reference_code', ' has-error')); ?>">
        <label class="control-label">User Reference Code</label>
        <input type="text" placeholder="reference code" class="form-control" name="reference_code"  value="<?php echo e(($user->reference_code)?$user->reference_code:old('reference_code')); ?>"> </div>

       <!--  <div class="form-group <?php echo e($errors->first('device_id', ' has-error')); ?>">
        <label class="control-label">Device ID</label>
        <input type="text" placeholder="" class="form-control phone" name="device_id"  value="<?php echo e(($user->device_id)?$user->device_id:old('device_id')); ?>"> </div> -->

        <div class="form-group <?php echo e($errors->first('user_name', ' has-error')); ?>">
        <label class="control-label">User Name</label>
        <input type="text" placeholder="" class="form-control" name="user_name"  value="<?php echo e(($user->user_name)?$user->user_name:old('user_name')); ?>"> </div>

        <div class="form-group <?php echo e($errors->first('team_name', ' has-error')); ?>">
        <label class="control-label">Team Name</label>
        <input type="text" placeholder="" class="form-control " name="team_name"  value="<?php echo e(($user->team_name)?$user->team_name:old('team_name')); ?>"> </div>

        <div class="form-group <?php echo e($errors->first('dateOfBirth', ' has-error')); ?>">
        <label class="control-label">Date of birth</label>
        <input type="text" placeholder="DOB" class="form-control " name="dateOfBirth"  value="<?php echo e(($user->dateOfBirth)?$user->dateOfBirth:old('dateOfBirth')); ?>"> </div>

        <div class="form-group <?php echo e($errors->first('state', ' has-error')); ?>">
        <label class="control-label">State</label>
        <input type="text" placeholder="" class="form-control " name="state"  value="<?php echo e(($user->state)?$user->state:old('state')); ?>"> </div>
    
    
      <?php if($user->role_type==3): ?>
      
<?php endif; ?>
    <?php if($user->role_type==3): ?>
     
 
    <?php endif; ?>
     <div class="margin-top-10">

                <button type="submit" class="btn green" value="personelInfo" name="submit"> Save </button>
                 <a href="<?php echo e(url(URL::previous())); ?>">
<?php echo Form::button('Cancel', ['class'=>'btn btn-warning text-white']); ?> </a>
            </div>  
</div>
</div><?php /**PATH /var/www/web/modules/Admin/views/users/formTab1.blade.php ENDPATH**/ ?>