    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Tabel Group Soal</h3>
                </div>
                <div class="col-6 text-right">
                  <button class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-add-group-soal">
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
                  <tr class="text-center">
                    <th scope="col" style="width:10px;">No</th>
                    <th scope="col">Nama Group</th>
                    <th scope="col">Normal</th>
                    <th scope="col">Perbatasan</th>
                    <th scope="col">Abnormal</th>
                    <th scope="col" style="width:10%;">Action</th>
                  </tr>
                </thead>
                <tbody id="list-group-soal">
                 
                </tbody>
              </table>
            </div>

            <!-- <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
          </div>
        </div>
      </div>


  <div class="modal fade" id="modal-add-group-soal" tabindex="-1" role="dialog" aria-labelledby="modal-add-soal" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-top modal-sm" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Tambah Group Soal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
              <form class="form" id="form-add-group-soal" method="POST">
              	<div class="form-group">
              		<label>Nama Group</label>
              		<input type="text" name="nama_group" class="form-control">
              	</div>

                <div class="form-group">
                  <label>Skor Normal</label>
                  <input type="int" name="s_normal" class="form-control" placeholder="Nilai Max">
                </div>

                <div class="form-group">
                  <label>Skor Perbatasan</label>
                  <input type="int" name="s_perbatasan" class="form-control" placeholder="Nilai Max">
                </div>

                <div class="form-group">
                  <label>Skor Abnormal</label>
                  <input type="int" name="s_abnormal" class="form-control" placeholder="Nilai Max">
                </div>
              </form> 
            </div>

            <div class="modal-footer">
              <button type="submit" form="form-add-group-soal" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
  </div>

  <div class="modal fade" id="modal-update-group-soal" tabindex="-1" role="dialog" aria-labelledby="modal-update-group-soal" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-top modal-sm" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Update Group Soal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
              <form class="form" id="form-update-group-soal" method="POST">
              	<input type="hidden" name="id_group_update" class="form-control">
              	<div class="form-group">
              		<label>Nama Group</label>
              		<input type="text" name="nama_group_update" class="form-control">
              	</div>

                <div class="form-group">
                  <label>Skor Normal</label>
                  <input type="int" name="s_normal_update" class="form-control" placeholder="Nilai Max">
                </div>

                <div class="form-group">
                  <label>Skor Perbatasan</label>
                  <input type="int" name="s_perbatasan_update" class="form-control" placeholder="Nilai Max">
                </div>

                <div class="form-group">
                  <label>Skor Abnormal</label>
                  <input type="int" name="s_abnormal_update" class="form-control" placeholder="Nilai Max">
                </div>
              </form> 
            </div>

            <div class="modal-footer">
              <button type="submit" form="form-update-group-soal" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
  </div>

  <div class="modal fade" id="modal-group-list-soal" tabindex="-1" role="dialog" aria-labelledby="modal-group-list-soal" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-top modal-xl" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
              <input type="hidden" id="id_group">
                <h6 class="modal-title" id="modal-title-default">List Group Soal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
              <div class="row mb-4">
                <div class="col-md-6 text-center">
                  <h3 id="list_nama_group"></h3>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col">
                      <h4>Normal</h4>
                      <span class="badge badge-primary badge-lg" id="list_s_normal"></span><br>
                    </div>
                    <div class="col">
                      <h4>Perbatasan</h4>
                      <span class="badge badge-primary badge-lg" id="list_s_perbatasan"></span><br>
                    </div>
                    <div class="col">
                      <h4>Abnormal</h4>
                      <span class="badge badge-primary badge-lg" id="list_s_abnormal"></span><br>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="table-responsive">
                    <table class="table-sm table table-hover">
                      <thead>
                        <th>Pilih Soal</th>
                      </thead>
                      <tbody id="list-soal"></tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6">
                  <table class="table table-flush table-responsive table-hover">
                    <thead>
                      <th>Soal Group</th>
                    </thead>
                    <tbody id="list-soal-group">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
        </div>
    </div>
  </div>

  <div class="modal fade show" id="modal-delete-group-soal" tabindex="-1" role="dialog" aria-labelledby="modal-delete-soal" aria-modal="true">
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
            <h4 class="heading mt-4">Apakah anda yakin ingin menghapus grup soal dibawah ini</h4>
            <h4 id="group-soal-delete"></h4>
            <input type="hidden" name="id_group_delete">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" id="btn-delete-group-soal">Ok, Hapus</button>
          <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>