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
        <div class="col-lg-12">
          <div class="card h-100" >
            <img src="images/carauselsub-new.png" style="height:400px"  class="card-img-top zoom" alt="header-sub-event">
            <div class="card-body h-100"  style="padding:7%; padding-top:10px">
              <h3 class="card-title fw-bold mb-4">MAIN EVENT</h3>
              <h5 class="card-subtitle mb-2" style="font-weight: 600">SESSION OF TALKS</h5>
              <p class="card-text">
                TEDx events include live speakers, live experiences, recorded TED Talks, etc
              </p>

              <form action="/regis-main" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="row">
                  <div class="col-lg-12" style="padding:20px">
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <input type="hidden" value="1" name="event_id">
                    <div class="form-group mt-3">
                      <label for="nama" class="form-control-label">Full Name</label>
                      <input class="form-control peserta-form" type="text" name="nama" value="{{ old('nama') }}" id="nama" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="nim" class="form-control-label">Institute</label>
                      <input class="form-control peserta-form" type="text" name="institute" value="{{ old('institute') }}" id="nim" required>
                      {{-- <select class="form-control peserta-form" name="institute" id="institute" required>
                        <option value="Universitas Airlangga" >Universitas Airlangga</option>
                        <option value="Umum" >Umum</option>
                      </select> --}}
                    </div>
                    <div class="form-group mt-3">
                      <label for="fakultas" class="form-control-label">Faculty</label>
                      <p style="font-size: 12; color:red"><i>Please fill this section with "-", if you're not student</i></p>
                      <input class="form-control peserta-form" type="text" name="fakultas" value="{{ old('fakultas') }}" id="fakultas" required>
                      
                    </div>
                    <div class="form-group mt-3">
                      <label for="nim" class="form-control-label">Student ID</label>
                      <p style="font-size: 12; color:red"><i>Please fill this section with "-", if you're not student</i></p>
                      <input class="form-control peserta-form" type="text" name="nim" value="{{ old('nim') }}" id="nim" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="nim" class="form-control-label">Age</label>
                      <input class="form-control peserta-form" type="number" name="age" value="{{ old('age') }}" id="nim" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="angkatan">Batch</label>
                      <select class="form-control peserta-form" name="angkatan" id="angkatan" required>
                        <option value="-" {{ (old('angkatan') == "-") ? 'selected' : '' }}>-</option>
                        <option value="18" {{ (old('angkatan') == "18") ? 'selected' : '' }}>2018</option>
                        <option value="19" {{ (old('angkatan') == "19") ? 'selected' : '' }}>2019</option>
                        <option value="20" {{ (old('angkatan') == "20") ? 'selected' : '' }}>2020</option>
                        <option value="21" {{ (old('angkatan') == "21") ? 'selected' : '' }}>2021</option>
                        <option value="22" {{ (old('angkatan') == "22") ? 'selected' : '' }}>2022</option>
                      </select>
                    </div>
                    <div class="form-group mt-3">
                      <label for="kontak" class="form-control-label">Contact info (WhatsApp Number) </label>
                      <input class="form-control peserta-form" type="text" name="kontak" value="{{ old('kontak') }}" id="kontak" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="metode_bayar">Payment Methods</label>
                      <p style="font-size: 12; color:red"><i>Price : IDR 89.000/person</i></p>
                      <select class="form-control peserta-form" name="metode_bayar" id="metode_bayar" required>
                        <option value="BCA" {{ (old('metode_bayar') == "BCA") ? 'selected' : '' }}>BCA ~ 0882124655  ~ Dewi Ayu N. A. S.</option>
                        <option value="BNI" {{ (old('metode_bayar') == "BNI") ? 'selected' : '' }}>BNI ~ 1148847032 ~ Alyssa De Quervain</option>
                        <option value="BRI" {{ (old('metode_bayar') == "BRI") ? 'selected' : '' }}>BRI ~ 320101002599507 ~ Dewi Ayu N. A. S.</option>
                        <option value="OVO" {{ (old('metode_bayar') == "OVO") ? 'selected' : '' }}>OVO ~ 6282140101971 ~ Alyssa De Quervain</option>
                        <option value="OVO" {{ (old('metode_bayar') == "OVO") ? 'selected' : '' }}>DANA ~ 6285856884738 ~ Dewi Ayu N. A. S.</option>
                      </select>
                    </div>
                    <div class="form-group mt-3">
                      <label for="alamat" class="form-control-label">Payment receipt </label>
                      <input class="form-control peserta-form" type="file" name="bukti_bayar" value="{{ old('bukti_bayar') }}" id="alamat">
                    </div>
                  </div>

                  </div>
                </div>
                
                <div class="card-body button">
                  <div class="dropdown">
                    {{-- <button class="btn-custom-subev" data-bs-toggle="modal" data-bs-target="#aturanModal">Submit</button> --}}
                    <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#aturanModal"> Submit </div>
                    {{-- <button type="submit" class="btn-custom-subev">SUBMIT</button> --}}
                  </div>
                </div>

           
            {{-- END FORM --}}
            </div>
            
            <div class="card-footer">
              <small class="text-muted">Registration: {{date('d F Y', strtotime(NOW()))}}</small>
              <br>
              <small class="text-muted">Location: Universitas Airlangga</small>
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
			  <img src="images/tedxhitam.png" height="auto" width="60%" style="margin:5px" alt="">
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
          {{-- <div class="register-option mt-2 mb-4" style="margin:auto" data-bs-toggle="modal" data-bs-target="#requirements"> Submit </div> --}}
          <button type="submit" class="btn-custom-subev">SUBMIT</button>
        </div>
        <div class="col-lg-6">
          <div class="register-option mt-2 mb-4" style="margin:auto; font-size:14px" data-bs-toggle="modal" data-bs-target="#video"> check my data once again</div>
        </div>
      </div>
		</div>
  
	  </div>
	</div>
  </div>

</form>