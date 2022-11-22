
@include('templates.header')
@include('templates.navbar')

<section class="home" id="home" >
    <div class="home-header" data-aos="fade_up" >
      <div class="row" >
        <div class="col-lg-5">
            <h1 class="ml11 mb-4" >
              <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters">Epiphany on Ephemeral</span>
              </span>
            </h1>         
            <h5 style="font-family:Lora; font-weight:100">Epiphany is associated with a life-changing realization and things that don't last forever are
              ephemeral. It starts from the fact that our life is dynamic, sometimes we’ve been through the
              happiest moment, and sometimes we have to accept that we lost something that we never
              expected. That’s all part of the ups and downs in our life. Like it or not, we have to live it.
              That’s why we believe that this phenomenon needs to be shared to level up our awareness
              and readiness as humans to face this. Starting with ourselves first, we hope this value will be
              spread then as wide as possible like the tagline of TEDx itself. How society will respond is up
              to them to see this phenomenon from their views, every way is unique.</h5>
              @if (Auth::user())
                  
              @else
                <button class=" get-started mb-4 mt-4"  data-bs-toggle="modal" data-bs-target="#registerModal"> Get Started</button>
         @endif  
        </div>
        <div class="col-lg-6 d-flex justify-content-center" style="margin-left:3%">
          <img src="images/desainmain.png"class="img-fluid home-img" style="margin:auto; height:auto width:100%; ">
        </div>
      </div> 

    </div>



    <section class="countdown mb-4" id="countdown">
      <div class="container" data-aos="fade_up">
          <div class="row d-flex align-items-end">
            <div class="col-lg-6">
              <center>
              <h4>Looking for <br> Local Speakers</h4>
              <img src="images/lfls2.png" class="countdown-img mt-4 mb-2" alt="" data-bs-toggle="modal" data-bs-target="#subevent">
              <h6>Registration closed at:</h6>
              <div class="registration-closed mb-4">
                Closed
              </div>
              </center>
            </div>
            <div class="col-lg-6 ">
              <center>
              <h4>Main Event</h4>
              <img src="images/desainmain2.png" class="countdown-img mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#mainEvent" alt="">
              <h6>Saturday, 26th November 20222</h6>
              <div id="count" >
                <ul style="margin:0">
                  <li><span id="days"></span>days</li>
                  <li><span id="hours"></span>Hours</li>
                  <li><span id="minutes"></span>Minutes</li>
                  <li><span id="seconds"></span>Seconds</li>
                </ul>
              </div>
              </center>
            </div>
        </div>    
      </div>
    </section>


    <section class="theme mt-4 d-flex justify-content-center" id="theme">
      <div class="container" data-aos="fade_up">
        <h5 class="mt-4">GRAND THEME</h5>
        <h4 class="mt-2 mb-4">Epiphany on Ephemeral</h4>
        <p class="mb-4 ">
          Epiphany is associated with a life-changing realization and things that don't last forever are ephemeral.
        </p>
        <p class="mb-4">
          It starts from the fact that our life is dynamic, sometimes we’ve been through the happiest moment and 
          sometimes we have to accept that we lost something that we never expected. That’s all part of the ups and 
          downs in our life. Like it or not, we have to live it. That’s why we believe that this phenomenon needs to 
          be shared to level up our awareness and readiness as humans to face this. Starting from ourselves first, 
          we hope this value will be spread then as wide as possible like the tagline of TEDx itself. 
          How society will respond is up to them to see this phenomenon from their views, we believe that every way is unique.
        </p>
          <h5 style="margin-top:100px">SUBTHEME</h5>
          <div class="row mt-2 mb-4">
            <div class="col-lg-4">
              <img src="images/health2.png" class="countdown-img mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#themeModal" alt="">
              <h3> ROOT </h3>
            </div>
            <div class="col-lg-4">
              <img src="images/education2.png" class="countdown-img mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#themeModal" alt="">
              <h3> TRUNK  </h3>
            </div>
            <div class="col-lg-4">
              <img src="images/work2.png" class="countdown-img mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#themeModal" alt="">
              <h3> CROWN  </h3>
            </div>
          </div>


          {{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true" style="margin-top:10%;">          
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row d-flex align-items-center justify-content-center">
                  <div class="col-lg-5">
                    <div class="carousel-caption capt">
                      <h5>Main Speakers 1</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="col-lg-5 mt-4">
                    <img src="images/speaker-1.png" class="speaker-img " alt="...">
                  </div>
                </div>        
              </div>
              <div class="carousel-item">
                <div class="row d-flex align-items-center justify-content-center">
                  <div class="col-lg-5">
                    <div class="carousel-caption capt">
                      <h5>Main Speakers 2</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="col-lg-5 mt-4">
                    <img src="images/speaker-1.png" class="speaker-img " alt="...">
                  </div>
                </div>        
              </div>
              <div class="carousel-item">
                <div class="row d-flex align-items-center justify-content-center">
                  <div class="col-lg-5">
                    <div class="carousel-caption capt">
                      <h5>Main Speakers 3</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="col-lg-5 mt-4">
                    <img src="images/speaker-1.png" class="speaker-img " alt="...">
                  </div>
                </div>        
            </div>
            <div class="carousel-item">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-5">
                  <div class="carousel-caption capt">
                    <h5>Main Speakers 4</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="col-lg-5 mt-4">
                  <img src="images/speaker-1.png" class="speaker-img " alt="...">
                </div>
              </div>        
          </div>
          </div>
          <div class="row mt-4 d-flex justify-content-center">
            <div class="col-lg-5"></div>
            <div class="col-lg-5 d-flex justify-content-center">
              <div class="carousel-indicators dot">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
            </div>
          </div>
      </div> --}}
    </section>


    <section id="topic" class="topic">  

      
      <div class="container" > 

       {{-- <div class="row d-flex justify-content-end">
        <div class="col-lg-5 d-flex justify-content-center">
          <div class="talk-card">
           <div class="row ">
            <div class="col-4 d-flex">
              <img src="images/talk.png" class="talk-img d-flex align-items-end" alt="">  
            </div>
            <div class="col-8">
              <h5 class="mb-3">Topic of The Talk</h5>
              <h6>John Doe</h6>
              <p>Executive Director</p>
            </div>
           </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex justify-content-center">
          <div class="talk-card">
            <div class="row">
             <div class="col-4">
               <img src="images/talk.png" class="talk-img d-flex align-items-end" alt="">  
             </div>
             <div class="col-8">
               <h5 class="mb-3">Topic of The Talk</h5>
               <h6>John Doe</h6>
               <p>Executive Director</p>
             </div>
            </div>
           </div>
        </div>    
       </div>
       
       <div class="row">

        <div class="col-lg-5 d-flex justify-content-center">
          <div class="talk-card">
            <div class="row">
             <div class="col-4">
               <img src="images/talk.png" class="talk-img d-flex align-items-end" alt="">  
             </div>
             <div class="col-8">
               <h5 class="mb-3">Topic of The Talk</h5>
               <h6>John Doe</h6>
               <p>Executive Director</p>
             </div>
            </div>
           </div>
        </div> 

        <div class="col-lg-5 d-flex justify-content-center">
          <div class="talk-card">
            <div class="row">
             <div class="col-4">
               <img src="images/talk.png" class="talk-img d-flex align-items-end" alt="">  
             </div>
             <div class="col-8">
               <h5 class="mb-3">Topic of The Talk</h5>
               <h6>John Doe</h6>
               <p>Executive Director</p>
             </div>
            </div>
           </div>
        </div> 

       </div> --}}


       {{-- Judul --}}
       <div class="student-speaker">
        <div class="row student mb-4">
          <div class="col">
            <h5 class="text-center">Our Speakers</h5><br>
            <h6>ROOT : HEALTH AS THE BASIS OF HUMAN</h6>
          </div> 
        </div>
          

        {{-- DIPAKE --}}
        <div class="row d-flex justify-content-center mt-4">
          <div class="col-lg-6 ">
           <center> <img src="images/speakers/DrBrahmana_Final.png" data-bs-toggle="modal" data-bs-target="#drbrahma" class="countdown-img" alt=""></center>
           <div style="padding-right:20%; padding-left:10%">
            <h5 class="text-center mt-4" style="font-size:20px">Dr. dr. Brahmana Askandar Tjokroprawiro, SpOG (K)-Onk</h5>
            <p class="text-center">Obstetricians and Gynecological Oncologists
            </p>
           </div>
          </div>
          <div class="col-lg-6 ">
            <center> <img src="images/speakers/AnnisaAxelta_Final.png" data-bs-toggle="modal" data-bs-target="#axel" class="countdown-img" alt=""></center>
           <div style="padding-right:20%; padding-left:10%">
            <h5 class="text-center mt-4" style="font-size:20px">Annisa Axelta, M.Psi., Psikolog</h5>
            <p class="text-center">Adult Clinical Psychologist</p>
           </div>
          </div>
        </div>
        {{-- END --}}
       </div>

        {{-- Judul --}}
        <div class="student-speaker">
          <div class="row student mb-4">
            <div class="col">
              <h5 class="text-center">Our Speakers</h5><br>
              <h6>TRUNK : EDUCATION AS THE PILLAR OF LIFE</h6>
            </div> 
          </div>
            
  
          {{-- DIPAKE --}}
          <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-4 ">
              <center> <img src="images/speakers/HendiPratama_Final.png"  data-bs-toggle="modal" data-bs-target="#hendi" class="countdown-img" alt=""></center>
              <div style="padding-right:20%; padding-left:10%">
              <h5 class="text-end mt-4" style="font-size:20px">Dr. Hendi Pratama, S.Pd., M.A.</h5>
              <p class="text-center">Senior Lecturer, Academician, and Founder @Edutrans.id</p>
              </div>
            </div>
            <div class="col-lg-4 ">
              <center> <img src="images/speakers/RoyNovri_Final.png" data-bs-toggle="modal" data-bs-target="#roy" class="countdown-img" alt=""></center>
              <div style="padding-right:20%; padding-left:10%">
              <h5 class="text-end mt-4" style="font-size:20px">Roy Novri</h5>
              <p class="text-center">Undergraduate Student of Faculty of Medicine
              </p>
              </div>
            </div>
          </div>
          {{-- END --}}
          </div>

                 {{-- Judul --}}
       <div class="student-speaker">
        <div class="row student mb-4">
          <div class="col">
            <h5 class="text-center">Our Speakers</h5><br>
            <h6>CROWN : TRUST THE POSSIBILITY IN WORK-LIFE</h6>
          </div> 
        </div>
          

        {{-- DIPAKE --}}
        <div class="row d-flex justify-content-center mt-4">
          <div class="col-lg-4 ">
           <center> <img src="images/speakers/Sunarto_Final.png" data-bs-toggle="modal" data-bs-target="#sunarto" class="countdown-img" alt=""></center>
           <div style="padding-right:20%; padding-left:10%">
            <h5 class="text-end mt-4" style="font-size:20px">Sunarto</h5>
            <p class="text-center">Chairman of Artax</p>
           </div>
          </div>
          <div class="col-lg-4 ">
            <center> <img src="images/speakers/AnnisaNugrahani_Final.png" data-bs-toggle="modal" data-bs-target="#salsa" class="countdown-img" alt=""></center>
           <div style="padding-right:20%; padding-left:10%">
            <h5 class="text-end mt-4" style="font-size:20px">Annisa Salsabilla
            </h5>
            <p class="text-center">Undergraduate Student of Faculty of Medicine
            </p>
           </div>
          </div>
        </div>
        {{-- END --}}
       </div>

      
      </div>   
    </section>

    @include('templates.footer')
