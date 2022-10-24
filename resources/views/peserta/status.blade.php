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
        {{-- <div class="col-lg-12">
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
        </div> --}}
        <div class="col-lg-12">
          <div class="card h-100">
            <img src="images/sub-event.png" class="card-img-top zoom" alt="header-sub-event">
            <div class="card-body h-100">
              <h3 class="card-title fw-bold mb-4">SUB EVENT</h3>
              <h5 class="card-subtitle mb-2" style="font-weight: 600">WANDERLUST</h5>
              <p class="card-text">A medium to display various works of experience that can be felt by humans with their five
                senses
              </p>

                {{-- Body --}}
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Pendaftaran</th>
                      <th scope="col">Contact info</th>
                      <th scope="col">link folder gdrive</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Dika</td>
                      <td>Subevent</td>
                      <td>CP</td>
                      <td>Status Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum rerum quos itaque laboriosam libero quibusdam earum accusantium et tempore pariatur nemo, aliquam obcaecati ex praesentium nesciunt, eum voluptatibus architecto quis neque impedit adipisci. Recusandae labore assumenda fugiat tenetur provident nam nesciunt illum porro adipisci eius, unde velit voluptate, possimus, ipsam temporibus non neque. Dignissimos, nisi optio, reprehenderit vitae error fugiat praesentium doloremque accusantium voluptatem ipsum assumenda autem iusto voluptatibus quisquam totam reiciendis ullam blanditiis animi omnis consequatur? Eos placeat expedita dolorum porro dignissimos eaque officiis sapiente obcaecati perspiciatis quo cupiditate quibusdam, magni itaque facilis. Necessitatibus nobis laborum voluptatum id sint.</td>                      
                      <td>Dalam Seleksi</td>
                    </tr>
                    <tr>

                  </tbody>
                </table>
                {{-- End Body --}}
            </div>
            {{-- <div class="card-body button">
              
                <div class="dropdown">
                  <button class="btn-custom-subev" data-bs-toggle="modal" data-bs-target="#aturanModal">Submit</button>
                </div>
            </div> --}}
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
      <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Make sure the data you enter is correct!</h5>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-lg-6">
          <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#requirements"> Submit </div>
        </div>
        <div class="col-lg-6">
          <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#video"> check my data once again</div>
        </div>
      </div>
		</div>
  
	  </div>
	</div>
  </div>

