<?php ini_set("default_charset", 'utf-8');require_once("static/php/hw.php");?>
<!DOCTYPE html>
<html lang="pt">
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
	<h3> Equilíbrio de Hardy-Weinberg.</h3>
        <p> Veja a explicação dos valores da tabela e observe as imagens abaixo para rever brevemente sobre equilíbrio de Hardy-Weinberg.   
        <ul><li>N: será a soma da coluna dos dados observados, ou seja a quantidade de indivíduos com esse genótipo;</li>
            <li>p: será o total de um alelo observado (A1, por exemplo) dividido por 2N;</li> 
            <li>q: será o total de um outro alelo observado (A2, por exemplo) dividido por 2N;</li> 
            <li>ESP: o valor esperada dos homozigotos será o valor de p ou q ao quadrado vezes N,<br> 
                e o valor para heterozigotos será 2 vezes p vezes q vezes N;</li> 
            <li>qui-2 parciais: será ESP menos OBS ao quadrado dividido pelo esperado, na imagem abaixo aparece como x²;</li> 
            <li>qui-2 total: será a soma de todos os qui-2 parciais, representado na imagem abaixo pela somatória;</li> 
        </ul>

            <div class="table-responsive">
            <table class="table">
	              <thead>
	                <tr>
	                <img src="HW.jpg" alt="Equilíbrio de Hardy-Weinberg" style="float:left;width:400px;height:300px";> 
	                </tr>
                     <tr>
	                <img src="chi2.gif" alt="chi-2" style="float:right;width:300px;height:200px";> 
	                </tr>
	              </thead>
            </table>
            </div>
        </p>
    
<p>Dados os números observados para os três genótipos, responder:</p>
<div class="table-responsive">
<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col" style="width=20&"></th>
	      <th scope="col" style="width=20&">Obs</th>
            <th scope="col" style="width=20&">Frequência OBS</th>
	      <th scope="col" style="width=20&">Frequência Esp</th>
		  <th scope="col" style="width=20&">Qui-2*</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row" style="width:16%">A1A1</th>
	      <td class="align-middle"><?php echo $hw->aa;?></td>
	      <td class="align-middle"><input type="number" id="" class="form-control form-control-sm answer" role="aa" placeholder="OBS A1A1"></td>
            <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="esp_aa" placeholder="Freq A1A1"></td>
		  <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="chi2_aa" placeholder="qui-2 A1A1"></td>
	    </tr>
	    <tr>
	      <th scope="row" style="width:16%">A1A2</th>
	      <td class="align-middle"><?php echo $hw->ab; ?></td>
	      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="ab" placeholder="OBS A1A2"></td>
          <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="esp_ab" placeholder="Freq A1A2"></td>
	      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="chi2_ab" placeholder="qui-2 A1A2"></td>
	    </tr>
	    <tr>
	      <th scope="row" style="width:16%">A2A2</th>
	      <td class="align-middle"><?php echo $hw->bb; ?></td>
	      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="bb" placeholder="OBS A2A2"></</td>
            <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="esp_bb" placeholder="Freq A2A2"></td>
	      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="chi2_bb" placeholder="qui-2 A2A2"></td>
	    </tr>
	    <tr>
	      <th scope="row" style="width:16%">n</th>
	      <td class="align-middle"><?php echo $hw->n; ?></td>
	      <td class="align-middle"></td>
	      <td class="align-middle"></td>
	    </tr>
       
      <tr>
      <th scope="row" style="width:16%">p</th>
      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="p" placeholder="p"></td>
	      <td class="align-middle"></td>
          <td class="align-middle">QUI-2*</td>
	      <td class="align-middle"><input type="number" id="chi2_total" class=" form-control form-control-sm answer" role="h0" placeholder="qui-2 Total"></td>
    </tr>
      <tr>
      <th scope="row" style="width:16%">q</th>
      <td class="align-middle"><input type="number" id="chi2_total" class="form-control form-control-sm answer" role="q" placeholder="q"></td></td>
	      <td class="align-middle"></td>
	      <td class="align-middle">Heterozigose Esp</td>
	      <td class="align-middle"><input type="number" id="heterozigose" class=" form-control form-control-sm answer" role="heterozigose" placeholder="Heterozigose"></td>
    </tr>
	  </tbody>
	</table>
</div>

* chi ou qui são corretos, mas qui é da língua portuguesa.<br><br>


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
			var chi2_aa = "<?php echo $hw->encriptar($hw->arredondar($hw->chi2_aa)); ?>";
			var chi2_ab = "<?php echo $hw->encriptar($hw->arredondar($hw->chi2_ab)); ?>";
			var chi2_bb = "<?php echo $hw->encriptar($hw->arredondar($hw->chi2_bb)); ?>";
			var p =  "<?php echo $hw->encriptar($hw->arredondar($hw->p)); ?>";
			var q = "<?php echo $hw->encriptar($hw->arredondar($hw->q)); ?>";
            var aa = "<?php echo $hw->encriptar($hw->aa); ?>";
            var ab = "<?php echo $hw->encriptar($hw->ab); ?>";
            var bb = "<?php echo $hw->encriptar($hw->bb); ?>";
            
            var esp_aa = "<?php echo $hw->encriptar($hw->arredondar($hw->esp_aa)); ?>";
            var esp_ab = "<?php echo $hw->encriptar($hw->arredondar($hw->esp_ab)); ?>";
            var esp_bb = "<?php echo $hw->encriptar($hw->arredondar($hw->esp_bb)); ?>";
            
            var heterozigose = "<?php echo $hw->encriptar($hw->arredondar($hw->heterozigose)); ?>";
                
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

