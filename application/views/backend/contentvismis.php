

      <!-- Content Row -->

      <div class="row">
        <!-- Jadwal Pelayan Ibadah  -->
                <!-- Area Chart -->
        <div class="col-sm-12">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Kelola <?php echo $lblformisi;?></h6>
              <div class="dropdown no-arrow">

              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">

                  <form class="user" method="post" action="<?= site_url("actions/update/vismis")?>">

                        <label for="editorMisi" class="badge primary">Visi JN-Code.xyz</label>
                        <div class="form-group">
                          <textarea class="form-control" id="editorVisi" placeholder="Deskripsi <?= $lblformisi;?> ..."  name="<?= $vm[2]->proper_id;?>">

                              <?= $vm[2]->proper_isi;?>

                          </textarea>
                        </div>

                        <hr>

                        <label for="editorMisi" class="badge primary">Misi JN-Code.xyz</label>
                        <div class="form-group">
                          <textarea class="form-control" id="editorMisi" placeholder="Deskripsi <?= $lblformisi;?> ..."  name="<?= $vm[0]->proper_id;?>">

                            <?= $vm[0]->proper_isi;?>


                          </textarea>
                        </div>


                        <label for="editorSlogan" class="badge primary">Slogan JN-Code.xyz</label>
                        <div class="form-group">
                          <textarea class="form-control" id="editorSlogan" placeholder="Deskripsi <?= $lblformisi;?> ..." name="<?= $vm[1]->proper_id;?>">

                            <?= $vm[1]->proper_isi;?>


                          </textarea>
                        </div>



                  <hr>

                  <button type="submit" name="buttonSave"   class="btn btn-md btn-primary">Save</button>
                  <button type="#" name="button"   class="btn btn-md btn-warning">Clear</button>


                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!-- End of Jadwal Pelayanan -->

        <!-- Pie Chart -->

      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-5">

          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Birthday Today</h6>
            </div>
            <div class="card-body">
              <h4 class="small font-weight-bold">Bapak Sitindaon <span class="float-right">5 Tahun</span></h4>
              <h4 class="small font-weight-bold">Bapak Dominizio <span class="float-right">40 Tahun</span></h4>
              <h4 class="small font-weight-bold">Ibu Bethezda <span class="float-right">89 Tahun</span></h4>
              <h4 class="small font-weight-bold">Sina Abuyazu <span class="float-right">20 Tahun</span></h4>

            </div>
          </div>

          <!-- Color System -->
          <div class="row">

            <div class="col-lg-6 mb-4">
              <div class="card bg-warning text-white shadow">
                <div class="card-body">
                  Informasi Umum !
                  <div class="text-white-50 small">#f6c23e</div>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/" class="text-white">Ubah &rarr;</a>

                </div>



              </div>

            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-secondary text-white shadow">
                <div class="card-body">
                  Berita Dukacita
                  <div class="text-white-50 small">

                    <marquee>#e74a3b</marquee>

                  </div>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/" class="text-white">Ubah &rarr;</a>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="col-lg-6 mb-4">

          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Promoted Menu</h6>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
              </div>
                <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free
                  and without attribution!</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Ubah &rarr;</a>
              </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Iklan </h6>
              </div>
              <div class="card-body">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>

                <p><a target="_blank" rel="nofollow" href="https://undraw.co/">Ubah &rarr;</a></p>
              </div>
            </div>

          </div>
        </div>

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
