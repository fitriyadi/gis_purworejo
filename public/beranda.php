    <!--==========================
     Peta
     ============================-->
     <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Peta Kabupaten Purworejo</h2>
          <p>Kabupaten Purworejo dalah sebuah kabupaten di Provinsi Jawa Tengah. Ibu kota berada di kota Purworejo. Kabupaten ini berbatasan dengan Kabupaten Wonosobo dan Kabupaten Magelang di utara, Kabupaten Kulon Progo (Provinsi Daerah Istimewa Yogyakarta di timur), Samudra Hindia di selatan, serta Kabupaten Kebumen di sebelah barat.</p>
        </div>
      </div>
    </div>

    <div class="container mb-12">
     <div id="map" style="width:100%;height:550px;">
     </div> 
   </div>
 </section>

 <script>
  function initMap() {
    var infowindow = new google.maps.InfoWindow();
    var mapOptions = {
     center:new google.maps.LatLng(-8.583333, 117.516667), 
     zoom:8.5,
     mapTypeId:google.maps.MapTypeId.ROADMAP
   };

   var map = new google.maps.Map(document.getElementById("map"),mapOptions);

   map.data.loadGeoJson('../json/Kabupaten Lombok Utara.geojson');
   map.data.loadGeoJson('../json/Kabupaten Lombok Barat.geojson');
   map.data.loadGeoJson('../json/Kabupaten Lombok Tengah.geojson');
   map.data.loadGeoJson('../json/Kabupaten Lombok Timur.geojson');
   map.data.loadGeoJson('../json/Kabupaten Sumbawa.geojson');
   map.data.loadGeoJson('../json/Kabupaten Dompu.geojson');
   map.data.loadGeoJson('../json/Kabupaten Bima.geojson');
   map.data.loadGeoJson('../json/Kabupaten Sumbawa Barat.geojson');
   map.data.loadGeoJson('../json/Kota Mataram.geojson');
   map.data.loadGeoJson('../json/Kota Bima.geojson');

   map.data.setStyle(function(feature) {
    return {
      fillColor: '#000000',
      strokeColor: '#000000',
      strokeWeight: 1
    };
  });

   map.data.addListener('mouseover', function(event) {
    map.data.revertStyle();
    map.data.overrideStyle(event.feature, {strokeWeight: 3});
  });

   map.data.addListener('mouseout', function(event) {
    map.data.revertStyle();
  });


   map.data.addListener('click', function(event) {
    var feature = event.feature
    var html = '<span><b>' + event.feature.getProperty('KABKOT') + '</b></span>'

    infowindow.setContent(html)
    infowindow.setPosition(event.latLng)
    infowindow.open(map)
  })

 }
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDWfzKm2hI-mFjdQdHqRzMDFc5svKXBwUg&callback=initMap">
</script> 