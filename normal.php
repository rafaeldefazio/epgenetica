<?php require_once("static/php/normal.php"); ?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

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

  		

    <div class="col mt-4 mb-4">

    	<h3 style="text-transform: none;" class="mb-4">Dados a média (&micro;) e o desvio padrão (&sigma;), calcule:</h3>

    	<div class="table-responsive">
<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">MÉDIA</th>
	      <th scope="col"><?php echo $normal->m; ?></th>
	    </tr>
	    <tr>
	      <th scope="col">DESVIO PADRÃO</th>
	      <th scope="col"><?php echo $normal->sigma; ?></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row"">x = <?php echo $normal->x1; ?></th>
	      <td>

	      	Probabilidade escolher indivíduo com valor menor que x1?<br/>
	      	<input type="number" id="x1" class="form-control form-control-sm answer" role="x1_menor" placeholder="X <= x">


	      	<br/>Probabilidade escolher indivíduo com valor maior que x1?<br/>
	      	<input type="number" id="x1" class="form-control form-control-sm answer" role="x1_maior	" placeholder="x >= X">

	      </td>
	    </tr>
	    <tr>
	      <th scope="row">x2 = <?php echo $normal->x2; ?></th>
	      <td>Probabilidade escolher indivíduo com valor menor que x2?<br/>
			      	<input type="number" id="x2" class="form-control form-control-sm answer" role="x2_menor" placeholder="X <= x2">
		<br/>
		Probabilidade escolher indivíduo com valor maior que x2?<br/>
	      	<input type="number" id="x2" class="form-control form-control-sm answer" role="x2_maior" placeholder="X <= x2">
	      
	    </tr>
	    <tr>
	      <th scope="row">x3 = <?php echo $normal->x3; ?><br/>x4 = <?php echo $normal->x4; ?></th>
	      <td>Probabilidade escolher indivíduo com valor entre x3 e x4?<br/>
	      	<input type="number" id="x3_x4" class="form-control form-control-sm answer" role="entre_x3_x4" placeholder="x3 <= X <= x4"></td>
	    </tr>
	    
	  </tbody>
	</table>
</div>




<h2  class="mt-4 mb-4">Gráficos</h2>
<div class="row">
    <div class="col-md-4" style="border-right: 1px dashed black;">
    	<h6 class="text-center mt-4 pb-4 pt-4" style="border-bottom: 1px dashed black;border-top: 1px dashed black;">x1</h6>
      <div id="graf_x1_menor" style="width: 400; height: 300px; margin: 0 auto;" class="mt-4"></div>
      <div id="graf_x1_maior" style="width: 400 !important; height: 300px; margin: 0 auto;"class="mt-4"></div>

    </div>
    <div class="col-md-4">
    	<h6 class="text-center mt-4 pb-4 pt-4" style="border-bottom: 1px dashed black;border-top: 1px dashed black;">x2</h6>
      <div id="graf_x2_menor" style="width: 400; height: 300px; margin: 0 auto;" class="mt-4"></div>
      <div id="graf_x2_maior" style="width: 400; height: 300px; margin: 0 auto;" class="mt-4"></div>
    </div>
    <div class="col-md-4" style="border-left: 1px dashed black;">
    	<h6 class="text-center mt-4 pb-4 pt-4" style="border-bottom: 1px dashed black;border-top: 1px dashed black;" class="mt-4">x3 e x4</h6>
      <div id="graf_entre_x3_x4" style="width: 400; height: 300px; margin: 0 auto;" class="mt-4"></div>
    </div>
  </div>

<br/><br/>


<div class="mt-4">
    		<h5>Para calcular Z:</h5>

    		<div class="text-center">

	    		<a class="mb-3" target="_blank" href="https://surfstat.anu.edu.au/surfstat-home/tables/normal.php">

	    			
	    		<img src="static/img/anu.png" width="100" style="background-color: #333;padding:10px;" >
	    	</a><br/><br/>

	    		<a class="mt-3" href="https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=z_score_table.z_table_calculator.z_table.z_score.zscore"><img src="static/img/z-score.png" width="80"/><img src="static/img/playstore.png" width="150"/></a>
	    	</div>
    	</div>
</div>

</div>
</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
		<script src="static/js/sha1.js"></script>
		<script src="static/js/exercicio.js"></script>
		<script src="static/js/normal.js"></script>

	<script type="text/javascript">

		x1_menor = "<?php echo $normal->encriptar($normal->z1e);?>";
		x1_maior = "<?php echo $normal->encriptar($normal->z1d);?>";

		x2_menor = "<?php echo $normal->encriptar($normal->z2e);?>";
		x2_maior = "<?php echo $normal->encriptar($normal->z2d);?>";

		entre_x3_x4 = "<?php echo $normal->encriptar($normal->calcularEntre($normal->z3e, $normal->z4e)); ?>";


		lb = <?php echo $normal->lb; ?>;
		ub = <?php echo $normal->ub; ?>;
		x1 = <?php echo $normal->x1; ?>;
		x2 = <?php echo $normal->x2; ?>;


		z1 = <?php echo $normal->z1e; ?>;

		gerarGrafNormal("graf_x1_menor", <?php echo $normal->lb; ?>, <?php echo $normal->ub; ?>, <?php echo $normal->x1; ?>, gtype=1);
		gerarGrafNormal("graf_x1_maior", <?php echo $normal->lb; ?>, <?php echo $normal->ub; ?>, <?php echo $normal->x1; ?>, gtype=2);
		gerarGrafNormal("graf_x2_menor", <?php echo $normal->lb; ?>, <?php echo $normal->ub; ?>, <?php echo $normal->x2; ?>, gtype=1);
		gerarGrafNormal("graf_x2_maior", <?php echo $normal->lb; ?>, <?php echo $normal->ub; ?>, <?php echo $normal->x2; ?>, gtype=2);
		gerarGrafNormal("graf_entre_x3_x4", <?php echo $normal->lb; ?>, <?php echo $normal->ub; ?>, <?php echo $normal->x3; ?>, gtype=3, <?php echo $normal->x4; ?>);


	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

