     <?php $bgUrl =  'https://ninja11.in/bg1.jpg';

     //env('main_slider_image','https://ninja11.in/webmedia/images/main.jpg'); ?>
      <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo $bgUrl; ?>')" data-section="home" data-stellar-background-ratio="0.5" id="home-section">
      	<div style="position: absolute;
	  	        text-align: center;
	  	        width: 100%;
			    top: 90px;">
        <img src="{{URL::asset('assets/img/logo.png')}}" width="150px"  style="
			    border: 0px solid #fff;
			    border-radius: 5px;
			" align="center" alt="ninja11">
		</div>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }" >
            <h1 class="mb-5" data-scrollax="properties: { translateY: '60%', opacity: 1.6 }" align="center" style="color: #FFC103">{{env('company_name')}} Fantasy League</h1>
            
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" align="center">Create Team | Join Contest | Win Cash</p>
                    <div class="row" align="center">
                        <div class="col-lg align-items-end">
                             <a href="{{env('apk_url')}}">
                            <img  src="{{ URL::asset('webmedia/images/download-android-new.png')}}" alt="Ninja11 Fantasy App" style="width: 200px;"  >
                        </a>
                        </div>
                    </div>
          </div>
        </div>
      </div>
      <!-- <div>
        
              <input type="text" name="link" style="">
              <span style="float: right;">Get Download Link</span>
      </div> -->
    </section>

    

       <!-- about works -->

    <section class="ftco-section ftco-services-2" style="background:linear-gradient(to right,#ffffff,#00bade); margin-top:0px">
            <div class="container">
                <div class="row">
          <div class="col-md-4 heading-section ftco-animate">
            <span class="subheading">Steps</span>
            <h2 class="mb-4">Our Steps</h2>
           
            <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
              <div class="icon justify-content-center align-items-center d-flex"><span>1</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Check Out Contest For the League</h3>
                <p class="mb-5">You are allowed to check over the participating teams based on the previous match
listings, and you can also check the entry ticket amount.</p>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate mt-lg-5">
            <div class="media block-6 services text-center d-block mt-lg-5 pt-md-5 pt-lg-4">
              <div class="icon justify-content-center align-items-center d-flex"><span>2</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Create your Best Team</h3>
                <p class="mb-5"  style="color: #000">{{env('company_name')}} gives you an opportunity to organize the best team, choosing from real-life
players and get paid for your knowledge & expertise by winning the cash rewards.
</p>
                <hr>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span>3</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Pay Small And Win Big</h3>
                <p class="mb-5" style="color: #000">Pay small and win big is the concept of winning a considerable amount by taking part in
the contest with a small token of entry amount. Not just this, but also all the participants
are getting rewarded based on their ranks.</p>
                <hr>
              </div>
            </div>      
          </div>
        </div>
            </div>
            
        </section>  
        <!-- Screenshot -->

        
    
        <section class="service-area " id="howork-section" style="margin-top: 50px">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center heading-section">
                            <span class="subheading">Help with NINJA11</span>
                            <h2>How Can We Help with</h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div> 
                            <div class="service-cap">
                                <h4><a href="#">Easily Manage</a></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-pay"></span>
                            </div> 
                            <div class="service-cap">
                                <h4><a href="#">Get Payments Easily</a></h4>
                                <p></p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div> 
                            <div class="service-cap">
                                <h4><a href="#">Quick Messaging</a></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
   
    
    <div class="jumbotron jumbotron-fluid" style="margin: 0px">
          <div class="container center">
            <h1>Reach us at {{env('company_email')}} </h1>
            
          </div>
      </div> 
