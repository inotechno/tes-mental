<!-- Page content -->
    <div class="container py-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body">
              <div class="card" id="kuesioner-card">
                <div class="text-center py-1">
                  <span id="soal-saat-ini" class="badge badge-warning badge-lg"></span> 
                  / 
                  <span id="total-soal" class="badge badge-warning badge-lg"></span>
                </div>
                <div class="card-body">
                  <div class="card-title">
                    <h3 class="mb-2">Soal</h3>
                    <p id="soal"></p>
                  </div>

                  <h3 class="mb-2">Jawaban</h3>
                  <div class="block" id="jawaban">

                    <input name="id_soal" type="hidden" id="id_soal">
                    <div class="custom-control custom-radio mt-2">
                      <input name="jawaban" class="custom-control-input" type="radio" id="nilai_a">
                      <label class="custom-control-label" for="nilai_a" id="opsi_a"></label>
                    </div>

                    <div class="custom-control custom-radio mt-2">
                      <input name="jawaban" class="custom-control-input" type="radio" id="nilai_b">
                      <label class="custom-control-label" for="nilai_b" id="opsi_b"></label>
                    </div>

                    <div class="custom-control custom-radio mt-2">
                      <input name="jawaban" class="custom-control-input" type="radio" id="nilai_c">
                      <label class="custom-control-label" for="nilai_c" id="opsi_c"></label>
                    </div>

                  </div>
                </div>

                <div class="card-footer">
                  <div class="text-center">
                    <button class="btn btn-sm btn-warning text-left" id="prev-soal">Sebelumnya</button>
                    <button class="btn btn-sm btn-info text-right" id="next-soal">Selanjutnya</button>
                    <button class="btn btn-sm btn-info text-right" id="finish-soal">Finish</button>
                  </div>
                </div>
              </div>

              <div class="card" id="hasil-akhir">
                <div class="card-body">
                  <table width="100%">
                    <tr>
                      <td>Nama Lengkap</td>
                      <td>:</td>
                      <td id="b_nama_lengkap"></td>
                      <td rowspan="4" class="text-center">
                        <h1>SKOR</h1>
                        <h1 id="skor-akhir"></h1>
                        <h3 id="status-skor"></h3>
                      </td>
                    </tr>
                    <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td id="b_kelas"></td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>:</td>
                      <td id="b_tgl_lahir"></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td id="b_jenis_kelamin"></td>
                    </tr>
                  </table>
                </div>
                <div class="card-footer text-center">
                  <a class="btn btn-warning" href="<?= base_url('users/EndSession') ?>">Close</a>
                </div>
              </div>
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