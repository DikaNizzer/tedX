@include('templates.header')
@include('templates.navbar')

<section id="homePeserta" class="homePeserta">
  <div class="hero-section text-light">
    <div class="container">
      <div class="row d-sm-flex align-item-center justify-content-center">
        <div class="col-lg-6 py-3 text-center">
          <img src="images/team-1.jpg" alt="avatar" width="150" class="rounded-circle pb-2">
          <h4 class="pb-2 m-auto">Andika Pratama</h4>
          <a href="#">
            <button class="btn-custom-profile d-inline-flex py-1">
              <span class="button__text d-inline-flex px-2">Your Profile</span>
              <span class="button__icon d-inline-flex pe-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg>
              </span>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="breadcrumb-box">
    <div class="container">
      <div class="row">
        <div class="col px-3">
          <div class="card">
            <div class="card-body">
              <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb px-2 m-auto">
                  <li class="breadcrumb-item"><a href="/home" class="text-dark fs-5">Dashboard</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="event">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 px-3 mt-4">
          <div class="card card-01">
            <div class="card-title mb-auto py-3 px-4">
              <h3 class="mb-0">Main Event</h3>
            </div>
            <div class="card-body pt-2 p-4">
              <div class="card card-02">
                <img src="images/carousel-1.jpg" height="200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>blablabla</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 px-3 mt-4">
          <div class="card card-01">
            <div class="card-title mb-auto py-3 px-4">
              <h3 class="mb-0">Sub Event</h3>
            </div>
            <div class="card-body pt-2 p-4">
              <div class="card card-02">
                <img src="images/carousel-1.jpg" height="200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>blablabla</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="row px-3 bg-warning">
        <div class="col-md-6 mt-4">
          <div class="card">
            <div class="card-img">
              <img src="" alt="">
            </div>
            <div class="card-body">
              <h4>Main Event</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eos accusamus aliquam possimus architecto veniam suscipit. Reiciendis, porro deleniti dolores provident aliquid</p>
              <a href="#" class="">
                <buttonc class="btn btn-success btn-md">More Information</buttonc>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4 bg-warning">
          <div class="card">
            <div class="card-img">
              <img src="" alt="">
            </div>
            <div class="card-body">
              <h4>Sub Event</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eos accusamus aliquam possimus architecto veniam suscipit. Reiciendis, porro deleniti dolores provident aliquid</p>
              <a href="#" class="">
                <buttonc class="btn btn-success btn-md">More Information</buttonc>
              </a>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
  @include('templates.footer')
</section>