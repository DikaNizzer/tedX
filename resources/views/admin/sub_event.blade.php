@include('admin/admin_header')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Striped Rows -->
              <div class="card">
                <h5 class="card-header">Pendaftaran Sub Event</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Status</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($pendaftarans as $pendaftaran)
                        <tr>
                          <td> <strong>{{$pendaftaran->peserta->nama}}</strong></td>
                          <td>{{$pendaftaran->peserta->user->email}}</td>
                          <td>{{$pendaftaran->peserta->user->created_at->diffForHumans()}}</td>
                          <td><span class="badge bg-label-primary me-1"><?= $pendaftaran->status ?></span></td>
                          <td>
                              <button type="button" id="show-subevent" class="btn rounded-pill btn-outline-info" data-bs-toggle="modal"
                              data-bs-target="#showModal" data-url="{{ route('subevents.show', $pendaftaran->peserta->id) }}">Info</button>
                          </td>
                        </tr>
                      @endforeach

                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Nama</strong></td>
                        <td>email</td>
                        <td>
                        email
                        </td>
                        <td>
                          <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Unverified
                          </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="javascript:void(0);">Unverified</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Verified</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Berkas Kurang / Salah</a></li>
                            </ul>
                        </td>
                        <td>
                            <button type="button" class="btn rounded-pill btn-outline-info" data-bs-toggle="modal"
                            data-bs-target="#modalCenter">Info</button>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Striped Rows -->
        </div>
    </div>
</div>

                        <!-- Modal -->
                            <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Pendaftaran Sub Event</h5>
                                    <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="peserta-nama" class="form-label">Nama</label>
                                            <input type="text" id="peserta-nama" class="form-control" value="" readonly/>
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-1">
                                        <div class="col mb-0">
                                            <label for="peserta-fakultas" class="form-label">Fakultas</label>
                                            <input type="text" id="peserta-fakultas" value="" class="form-control" readonly/>
                                        </div>
                                        <div class="col mb-0">
                                            <label for="peserta-angkatan" class="form-label">Angkatan</label>
                                            <input type="text" id="peserta-angkatan" value="" class="form-control" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        
@include('admin/admin_footer')