</section>



{{-- MODAL SUBEVENT --}}
<div class="modal fade" id="subevent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
			<div class="modal-content event-modal">
				<div class="modal-header auth-header" style="padding:20px">
          <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
          <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
				</div>
				<div class="modal-body modal-event" style="padding:5%">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row" style="padding:20px;">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <img src="images/lfls2.png" alt="">
                  </div>
                  <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                    <h6>SUB EVENT</h6>
                    <h5>Looking For Local Speakers</h5>
                    <p>
                      A competition that focuses on finding potential student speakers who are able and want to spread their 
                      ideas about TEDxUniversitasAirlangga’s theme in 2022. Selected speakers in this competition will have a 
                      chance to take part in the main event of TEDxUniversitasAirlangga 2022
                    </p>
                    {{-- <div class="grab">
                      <p>Find out at TEDUniversitasAirlangga 2022.</p>
                      <a href="" type="button" class="grab-button">Grab the ticket now</a>
                    </div> --}}
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row" style="padding:20px;">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <img src="images/lfls2.png" alt="">
                  </div>
                  <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                    <h6>SUB EVENT</h6>
                    <h5>Wanderlust</h5>
                    <p>
                      A medium to display various works of experience that can be felt by humans with their five senses. 
                      The existence of wanderlust can help to maximize the public’s understanding of TEDxUniversitasAirlangga's 
                      theme this year.
                    </p>
                    {{-- <div class="grab">
                      <p>Find out at TEDUniversitasAirlangga 2022.</p>
                      <a href="" type="button" class="grab-button">Grab the ticket now</a>
                    </div> --}}
                  </div>
                </div>
              </div>

            </div>
            <div class="carousel-indicators dot2" style="margin-top:10px">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
				</div>
			</div>
		</div>
	</div>

