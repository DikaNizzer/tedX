@include('admin/admin_header')

 <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Striped Rows -->
              <div class="card">
                <h5 class="card-header">Striped rows</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Status Pembayaran</th>
                        <th>Detal</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>
                         email
                        </td>
                        <td><span class="badge bg-label-primary me-1">Sudah Bayar</span></td>
                        <td>
                            <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>
                        <td>
                         email
                        </td>
                        <td><span class="badge bg-label-warning me-1">Belum Bayar</span></td>
                        <td>
                            <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
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
@include('admin/admin_footer')
