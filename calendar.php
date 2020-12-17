<?php
function warna($bidang) {
  switch ($bidang) {
    case "Bagian Umum":
      echo "#696969";
      break;
    case "Bidang PPA 1":
      echo "#008000";
      break;
    case "Bidang PPA 2":
      echo "#00008B";
      break;
    case "Bidang PAPK":
      echo "#B8860B";
      break;
    case "Bidang SKKI":
      echo "#800000";
      break;
    default:
      echo "white";
  }
}
?>
  
  
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var date = new Date()
	  var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prevYear,prev,next,nextYear today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay,listWeek'
      },
      weekNumberCalculation: 'ISO',
      themeSystem: 'bootstrap',
      locale: 'id',
      events: [
      <?php 
        include 'database.php';
        $sql = "SELECT * FROM main";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) { 
      ?>
        {
          title: '<?php echo $row["nama"] ?>',
          start: '<?php echo $row["mulai"] ?>',
          end: '<?php echo $row["selesai"] ?>',
          backgroundColor: '<?php warna($row["bidang"]) ?>',
          borderColor: '<?php warna($row["bidang"]) ?>'
        },
          <?php
            }
            } else {
            echo "0 results";
            }
          ?>
        {
          title: '<?php echo "KAKAKAKA" ?>',
          start: '2020-09-01'
        },
        {
          title: 'Long Event',
          start: '2020-09-07',
          end: '2020-09-10'
        },
        {
          groupId: 999,
          title: '',
          start: '2020-09-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-09-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2020-09-11',
          end: '2020-09-13'
        },
        {
          title: 'Meeting',
          start: '2020-09-12T10:30:00',
          end: '2020-09-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2020-09-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2020-09-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2020-09-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2020-09-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2020-09-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2020-09-28'
        }
      ]
    });

    calendar.render();
  });
