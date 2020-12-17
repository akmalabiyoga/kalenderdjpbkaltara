<?php include_once '../database.php'?>
<!DOCTYPE html>
<html>
  <!-- HEAD HEAD HEAD HEAD -->
  <head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='../css/bootstrap.css' rel='stylesheet' />
    <style>
      #calendar {
        max-width: 768px;
        margin: 0 auto;
      }
    </style>
  </head>
  <!-- HEAD HEAD HEAD HEAD -->

  <!-- BODY BODY BODY BODY -->
  <body>
    <!-- NAVIGATION CALL -->
    <?php $pageTambah = true ?>
    <?php include_once '../navigation.php' ?>
    <!-- NAVIGATION CALL -->

    <!-- KONTEN UTAMA (MAIN) -->
    <main role="main" class="container">
        <div class="row justify-content-center text-center">
          <div class="container pt-3"> 
            <h1>Tambah Data</h1> 
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- KARTU TAMBAH DATA -->
          <div class="card w-50">
            
            <form action="tambah-proses.php" method="post">
            <!-- HEADER KARTU TAMBAH DATA -->
            <div class="card-header">
            Tambah Data
            </div>
            <!-- HEADER KARTU TAMBAH DATA -->

            <!-- ISI KARTU TAMBAH DATA -->
            <div class="card-body">
            
              <div class="form-group">
                <label for="exampleFormControlSelect1">Bagian/Bidang</label>
                <select class="form-control" id="bidang" name="bidang" required>
                  <option>Bagian Umum</option>
                  <option>Bidang PPA 1</option>
                  <option>Bidang PPA 2</option>
                  <option>Bidang PAPK</option>
                  <option>Bidang SKKI</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Event" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi Kegiatan"></textarea>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="formGroupExampleInput2">Start</label>
                  <input type="date" class="form-control" id="mulai" name="mulai" placeholder="Tanggal Mulai" required>
                </div>
                <div class="col">
                  <label for="formGroupExampleInput2">End</label>
                  <input type="date" class="form-control" id="selesai" name="selesai" placeholder="Tanggal Selesai">
                </div>
              </div>
            
            </div>
            <!-- ISI KARTU TAMBAH DATA -->

            <!-- FOOTER KARTU TAMBAH DATA -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <!-- FOOTER KARTU TAMBAH DATA -->
            </form>

          </div>
          <!-- KARTU TAMBAH DATA -->

        </div>
    </main>
    <!-- KONTEN UTAMA (MAIN) -->

    <!-- FOOTER -->
    <?php include_once "../footer.php" ?>
    <!-- END FOOTER -->

    <script src="../js/jquery.min.js"></script>
    <script src='../js/bootstrap.js'></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
  <!-- BODY BODY BODY BODY -->
</html>
