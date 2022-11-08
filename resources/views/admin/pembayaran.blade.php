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
                        <th>Kirim</th>
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
                        <td>
                          <a href = "mailto:{{ $pembayaran->email }}?subject = Feedback&body = Message">
                            Kirim Pemberitahuan
                            </a>
                        </td>
                        <td>{{ $pembayaran->age }}</td>
                        <td>{{ $pembayaran->kontak }}</td>
                        <td>{{ $pembayaran->institute }}</td>
                        <td>{{ $pembayaran->angkatan }}</td>
                        <td>{{ $pembayaran->metode_bayar }}</td>
                        <td>{{ $pembayaran->created_at }}</td>
                        {{-- <td>
                          <button type="button" class="btn rounded-pill btn-outline-info show-bukti-btn" data-bs-toggle="modal"
                          data-bs-target="#modalShowBukti" value="{{ $pembayaran->bukti_bayar }}">Bukti</button>
                        </td> --}}
                        <td>
                          <button type="button" onclick="window.open('image/{{ $pembayaran->bukti_bayar }}', '_blank')" class="btn rounded-pill btn-outline-info"
                          >Bukti</button>
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
                        <div class="modal fade" id="modalShowBukti" tabindex="-1" aria-hidden="true">
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
                                <img id="img-detail" width="500" src="{{ asset('bukti_bayar/2022110700441mil-elements.png') }}" alt="">
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
