<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{env('company_name')}} | The Fantasy World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="{{env('fevicon_url')}}" /> 

    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/owl.carousel.min.css')}}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('webmedia/css/owl.theme.default.min.css')}}"> -->
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/aos.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/style2.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/style.css')}}">
     <link rel="stylesheet" href="{{ URL::asset('webmedia/css/util.css')}}">
     <link rel="stylesheet" href="{{ URL::asset('webmedia/css/main.css')}}">
    
  </head>
  <!-- Start of LiveChat (www.livechatinc.com) code -->
  <style>
    .bs-example{
        margin: 20px;
    }
    .accordion .fa{
        margin-right: 0.5rem;
    }
</style>
<body> 
    <div class="row">
       
    <div class="col-md-12 wow fadeInRight animated animated" data-aos="fade-right" data-wow-delay="450ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
        <h2 class="heading heading_space" style="background:azure">   <span class="divider-left"><center>My Affiliate:</center></span></h2>
                
        <form method="POST" action="contactus" accept-charset="UTF-8" class="form-inline findus" id="contact-form"> 
                                  
          
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group ">
                <style type="text/css">
                  .form-group{
                    margin: 5px;
                  }
                </style>
                <button type="button" class="form-group btn btn-primary">Referral Code: {{$user->referal_code??null}} </button>
                  
                  <button type="button" class="form-group btn btn-secondary">My Total User: {{$total_user??0}} </button>
                  
                  <button type="button" class="form-group btn btn-success">Total User Deposit: {{$total_deposit??0}} INR</button>
                  
                  <button type="button" class="form-group btn btn-danger">Total User Winning: {{$total_winning??0}} INR</button>
                   
                  <button type="button" class="form-group btn btn-info">Total Commission: {{round($commission,2)}} INR</button>
                   
                  <button type="button" class="form-group btn btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">View All User</button>
                 
              </div>
 

            </div>
             
            
          </div>
        </form>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">
               <table class="table-striped" cellpadding="10" cellspacing="2">
                 <tr align="center">
                   <td><b>Name</b></td> 
                     <td><b>Deposit</b></td>
                      <td><b>Winning</b></td>
                 </tr>
                 @foreach($myAffiliate as $key => $result)
                  <tr>
                   <td>{{++$key}}. {{$result->name}}</td> 
                   <td>{{$result->deposit}}</td>
                   <td>{{$result->winning}}</td>
                     
                 </tr>
                 @endforeach
               </table>
            </div>
          </div>
        
    </div>
    
  </div> 


  <script src="{{ URL::asset('webmedia/js/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/owl.carousel.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/aos.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/scrollax.min.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/plugins.js')}}"></script>
  <script src="{{ URL::asset('webmedia/js/main.js')}}"></script><!-- 
  <script src="{{ URL::asset('webmedia/js/main1.js')}}"></script> -->

  <script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
          $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        autoplaySpeed:5000 
        
        
    });
  });
  </script> 
  </body>
</html>
 