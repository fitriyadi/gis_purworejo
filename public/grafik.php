<?php
$query="select idkecamatan as kode,namakecamatan,
(select count(*) from tb_fasilitas where idkecamatan=kode and idjenis='1') as rs,
(select count(*) from tb_fasilitas where idkecamatan=kode and idjenis='2') as puskes,
(select count(*) from tb_fasilitas where idkecamatan=kode and idjenis='3') as apot
from tb_kecamatan";

$result=$mysqli->query($query);
$num_result=$result->num_rows;
$rows = array();
if ($num_result > 0 ) { 
  while ($data=mysqli_fetch_assoc($result)) {
    extract($data);

    $arrayKecamatan[] = "' Kec ".$namakecamatan."'";
    $arrayPuskesmas[] = round($puskes,0);
    $arrayRumahsakit[] = round($rs,0);
    $arrayApotek[] = round($apot,0);
  }}
  ?>

  <script src="jquery-2.1.4.min.js"></script>
  <script src="highcharts.js"></script>
  <script type="text/javascript">
    $(function(){
      var chart = new Highcharts.Chart({
        chart: {
          renderTo: 'mygraph',
          type: 'bar',
        },
        title: {
          text: 'Grafik Fasilitas Kesehatan'
        },
        xAxis: {
          categories: [<?= join($arrayKecamatan, ',') ?>],
          title: {
            text: null
          }
        },
        yAxis: {
          min: 0,
          title: {
            text: 'Jumlah',
            align: 'high'
          },
          labels: {
            overflow: 'justify'
          }
        },
        tooltip: {
          valueSuffix: ' Nilai'
        },
        plotOptions: {
          bar: {
            dataLabels: {
              enabled: true
            }
          }
        },
        legend: {
          layout: 'vertical',
          align: 'right',
          verticalAlign: 'top',
          x: -40,
          y: 80,
          floating: true,
          borderWidth: 1,
          backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
          shadow: true
        },
        credits: {
          enabled: false
        },
        series: [{
          name: 'Puskesmas',
          data: [<?= join($arrayPuskesmas, ',') ?>],
          color: '#0000FF',
        },
        {
          name: 'Rumah Sakit',
          data: [<?= join($arrayRumahsakit, ',') ?>],
          color: '#7FFF00',
        },
        {
          name: 'Apotek',
          data: [<?= join($arrayApotek, ',') ?>],
          color: 'red',
        }]
      });
    });
  </script>
<!--==========================
Grafik
============================-->
<section id="contact" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Grafik Persebaran Fasilitas Kesehatan</h2>
    </div>
  </div>
</div>

<div class="container mb-12">
  <div id ="mygraph"></div>
</div>


<div class="container">
  <div class="section-header">
    <h4>Data Jumlah Fasilitas Kesehatan</h4>
  </div>
</div>
<div class="container mb-12">
  <table id="example2" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Kecamatan</th>
        <th>Puskesmas</th>
        <th>Rumah Sakit</th>
        <th>Apotek</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $query="SELECT * from tb_kecamatan";
      $result=$mysqli->query($query);
      $num_result=$result->num_rows;
      if ($num_result > 0 ) { 
        $no=0;
        while ($data=mysqli_fetch_assoc($result)) {
          extract($data);
          ?>
          <tr>
            <td width="5%"><?=$no+=1; ?></td>
            <td><?=$namakecamatan; ?></td>
            <td><?=$_puskesmas; ?></td>
            <td><?=$_rumahsakit; ?></td>
            <td><?=$_apotek; ?></td>
          </tr>
        <?php }} ?>
      </table>
    </div>


  </section>

