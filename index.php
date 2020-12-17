<!DOCTYPE html>
<html>
  <!-- HEAD HEAD HEAD HEAD -->
  <head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/bootstrap.css' rel='stylesheet' />
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <link href='fa/css/all.css' rel='stylesheet' />
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
    <?php $pageHome = true ?>
    <?php include_once 'navigation.php' ?>

    <!-- KONTEN UTAMA (MAIN) -->
    <main role="main" class="container">
      <div class="row justify-content-center text-center">
        <div class="container pt-3"> 
          <h1>Kalender Kanwil DJPb Kaltara</h1> 
          <p class="lead">Memuat jadwal Kanwil DJPb Kaltara selama setahun.<br> Bisa untuk berbagai bidang.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm justify-content-center py-3">
          <div id='calendar' style='font-size: 14px'></div>
        </div>  
      </div>
    </main>
    <!-- KONTEN UTAMA (MAIN) -->

    <!-- FOOTER -->
    <?php include_once "footer.php" ?>
    <!-- END FOOTER -->
    
    <script src='js/bootstrap.js'></script>
    <script src="js/jquery.min.js"></script>
    <script src='fullcalendar/main.js'></script>
    <script src='fullcalendar/locales/id.js'></script>
    <script src='calendar.php'></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  <!-- BODY BODY BODY BODY -->
</html>
