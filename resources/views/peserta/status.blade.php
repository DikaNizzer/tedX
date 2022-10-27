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
          <div class="card h-100">
            <img src="images/sub-event.png" class="card-img-top zoom" alt="header-sub-event">
            <div class="card-body h-100" style="padding:7%; padding-top:10px">
              <h3 class="card-title fw-bold mb-4">SUB EVENT</h3>
              <h5 class="card-subtitle mb-2" style="font-weight: 600">LOOKING FOR LOCAL SPEAKERS</h5>
              <p class="card-text">
                The searching for potential student speakers who are able and want to spread their
ideas about TEDxUniversitasAirlangga’s theme in 2022
              </p>

                {{-- Body --}}
           <div class="overflow-auto">
            <table class="table status-table">
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
                @if ($peserta->first())
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($peserta as $data)
                        @php
                            if($data->pendaftaran->status == 0) {
                            $status = 'Unverified';
                            } elseif($data->pendaftaran->status == 1) {
                            $status = 'Verified';
                            } else {
                            $status = 'Berkas Kurang / Salah';
                            }
                        @endphp
                        <tr>
                        <td scope="row">{{ $no++ }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ ($data->pendaftaran->event_id == 1) ? 'Mainevent' : 'Subevent' }}</td>
                        <td>{{ $data->pendaftaran->kontak }}</td>
                        <td>{{ $data->pendaftaran->link_gdrive}}</td>
                        <td>{{ $status }}</td>
                        </tr>
                    @endforeach
                @endif
              </tbody>
            </table>
           </div>
                @if ($peserta->first() == null)
                    <p class="text-center">Anda belum melakukan registrasi Sub Event</p>
                @endif
                {{-- End Body --}}
            </div>
            {{-- <div class="card-body button">

                <div class="dropdown">
                  <button class="btn-custom-subev" data-bs-toggle="modal" data-bs-target="#aturanModal">Submit</button>
                </div>
            </div> --}}
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

