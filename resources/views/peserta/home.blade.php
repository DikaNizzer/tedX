@include('templates.header')
@include('templates.navbar')

<section id="homePeserta" class="homePeserta">
  <div class="header">
    <div class="header-background"></div>
    <div class="container">
      <div class="card card-profile-bottom">
        <div class="card-body p-3">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="/images/team-1.jpg" alt="profile_image" width="80" class="rounded-circle">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1 fw-bold">
                  Halo, emailpeserta@gmail.com
                </h5>
                {{-- <p class="mb-0 text-sm">
                  emailpeserta@gmail.com
                </p> --}}
                
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-4">
              <div class="nav-wrapper position-relative end-0" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ul class="breadcrumb breadcrumb-pills ms-lg-auto ms-md-auto ms-sm-0 my-auto py-2 px-3" >
                  <li class="breadcrumb-item-active"><a href="/home" class="text-dark">Dashboard</a></li> 
                  {{-- <li class="breadcrumb-item-active"><a href="/home" class="text-dark">Profile</a></li> --}}
                  <li class="breadcrumb-item-active"><a href="/status" class="text-dark">Status Pendaftaran</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="event my-4">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-lg-6">
          <div class="card h-100">
            <img src="images/main-event.png" class="card-img-top zoom" alt="header-main-event">
            <div class="card-body h-100">
              <h3 class="card-title fw-bold mb-4">MAIN EVENT</h3>
              <h5 class="card-subtitle mb-2" style="font-weight: 600">SESSION OF TALKS BASED ON TEDxUniversitasAirlangga Talks</h5>
              <p class="card-text">TEDx events include live speakers, live experiences, recorded TED Talks, etc</p>
            </div>
            <div class="card-body button">
              <button class="btn-custom-mainev disabled">Coming soon</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Registration: DD-MM-YYYY</small>
              <br>
              <small class="text-muted">Location: Universitas Airlangga Kampus B </small>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100">
            <img src="images/sub-event.png" class="card-img-top zoom" alt="header-sub-event">
            <div class="card-body h-100">
              <h3 class="card-title fw-bold mb-4">SUB EVENT</h3>
              <h5 class="card-subtitle mb-2" style="font-weight: 600">WANDERLUST</h5>
              <p class="card-text">A medium to display various works of experience that can be felt by humans with their five
                senses
              </p>
            </div>
            <div class="card-body button">
              {{-- <button class="btn-custom-subev" data-bs-toggle="modal" data-bs-target="#aturanModal">Registration</button> --}}
                <div class="dropdown">
                  <button class="btn-custom-subev dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registration
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/regis-lfls">Registration Form</a></li>
                    <li><a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#aturanModal">See Requirements</a></li>
                    
                  </ul>
                </div>
            </div>
            <div class="card-footer">
              <small class="text-muted">Registration: DD-MM-YYYY</small>
              <br>
              <small class="text-muted">Location: Universitas Airlangga Kampus B </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('templates.footer-user')
</section>


{{-- MODAL ATURAN --}}
<!-- Modal -->
<div class="modal fade" id="aturanModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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

      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-lg-6">
          <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#requirements"> Requirements </div>
        </div>
        <div class="col-lg-6">
          <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#video"> Video Requirements</div>
        </div>
      </div>
		</div>
  
	  </div>
	</div>
  </div>


  {{-- MODAL ATURAN --}}
<!-- Modal -->
<div class="modal fade" id="requirements" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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
      <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Requirements</h5>
      1.Universitas Airlangga undergraduate active students (must submit KTM)
      2.Have the ability and knowledge in the field of Epiphany on Ephemeral  such as education/work life.
      3.Good public speaking skills. 
      4.Detail oriented.
      5.Active in social media. 
      6.Domiciles in  Surabaya. 
      7.Pasang twibbon 

		</div>
  
	  </div>
	</div>
  </div>


    {{-- MODAL ATURAN Video--}}
<!-- Modal -->
<div class="modal fade" id="video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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
      <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Video Requirements</h5>
      a.Include a self-introduction (Name, Faculty, Batch, and domicile) 
      b.The grand theme of speech is about Epiphany on Ephemeral and applicants are obliged to choose one of the subthemes to be delivered, namely education or work life. 
      c.The maximum duration is 5 minutes with the following terms:
      -The first minute should contain the explanation of speaker identity and the outline of the chosen subtheme along with conclusion.
      -The next 4 minutes is the further explanation regarding the sub theme that was delivered in the first minute.
      -Video is recorded in portrait scaling 1:1
      d.Have good lighting, displaying the full face and clear voice of the applicants.
      e.Proper attire, avoid wearing tshirt. (but make sure you feel comfortable in whatever you wear!)
      f.The video could be delivered in English or Bahasa Indonesia. Both have the same value and no suggestion of priority for the use of a certain language.
      g.The video must not insult SARA (Ethnicities, Religions, Races, and Intergroups)
      h.The video must not contain commercial use, religion, or political promotion.
      i.Applicants should deliver speech based on factual condition and experiences of the speaker with no exaggeration. 

		</div>
  
	  </div>
	</div>
  </div>