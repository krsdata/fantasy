 
    <?php $__env->startSection('header'); ?>
    <h1>Dashboard</h1>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?> 
     <?php if($remove_header==false): ?>
      <?php echo $__env->make('partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php endif; ?>
<style type="text/css">
  .page_title{
    margin-top: -110px;right: 10px;position: absolute;background: #fff;padding: 10px;border-radius: 10px;
    font-family: 'Raleway', sans-serif;
    
  }
  .divider-left{
    height: 4px;
    width: 70px;
    background: #dd2342;
    display: block;
    margin-top: 1px; 
  }
  .divider{
    background: #151515;
    height: 1px;
    width: 70px !important;
    margin-left: 0px;
    position: absolute;
    left: 70px;
    top: 50px;
  }
</style>

  <!--Section: Content-->
  <section  id="termscondition" data-aos="fade-up">
      <div class="container">
           <div class="row justify-content-end">
        <?php if($remove_header==false): ?>
        
        <?php endif; ?>
          <div class="col-md-12" style="margin-top:10px">     
            <div class="faq_content wow fadeIn animated" data-wow-delay="400ms">
              
              <h2 class="heading heading_space wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <span>My Affiliate Details</span>
                <span class="divider-left">
                  
                </span>
                <span class="divider">
                  
                </span>
            </h2>       
          </div>
          <div class="heading heading_space wow fadeInDown animated" style="padding: 10px">
            <div class="col-md-12 wow fadeInRight animated animated" data-aos="fade-right" data-wow-delay="450ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;"> 
                
        <form method="POST" action="contactus" accept-charset="UTF-8" class="form-inline findus" id="contact-form"> 
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group ">
                <style type="text/css">
                  .form-group{
                    margin: 5px;
                  }
                </style>
                <button type="button" class="form-group btn btn-primary">Referral Code: <?php echo e($user->referal_code??null); ?> </button>
                  <button type="button" class="form-group btn btn-purple">My Total  Users: <?php echo e($total_registered??0); ?> </button>
                  <button type="button" class="form-group btn btn-secondary">My Active  Users: <?php echo e($total_user??0); ?> </button>
                  
                  <button type="button" class="form-group btn btn-success">Total User Deposit: <?php echo e($total_deposit??0); ?> INR</button>
                  
                  <button type="button" class="form-group btn btn-danger">Total User Winning: <?php echo e($total_winning??0); ?> INR</button>
                   
                  <button type="button" class="form-group btn btn-info">Total Commission: <?php echo e(round($commission,2)); ?> INR</button>
                   
                  <button type="button" class="form-group btn btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">View All Active User</button>
                 
              </div>
 

            </div> 
          </div>
        </form>

        <div class="collapse" id="collapseExample">
            <div class="card">
               <table class="table table-striped" cellpadding="5" cellspacing="2">
                 <tr align="center">
                   <td><b>Name</b></td> 
                     <td><b>Deposit</b></td>
                      <td><b>Winning</b></td>
                 </tr>
                 <?php $__currentLoopData = $myAffiliate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                   <td><?php echo e(++$key); ?>. <?php echo e($result->team_name); ?></td> 
                   <td><?php echo e($result->deposit); ?></td>
                   <td><?php echo e($result->winning); ?></td>
                     
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </table>
            </div>
          </div>
        
    </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/web/resources/views/myAffiliate.blade.php ENDPATH**/ ?>