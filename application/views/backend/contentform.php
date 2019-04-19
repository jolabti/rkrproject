      <!-- Content Row -->

       <div class="row col-md-12">
       
        <?php if ($goal!="" && $goal=="pengker"){?>

            
            <form class="col-md-12"> 
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Posisi</label>
                  <input type="text" class="form-control" id="edEmail"  placeholder="Masukkan posisimu">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="edCorporateName"  placeholder="Masukkan nama perusahaan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Masuk</label>
                  <input type="date" class="form-control" id="edDateEnter" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Resign</label>
                  <input type="date" class="form-control" id="edDateOut"  >
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Job Description</label>
                  <textarea placeholder="Daftar JobDescription" class="form-control" name="desc" id="edJobDesc"></textarea>
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Job Description</label>
                  <input type="file" class="form-control" name="fileUpload" id="componentUploadJob"> 
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-success form-control" id="componentSubmitPengker">Save</button>
                
                </div>
              
            </form>      
        <?php }  

       
          
        ?>
        
        
        <?php if ($goal!="" && $goal=="ability"){?>            
            <form class="col-md-12"> 
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kemampuan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan posisimu">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Presentasi Kemampuan</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama perusahaan">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success form-control">Save</button>
                
                </div>
                 
            </form>      
        <?php
        
          }
          
        ?>
        
         <?php if ($goal!="" && $goal=="kursus"){?>

            
            <form class="col-md-12"> 
            
                <div class="form-group">
                  <label for="ed_nama_kursus">Nama Kursus</label>
                  <input type="text" class="form-control" id="ed_nama_kursus"   placeholder="Nama kursus ...">
                </div>

                <div class="form-group">
                  <label for="ed_biaya_kursus">Biaya kursus</label>
                  <input type="number" class="form-control" id="ed_biaya_kursus"  placeholder="Masukkan biaya kursus ... / pertemuan">
                </div>
                
                <div class="form-group">
                  <label for="ed_logo_kursus">Logo modul</label>
                  <input type="file" class="form-control" id="ed_logo_kursus"   >
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success form-control">Save</button>
                
                </div>
                 
            </form>      
        <?php
        
          }
          
        ?>
        <?php if ($goal!="" && $goal=="video"){?>

            
            <form class="col-md-12"> 
            
                <div class="form-group">
                  <label for="ed_nama_kursus">Nama Video</label>
                  <input type="text" class="form-control" id="ed_nama_kursus">
                </div>

                <div class="form-group">
                  <label for="ed_biaya_kursus">Link</label>
                  <input type="text" class="form-control" id="ed_biaya_kursus">
                </div>
           
                <div class="form-group">
                <button type="submit" class="btn btn-success form-control">Save</button>
                
                </div>
                 
            </form>      
        <?php
        
          }
          
        ?>
        
        
        <?php if ($goal!="" && $goal=="banners"){?>

            
            <form class="col-md-12"> 
            
                <div class="form-group">
                  <label for="ed_nama_kursus">Nama Banner</label>
                  <input type="text" class="form-control" id="ed_nama_kursus">
                </div>

                <div class="form-group">
                  <label for="ed_biaya_kursus">Keterangan</label>
                  <textarea name="comoponentKeteranganBanner" id="componentKeteranganBanner" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                <label for="ed_nama_kursus">Photos for Banner</label>
                <input type="file" name="fileBanner" id="fileBanner" class="form-group"/>                
                </div>
           
                <div class="form-group">
                <button type="submit" class="btn btn-success form-control">Save</button>
                
                </div>
                 
            </form>      
        <?php
        
          }
          
        ?>
        
         <?php if ($goal!="" && $goal=="projects"){?>

            
            <form class="col-md-12"> 
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Project</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama projek ...">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <textarea name="mydesc"  class="form-control" placeholder="Deskripsi projek ..."></textarea>
                </div>
                
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Bukti Projek (Link)</label>
                  <input type="text" class="form-control"   placeholder="Nama projek ...">
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-success form-control">Save</button>
                
                </div>
                 
            </form>      
        <?php }  


        else if($goal==NULL|| is_null($goal)){
          
        ?>
        
        
          <p>No data</p>
        <?php 
        
        }
        ?>
        

       
      </div>


      <div class="row container-fluid">

                <div class="col-md-3">
                
                    <h5 class="text-center btn-primary"><?= $goal;?></h5>
                
                </div>

                <div class="col-md-9">
                
                        <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                           
                        </tbody>
                      </table>   

                      <nav aria-label="Page navigation example">
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                            </li>
                          </ul>
                    </nav>             
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
