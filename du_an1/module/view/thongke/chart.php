<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<?php
    include_once '../controller/index.php';
?>
      <center>
    <div class="container_form" style="width: 45%">
      <div class="chart">
        <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Loại', 'Số Lượng'],
              <?php
              foreach ($items as $item){
                  echo "['$item[ten_dm]',     $item[soluong]],";
              }
              ?>
          ]);

          var options = {
            title: 'TỶ LỆ HÀNG HÓA',
            is3D: true,
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
          chart.draw(data, options);
        }
      </script>
          <div id="piechart_3d" style="width: 580px; height: 400px;"></div>
          <a href="thongke.php" class="btn btn-outline-success">QUAY LẠI</a>
      </div>
    </div>
    </center>
</body>
</html>