<!-- Page content -->
    <div class="container py-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="card-img text-center">
                <h1 class="card-title font-weight-bold">BIODATA USER</h1>
                <!-- <img width="100" height="100" src="<?= site_url('assets/assets/img/brand/logo-dinkes.png') ?>"> -->
              </div>
              <div class="text-center text-muted mb-4">
                <small>Silahkan isi data dibawah ini dengan benar</small>
              </div>
              <form id="form-users">
                <div class="row">

                  <div class="col-md">
                    <div class="form-group mb-2">
                      <label class="font-weight-bold">Nama Lengkap</label>
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama_lengkap">
                      </div>
                    </div>
                  </div>

                  <div class="col-md">
                    <div class="form-group">
                      <label class="font-weight-bold">Tanggal Lahir</label>
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input class="form-control" placeholder="Tanggal Lahir" type="date" name="tgl_lahir">
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md">
                    <div class="form-group mb-2">
                      <label class="font-weight-bold">Kelas</label>
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input class="form-control" placeholder="Kelas" type="text" name="kelas">
                      </div>
                    </div>
                  </div>

                  <div class="col-md">
                    <div class="form-group">
                      <label class="font-weight-bold">Jenis Kelamin</label>
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-badge"></i></span>
                        </div>
                        <select class="form-control" name="jenis_kelamin">
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>

                      <!-- <div class="row">
                        <div class="col-md">
                          <div class="custom-control custom-radio">
                            <input name="jenis_kelamin" class="custom-control-input" id="laki-laki" type="radio">
                            <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                          </div>
                        </div>

                        <div class="col-md">
                          <div class="custom-control custom-radio">
                            <input name="jenis_kelamin" class="custom-control-input" id="perempuan" checked="" type="radio">
                            <label class="custom-control-label" for="perempuan">Perempuan</label>
                          </div>
                        </div>
                      </div> -->

                    </div>
                  </div>
                </div>
                <div class="text-center mt-2">
                  <button type="submit" id="btn-login" class="btn btn-primary">Kuisioner <span class="ni ni-button-play"></span></button>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a href="#" class="text-light"><small>&copy; 2021 BasisCoding</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>V 1.0.0</small></a>
            </div>
          </div>
          
        </div>
      </div>
    </div>