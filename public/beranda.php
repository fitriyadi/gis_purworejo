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
     center: {lat: -7.69688, lng:  109.927956},
     zoom:11,
     mapTypeId:google.maps.MapTypeId.ROADMAP
   };

   var map = new google.maps.Map(document.getElementById("map"),mapOptions);

   map.data.loadGeoJson('../_file/1.geojson');

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
    var html = '<span>Kecamatan : <b>' + event.feature.getProperty('Kecamatan') + '</b></span>'

    infowindow.setContent(html)
    infowindow.setPosition(event.latLng)
    infowindow.open(map)
  })

 }
</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDDK8zBMsEKwbX1n795e-MsGKqqrfnWU70&libraries=drawing&geometry&callback=initMap"></script>