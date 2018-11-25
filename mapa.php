<!DOCTYPE html>
<html lang="en">
<head>
<title>PAGINA PRINCIPAL</title>
<link href="css/estilomenu.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilodatospersonales.css" rel="stylesheet" >
	<style>
		#map {
			height: 100%;
		}
		/* Optional: Makes the sample page fill the window. */
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
	</style>


</head>
<body>
<body>
<nav class="menu" style="text-align:center">
		
		<ul class="nav" style="text-align:center">
		   <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		    <li style="text-align:center"><a href="Inicio.php" id="menu">INICIO</a></li> 
			<li><a href="Torneo.php" id="menu" >TORNEO</a></li>
		    <li><a href="Amistoso.php" name="menu" id="menu">AMISTOSO</a></li>
		    <li><a href="mapa.php"  id="menu">MAPA</a></li>
			 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
			 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li>&nbsp;</li>
		  <li>&nbsp;</li>
		 <li>&nbsp;</li>
		 <li><a href="iniciosesion.php"  id="menu">INICIAR SESIÓN</a></li>
		 <li><a href="registrarse.php"  id="menu">REGISTRESE</a></li>
		  
		</ul>
</nav>

<br/>
<br/>
<div style="text-align:center;font-family:Calibri;"  >
<h1 style="font-size:60px">MAPA <img src="imagenes/balon.jpg" align="texttop" alt="balón" >
</h1>
</div>
<br/>
<br/>

<h1>CANCHA SINTETICA UBICATE EN EL MAPA</h1>

<br/>
<br/>
<div id="map"></div>
<script>
	var map;
	var canchas = [
		{"cancha":"Cedritos","coords":[4.723383160627924,-74.03301666242493]},
		{"cancha":"Toberin","coords":[4.7439326,-74.0394651]},
		{"cancha":"Estrella norte","coords":[4.7402684,-74.0441137]},
		{"cancha":"Verbenal","coords":[4.7644588,-74.0394328]},
		{"cancha":"Alameda 170","coords":[4.7551564,-74.0401558]},
		{"cancha":"Laches","coords":[4.5855376,-74.0663114]},
		{"cancha":"Miravalle","coords":[4.5163088,-74.1188803]},
		{"cancha":"Alfonso Lopez","coords":[4.5001026,-74.106711]},
		{"cancha":"Nuevo Usme","coords":[4.4708119,-74.1253358]},
		{"cancha":"Nuevo Milenio 1 y 2","coords":[4.5310778,-74.1176222]},
		{"cancha":"Tunjuelito","coords":[4.5594901,-74.1298075]},
		{"cancha":"Laguneta","coords":[4.5918861,-74.1446336]},
		{"cancha":"Carvajal","coords":[4.6164758,-74.1353125]},
		{"cancha":"Américas Occidental","coords":[4.6209366,-74.1390595]},
		{"cancha":"Primavera","coords":[4.6470521,-74.1649729]},
		{"cancha":"Modelia","coords":[4.6698807,-74.1204283]},
		{"cancha":"Villemar","coords":[4.6717704,-74.1394657]},
		{"cancha":"Carlos Lleras (El Fuego)","coords":[4.6585451,-74.1157078]},
		{"cancha":"Florencia","coords":[4.7005615,-74.1064963]},
		{"cancha":"Ciudadela Cafam","coords":[4.7476762,-74.103605]},
		{"cancha":"Berlin","coords":[4.7472325,-74.1171688]},
		{"cancha":"Burgos britalia 1 y 2","coords":[4.7449416,-74.0672931]},
		{"cancha":"Bilbao","coords":[4.7511883,-74.1221896]},
		{"cancha":"Tibabuyes 1 y 2","coords":[4.7349187,-74.1056779]},
		{"cancha":"Prado Pinzón","coords":[4.7261748,-74.0535675]},
		{"cancha":"Victoria Norte","coords":[4.7326135,-74.0557501]},
		{"cancha":"Valle de Refous","coords":[4.7482045,-74.0904121]},
		{"cancha":"Urb. Salitre (Greco)","coords":[4.6530163,-74.0998501]},
		{"cancha":"Pepita","coords":[4.6075577,-74.0915088]},
		{"cancha":"Luna Park","coords":[4.5838298,-74.0950341]},
		{"cancha":"Champion Primavera","coords":[4.6182116,-74.1085327]},
		{"cancha":"Pradera sur","coords":[4.6233963,-74.1235275]},
		{"cancha":"Marruecos","coords":[4.5559436,-74.1135254]},
		{"cancha":"Molinos","coords":[4.5545298,-74.1083748]},
		{"cancha":"Domingo Lain","coords":[4.5533085,-74.1414046]},
		{"cancha":"Arborizadora Alta","coords":[4.5656017,-74.1646274]},
		{"cancha":"Paraiso","coords":[4.5515142,-74.1628875]},
		{"cancha":"Balmora Guadalupe","coords":[4.5963117,-74.1644104]},		
		];

	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			
			center: new google.maps.LatLng(4.6570616, -74.0906563),
			mapTypeId: 'terrain',
			zoom: 11,
			styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      },
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative",
    "stylers": [
      {
        "saturation": -100
      },
      {
        "lightness": -20
      },
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "lightness": -55
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
			
		});

		mashCanchas(canchas);
	}

	function mashCanchas(results) {
	for (var i = 0; i < results.length; i++) {
		var coords = results[i].coords;
		var latLng = new google.maps.LatLng(coords[0], coords[1]);
        var imagen = {url: 'https://cdn0.iconfinder.com/data/icons/pixelo/32/soccer-ball.png',
          size: new google.maps.Size(32, 32),
        };

		var marker = new google.maps.Marker({
			position: latLng,
			map: map,
			label:results[i].cancha,
			icon: imagen,
			});
		}
	}



</script>
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTM5RKrtCLpZAj5HU3K3cTvFNB240NsBg&callback=initMap">
</script>
</body>
</html>