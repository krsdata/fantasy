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
     
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('webmedia/css/style.css')}}"> 
  </head>
<body> 
    <div class="row"> 
      
        <div class="col-md-12"> 
          @if($liveMatch->count()==0)
            No Match Live
          @endif
          @foreach($liveMatch as $key => $val)
         <a class="btn btn-success"  href="https://ninja11.in/liveScore?match_id={{$val->match_id}}"  style="margin: 10px" >
             {{$val->short_title}}-{{$val->format_str}}
          </a>
              
          @endforeach
          @if($rs) 
              <div align="left">
                 
                <img src="{{$rs->teama->logo_url}}" width="50px">  {{$rs->teama->short_name}}-{{$rs->teama->scores_full??''}}
                <br>
                <img src="{{$rs->teamb->logo_url}}" width="50px">
                {{$rs->teamb->short_name}}-{{$rs->teamb->scores_full??''}}           
              </div>
              <table class="table">
                @foreach ($rs->innings as $key => $rst)
                <thead> 
                  <tr>
                    <td colspan="1">
                        
                      @if($key==0)
                      {{$rs->teama->name}}
                      <img src="{{$rs->teama->logo_url}}" width="50px">
                      @endif 
                      @if($key==1)
                       {{$rs->teamb->name}}
                      <img src="{{$rs->teamb->logo_url}}" width="50px">
                      @endif  
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
                  @foreach($rst->batsmen  as $key => $value)
                   
                    <tr>
                        <th scope="col">
                        
                         @if($value->how_out=="Not out")
                         <b> {{ $value->name}}* </b>
                         @else
                         {{ $value->name}}
                         @endif
                      </th>
                      <th scope="col">
                        
                         {{ $value->runs}}
                      </th>
                      <th scope="col">
                         {{ $value->balls_faced}}
                      </th>
                      <th scope="col">
                        {{ $value->strike_rate}}
                      </th>
                       <th scope="col">
                        {{ $value->how_out}}
                      </th>
                    </tr>
                  @endforeach
                </thead> 
               @endforeach
             </table>
          @endif
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
 
  </body>
</html>
 