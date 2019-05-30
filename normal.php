	<?php ini_set("default_charset", 'utf-8');require_once("static/php/normal.php"); $normal = new Normal(); ?>
	<!DOCTYPE html>
	<html lang="pt">
	<head>
		<link rel="shortcut icon" href="favicon.ico" />
		<meta charset="UTF-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Exercício - Distribuição Normal</title>

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
		      <th scope="row">x = <?php echo $normal->x1; ?></th>
		      <td>

		      	Probabilidade escolher indivíduo com valor menor que x1?<br/>
		      	<input type="number" step="0.0001" id="x1" class="form-control form-control-sm answer" role="x1_menor" placeholder="X <= x">


		      	<br/>Probabilidade escolher indivíduo com valor maior que x1?<br/>
		      	<input type="number" step="0.0001" id="x1" class="form-control form-control-sm answer" role="x1_maior	" placeholder="x >= X">

		      </td>
		    </tr>
		    <tr>
		      <th scope="row">x2 = <?php echo $normal->x2; ?></th>
		      <td>Probabilidade escolher indivíduo com valor menor que x2?<br/>
				      	<input type="number" step="0.0001" id="x2" class="form-control form-control-sm answer" role="x2_menor" placeholder="X <= x2">
			<br/>
			Probabilidade escolher indivíduo com valor maior que x2?<br/>
		      	<input type="number" step="0.0001" id="x2" class="form-control form-control-sm answer" role="x2_maior" placeholder="X <= x2">
		      
		    </tr>
		    <tr>
		      <th scope="row">x3 = <?php echo $normal->x3; ?><br/>x4 = <?php echo $normal->x4; ?></th>
		      <td>Probabilidade escolher indivíduo com valor entre x3 e x4?<br/>
		      	<input type="number" step="0.0001" id="x3_x4" class="form-control form-control-sm answer" role="entre_x3_x4" placeholder="x3 <= X <= x4"></td>
		    </tr>
		    
		  </tbody>
		</table>
	</div>


		<br/>

<div class="mt-4 mb-4">
                        <h2>Calculadora de %</h2>



                                <form>
                                  <div class="form-group mt-4">
                                    <label for="calcularP">Valor de porcentagem:</label>
                                    <input type="number" step="0.0001" class="form-control" id="calcularZ" aria-describedby="calcularP" placeholder="Insira Z">
                                    <small id="emailHelp" class="form-text text-muted">Será calculada àrea da cauda esquerda da função.</small>
                                  </div>
				<div class="text-center">
                                  <button type="button" class="btn btn-outline-primary btn-lg center" id="calcular">Calcular</button>
				</div>
                                  <input type="number" step="0.0001" class="form-control mt-4" id="resultadoP" aria-describedby="resultadoP" placeholder="Probabilidade (cauda esquerda)" readonly/>        
				 </form>

                </div>
		<br/>


	<h2 class="mt-4 mb-4">Gráficos</h2>
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


	</div>

	</div>
	</div>


	<?php include("static/pages/footer.php"); ?>



		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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




			$("button#calcular").click(function() {

				val = $("input#calcularZ").val();

					$.ajax({
			           type: "POST",
			           url: 'static/php/calcular_p.php',
			           data:{n: val},
			           success:function(p) {
			             $("input#resultadoP").val(p);
			           }

			      });  

			});


			/*
		    function confirmExit() {
		        return "Ao sair, as informações inseridas serão apagadas e serão gerados outros números. Sair mesmo assim?";
		    }

		    window.onbeforeunload = confirmExit;
	*/

		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>

