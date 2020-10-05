
<style>
  #legend-container {
    font-family: Arial, sans-serif;
    background: #fff;
    padding: 10px;
    margin: 10px;
    border: 3px solid #000;
  }
  #legend-container h3 {
    margin-top: 0;
  }
  .legend-color-box {
    height:20px;
    width:20px;
    border-radius:3px;
    float:left;
    border:1px solid black;
    margin-right:6px;         
  }
</style>    
    <!--==========================
     Peta
     ============================-->
     <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Peta Persebaran Fasilitas Kesehatan</h2>
        </div>
      </div>
    </div>

    <div class="container mb-12">
     <div id="map-canvas" style="width:100%;height:550px;">
     </div> 
      <div id="legend-container"><h6>Keterangan Kelompok</h6></div>
   </div>
 </section>

 <?php 
 require_once '../setting/koneksi.php';
 require_once '../setting/crud.php';
 ?>


 <?php
 function lihattenaga($mysqli,$idfasilitas){
  $hasil="";
  $result=$mysqli->query("select * from tb_sdm join tb_jumlah_sdm using(idsdm) where idfasilitas='$idfasilitas' and jumlah >0 ");
  $num_result=$result->num_rows;
  if ($num_result > 0 ) { 
    while ($dataz=mysqli_fetch_assoc($result)) {
      extract($dataz);
      $hasil=$hasil.$nama." : ".$jumlah."<br>";
    }
  }

  return $hasil;
}

$result=$mysqli->query("select * from tb_kecamatan");
$num_result=$result->num_rows;
if ($num_result > 0 ) { 
  $no=0;
  $data[0]='';
  while ($dataz=mysqli_fetch_assoc($result)) {
    extract($dataz);
    switch ($kelompok) {
      case "C1":
      $data[$no+=1]="'red'";
      break;
      case "C2":
      $data[$no+=1]="'green'";
      break;
      case "C3":
      $data[$no+=1]="'blue'";
      break;
      default:
      break;
    } 
  }
}
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDDK8zBMsEKwbX1n795e-MsGKqqrfnWU70&libraries=drawing&geometry"></script>

<script>
  var lokasi = [<?php
    $result=$mysqli->query("select * from tb_fasilitas");
    $num_result=$result->num_rows;
    if ($num_result > 0 ) { 
      $no=0;
      while ($dataz=mysqli_fetch_assoc($result)) {
        extract($dataz);
        $tenaga="<hr>".lihattenaga($mysqli,$idfasilitas);

        if($no==0){

          echo "['$namaunit',";
        }else{
          echo ",['$namaunit',";
        }

        echo "$latitude,"; 
        echo "$longitude,";
        echo "$idjenis,";
        echo "'$tenaga',";
        echo "'$nohp']"; 
        $no+=1; 
      }}?>];

      console.log(lokasi);
      var map,
      cachedGeoJson,
      legend=['blue','green','red'],
      legendket=['Fasilitas Baik','Fasilitas Cukup','Fasilitas Kurang'],
      colorValues = [<?=join($data,',')?>],

      infoWindow = new google.maps.InfoWindow({
        content: ""
      });

      var marker,i;

      var infodata = new google.maps.InfoWindow();
      google.maps.event.addDomListener(window, 'load', function initialize() {
      //create the map
      map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 11,
        center: {lat: -7.69688, lng:  109.927956},
        scrollwheel: false
      });


      for (i = 0;i<lokasi.length; i++) {
        if (lokasi[i][3]=="1") 
          url = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/library_maps.png';
        else if (lokasi[i][3]=="2") 
          url = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/parking_lot_maps.png';
        else 
          url = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/info-i_maps.png';


        marker = new google.maps.Marker({
          icon: {
            url: url,
          },
          position: new google.maps.LatLng(lokasi[i][1],lokasi[i][2]),
          map:map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            let link='https://maps.google.com/maps?z=7&q='+ lokasi[i][1] +','+ lokasi[i][2];
            infodata.setContent('<div class="panel"> Fasilitas: <b>'+lokasi[i][0]+'</b><br>No Telepon: <b>'+lokasi[i][5]+'</b></br>'+  lokasi[i][4] +'<br><a href="'+ link+'" target="_blank"> Lokasi </a> </div>');
            infodata.open(map, marker);
          }
        })(marker, i));
      }     
      // Load GeoJSON.
      var promise = $.getJSON("../_file/1.geojson"); //same as map.data.loadGeoJson();
      promise.then(function(data){
        cachedGeoJson = data; //save the geojson in case we want to update its values
        map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      });

      //style fucntions
      var setColorStyleFn = function(feature) {
        return {
          fillColor: colorValues[feature.getProperty('id')],
          strokeWeight: 1
        };
      };
      
      // Set the stroke width, and fill color for each polygon, with default colors at first
      map.data.setStyle(setColorStyleFn);

      //get the legend container, create a legend, add a legend renderer fn
      var $legendContainer = $('#legend-container'),
      $legend = $('<div id="legend">').appendTo($legendContainer),
      renderLegend = function(colorValuesArray){
        $legend.empty();
        $.each(colorValuesArray,function(index, val){
          var $div = $('<div style="height:25px;">').append($('<div class="legend-color-box">').css({
            backgroundColor:val,
          })).append($("<span>").css("lineHeight","23px").html(legendket[index]));

          $legend.append($div);
        }); 
      }

      //make a legend for the first time
      renderLegend(legend);

      //add the legend to the map
      map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push($legendContainer[0]);

          //listen for click events
          map.data.addListener('click', function(event) {

        //show an infowindow on click   
        infoWindow.setContent('<div style="line-height:1.35;overflow:hidden;white-space:nowrap;"> Kode Kecamatan = '+
          event.feature.getId() +"<br/>Kecamatan = " + event.feature.getProperty("Kecamatan") + "</div>");
        var anchor = new google.maps.MVCObject();
        anchor.set("position",event.latLng);
        infoWindow.open(map,anchor);
      });
        });
      </script>