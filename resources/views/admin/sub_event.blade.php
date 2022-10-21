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
                              <button type="button" class="btn rounded-pill btn-outline-info" data-bs-toggle="modal"
                              data-bs-target="#modalCenter-{{ $pendaftaran->peserta->id }}" >Info</button>
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
                        @foreach ($pendaftarans as $pendaftaran)
                            <div class="modal fade" id="modalCenter-{{ $pendaftaran->peserta->id }}" tabindex="-1" aria-hidden="true">
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
                                            <label for="nameWithTitle" class="form-label">Nama</label>
                                            <input type="text" id="nameWithTitle" class="form-control" value={{$pendaftaran->peserta->nama}} readonly/>
                                        </div>
                                    </div>
                                    <div class="row g-2 mb-1">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Fakultas</label>
                                            <input type="text" id="emailWithTitle" class="form-control" value="{{$pendaftaran->peserta->fakultas}}" readonly/>
                                        </div>
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Angkatan</label>
                                            <input type="text" id="emailWithTitle" class="form-control" value="{{$pendaftaran->peserta->angkatan}}" readonly/>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Email</label>
                                            <input type="text" id="emailWithTitle" class="form-control" value="{{$pendaftaran->peserta->user->email}}" readonly/>
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Waktu Pendaftaran</label>
                                            <input type="text" id="dobWithTitle" class="form-control" value="{{$pendaftaran->peserta->created_at->diffForHumans()}}" readonly/>
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
                        @endforeach
@include('admin/admin_footer')
