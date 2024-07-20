<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      const data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng'],
        <?php
        foreach ($dsthongke as $thongke) {
          extract($thongke);
          echo "['$name', $soluong],";
        }
        ?>
      ])
      var options = {
        title: 'Thống kê sản phẩm',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>
  <style>
    .tong {
      display: flex;
      align-items: start;
      margin-top: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: center;
      border: 1px solid gray;
    }
    th {
      background-color: antiquewhite;
    }
    .font_title {
      padding-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="tong">
    <div class="row2">
      <div class="row2 font_title">
        <h3>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h3>
      </div>
      <div class="row2 form_content">
        <form action="#" method="POST">
          <div class="row2 mb10 formds_loai">
            <table>
              <tr>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ NHỎ NHẤT</th>
                <th>GIÁ LỚN NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
              </tr>
              <?php
              foreach ($dsthongke as $thongke) {
                extract($thongke);
              ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $soluong ?></td>
                <td><?php echo $gia_min ?> VNĐ</td>
                <td><?php echo $gia_max ?> VNĐ</td>
                <td><?php echo number_format($gia_avg, 2) ?> VNĐ</td>
              </tr>
              <?php
              }
              ?>
            </table>
          </div>
        </form>
      </div>
    </div>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Thời gian', 'Doanh thu'],
        <?php
        foreach ($doanhthu as $thongke) {
          extract($thongke);
          echo "['$ngay', $gia_tri],";
        }
        ?>
      ]);

      var options = {
        title: 'Doanh thu Cao Nhất',
        hAxis: {
          title: 'Thời gian',
        },
        vAxis: {
          title: 'Doanh thu (VNĐ)'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
    chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="columnchart" style="width: 900px; height: 500px;"></div>
</body>
</html>