{{-- END SUBEVENT --}}


{{------------------------------
MODAL MAIN EVENT 
--------------------------------}}
<div class="modal fade" id="mainEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
			<div class="modal-content event-modal">
				<div class="modal-header auth-header" style="padding:20px">
          <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
          <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
				</div>
				<div class="modal-body modal-event" style="padding:5%">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row" style="padding:20px;">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <img src="images/desainmain.png" alt="">
                  </div>
                  <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                    <h6>MAIN EVENT</h6>
                    <h5>SESSION OF TALKS</h5>
                    <p>
                      TEDx events include live speakers (18 minutes speech from the keynote speakers), 
                      Live experiences (Wanderlust, mini games, and Q&A session for all participants), 
                      recorded TEDx Talks (video clip of some previous TEDxTalks video), etc.
                    </p>
                    <div class="grab">
                      <p>Find out at TEDUniversitasAirlangga 2022.</p>
                      <a href="" type="button" class="grab-button">Grab the ticket now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="carousel-indicators dot2" style="margin-top:10px">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
          </div>
				</div>
			</div>
		</div>
	</div>


{{-----------------------------------------
MODAL SUBTHEME 
-------------------------------------------}}
<div class="modal fade" id="themeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
			<div class="modal-content event-modal">
				<div class="modal-header auth-header" style="padding:20px">
          <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
          <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
				</div>
				<div class="modal-body modal-event" style="padding:5%">
          <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row" style="padding:20px;">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <img src="images/health2.png" alt="">
                  </div>
                  <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                    <h6>SUBTHEME</h6>
                    <h5>ROOT : HEALTH AS THE BASIS OF HUMAN</h5>
                    <p>
                      As humans, we are born with body and soul to be able to survive individually or in groups. 
                      Both of these are crucial components for humans, so it’s important for humans to be able to 
                      maintain them to build a strong foundation for their life. What if all the efforts that humans 
                      have done produce unexpected results? How does the health sector respond to this?
                    </p>
                    <div class="grab">
                      <p>Find out at TEDUniversitasAirlangga 2022.</p>
                      <a href="" type="button" class="grab-button">Grab the ticket now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row" style="padding:20px;">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <img src="images/education2.png" alt="">
                  </div>
                  <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                    <h6>SUBTHEME</h6>
                    <h5>TRUNK : EDUCATION AS THE PILLAR OF LIFE</h5>
                    <p>There’s no limit to talk about education. We define education here as part of learning, 
                      both in formal and informal ways. From now on, we can get the essentials of education through 
                      many kinds of ways aligned with the shifting of the era. How does the field of education view this phenomenon?
                    </p>
                    <div class="grab">
                      <p>Find out at TEDUniversitasAirlangga 2022.</p>
                      <a href="" type="button" class="grab-button">Grab the ticket now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row" style="padding:20px;">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <img src="images/work2.png" alt="">
                  </div>
                  <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                    <h6>SUBTHEME</h6>
                    <h5>CROWN : TRUST THE POSSIBILITY IN WORK-LIFE</h5>
                    <p>
                      The changing era that continues to occur has an impact on several sectors of life, one of which is the 
                      world of work which every year also experiences an uncertain era shift. It is important for humans to realize 
                      that they are also expected to be able to follow in their own way. However, is it enough for humans to simply 
                      keep up with the times without the belief in themselves that they are able to believe in the possibility amid 
                      the uncertainty and impossibility that occurs?
                    </p>
                    <div class="grab">
                      <p>Find out at TEDUniversitasAirlangga 2022.</p>
                      <a href="" type="button" class="grab-button">Grab the ticket now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-indicators dot2" style="margin-top:10px">
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
				</div>
			</div>
		</div>
	</div>


