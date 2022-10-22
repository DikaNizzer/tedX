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
                <ul class="breadcrumb breadcrumb-pills breadcrumb-fill ms-lg-auto ms-md-auto ms-sm-0 my-auto py-2 px-3" >
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
      <div class="row">
        <div class="col">

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