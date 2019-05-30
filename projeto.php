<?php ini_set("default_charset", 'utf-8'); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
<link rel="shortcut icon" href="favicon.ico" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>O Projeto</title>

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
	            <h1 style="text-transform: none !important;">O Projeto Epigen</h1>

			<img src="static/img/stock.jpg" class="img-fluid mt-4 mb-4" style="width:100%;max-height:300px;object-fit:cover;">

                <p class="mt-4" class="text-justify">Bem-vindo(a), estudante!<br/><br/> 
                    Este projeto faz parte das atividades realizadas na disciplina Epidemiologia Genética, ministrada no curso de Informática Biomédica da Universidade de São Paulo. Esperamos que aqui você consiga praticar exercícios de distribuição normal, distribuição binomial, equilíbrio de Hardy-Weinberg, e muitos outros apresentados em aula.
 		</p>
                
 	           <p class="text-justify">
                    O projeto é administrado pelo Prof. Dr. Agnaldo Luis Simões, que teve como foco a prática dos estudos realizados em aula, facilitando o aprendizado dos alunos da Disciplina de Epidemiologia Genética. A disciplina tem como foco o estudo dos fundamentos da hereditariedade, avaliando o efeito relativo da variabilidade genética humana sobre os fenótipos complexos em relação a outras fontes de variação genética, além de identificar os genes responsáveis por tais fenótipos.
                </p>
            
                <p class="text-justify"> 
                    A Informática Biomédica abrange Ciências Biológicas e da Computação, permitindo a crianção e o aperfeiçoamento de ferramentas computacionais voltadas para a área médica, como bioinformática, desenvolvimento e implantação de softwares para análise de exames laboratoriais, arquivamento de dados sobre os pacientes, entre outras soluções para a Saúde. 
                </p>

                <p class="text-justify"> Para mais informações sobre o curso Informática Biomedica acesse <a style="bolder; color:green;" href="http://cg.fmrp.usp.br/cursos/informatica-biomedica/" target="_blank">a página da IBm</a> no portal da Faculdade de Medicina de Ribeirão Preto.</p>
		</div>
    </div>
</div>

<?php include("static/pages/footer.php"); ?>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

