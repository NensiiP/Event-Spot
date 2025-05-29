<?php
    session_start();
    include '../config.php';

    // hallbook
    $hallbooksql ="Select * from hallbook";
    $hallbookre = mysqli_query($conn, $hallbooksql);
    $hallbookrow = mysqli_num_rows($hallbookre);

    // staff
    $staffsql ="Select * from staff";
    $staffre = mysqli_query($conn, $staffsql);
    $staffrow = mysqli_num_rows($staffre);

    // hall
    $hallsql ="Select * from hall";
    $hallre = mysqli_query($conn, $hallsql);
    $hallrow = mysqli_num_rows($hallre);

    //hallbook halltype
    $charthall1 = "SELECT * FROM hallbook WHERE HallType='Birthday Hall'";
    $charthall1re = mysqli_query($conn, $charthall1);
    $charthall1row = mysqli_num_rows($charthall1re);

    $charthall2 = "SELECT * FROM hallbook WHERE HallType='Event Hall'";
    $charthall2re = mysqli_query($conn, $charthall2);
    $charthall2row = mysqli_num_rows($charthall2re);

    $charthall3 = "SELECT * FROM hallbook WHERE HallType='Haldi Hall'";
    $charthall3re = mysqli_query($conn, $charthall3);
    $charthall3row = mysqli_num_rows($charthall3re);

    $charthall4 = "SELECT * FROM hallbook WHERE HallType='Dandiya Night'";
    $charthall4re = mysqli_query($conn, $charthall4);
    $charthall4row = mysqli_num_rows($charthall4re);

    $charthall5 = "SELECT * FROM hallbook WHERE HallType='Baby Shower Hall'";
    $charthall5re = mysqli_query($conn, $charthall5);
    $charthall5row = mysqli_num_rows($charthall5re);

    $charthall6 = "SELECT * FROM hallbook WHERE HallType='NamKaran'";
    $charthall6re = mysqli_query($conn, $charthall6);
    $charthall6row = mysqli_num_rows($charthall6re);

    $charthall7 = "SELECT * FROM hallbook WHERE HallType='Engagement Hall'";
    $charthall7re = mysqli_query($conn, $charthall7);
    $charthall7row = mysqli_num_rows($charthall7re);

    $charthall8 = "SELECT * FROM hallbook WHERE HallType='Mahendi Hall'";
    $charthall8re = mysqli_query($conn, $charthall8);
    $charthall8row = mysqli_num_rows($charthall8re);

    $charthall9 = "SELECT * FROM hallbook WHERE HallType='Marrige Hall'";
    $charthall9re = mysqli_query($conn, $charthall9);
    $charthall9row = mysqli_num_rows($charthall9re);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- morish bar -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <title>SevenSeas - Admin </title>
</head>
<body>
   <div class="databox">
      <div class="box hallbookbox">
        <h2>Total Booked Hall</h1>  
        <h1><?php echo $hallbookrow ?> / <?php echo $hallrow ?></h1>
      </div>
      <div class="box guestbox">
      <h2>Total Staff</h1>  
      <h1><?php echo $staffrow ?></h1>
      </div>
    </div><br><br>
    <div class="chartbox">
        <div class="bookhallchart">
            <canvas id="bookhallchart"></canvas>
            <h3 style="text-align: center;margin:10px 0;">Booked Hall</h3>
        </div>
    </div>
</body>

<script>
        const labels = [
          'Birthday Hall',
          'Event Hall',
          'Haldi Hall',
          'Dandiya Night',
          'Baby Shower Hall',
          'NamKaran',
          'Engagement Hall',
          'Mahendi Hall',
          'Marrige Hall',
        ];
      
        const data = {
          labels: labels,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(200, 159, 64, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 20, 132, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 162, 235, 1)',
                'rgba(153, 102, 100, 1)',
                'rgba(150, 190, 232, 1)',
            ],
            borderColor: 'black',
            data: [<?php echo $charthall1row ?>,
                  <?php echo $charthall2row ?>,
                  <?php echo $charthall3row ?>,
                  <?php echo $charthall4row ?>,
                  <?php echo $charthall5row ?>,
                  <?php echo $charthall6row ?>,
                  <?php echo $charthall7row ?>,
                  <?php echo $charthall8row ?>,
                  <?php echo $charthall9row ?>],
          }]
        };
  
        const doughnutchart = {
          type: 'doughnut',
          data: data,
          options: {}
        };
        
      const myChart = new Chart(
      document.getElementById('bookhallchart'),
      doughnutchart);
</script>

</html>