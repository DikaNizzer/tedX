@include('admin/admin_header')

 <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Striped Rows -->
              <div class="card">
                <h5 class="card-header">Pendaftaran Main Event</h5>
                <div class="table-responsive text-nowrap">

                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Fakultas</th>           {{--  Dari Peserta --}}
                        <th>NIM</th>                {{--  Dari Peserta --}}
                        <th>Kontak</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Status Pendaftaran</th>
                        <th>Edit Status</th>
                        {{-- <th>Detail</th> --}}
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pendaftarans as $pendaftaran)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $pendaftaran->id }}</td>
                            <td> <strong>{{$pendaftaran->peserta->nama}}</strong></td>
                            <td>{{$pendaftaran->peserta->user->email}}</td>
                            <td>{{$pendaftaran->peserta->fakultas}}</td>
                            <td>{{$pendaftaran->peserta->nim}}</td>
                            <td>{{ $pendaftaran->kontak }}</td>
                            <td>{{$pendaftaran->peserta->user->created_at->diffForHumans()}}</td>
                            {{-- <td><span class="badge bg-label-primary me-1 d-flex justify-content-center">{{ $pendaftaran->status }}</span></td> --}}
                            <td>
                              <select class="btn rounded-pill btn-outline-warning status-pembayaran"  aria-label="Default select example">
                                <option value="0" {{ ($pendaftaran->status == 0) ? 'selected' : '' }}>Belum Datang</option>
                                <option value="1" {{ ($pendaftaran->status == 1) ? 'selected' : '' }}>Sudah Datang</option>
                                {{-- <option value="2" {{ ($pembayaran->status == 2) ? 'selected' : '' }}>Pembayaran Salah</option> --}}
                              </select>
                            </td>
                            <td>
                                <center><button type="button" class="btn rounded-pill btn-outline-info" data-bs-toggle="modal"
                                data-bs-target="#modalCenter-{{ $pendaftaran->peserta->id }}">Edit</button>
                            </td>
                            </tr>
                        @endforeach

                      {{-- <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>
                        <td>
                         email
                        </td>
                        <td>
                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Belum Bayar
                            </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Lunas</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Belum Bayar</a></li>
                              </ul>
                        </td>
                        <td>
                            <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
                        </td>
                      </tr> --}}
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
        <h5 class="modal-title" id="modalCenterTitle">Detail</h5>
        <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
        ></button>
    </div>
    <div class="modal-body">

        <form class="row d-flex flex-column" action="/mainevent/{{ $pendaftaran->id }}" method="post">
            @csrf
            @method('put')
            <div class="col mb-3">
                <label for="nameWithTitle" class="form-label">Status</label><br>
                {{-- <input type="text" name="status" class="form-control" value={{$pendaftaran->status}} /> --}}
                <select class="btn rounded-pill btn-outline-warning status-pembayaran" name="status" aria-label="Default select example">
                  <option value="0" {{ ($pendaftaran->status == 0) ? 'selected' : '' }}>Belum Datang</option>
                  <option value="1" {{ ($pendaftaran->status == 1) ? 'selected' : '' }}>Sudah Datang</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info ms-3" style="width: 150px">Simpan</button>
            {{-- <div class="ms-2 mt-3">
                0 = Unverified &nbsp; 1 = Verified
            </div> --}}
        </form>
    </div>
    </div>
</div>
</div>
@endforeach
@include('admin/admin_footer')
