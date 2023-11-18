    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Tabel Soal</h3>
                </div>
                <div class="col-6 text-right">
                  <button class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-add-soal">
                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    <span class="btn-inner--text">Tambah</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="width:10px;">No</th>
                    <th scope="col">Soal</th>
                    <th scope="col" style="width:10%;">Action</th>
                  </tr>
                </thead>
                <tbody id="list-soal">
                 
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>


  <div class="modal fade" id="modal-add-soal" tabindex="-1" role="dialog" aria-labelledby="modal-add-soal" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-top modal-lg" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Tambah Soal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
              <form class="form" id="form-add-soal" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Soal</label>
                      <textarea class="form-control" name="soal" rows="5"></textarea>
                    </div>                
                  </div>

                  <div class="col-lg-6">
                    <label>Jawaban</label>
                    <div class="form-group">
                      <div class="input-group input-group-merge mb-2">
                        <input type="text" name="opsi_a" class="form-control form-control-sm" placeholder="Opsi A">
                        <div class="input-group-append col-4">
                          <input type="number" name="nilai_a" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="input-group input-group-merge mb-2">
                        <input type="text" name="opsi_b" class="form-control form-control-sm" placeholder="Opsi B">
                        <div class="input-group-append col-4">
                          <input type="number" name="nilai_b" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="input-group input-group-merge">
                        <input type="text" name="opsi_c" class="form-control form-control-sm" placeholder="Opsi C">
                        <div class="input-group-append col-4">
                          <input type="number" name="nilai_c" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>      
                  </div>
                </div>

              </form> 
            </div>

            <div class="modal-footer">
              <button type="submit" form="form-add-soal" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
  </div>

  <div class="modal fade" id="modal-update-soal" tabindex="-1" role="dialog" aria-labelledby="modal-add-soal" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-top modal-lg" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Update Soal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
              <form class="form" id="form-update-soal" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" name="id_soal_update">
                    <div class="form-group">
                      <label>Soal</label>
                      <textarea class="form-control" name="soal_update" rows="5"></textarea>
                    </div>                    
                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label>Opsi A</label>
                      
                      <div class="input-group input-group-merge">
                        <input type="text" name="opsi_a_update" class="form-control form-control-sm">
                        <div class="input-group-append col-3">
                          <input type="number" name="nilai_a_update" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>

                    <div class="form-group">
                      <label>Opsi B</label>
                      
                      <div class="input-group input-group-merge">
                        <input type="text" name="opsi_b_update" class="form-control form-control-sm">
                        <div class="input-group-append col-3">
                          <input type="number" name="nilai_b_update" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>

                    <div class="form-group">
                      <label>Opsi C</label>
                      
                      <div class="input-group input-group-merge">
                        <input type="text" name="opsi_c_update" class="form-control form-control-sm">
                        <div class="input-group-append col-3">
                          <input type="number" name="nilai_c_update" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>
                    
                  </div>
                </div>

              </form> 
            </div>

            <div class="modal-footer">
              <button type="submit" form="form-update-soal" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
  </div>

  <div class="modal fade show" id="modal-delete-soal" tabindex="-1" role="dialog" aria-labelledby="modal-delete-soal" aria-modal="true">
    <div class="modal-dialog modal-danger modal-dialog-top modal-sm" role="document">
      <div class="modal-content bg-gradient-danger">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Warning !</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4">Apakah anda yakin ingin menghapus soal dibawah ini</h4>
            <p id="soal-delete"></p>
            <input type="hidden" name="id_soal_delete">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" id="btn-delete-soal">Ok, Hapus</button>
          <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>