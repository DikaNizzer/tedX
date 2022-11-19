
@include('templates.header')
@include('templates.navbar')

<section class="home" id="home" >
    <div class="home-header" data-aos="fade_up" >
      <div class="row" >
        <div class="col-lg-5">
            <h1 class="ml11 mb-4">
              <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters">Epiphany on Ephemeral</span>
              </span>
            </h1>         
            <h5>Epiphany is associated with a life-changing realization and things that don't last forever are
              ephemeral. It starts from the fact that our life is dynamic, sometimes we’ve been through the
              happiest moment, and sometimes we have to accept that we lost something that we never
              expected. That’s all part of the ups and downs in our life. Like it or not, we have to live it.
              That’s why we believe that this phenomenon needs to be shared to level up our awareness
              and readiness as humans to face this. Starting with ourselves first, we hope this value will be
              spread then as wide as possible like the tagline of TEDx itself. How society will respond is up
              to them to see this phenomenon from their views, every way is unique.</h5>
              @if (Auth::user())
                  
              @else
                <button class=" get-started mb-4 mt-4"  data-bs-toggle="modal" data-bs-target="#registerModal"> GET STARTED</button>
         @endif  
        </div>
        <div class="col-lg-6 d-flex justify-content-center" style="margin-left:3%">
          <img src="images/home-image.png"class="img-fluid home-img" style="margin:auto; height:auto width:100%; ">
        </div>
      </div> 

    </div>



    <section class="countdown mb-4" id="countdown">
      <div class="container" data-aos="fade_up">
          <div class="row d-flex align-items-end">
            <div class="col-lg-6">
              <center>
              <h4>Looking for <br> Local Speakers</h4>
              <img src="images/component.png" class="countdown-img mt-4 mb-2" alt="">
              <h6>Registration closed at:</h6>
              {{-- <div id="count">
                <ul>
                  <li><span id="days"></span>days</li>
                  <li><span id="hours"></span>Hours</li>
                  <li><span id="minutes"></span>Minutes</li>
                  <li><span id="seconds"></span>Seconds</li>
                </ul>
              </div> --}}
              <div class="registration-closed mb-4">
                Closed
              </div>
              </center>
            </div>
            <div class="col-lg-6 ">
              <center>
              <h4>Maint Event</h4>
              <img src="images/component.png" class="countdown-img mt-4 mb-2" alt="">
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
        <p class="mb-4">Our main theme for this year is Epiphany on Ephemeral. 
          Epiphany is associated with life-changing realisation, and 
          things that don’t last forever are ephemeral.</p>
          <h5 class="mt-4">SUBTHEME</h5>
          <div class="row mt-2 mb-4">
            <div class="col-lg-4">
              <img src="images/component.png" class="countdown-img mt-4 mb-2" alt="">
            </div>
            <div class="col-lg-4">
              <img src="images/component.png" class="countdown-img mt-4 mb-2" alt="">
            </div>
            <div class="col-lg-4">
              <img src="images/component.png" class="countdown-img mt-4 mb-2" alt="">
            </div>
          </div>


          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="margin-top:10%;">          
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
      </div>
    </section>


    <section id="topic" class="topic">  
      <div class="container" > 
       <div class="row d-flex justify-content-center">
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

        <div class="col-lg-5 mt-4 d-flex justify-content-center">
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

       <div class="student-speaker">
        <div class="row student mb-4">
          <div class="col">
            <h5 class="text-end">Student Speakers</h5><br>
            <h6>Brief description about the content of this section</h6>
          </div> 
        </div>
          
        <div class="row d-flex justify-content-center mt-4">
          <div class="col-lg-4 ">
           <center> <img src="images/speaker-1.png" class="student-img" alt=""></center>
           <div style="padding-right:20%; padding-left:10%">
            <h5 class="text-end mt-4" style="font-size:20px">Topic of the talk</h5>
            <p class="text-center">John Doe</p>
           </div>
          </div>
          <div class="col-lg-4 ">
            <center> <img src="images/speaker-1.png" class="student-img" alt=""></center>
           <div style="padding-right:20%; padding-left:10%">
            <h5 class="text-end mt-4" style="font-size:20px">Topic of the talk</h5>
            <p class="text-center">John Doe</p>
           </div>
          </div>
        </div>
       </div>
      
      </div>   
    </section>













    @include('templates.footer')
</section>


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