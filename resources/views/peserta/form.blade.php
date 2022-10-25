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

              {{-- Form --}}
              <form action="/regis-lfls" method="POST">
                @csrf
                @if ($peserta)
                <input class="form-control" type="hidden" name="nama" value="{{ $peserta->first()->nama }}" id="nama">
                <input class="form-control" type="hidden" name="nim" value="{{ $peserta->first()->nim }}" id="nim">
                <input class="form-control" type="hidden" name="fakultas" value="{{ $peserta->first()->fakultas }}" id="fakultas">
                <input class="form-control" type="hidden" name="angkatan" value="{{ $peserta->first()->angkatan }}" id="fakultas">
                <input class="form-control" type="hidden" name="alamat" value="{{ $peserta->first()->alamat }}" id="alamat">

                <div class="form-group">
                  <label for="kontak" class="form-control-label">Contact info (id line/no wa) </label>
                  <input class="form-control" type="text" name="kontak" value="Kontak" id="kontak">
                </div>
                <div class="form-group">
                  <label for="akun_ig" class="form-control-label">Instagram account </label>
                  <input class="form-control" type="text" name="akun_ig" value="Instagram" id="akun_ig">
                </div>
                <input type="hidden" value="{{ $peserta->first()->user_id }}" name="user_id">
                <input type="hidden" value="2" name="event_id">
                <div class="form-group">
                  <label for="link_gdrive" class="form-control-label">link folder gdrive</label>
                  <p><i>link folder gdrive (Name_Faculty; e.g., Dira_FKM) which contains video (Video_Name; e.g., Video_Dira), 
                    CV (CV_Name; e.g., CV_Dira), KTM (KTM_Name; e.g., KTM_Dira), Script talks (Script_Name; e.g., Script_Dira)</i></p>
                  <input class="form-control" type="text" name="link_gdrive" value="Link Google Drive" id="link_gdrive">
                </div>
                @else
                <div class="form-group">
                  <label for="nama" class="form-control-label">Full Name</label>
                  <input class="form-control" type="text" name="nama" value="Nama" id="nama">
                </div>
                <div class="form-group">
                  <label for="nim" class="form-control-label">Student ID</label>
                  <input class="form-control" type="text" name="nim" value="Nomor Induk Mahasiswa" id="nim">
                </div>
                <div class="form-group">
                  <label for="fakultas" class="form-control-label">Faculty</label>
                  <input class="form-control" type="text" name="fakultas" value="Fakultas" id="fakultas">
                </div>
                <div class="form-group">
                  <label for="angkatan">Batch</label>
                  <select class="form-control" name="angkatan" id="angkatan">
                    <option value="18">2018</option>
                    <option value="19">2019</option>
                    <option value="20">2020</option>
                    <option value="21">2021</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat" class="form-control-label">Address </label>
                  <input class="form-control" type="text" name="alamat" value="Alamat" id="alamat">
                </div>
                <div class="form-group">
                  <label for="kontak" class="form-control-label">Contact info (id line/no wa) </label>
                  <input class="form-control" type="text" name="kontak" value="Kontak" id="kontak">
                </div>
                <div class="form-group">
                  <label for="akun_ig" class="form-control-label">Instagram account </label>
                  <input class="form-control" type="text" name="akun_ig" value="Instagram" id="akun_ig">
                </div>
                <input type="hidden" value="{{ $peserta->first()->user_id }}" name="user_id">
                <input type="hidden" value="2" name="event_id">
              
                <div class="form-group">
                  <label for="link_gdrive" class="form-control-label">link folder gdrive</label>
                  <p><i>link folder gdrive (Name_Faculty; e.g., Dira_FKM) which contains video (Video_Name; e.g., Video_Dira), 
                    CV (CV_Name; e.g., CV_Dira), KTM (KTM_Name; e.g., KTM_Dira), Script talks (Script_Name; e.g., Script_Dira)</i></p>
                  <input class="form-control" type="text" name="link_gdrive" value="Link Google Drive" id="link_gdrive">
                </div>
                @endif
                
                <div class="card-body button">
                  <div class="dropdown">
                    {{-- <button type="submit" class="btn-custom-subev" data-bs-toggle="modal" data-bs-target="#aturanModal">Submit</button> --}}
                    <button type="submit" class="btn-custom-subev">Submit</button>
                  </div>
                </div>

            </form>
            {{-- END FORM --}}
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

