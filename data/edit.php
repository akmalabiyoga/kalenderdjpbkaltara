<?php include_once '../database.php'?>
<?php 
$id = $_GET['id'];
 
$sql = "SELECT * FROM main WHERE id=$id LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bidang = $row["bidang"];
?>

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
            <h1>Edit Data</h1> 
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- KARTU TAMBAH DATA -->
          <div class="card w-50">
            
            <form action="edit-proses.php?id=<?php echo $id ?>" method="post">
            <!-- HEADER KARTU TAMBAH DATA -->
            <div class="card-header">
            Edit Data ID: <?php echo $row["id"] ?>
            </div>
            <!-- HEADER KARTU TAMBAH DATA -->

            <!-- ISI KARTU TAMBAH DATA -->
            <div class="card-body">
            
              <div class="form-group">
                <label for="exampleFormControlSelect1">Bagian/Bidang</label>
                <select class="form-control" id="bidang" name="bidang" required>
                  <option <?php if ($bidang == "Bagian Umum") { echo 'selected'; } ?>>Bagian Umum</option>
                  <option <?php if ($bidang == "Bidang PPA 1") { echo 'selected'; } ?>>Bidang PPA 1</option>
                  <option <?php if ($bidang == "Bidang PPA 2") { echo 'selected'; } ?>>Bidang PPA 2</option>
                  <option <?php if ($bidang == "Bidang PAPK") { echo 'selected'; } ?>>Bidang PAPK</option>
                  <option <?php if ($bidang == "Bidang SKKI") { echo 'selected'; } ?>>Bidang SKKI</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row["nama"] ?>" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" value="<?php echo $row["deskripsi"] ?>"></textarea>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="formGroupExampleInput2">Start</label>
                  <input type="date" class="form-control" id="mulai" name="mulai" value="<?php echo $row["mulai"] ?>" required>
                </div>
                <div class="col">
                  <label for="formGroupExampleInput2">End</label>
                  <input type="date" class="form-control" id="selesai" name="selesai" value="<?php echo $row["selesai"] ?>">
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
