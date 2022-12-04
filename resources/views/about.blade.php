
@include('templates.header')
@include('templates.navbar')

<section class="home" id="home" >
    <div class="home-header" data-aos="fade_up" >
      <div class="row" >
        <div class="col-lg-5">
            <h1 style="font-family:Lora;">About TED</h1>
            <h5 style="font-family:Lora; font-weight:100">TED is a nonprofit organization devoted to Ideas Worth Spreading. 
              The two annual TED Conferences invite the world's leading thinkers and doers to speak for 18 minutes or less. 
              TED speakers have included Bill Gates, Jane Goodall, Elizabeth Gilbert, and many more. The annual TED Conference 
              takes place each spring in Vancouver, British Columbia. TED's media initiatives include TED.com, where new TED 
              Talks are posted daily which provides subtitles and interactive transcripts from volunteers worldwide; 
              the educational initiative TED-Ed. TED has established The Audacious Project that takes a collaborative 
              approach to funding ideas with the potential to create change at thrilling scale; TEDx, which supports 
              individuals or groups in hosting local, self- organized TED-style events around the world, and the TED Fellows program, 
              helping world-changing innovators from around the globe to amplify the impact of their remarkable projects and activities.
              Click here to find out more about TED :<br>
              {{-- <a href="https://www.ted.com/" target="_blank">www.ted.com</a> --}}
              </h5>
              <a href="https://www.ted.com/" target="_blank"><button class=" get-started mb-4 mt-4" >www.ted.com</button>
              </a>
               
        </div>
        <div class="col-lg-6 " style="margin-left:3%">
          <h1 style="font-family:Lora;">About TEDx</h1>
          <h5 style="font-family:Lora; font-weight:100">
            x = independently organized TED event
              In the spirit of ideas worth spreading, TEDx is a program of local, self-organized events that bring people together to
               share a TED-like experience. At a TEDx event, TED Talks video and live speakers combine to spark deep discussion and 
               connection. These local, self-organized events are branded TEDx, where x = independently organized TED event. 
               The TED Conference provides general guidance for the TEDx program, but individual TEDx events are self-organized.

              Find out more about TEDx at<br>
              {{-- <a href="https://www.ted.com/about/programs-initiatives/tedx-program" target="_blank">www.ted.com/tedx</a>   --}}
              
          </h5>
          <a href="https://www.ted.com/about/programs-initiatives/tedx-program" target="_blank"><button class=" get-started mb-4 mt-4" >www.ted.com/tedx</button>
          </a>
        </div>
      </div> 

      {{-- Kedua --}}
      <div class="row" >
        <div class="col-lg-5">
            <h1 style="font-family:Lora;">About TEDxUniversitasAirlangga</h1>
            <h5 style="font-family:Lora; font-weight:100">
              What is TEDxUniversitasAirlangga?<br>
              TEDxUniversitasAirlangga is organized by an independent community within the scope of BEM FEB Universitas Airlangga to 
              spread new ideas and spark conversation at the university level. TEDxUniversitasAirlangga event has been held for two 
              consecutive years and successfully delivered many bright ideas. This year marks the first offline event of 
              TEDxUniversitasAirlangga ever since the first event held in 2020, so let’s take a part of the history!

              <br>
              {{-- <a href="https://www.ted.com/" target="_blank"><button class=" get-started mb-4 mt-4" >www.ted.com</button> --}}
              </a>
              </h5>
               
        </div>

      </div> 
    {{-- END KEDUA --}}
    </div>







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