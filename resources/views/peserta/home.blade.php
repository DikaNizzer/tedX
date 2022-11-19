@include('templates.header')
@include('templates.navbar')

<section id="homePeserta" class="homePeserta">
  <div class="header">
    <div class="header-background"></div>
    <div class="container">
      <div class="card-profile-bottom">
        <div class="card-body p-3">
          <div class="row gx-4">
            <div class="col-auto">
              {{-- <div class="avatar avatar-xl position-relative">
                <img src="/images/team-1.jpg" alt="profile_image" width="80" class="rounded-circle">
              </div> --}}
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1 fw-bold">
                  Welcome, {{ Auth::user()->email }}
                </h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-4">
              <div class="row d-flex justify-content-center">
                <div class="col-auto d-flex justify-content-end">
                  <a href="/home" class="profile-menu-1">Dashboard</a>
                </div>
                <div class="col-auto  d-flex justify-content-start">
                  <a href="/status" class="profile-menu-2">Registration Status</a>
                </div>
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
              <h5 class="card-subtitle mb-2" style="font-weight:600">SESSION OF TALKS </h5>
              <p class="card-text">TEDx events include live speakers, live experiences, recorded TED Talks, etc</p>
            </div>
            <div class="card-body button">
              {{-- <a href="/regis-main"><button class="btn-custom-subev ">Coming soon</button></a> --}}
              <a data-bs-toggle="modal" data-bs-target="#mainModal"><button class="btn-custom-subev ">Register</button></a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Registration: {{date('d F Y', strtotime(NOW()))}}</small>
              <br>
              <small class="text-muted">Location: Universitas Airlangga </small>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100">
            <img src="images/sub-event-new.png" class="card-img-top zoom" alt="header-sub-event">
            <div class="card-body h-100">
              <h3 class="card-title fw-bold mb-4">SUB EVENT</h3>
              <h5 class="card-subtitle mb-2" style="font-weight: 600">LOOKING FOR LOCAL SPEAKERS</h5>
              <p class="card-text">
                The searching for potential student speakers who are able and want to spread their
ideas about TEDxUniversitasAirlangga’s theme in 2022
              </p>
            </div>
            <div class="card-body button">
              {{-- <button class="btn-custom-subev" data-bs-toggle="modal" data-bs-target="#aturanModal">Registration</button> --}}
                <div class="dropdown">
                  {{-- <button class="btn-custom-subev  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registration
                  </button> --}}
                  <button class="btn-custom-subev disabled dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Closed
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/regis-lfls">Registration Form</a></li>
                    <li><a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#aturanModal">See Requirements</a></li>

                  </ul>
                </div>
            </div>
            <div class="card-footer">
              <small class="text-muted">Registration: {{date('d F Y', strtotime(NOW()))}}</small>
              <br>
              <small class="text-muted">Location: Universitas Airlangga </small>
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
<div class="modal fade" id="mainModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header">
		  <div class="row" style="padding:5px">
			<div class="col-10">
			  <img src="images/tedxhitam.png" height="auto" width="60%" style="margin:5px" alt="">
			</div>
			<div class="col-2 justify-content-end">
			  <button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>
			</div>
		  </div>
		</div>
		<div class="modal-body" style="padding:40px; padding-top:0">
      <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Main Event</h5>
      <div class="row">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          Fill in your personal data on the form correctly
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          Make payment with the available methods: <b>(Rp. 89.000)</b>
          <ol>
            <li>BCA ~ 0882124655  ~ Dewi Ayu N. A. S.</li>
            <li>BNI ~ 1148847032 ~ Alyssa De Quervain</li>
            <li>BRI ~ 320101002599507 ~ Dewi Ayu N. A. S.</li>
            <li>OVO ~ 6282140101971 ~ Alyssa De Quervain</li>
            <li>DANA ~ 6285856884738 ~ Dewi Ayu N. A. S.</li>
          </ol>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="font-size:12px; padding-left:5%">
          Upload proof of payment on the form provided
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="font-size:12px; padding-left:5%">
          One account/identity can only be used for purchasing <b>ONE TICKET</b>
        </div>
      </div>


		</div>
      <center style="margin-bottom: 15px "><a href="/regis-main"><button class="btn-custom-subev ">Register Now</button></a></center>
	  </div>
	</div>
  </div>


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
		<div class="modal-body" style="padding:5%"> 
          <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#requirements"> Requirements </div>
          <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#video"> Video Requirements</div>   
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
		<div class="modal-body" style="padding:40px; padding-top:0">
      <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Requirements</h5>
      <div class="row">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          Universitas Airlangga undergraduate active students (must submit KTM)
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11"  style="text-align:justify; font-size:12px; padding-left:5%">
          Have the ability and knowledge in the field of Epiphany on Ephemeral  such as education/work life.
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="font-size:12px; padding-left:5%">
          Good public speaking skills.
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="font-size:12px; padding-left:5%">
          Detail oriented.
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="font-size:12px; padding-left:5%">
          Active in social media.
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="font-size:12px; padding-left:5%">
          Domiciles in  Surabaya.
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="font-size:12px; padding-left:5%">
          Posting our twibbon
        </div>
      </div>
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
		<div class="modal-body" style="padding:40px; padding-top:0">
      <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Video Requirements</h5>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          Include a self-introduction (Name, Faculty, Batch, and domicile)
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          The grand theme of speech is about Epiphany on Ephemeral and applicants are obliged to choose one of the subthemes to be delivered, namely education or work life.
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          The maximum duration is 5 minutes with the following terms:
          <ol>
            <li>The first minute should contain the explanation of speaker identity and the outline of the chosen subtheme along with conclusion.</li>
            <li>The next 4 minutes is the further explanation regarding the sub theme that was delivered in the first minute.</li>
            <li>Video is recorded in portrait scaling 1:1</li>
          </ol>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          Have good lighting, displaying the full face and clear voice of the applicants.
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          Proper attire, avoid wearing tshirt. (but make sure you feel comfortable in whatever you wear!)
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          The video could be delivered in English or Bahasa Indonesia. Both have the same value and no suggestion of priority for the use of a certain language.
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          The video must not insult SARA (Ethnicities, Religions, Races, and Intergroups)
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          The video must not contain commercial use, religion, or political promotion.
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-1">
          <iconify-icon icon="fluent:note-pin-16-filled" style="color: #9c0202;" width="30" height="30"></iconify-icon>
        </div>
        <div class="col-11" style="text-align:justify; font-size:12px; padding-left:5%">
          Applicants should deliver speech based on factual condition and experiences of the speaker with no exaggeration.

        </div>
      </div>
		</div>

	  </div>
	</div>
  </div>

  <script>
    let pesan = '{{ Session::get('pesan') }}'

    if (pesan) {
      alert(pesan)
    }
  </script>
