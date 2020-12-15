<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/quan-tri.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Tên Loại', 'Tổng Số Lượng'],
                <?php
                foreach ($items as $item) {
                    echo "['$item[ten_loai]', $item[tong_hh]],";
                }
                ?>
            ]);
            var options = {
                title: 'Tỷ lệ hàng hóa',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <!-- <div style="margin-bottom:10px; font-size:20px">BIỂU ĐỒ THỐNG KÊ</div> -->

    <div id="piechart_3d" class="mt-5"></div>

</body>

</html>