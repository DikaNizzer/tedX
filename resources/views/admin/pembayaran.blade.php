@include('admin/admin_header')
{{-- @dd($pembayarans[0]->peserta_id) --}}
 <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Striped Rows -->
              <div class="card">
                <h5 class="card-header">Striped rows</h5>
                <div class="table-responsive text-nowrap">
                  <a href="/exportspembayaran" class="btn btn-primary px-3">Export</a>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Umur</th>               {{--  Dari Pembayaran --}}
                        <th>kontak</th>             {{--  Dari Pendaftaran --}}
                        <th>Insititute</th>         {{--  Dari Pembayaran --}}
                        <th>Angkatan</th>           {{--  Dari Peserta --}}
                        <th>Metode Pembayaran</th>   {{--  Dari Pendaftaran --}}
                        <th>Tanggal Pembayaran</th>   {{--  Dari Pembayaran --}}
                        <th>Bukti Bayar</th>        {{--  Dari Pembayaran --}}
                        <th>Status Pembayaran</th>  {{--  Dari Pembayaran --}}
                      </tr>
                    </thead>
                    @php
                        $i = 1;
                    @endphp
                    <tbody class="table-border-bottom-0">
                      @foreach ($pembayarans as $pembayaran)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $i++; }}</strong></td>
                        <td>{{ $pembayaran->nama }}</td>
                        <td>{{ $pembayaran->email }}</td>
                        <td>{{ $pembayaran->age }}</td>
                        <td>{{ $pembayaran->kontak }}</td>
                        <td>{{ $pembayaran->institute }}</td>
                        <td>{{ $pembayaran->angkatan }}</td>
                        <td>{{ $pembayaran->metode_bayar }}</td>
                        <td>{{ $pembayaran->created_at }}</td>
                        <td>
                          <button type="button" class="btn rounded-pill btn-outline-info" data-bs-toggle="modal"
                          data-bs-target="#modalCenter" >Bukti</button>
                        </td>
                        <td>
                          <select class="btn rounded-pill btn-outline-warning status-pembayaran" data-id="{{ $pembayaran->pembayaran_id }}" aria-label="Default select example">
                            <option value="0" {{ ($pembayaran->status == 0) ? 'selected' : '' }}>Unverified</option>
                            <option value="1" {{ ($pembayaran->status == 1) ? 'selected' : '' }}>Verified</option>
                            <option value="2" {{ ($pembayaran->status == 2) ? 'selected' : '' }}>Pembayaran Salah</option>
                          </select>
                        </td>
                        {{-- <td><span class="badge bg-label-primary me-1">{{ $pembayaran->age }}</span></td> --}}
                      </tr>
                      @endforeach


                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Striped Rows -->
        </div>
    </div>
</div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
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
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Insititute</label>
                                    <input
                                      type="text"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="Enter Name"
                                      value="CUMAN BISA BACA"
                                      readonly
                                    />

                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Umur</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      placeholder="xxxx@xxx.xx"
                                      value="CUMAN BISA BACA"
                                      readonly
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Kontak</label>
                                    <input
                                      type="text"
                                      id="dobWithTitle"
                                      class="form-control"
                                      placeholder="DD / MM / YY"
                                      value="Form lainnya menyusul"
                                      readonly
                                    />
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
