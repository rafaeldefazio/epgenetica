<?php require_once("static/php/hw.php"); ?>
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

		.table tr , .tableth {
		
	</style>

</head>
<body>

<?php include("static/pages/menu.php") ?>



	<div class="container">

  <div class="row justify-content-center">

  		

    <div class="col mt-4">

<div class="table-responsive">
<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">A1</th>
	      <th scope="col">Esp</th>
	      <th scope="col">d</th>
	      <th scope="col">d²</th>
	      <th scope="col">d²/Esp</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row" style="width:16%">A1A1</th>
	      <td class="align-middle"><?php echo $hw->aa;?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->esp_aa); ?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->d_aa); ?></td>
	      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="d2_aa" placeholder="d² A1A1"></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->chi2_aa); ?></td>
	    </tr>
	    <tr>
	      <th scope="row" style="width:16%">A1A2</th>
	      <td class="align-middle"><?php echo $hw->ab; ?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->esp_ab); ?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->d_ab); ?></td>
	      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="d2_ab" placeholder="d² A1A2"></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->chi2_ab); ?></td>
	    </tr>
	    <tr>
	      <th scope="row" style="width:16%">A2A2</th>
	      <td class="align-middle"><?php echo $hw->bb; ?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->esp_bb); ?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->d_bb); ?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->d2_bb); ?></td>
	      <td class="align-middle"><?php echo $hw->arredondar($hw->chi2_bb); ?></td>
	    </tr>
	    <tr>
	      <th scope="row" style="width:16%">n</th>
	      <td class="align-middle"><?php echo $hw->n; ?></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	    </tr>
       <tr>
      <th scope="row" style="width:16%">2n</th>
      <td class="align-middle"><?php echo $hw->n2; ?></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="h0" placeholder="Chi 2 total"></td>
    </tr>
      <tr>
      <th scope="row" style="width:16%">p</th>
      <td class="align-middle"><?php echo $hw->arredondar($hw->p); ?></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
    </tr>
      <tr>
      <th scope="row" style="width:16%">q</th>
      <td class="align-middle"><?php echo $hw->arredondar($hw->q); ?></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
    </tr>
	  </tbody>
	</table>
</div>


<h3>H0 foi aceita ou rejeitada? (Chi-2 crítico = <?php echo $hw->hc;?>)? <?php echo $hw->h0; ?></h3>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="h0aceita" name="testeh0" class="custom-control-input" value="1">
  <label class="custom-control-label" for="h0aceita">Aceita</label>
</div>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="h0rejeitada" name="testeh0" class="custom-control-input" value="0">
  <label class="custom-control-label" for="h0rejeitada">Rejeitada</label>
</div>

</div>
</div>
</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script src="static/js/sha1.js"></script>
		<script src="static/js/exercicio.js"></script>
		<script type="text/javascript">
			var h0 = "<?php echo $hw->encriptar($hw->arredondar($hw->chi2_total)); ?>";
			var d2_aa = "<?php echo $hw->encriptar($hw->arredondar($hw->d2_aa)); ?>";
			var d2_ab = "<?php echo $hw->encriptar($hw->arredondar($hw->d2_ab)); ?>";

			$("input[name=testeh0]").on( "click", function() {
				  if($(this).attr("value") == <?php echo $hw->h0 ?>)
				  	alert("acertou");
				  else
				  	alert("errou");
			});
		</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

