<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo e(env('company_name')); ?> | The Fantasy World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(env('fevicon_url')); ?>" /> 

    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/animate.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/owl.carousel.min.css')); ?>">
    <!-- <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/owl.theme.default.min.css')); ?>"> -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/magnific-popup.css')); ?>">
     
    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('webmedia/css/style.css')); ?>"> 
  </head>
<body> 
    <div class="row"> 
        <style type="text/css">
          
          .imgRound {
            background: #fff;
            border: 1px solid;
            border-radius: 25px;
          }
        </style>
        <div class="col-md-12"> 
          <?php if($liveMatch->count()==0): ?>
          <div>  No Match Live </div>
          <?php endif; ?>
          <?php $__currentLoopData = $liveMatch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <!--   <a class="btn btn-success"  href="https://ninja11.in/liveScore?match_id=<?php echo e($val->match_id); ?>"  style="margin: 10px" >
             <?php echo e($val->short_title); ?>-<?php echo e($val->format_str); ?>

          </a> -->
          <a  href="https://ninja11.in/liveScore?match_id=<?php echo e($val->match_id); ?>"  >

          <div class="container px-4">
          <div class="row gx-5">
            <div class="col">
             <div class="p-3 border bg-light col-md-12" 
             style="
   
                width: 100%;
                height: fit-content;
                float: left;
                margin-top: 10px;
                border-radius: 10px;

            ">
                
                <div class="" style="float:left;"> <img class="imgRound" src="  <?php echo e($val->teama->logo_url); ?>" width="50px">
                  <br>
                  <span style="font-size: 10px;">
                      <?php 
                      $ta = $val->teama->scores_full;
                      if($ta==""){
                        $ta = "Yet to Bat";
                      }

                      ?>
                      <?php echo e($val->teama->short_name.'('.$ta.')'); ?>


                  </span> 
                </div>
                <div class="" style="float:left;margin-left: 10%;text-align: center;font-family:fantasy; margin-top: -10px;">
                  <br>
                  <span>
                    
                  <?php echo e($val->short_title); ?>

                </span>  
                  
                </div>
                <div class="" style="float:right"> <img src="<?php echo e($val->teamb->logo_url); ?>" class="imgRound"  width="50px">
                  <br>
                    <span style="
                      position: absolute;
                      font-size: 10px;
                      margin-top: 10px;
                      margin-right: 19px;
                      float: left;
                      margin-left: -35px;
                  ">
                  
                     <?php 
                      $tb = $val->teamb->scores_full;
                      if($tb==""){
                        $tb = "Yet to Bat";
                      }
                      ?>
                      <?php echo e($val->teamb->short_name.'('.$tb.')'); ?>

                  </span>
                </div>
             </div>
             <div style="
        
    font-size: 10px;
    text-align: center; 
    background-color: #008b4f;
    float: left;
    width: 90%;
    align-items: center;
    margin-left: 5%;
    border-bottom-left-radius: 7px;
    border-bottom-right-radius: 7px;
    color: #fff;
    font-family: system-ui;

">               <?php echo e($notes?$notes:$val->status_note); ?>

                
             </div>
            </div>
          </div>
        </div>
              </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if($rs): ?> 
              
              <table class="table" style="font-size: 12px; text-align: center;">
                <?php $__currentLoopData = $rs->innings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rst): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <thead> 
                  <tr>
                    <td colspan="1">
                        
                      <?php if($key==0): ?>
                      <?php echo e($rs->teama->name); ?>

                      <img src="<?php echo e($rs->teama->logo_url); ?>" width="50px">
                      <?php endif; ?> 
                      <?php if($key==1): ?>
                       <?php echo e($rs->teamb->name); ?>

                      <img src="<?php echo e($rs->teamb->logo_url); ?>" width="50px">
                      <?php endif; ?>  
                    </td>
                  </tr>
                </thead>   
                <thead>
                  <tr>
                      <th scope="col">
                        Name
                      </th>
                      <th scope="col">
                        Run
                      </th>
                      <th scope="col">
                        Balls
                      </th>
                      <th scope="col">
                        Strike Rate
                      </th>
                       <th scope="col">
                        How Out
                      </th>
                    </tr>
                  <?php $__currentLoopData = $rst->batsmen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                    <tr>
                        <th scope="col">
                        
                         <?php if($value->how_out=="Not out"): ?>
                         <b> <?php echo e($value->name); ?>* </b>
                         <?php else: ?>
                         <?php echo e($value->name); ?>

                         <?php endif; ?>
                      </th>
                      <th scope="col">
                        
                         <?php echo e($value->runs); ?>

                      </th>
                      <th scope="col">
                         <?php echo e($value->balls_faced); ?>

                      </th>
                      <th scope="col">
                        <?php echo e($value->strike_rate); ?>

                      </th>
                       <th scope="col">
                        <?php echo e($value->how_out); ?>

                      </th>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </thead> 
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </table>
          <?php endif; ?>
        </div>
      </div>

  <script src="<?php echo e(URL::asset('webmedia/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/jquery.easing.1.3.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/aos.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/jquery.animateNumber.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/scrollax.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/plugins.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('webmedia/js/main.js')); ?>"></script><!-- 
  <script src="<?php echo e(URL::asset('webmedia/js/main1.js')); ?>"></script> -->
 
  </body>
</html>
 <?php /**PATH /var/www/web/resources/views/liveScore.blade.php ENDPATH**/ ?>