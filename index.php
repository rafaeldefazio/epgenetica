<?php ini_set("default_charset", 'utf-8'); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
<link rel="shortcut icon" href="favicon.ico" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Epigen</title>

<link rel="stylesheet" href="static/css/bootstrap.css" >

<style type="text/css">

  td input[type=number]{
    height: 3em;
    font-size: 1rem;
  }

  
  
</style>

</head>
<body>


<?php include("static/pages/menu.php") ?>

<div class="container">

<div class="row justify-content-center">
	
<div class="col mt-4">
	 <h1 class="align-middle text-center" >
		Sejam bem-vindo ao <span>Epigen</span>!
	</h1>
	<h1 class="lead text-center">Estude a qualquer hora, em qualquer lugar.</h1>
    <p class="mt-4 text-center lead mb
-4">Nesse espaço você aprende praticando.<br> Nas outras abas você resolve os exercícios e aprende.</p>
		

</div>
</div>
<div id="particles-js"></div>
</div>



<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">


  particlesJS("particles-js", {
"particles": {
  "number": {
    "value": 80,
    "density": {
      "enable": true,
      "value_area": 800
    }
  },
  "color": {
    "value": ["#c0392b","#2980b9","#2c3e50","#f39c12","#bdc3c7"]
  },
  "shape": {
    "type": "circle",
    "stroke": {
      "width": 0,
      "color": "#b6b2b2"
    }
  },
  "opacity": {
    "value": 0.5211089197812949,
    "random": true,
    "anim": {
      "enable": true,
      "speed": 1,
      "opacity_min": 0.1,
      "sync": false
    }
  },
  "size": {
    "value": 10.017060304327615,
    "random": true,
    "anim": {
      "enable": true,
      "speed": 12.181158184520175,
      "size_min": 0.1,
      "sync": true
    }
  },
  "line_linked": {
    "enable": true,
    "distance": 150,
    "color": "#95a5a6",
    "opacity": 0.4,
    "width": 1
  },
  "move": {
    "enable": true,
    "speed": 1,
    "direction": "none",
    "random": false,
    "straight": false,
    "out_mode": "bounce",
    "bounce": false,
    "attract": {
      "enable": false,
      "rotateX": 600,
      "rotateY": 1200
    }
  }
},
"interactivity": {
  "detect_on": "canvas",
  "events": {
    "onhover": {
      "enable": false,
      "mode": "repulse"
    },
    "onclick": {
      "enable": true,
      "mode": "push"
    },
    "resize": true
  },
  "modes": {
    "grab": {
      "distance": 400,
      "line_linked": {
        "opacity": 1
      }
    },
    "bubble": {
      "distance": 400,
      "size": 40,
      "duration": 2,
      "opacity": 8,
      "speed": 3
    },
    "repulse": {
      "distance": 200,
      "duration": 0.4
    },
    "push": {
      "particles_nb": 4
    },
    "remove": {
      "particles_nb": 2
    }
  }
},
"retina_detect": true
});
</script>
</body>
</html>


