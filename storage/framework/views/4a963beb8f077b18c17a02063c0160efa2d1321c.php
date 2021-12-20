 

<div class="form-body">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> Please fill the required field! </div>
  <!--   <div class="alert alert-success display-hide">
        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
-->
       <div class="form-group <?php echo e($errors->first('is_free', ' has-error')); ?>">
            <label class="control-label col-md-3">Free Contest Type</label>
            <div class="col-md-4"> 
                <select name="is_free" class="form-control">
                    <option value="0">False</option>
                    <option value="1">True</option>
                </select>
                
                <span class="help-block"><?php echo e($errors->first('is_free', ':message')); ?></span>
            </div>
        </div> 
        <?php if($match): ?>  

                 <div class="form-group <?php echo e($errors->first('match_id', ' has-error')); ?>">
            <label class="control-label col-md-3">Match ID </label>
            <div class="col-md-4"> 
                <?php echo Form::text('match_id',$match, ['class' => 'form-control']); ?> 
                
                <span class="help-block"><?php echo e($errors->first('match_id', ':message')); ?></span>
            </div>
            
        </div>
        <?php else: ?>
        <div class="form-group <?php echo e($errors->first('match_id', ' has-error')); ?>">
            <label class="control-label col-md-3">Match ID </label>
            <div class="col-md-4"> 
                <?php echo Form::text('match_id',$match, ['class' => 'form-control']); ?> 
                
                <span class="help-block"><?php echo e($errors->first('match_id', ':message')); ?></span>
            </div>
            Use Match id when you want change in specific match!!.
        </div> 
        <?php endif; ?>

        
        <div class="form-group <?php echo e($errors->first('contest_type', ' has-error')); ?>">
            <label class="control-label col-md-3">Contest type <span class="required"> * </span></label>
            <div class="col-md-4"> 
                
                 <?php echo e(Form::select('contest_type',$contest_type, isset($defaultContest->contest_type)?$defaultContest->contest_type:'', ['class' => 'form-control'])); ?>


                
                <span class="help-block"><?php echo e($errors->first('contest_type', ':message')); ?></span>
            </div>
        </div> 


         <div class="form-group <?php echo e($errors->first('entry_fees', ' has-error')); ?>">
            <label class="control-label col-md-3">Entry fees </label>
            <div class="col-md-4"> 
                <?php echo Form::text('entry_fees',null, ['class' => 'form-control','placeholder'=>'Contest entry fees']); ?> 
                
                <span class="help-block"><?php echo e($errors->first('entry_fees', ':message')); ?></span>
            </div>
        </div> 
         <div class="form-group <?php echo e($errors->first('total_spots', ' has-error')); ?>">
            <label class="control-label col-md-3">Total spots </label>
            <div class="col-md-4"> 
                <?php echo Form::text('total_spots',null, ['class' => 'form-control','placeholder'=>'Total Spot Size']); ?> 
                
                <span class="help-block"><?php echo e($errors->first('total_spots', ':message')); ?></span>
            </div>
        </div> 


        <div class="form-group <?php echo e($errors->first('prize_percentage', ' has-error')); ?>">
            <label class="control-label col-md-3">Total Winner </label>
            <div class="col-md-4">
                <?php echo Form::text('prize_percentage',null, ['class' => 'form-control','placeholder'=>'Total Winner in this contest']); ?> 
                
                <span class="help-block"><?php echo e($errors->first('prize_percentage', ':message')); ?></span>
            </div>
        </div> 

        <div class="form-group <?php echo e($errors->first('first_prize', ' has-error')); ?>">
            <label class="control-label col-md-3">First Prize </label>
            <div class="col-md-4"> 
                <?php echo Form::text('first_prize',null, ['class' => 'form-control','placeholder'=>'Enter First Ranker Prize']); ?> 
                
                <span class="help-block"><?php echo e($errors->first('first_prize', ':message')); ?></span>
            </div>
        </div> 

        <?php echo Form::hidden('winner_percentage',50, ['class' => 'form-control']); ?> 

     <!--   <div class="form-group <?php echo e($errors->first('winner_percentage', ' has-error')); ?>">
            <label class="control-label col-md-3">Winner percentage</label>
            <div class="col-md-4">
                
                
                <span class="help-block"><?php echo e($errors->first('winner_percentage', ':message')); ?></span>
            </div>
        </div>   -->
           

       <div class="form-group <?php echo e($errors->first('cancellation', ' has-error')); ?>">
            <label class="control-label col-md-3">Cancellation</label>

            <div class="col-md-4"> 
                <select name="cancellation" class="form-control">
                     <!-- <?php echo e($defaultContest->cancellation?'selected':''); ?> -->

                    <option value="0" <?php if($defaultContest->cancellation==0): ?> selected <?php endif; ?>>False</option>
                    <option value="1" <?php if($defaultContest->cancellation==1): ?> selected <?php endif; ?>>True</option>
                </select>
                
                <span class="help-block"><?php echo e($errors->first('cancellation', ':message')); ?></span>
            </div>

        </div>

        <div class="form-group <?php echo e($errors->first('total_winning_prize', ' has-error')); ?>">
            <label class="control-label col-md-3">Total Winning Prize</label>
            <div class="col-md-4"> 
                <?php echo Form::text('total_winning_prize',null, ['class' => 'form-control','placeholder'=>'Total amount to be  distribute']); ?> 
                <span class="help-block"><?php echo e($errors->first('total_winning_prize', ':message')); ?></span>
            </div>
        </div>

         <div class="form-group <?php echo e($errors->first('discounted_price', ' has-error')); ?>">
            <label class="control-label col-md-3">Discount Price</label>
            <div class="col-md-4"> 
                <?php echo Form::text('discounted_price',null, ['class' => 'form-control','placeholder'=>'Entry fees on which amount is discounted']); ?> 
                <span class="help-block"><?php echo e($errors->first('discounted_price', ':message')); ?></span>
            </div>
        </div>

        <div class="form-group <?php echo e($errors->first('extra_cash_usable', ' has-error')); ?>">
            <label class="control-label col-md-3">Extra cash usable</label>
            <div class="col-md-4"> 
                <?php echo Form::text('extra_cash_usable',null, ['class' => 'form-control','value'=>'0' ,'placeholder' => 'Extra cash % usable']); ?> 
                <span class="help-block"><?php echo e($errors->first('extra_cash_usable', ':message')); ?></span>
                Keep value 0 or 1
            </div>
        </div> 


        <div class="form-group <?php echo e($errors->first('offer_end_at', ' has-error')); ?>">
            <label class="control-label col-md-3">Offer end at</label>
            <div class="col-md-4"> 
                <?php echo Form::text('offer_end_at',null, ['class' => 'form-control','value'=>'0' , 'placeholder'=>'Enter Epoch datetime']); ?> 
                <span class="help-block"><?php echo e($errors->first('offer_end_at', ':message')); ?></span>
                Keep value 0 or 1
            </div>
        </div> 


        <div class="form-group <?php echo e($errors->first('usable_bonus', ' has-error')); ?>">
            <label class="control-label col-md-3">Usable Bonus %</label>
            <div class="col-md-4"> 
                <?php echo Form::text('usable_bonus',$defaultContest->usable_bonus??0, ['class' => 'form-control','placeholder'=>'Enter Bonus % to used']); ?> 
                <span class="help-block"><?php echo e($errors->first('usable_bonus', ':message')); ?></span>
            </div>
        </div>

        <div class="form-group <?php echo e($errors->first('usable_extra_cash', ' has-error')); ?>">
            <label class="control-label col-md-3">Usable Extra Cash %</label>
            <div class="col-md-4"> 
                <?php echo Form::text('usable_extra_cash',$defaultContest->usable_extra_cash??0, ['class' => 'form-control','placeholder'=>'Enter Extra cash % to used']); ?> 
                <span class="help-block"><?php echo e($errors->first('usable_extra_cash', ':message')); ?></span>
            </div>
        </div>

        <div class="form-group <?php echo e($errors->first('referral_code', ' has-error')); ?>">
            <label class="control-label col-md-3">Referral Code</label>
            <div class="col-md-4"> 
                <?php echo Form::text('referral_code',$defaultContest->referral_code??'', ['class' => 'form-control','placeholder'=>'Enter Promoter Code']); ?> 
                <span class="help-block"><?php echo e($errors->first('referral_code', ':message')); ?></span>
            </div>
        </div>


        

        <div class="form-group <?php echo e($errors->first('bonus_contest', ' has-error')); ?>">
            <label class="control-label col-md-3">Bonus Contest</label>
            <div class="col-md-4"> 
                <select name="bonus_contest" class="form-control">
                    <option value="0" >No</option>
                    <option value="1" <?php echo e($defaultContest->bonus_contest?'selected':''); ?>>Yes</option>
                </select>
                
                <span class="help-block"><?php echo e($errors->first('bonus_contest', ':message')); ?></span>
            </div>

        </div>

    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
              <?php echo Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']); ?>



               <a href="<?php echo e(route('defaultContest')); ?>">
    <?php echo Form::button('Back', ['class'=>'btn btn-warning text-white']); ?> </a>
            </div>
        </div>
    </div>
<?php /**PATH /var/www/web/modules/Admin/views/defaultContest/form.blade.php ENDPATH**/ ?>