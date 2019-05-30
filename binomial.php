	<?php ini_set("default_charset", 'utf-8');
	require_once("static/php/binomial.php");
	$binomial = new Binomial;?>
	<!DOCTYPE html>
	<html lang="pt">

	<head>
		<link rel="shortcut icon" href="favicon.ico" />
		<meta charset="UTF-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Exercício - Distribuição Binomial</title>

		<link rel="stylesheet" href="static/css/bootstrap.css">

		<style type="text/css">
			td input[type=number] {
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

					<h3 style="text-transform: none;" class="mb-4">Distribuição Binomial</h3>
                    <p>Primeiro faremos uma breve revisão sobre distribuição binomial para que você consiga resolver o exercício proposto.</p>
                      <p> A notação para identificar uma distribuição binomial é, <strong>X~B(n;p)</strong>, onde n e p são parâmetros da distribuição.
                       p e q são as variáveis que representam o sucesso ou fracasso, respectivamente.                       O X é uma variável aleatória discreta que indicará o número de sucessos.<br>
                       O número médio esperado de p(sucesso) é n vezes p, com um desvio padrão calculado por raiz quadrada de n vezes p vezes q.<br>
                       As fórmulas para determinar os valores estão ilustradas abaixo, observe: <br />

                       <img src="binomial.png" alt="fórmulas binomial" class="img-fluid"> 
						  </p>
						  <p>Nesse sistema, você terá a correção automática do seu exercício. Enquanto a lacuna de preenchimento estiver vermelha, você deve continuar tentando acertar. Quando a lacuna ficar verde, você acertou! </p>
							<p>Não se esqueça: é necessário o preenchimento de 4 casas decimais. Caso a quinta casa decimal seja maior que 5, você deve arredondar o seu resultado para cima. </p>
							<p>Bons estudos!</p>
	            </div>

					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Dados</th>
									<th scope="col">Exercícios</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>p </td>
									<td><?php echo $binomial->p; ?></td>
								</tr>
								<tr>
									<td>tamanho da população </td>
									<td><?php echo $binomial->n; ?></td>
								</tr>
								<tr>
									<td>x</td>
									<td><?php echo $binomial->x; ?></td>
								</tr>
								<tr>
								<tr>
								<td>Probabilidade de X=x eventos ocorrer:</td>
								<td><input type="number" step="1" id="probIgual" class="form-control form-control-sm answer" role="probIgual" placeholder="probabilidade de X=x..."></td>
								</tr>

								<tr>
									<td>Probabilidade de X&#8804;x eventos ocorrer:</td>
									<td><input type="number" step="1" id="probIgualMenor" class="form-control form-control-sm answer" role="probIgualMenor" placeholder="probabilidade de X&#8804;x..."></td>
								</tr>

								<tr>
									<td>Probabilidade de X&#60;x eventos ocorrer:</td>
									<td><input type="number" step="1" id="probMenor" class="form-control form-control-sm answer" role="probMenor" placeholder="probabilidade de X&#60;x..."></td>
								</tr>

								<tr>
									<td>Probabilidade de X&#8805;x eventos ocorrer:</td>
									<td><input type="number" step="1" id="probIgualMaior" class="form-control form-control-sm answer" role="probIgualMaior" placeholder="probabilidade de X&#8805;x..."></td>
								</tr>

								<tr>
									<td>Probabilidade de X&#62;x eventos ocorrer:</td>
									<td><input type="number" step="1" id="probMaior" class="form-control form-control-sm answer" role="probMaior" placeholder="probabilidade de X&#62;x..."></td>
								</tr>



							</tbody>
						</table>
					</div>
					<br />

				</div>
			</div>
		</div>

		<?php include("static/pages/footer.php"); ?>



		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
		<script src="static/js/sha1.js"></script>
		<script src="static/js/exercicio.js"></script>
		

		<script type="text/javascript">
		
	

		p = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->p));?>";
		n = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->n));?>";
		x = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->x));?>";
		q = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->q));?>";
		probIgual = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->probIgual($binomial->p, $binomial->q, $binomial->n, $binomial->x)));?>";
		probIgualMaior = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->probIgualMaior($binomial->p, $binomial->q, $binomial->n, $binomial->x)));?>";
		probMaior = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->probMaior($binomial->p, $binomial->q, $binomial->n, $binomial->x)));?>";
		probIgualMenor = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->probIgualMenor($binomial->p, $binomial->q, $binomial->n, $binomial->x)));?>";
		probMenor = "<?php echo $binomial->encriptar($binomial->arredondar($binomial->probMenor($binomial->p, $binomial->q, $binomial->n, $binomial->x)));?>";
                
         


		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>

	</html>
