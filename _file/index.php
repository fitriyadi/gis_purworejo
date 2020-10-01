<?php 
require_once '../setting/koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Persebaran Fasilitas</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
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

    <?php
    	$data[]="'--'";
		$data[]="'blue'";
		$data[]="'red'";
		$data[]="'green'";
		$data[]="'blue'";
		$data[]="'red'";
		$data[]="'green'";
		$data[]="'blue'";
		$data[]="'red'";
		$data[]="'green'";
		$data[]="'blue'";
		$data[]="'red'";
		$data[]="'green'";
		$data[]="'blue'";
		$data[]="'red'";
		$data[]="'green'";
		$data[]="'blue'";
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDDK8zBMsEKwbX1n795e-MsGKqqrfnWU70&libraries=drawing&geometry"></script>
    
	<script>
	   var lokasi = [
    <?php
    $sql = "SELECT * from tb_fasilitas";
    $a = mysqli_query($con,$sql);
    while ($dataz = mysql_fetch_object($a)) {
      echo "['$dataz->idgempa',";
      echo "'$dataz->tanggal',";
      echo "$dataz->lat,"; 
      echo "$dataz->longi,"; 
      echo "'$dataz->detail',"; 
      echo "$dataz->kedalaman,"; 
      echo "'$dataz->kekuatan'],"; 
    }
    ?>
    ];
		var map,
			cachedGeoJson,
			legend=['blue','green','red'],
			legendket=['Fasilitas Baik','Fasilitas Cukup','Fasilitas Kurang'],
			colorValues = [<?=join($data,',')?>],
			invertedColorValues = [<?=join($data,',')?>],

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


		for (i = 0; i<lokasi.length; i++) {
			if (lokasi[i][6] < 3) 
			url = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/library_maps.png';
			 else if (lokasi[i][6] < 6) 
			url = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/parking_lot_maps.png';
			else 
			url = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/info-i_maps.png';
			

		marker = new google.maps.Marker({
		icon: {
			url: url,
		},
		position: new google.maps.LatLng(lokasi[i][2],lokasi[i][3]),
		map:map
		});
    
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
		return function() {
			infodata.setContent('<a <b>'+lokasi[i][1]+'</b></a><br><div class="panel"> Kedalaman: '+lokasi[i][5]+' KM<br> Kekuatan: '+lokasi[i][6]+' SR <br>Keterangan: '+lokasi[i][4]+'<br><a href="https://www.gojek.com/" target="_blank"> Lokasi </a> </div>');
			infodata.open(map, marker);
		}
		})(marker, i));
  }			
			// Load GeoJSON.
			var promise = $.getJSON("1.geojson"); //same as map.data.loadGeoJson();
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
				infoWindow.setContent('<div style="line-height:1.35;overflow:hidden;white-space:nowrap;"> Feature id = '+
											event.feature.getId() +"<br/>Kecamatan = " + event.feature.getProperty("Kecamatan") + "</div>");
				var anchor = new google.maps.MVCObject();
				anchor.set("position",event.latLng);
				infoWindow.open(map,anchor);
			});
		});
    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
    <div id="legend-container"><h3>Keterangan Kelompok</h3></div>
  </body>
</html>