      <!-- Content Row -->

      <div class="row">
 
        <!-- Area Chart -->

        <div class="col-sm-12">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Daftar <?= $lblformisi;?></h6>
              <a href=""> Add <i class="fas fa-plus fa-sm"></i></a>
              <div class="dropdown no-arrow">
                <form class="form-group" action="#" method="post">
                  <div class="row">
                    <div class="input-group">
                      <input type="text" class="form-control bg-dark border-1 small text-white" placeholder="Cari <?= $lblformisi;?> / ID <?= $lblformisi;?>" aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-area">
                <!-- <canvas id="myAreaChart"></canvas> -->

                <div class="table-responsive-sm">

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Handphone</th>
                        <th scope="col">Asal Pendidikan</th>
                        <th scope="col">Response</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>johandata@yahoo.com</td>
                        <td>087784293949</td>
                        <td>Universitas Gunadarma</td>
                        <td>
                            <a href="#" class="btn btn-small btn-success">Approve</a>
                            <a href="#" class="btn btn-small btn-danger">Delete</a>
                            <a href="#"></a>                     
                        </td>
                      </tr>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- End of Jadwal Pelayanan -->

        <!-- Pie Chart -->

      </div>

     
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; JN-Code Personal Blog</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
