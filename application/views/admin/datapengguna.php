    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Tabel Pengguna</h3>
                </div>
              </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="width:10px;">No</th>
                    <th scope="col">Nama Users</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col" style="width:10%;">Action</th>
                  </tr>
                </thead>
                <tbody id="list-pengguna">
                 
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

<div class="modal fade" id="modal-jawaban" tabindex="-1" role="dialog" aria-labelledby="modal-add-soal" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-top modal-lg" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
              <table class="mb-3" width="100%">
                <tr>
                  <td width="150">Nama</td>
                  <td width="20">:</td>
                  <td id="nama_lengkap"></td>
                  <td class="text-center" rowspan="4">
                    <h1>SKOR</h1>
                    <h1 id="skor"></h1>
                    <h3 id="status"></h3>
                  </td>
                </tr>

                <tr>
                  <td>Tanggal Lahir</td>
                  <td>:</td>
                  <td id="tgl_lahir"></td>
                </tr>

                <tr>
                  <td>Kelas</td>
                  <td>:</td>
                  <td id="kelas"></td>
                </tr>

                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td id="jenis_kelamin"></td>
                </tr>

              </table> 

              <div class="row">
                <div class="col-12 table-responsive" id="list-jawaban-user">
                  
                </div>
              </div> 
            </div>
            
        </div>
    </div>
  </div>