{{-- <button class=" get-started mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#subeventModal"> Lauch modal</button> --}}



<!-- Modal -->
<div class="modal fade" id="subeventModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" width="auto" height="auto">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header">
		  <div class="row" style="padding:5px">
			<div class="col-10">
			  <img src="images/dark-logo.png" height="auto" width="60%" style="margin:5px" alt="">
			</div>
			<div class="col-2 justify-content-end">
			  <button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>
			</div>
		  </div>     
		</div>
		<div class="modal-body" style="padding:40px">
		 <img src="images/subevent.jpg" style="margin:auto; width:100%; height:100%" alt="">



		</div>
	  </div>
	</div>
  </div>

{{------------------------------
MODAL SPEAKER
--------------------------------}}
{{-- DR BRAHMA --}}
<div class="modal fade" id="drbrahma" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
			<div class="modal-content event-modal">
				<div class="modal-header auth-header" style="padding:20px">
          <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
          <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
				</div>
				<div class="modal-body modal-event" style="padding:5%">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row" style="padding:20px;">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <img src="images/speakers/DrBrahmana_Final.png" alt="">
                  </div>
                  <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                    <h6>SPEAKER</h6>
                    <h5>Root: Health as the Basis of Human</h5>
                    <p>
                      Health has a close relations with uncertainty, considering that disease doesn’t look at who you are or how old are you, youths need to grow and increase their awareness about how important it is to maintain physical health whether in the short term or the long term. The discussion about Physical Health will be presented by Dr. dr. Brahmana Askandar Tjokroprawiro, SpOG (K)-Onk as General Chair of the Indonesian Association of Gynecological Oncologists and Chair of the Surabaya Doctors Association. dr. Brahmana has a lot of experience in the health sector especially cancer as one of the most dangerous diseases in the world. dr. Brahmana will explain how important it is to take care of yourself to avoid illness to achieve a bright future.
                    </p>
                    <div class="grab">
                      <p>Find out at TEDUniversitasAirlangga 2022.</p>
                      <a href="" type="button" class="grab-button">Grab the ticket now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>

  {{-- ANNISA AXEL --}}
  <div class="modal fade" id="axel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
        <div class="modal-content event-modal">
          <div class="modal-header auth-header" style="padding:20px">
            <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
            <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
          </div>
          <div class="modal-body modal-event" style="padding:5%">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row" style="padding:20px;">
                    <div class="col-lg-4 d-flex justify-content-center">
                      <img src="images/speakers/AnnisaAxelta_Final.png" alt="">
                    </div>
                    <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                      <h6>SPEAKER</h6>
                      <h5>Root: Health as the Basis of Human</h5>
                      <p>
                        Most of the young people in Indonesia are currently excluded due to their limited understanding of mental health. Nowadays, mental health is always the hottest issue that is often discussed everywhere, even everything that happens in the youth’s life is most likely associated with mental health problems. In response to this, TEDxUniversitasAirlangga presents a special discussion related to mental health with Annisa Axelta. As we know, Annisa Axelta is Adult Clinical Psychologist. The woman who is familiarly called Annisa started her career as a psychologist who later became active in giving pieces of advice about how to be grateful and enjoy life as it should be. Annisa Axelta has been teaching and running online movements with digital learning tools to be able to consistently access mental health education.  Utilizing her social media platforms, such as Instagram, Annisa Axelta actively shares information about the importance of raising awareness of mental health among the youths through @futureparentsproject. We can say that Annisa Axelta is one of the people that have a central role in orchestrating the emergence of mental health among the youths. No wonder Annisa Axelta through @futureparentsproject also has many loyal followers who listen to every suggestion and advice she issues to the youths so they can live a better life as human.
                      </p>
                      {{-- <div class="grab">
                        <p>Find out at TEDUniversitasAirlangga 2022.</p>
                        <a href="" type="button" class="grab-button">Grab the ticket now</a>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  {{--  Dr. Hendi  --}}
  <div class="modal fade" id="hendi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
        <div class="modal-content event-modal">
          <div class="modal-header auth-header" style="padding:20px">
            <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
            <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
          </div>
          <div class="modal-body modal-event" style="padding:5%">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row" style="padding:20px;">
                    <div class="col-lg-4 d-flex justify-content-center">
                      <img src="images/speakers/HendiPratama_Final.png" alt="">
                    </div>
                    <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                      <h6>SPEAKER</h6>
                      <h5>Trunk : Education As The Pillar of Life</h5>
                      <p>
                        Mr. Hendi Pratama, probably well known as a lecturer yet also a famous content creator on TikTok, with approximately 252K followers. With his Master of Art degree from The University of Queensland and Doctor of Philosophy degree from University Sebelas Maret, he has contributed a lot in Indonesia's education field. Beside his experiences on the formal education, as a lecturer and the vice rector for planning and partnership at Semarang State University, Mr. Hendi is also the founder of an informal education platform called @Edutrans.id. Edutrans.id itself, committed to help educators and learners to undergo transformational education. Mr. Hendi also had the experiences as a delegation member, either for an exchange program or an international conferences. He has also published several international journals and has released a few books. His expertise are in linguistics, pragmatics, implicatures and politeness,
                      </p>
                      {{-- <div class="grab">
                        <p>Find out at TEDUniversitasAirlangga 2022.</p>
                        <a href="" type="button" class="grab-button">Grab the ticket now</a>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     {{--  Roy  --}}
  <div class="modal fade" id="roy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
        <div class="modal-content event-modal">
          <div class="modal-header auth-header" style="padding:20px">
            <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
            <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
          </div>
          <div class="modal-body modal-event" style="padding:5%">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row" style="padding:20px;">
                    <div class="col-lg-4 d-flex justify-content-center">
                      <img src="images/speakers/RoyNovri_Final.png" alt="">
                    </div>
                    <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                      <h6>SPEAKER</h6>
                      <h5>Trunk : Education As The Pillar of Life</h5>
                      <p>
                        Roy Novri is an undergraduate student of Faculty of Medicine. He is a executive board of community outreach in Asian Medication Students Association or AMSA in 2021. He is also a speaker at several events such as the speaker of Bonding CO AMSA-Unair 2022, speaker of Bincang Jalur Perguruan Tinggi 2022, and the speaker of Masuk Kampus FK Event 2022 etc. He is the delegate of Airlangga University medical student outbond in Japan at 2022. He has also participated and wrote several researches.
                      </p>
                      <div class="grab">
                        <p>Find out at TEDUniversitasAirlangga 2022.</p>
                        <a href="" type="button" class="grab-button">Grab the ticket now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     {{--  Sunarto  --}}
     <div class="modal fade" id="sunarto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
          <div class="modal-content event-modal">
            <div class="modal-header auth-header" style="padding:20px">
              <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
              <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
            </div>
            <div class="modal-body modal-event" style="padding:5%">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row" style="padding:20px;">
                      <div class="col-lg-4 d-flex justify-content-center">
                        <img src="images/speakers/Sunarto_Final.png" alt="">
                      </div>
                      <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                        <h6>SPEAKER</h6>
                        <h5>CROWN : TRUST THE POSSIBILITY IN WORK-LIFE</h5>
                        <p>
                          The world will always experience a constant shift and it impacts many sectors in the world, one of which the working world. In order to survive it is not enough for us to simply follow these changes, we need to believe in ourselves. Especially, facing the uncertainty and impossibility that could happen. Mr. Sunarto an accomplished leader, has led his company to strive until today. Throughout his career, he has experienced many hardships facing the constant shift of the working world. His experience building his company amidst these constant shifts of the world is truly remarkable. The innovations and ideas that he invested in his company managed to overcome the hardship and impossibilities. He managed to survive with his own beliefs and ideas, and that's what we truly need in order to survive.
                        </p>
                        {{-- <div class="grab">
                          <p>Find out at TEDUniversitasAirlangga 2022.</p>
                          <a href="" type="button" class="grab-button">Grab the ticket now</a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

           {{--  Sunarto  --}}
     <div class="modal fade" id="salsa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable home-modal">
          <div class="modal-content event-modal">
            <div class="modal-header auth-header" style="padding:20px">
              <img src="images/tedxhitam.png" alt="" height="30px" width="auto">
              <span> <button type="button" class="btn-close close-syarat" data-bs-dismiss="modal" aria-label="Close"></button></span>	
            </div>
            <div class="modal-body modal-event" style="padding:5%">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row" style="padding:20px;">
                      <div class="col-lg-4 d-flex justify-content-center">
                        <img src="images/speakers/AnnisaNugrahani_Final.png" alt="">
                      </div>
                      <div class="col-lg-8" style="padding-left:2%; padding-right:5%">
                        <h6>SPEAKER</h6>
                        <h5>CROWN : TRUST THE POSSIBILITY IN WORK-LIFE</h5>
                        <p>
                          Annisa Salsabilla Dwi Nugrahani is an undergraduate student of Faculty of Medicine. She was awarded as the Most outstanding student of Faculty of Medicine 2021 and recently, as the Most Outstanding Student of Universitas Airlangga 2022. She has been featured in more than 30 international, national, and local events as a guest speaker. She has taken part in 4 abroad exchange, in Australia, Thailand, Malaysia, and even United Kingdom. She has also participated in several researches, such as beta-thalassemia, moraxella, and many else.
                        </p>
                        <div class="grab">
                          <p>Find out at TEDUniversitasAirlangga 2022.</p>
                          <a href="" type="button" class="grab-button">Grab the ticket now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  <script>

     (function () {
     const second = 1000,
           minute = second * 60,
           hour = minute * 60,
           day = hour * 24;
   
     //I'm adding this section so I don't have to keep updating this pen every year :-)
     //remove this if you don't need it
     let today = new Date(),
         dd = String(today.getDate()).padStart(2, "0"),
         mm = String(today.getMonth() + 1).padStart(2, "0"),
         yyyy = today.getFullYear(),
         nextYear = yyyy + 1,
         dayMonth = "11/26/",
         birthday = dayMonth + yyyy;
     
     today = mm + "/" + dd + "/" + yyyy;
     if (today > birthday) {
       birthday = dayMonth + nextYear;
     }
     //end
     
     const countDown = new Date(birthday).getTime(),
         x = setInterval(function() {    
   
           const now = new Date().getTime(),
                 distance = countDown - now;
   
           document.getElementById("days").innerText = Math.floor(distance / (day)),
             document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
             document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
             document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
   
           //do something later when date is reached
           if (distance < 0) {
             document.getElementById("count").style.display = "none";
             document.getElementById("content").style.display = "block";
             clearInterval(x);
           }
           //seconds
         }, 0)
     }());
   </script>