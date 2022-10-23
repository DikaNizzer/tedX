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
                  Halo, Sayo Kravits
                </h5>
                <p class="mb-0 text-sm">
                  emailpeserta@gmail.com
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-4">
              <div class="nav-wrapper position-relative end-0" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ul class="breadcrumb breadcrumb-pills ms-lg-auto ms-md-auto ms-sm-0 my-auto py-2 px-3" >
                  <li class="breadcrumb-item-active"><a href="/home" class="text-dark">Dashboard</a></li>
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
              <button class="btn-custom-subev">Registration</button>
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