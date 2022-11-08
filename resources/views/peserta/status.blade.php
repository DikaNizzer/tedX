@include('templates.header')
@include('templates.navbar')

{{-- @dd($mainevent) --}}

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
            <img src="images/carauselsub-new.png" style="height:400px" class="card-img-top zoom" alt="header-sub-event">
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
                @if ($subevent)
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($subevent as $data)

                        @php
                            if($data->status == 0) {
                            $status = 'Unverified';
                            } elseif($data->status == 1) {
                            $status = 'Verified';
                            } else {
                            $status = 'Berkas Kurang / Salah';
                            }
                        @endphp
                        <tr>
                        <td scope="row">{{ $no++ }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ ($data->event == 2) ? 'Sub event' : 'Main Event' }}</td>
                        <td>{{ $data->kontak }}</td>
                        <td>{{ $data->link_gdrive}}</td>
                        <td>{{ $status }}</td>
                        </tr>
                    @endforeach
                @endif
              </tbody>
            </table>
           </div>
                @if ($subevent == null)
                    <p class="text-center">Anda belum melakukan registrasi Sub Event</p>
                @endif
                {{-- End Body --}}
            </div>

            {{-- MAIN EVENT --}}
            <div class="card-body h-100" style="padding:7%; padding-top:10px">
              <h3 class="card-title fw-bold mb-4">MAIN EVENT</h3>
              <h5 class="card-subtitle mb-2" style="font-weight: 600">SESSION OF TALKS </h5>
              <p class="card-text">
                TEDx events include live speakers, live experiences, recorded TED Talks, etc
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
                  <th scope="col">Status</th>
                  <th scope="col">Ticket</th>
                </tr>
              </thead>
              <tbody>
                @if ($mainevent)
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($mainevent as $main)

                        @php
                            if($main->status == 0) {
                              $status = 'Unverified';
                              $button = '<td><a href="#" class="profile-menu-1">Waiting</a></td>';
                            } elseif($main->status == 1) {
                              $status = 'Verified';
                              $button = "<td><a href='/home/' class='profile-menu-1'>Download</a></td>";
                            } else {
                              $status = 'pembayaran Kurang / Salah';
                              $button = "<td><a href='#' class='profile-menu-1'>Unverified</a></td>";
                            }
                        @endphp
                        <tr>
                        <td scope="row">{{ $no++ }}</td>
                        <td>{{ $main->nama }}</td>
                        <td>{{ ($main->event == 1) ? 'Main Event' : 'Subevent' }}</td>
                        <td>{{ $main->kontak }}</td>
                        <td>{{ $status }}</td>

                        <?php

                        ?>
                        @php
                            if($main->status == 0) {
                              @endphp
                                <td><a class="profile-menu-1">Waiting</a></td>
                              @php
                            } elseif($main->status == 1) {
                                @endphp
                                  <td><a href='cetak-tiket/{{$main->id_pendaftaran}}/{{$main->nama}}' target='_blank' class='profile-menu-1' style='margin-top:10px'>Download</a></td>
                                @php
                            } else {
                                @endphp
                                  <td><a class="profile-menu-1">Pembayaran Salah</a></td>
                                @php
                            }
                        @endphp
                        {{-- {{$button}} --}}
                        </tr>
                    @endforeach
                @endif
              </tbody>
            </table>
           </div>
                @if ($mainevent == null)
                    <p class="text-center">Anda belum melakukan registrasi Sub Event</p>
                @endif
                {{-- End Body --}}
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

  <script>
    let pesan = '{{ Session::get('pesan') }}'

    if (pesan) {
      alert(pesan)
    }
  </script>