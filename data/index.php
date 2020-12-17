<!DOCTYPE html>
<html>
  <!-- HEAD HEAD HEAD HEAD -->
  <head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='../css/bootstrap.css' rel='stylesheet' />
    <link href='../css/jquery.dataTables.min.css' rel='stylesheet' />
    <link href='../icon/font/bootstrap-icons.css' rel='stylesheet' />
  </head>
  <!-- HEAD HEAD HEAD HEAD -->

  <!-- BODY BODY BODY BODY -->
  <body>
    <?php $pageData = true ?>
    <?php include_once '../navigation.php' ?>

    <!-- KONTEN UTAMA (MAIN) -->
    <main role="main" class="container">
      <div class="row justify-content-center text-center">
        <div class="container pt-3"> 
          <h1>Tabel Data Event</h1> 
        </div>
      </div>

      <!-- TABEL TABEL TABEL -->
      <table id="example" class="display cell-border" style="width:100%">
        <!-- HEAD TABEL-->
        <thead>
          <tr class="text-center">
            <th>id</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Bidang</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <!-- ISI TABEL (DENGAN PHP) -->
        <?php include '../database.php'?>
        <?php 
          $sql = "SELECT * FROM main";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
        ?>
          <tr>
            <td class="text-center" width="3%"><?php echo $row["id"] ?></td>
            <td class="text-justify" width="20%"><?php echo $row["nama"] ?></td>
            <td class="text-justify" width="32%"><?php echo $row["deskripsi"] ?></td>
            <td class="text-center" width="10%"><?php echo $row["mulai"] ?></td>
            <td class="text-center" width="10%"><?php echo $row["selesai"] ?></td>
            <td class="text-center" width="15%"><?php echo $row["bidang"] ?></td>
            <td class="text-center" width="10%">
              <a href='delete.php?id=<?php echo $row["id"] ?>' onclick='return myFunction()'><i class="bi bi-trash-fill text-danger"></i></a>
               - 
              <a href='edit.php?id=<?php echo $row["id"] ?>'><i class="bi bi-pencil-square text-success"></i></a>
               - 
              <a href='#'><i class="bi bi-search text-primary"></i></a>
            </td>
          </tr>
        <?php
          }
            } else {
            echo "0 results";
            }
        ?>
        <!-- ISI TABEL (DENGAN PHP) -->
        </tbody>
        <tfoot>
          <tr class="text-center">
            <th>id</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Bidang</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </main>
    <!-- KONTEN UTAMA (MAIN) -->

    <!-- FOOTER -->
    <?php include_once "../footer.php" ?>
    <!-- END FOOTER -->

    <script type="text/javascript">
      function myFunction(){
        return confirm("Ingin menghapus data?");
        }
    </script>
    <script src='../js/bootstrap.js'></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
  <!-- BODY BODY BODY BODY -->
</html>
