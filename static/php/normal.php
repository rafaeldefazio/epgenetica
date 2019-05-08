
<?php

require_once("exercicio.php");


class Normal extends Exercicio{

	function __construct(){



		// "leis de formaçao"
		$this->m = rand(150, 800);
		$this->sigma = $this->arredondar($this->m / (rand(3,10)), 2);
		$this->lb = $this->m - $this->sigma;
		$this->ub = $this->m + $this->sigma;



		$this->x1 = $this->m + rand($this->arredondar(- rand(1,4)*$this->sigma/rand(1,3)), $this->arredondar(rand(1,3)*$this->sigma/rand(1,4))) + rand(1, 99)/100;

		$this->x2 = $this->m + rand($this->arredondar(- rand(1,4)*$this->sigma/rand(1,4)), $this->arredondar(rand(1,4)*$this->sigma/rand(1,4))) + rand(1, 99)/100;

		$this->x3 = $this->m + rand($this->arredondar(- rand(1,3)*$this->sigma/rand(1,3)), $this->arredondar(rand(1,3)*$this->sigma/rand(1,4))) + rand(1, 99)/100;

		$this->x4 = $this->m + rand($this->arredondar(- rand(1,3)*$this->sigma/rand(1,4)), $this->arredondar(rand(1,4)*$this->sigma/rand(1,4))) + rand(1, 99)/100;



		// transforma xiz em z
		$this->z1e = $this->arredondar($this->distNormalPadrao($this->calcularZ($this->x1)));
		$this->z1d = $this->arredondar(1 - $this->z1e);

		$this->z2e = $this->arredondar($this->distNormalPadrao($this->calcularZ($this->x2)));
		$this->z2d = $this->arredondar(1 - $this->z2e);

		$this->z3e = $this->arredondar($this->distNormalPadrao($this->calcularZ($this->x3)));
		$this->z3d = $this->arredondar(1 - $this->z3e);

		$this->z4e = $this->arredondar($this->distNormalPadrao($this->calcularZ($this->x4)));
		$this->z4d = $this->arredondar(1 - $this->z4e);



		/* teste

		echo "Media: " . $this->m;
		echo "<br/>";
		echo "Desvio Padrao: " . $this->sigma;
		echo "<br/>";
		echo "<br/>";
		echo "Valor do x1: " . $this->x1;
		echo "<br/>";
		echo "Valor do x2: " . $this->x2;
		echo "<br/>";
		echo "Valor do x3: " . $this->x3;
		echo "<br/>";
		echo "Valor do x4: " . $this->x4;
		echo "<br/>";echo "<br/>";

		


		echo "menores que x1:  " . $this->z1e; 
		echo "<br/>";
		echo "maiores que x1:  " . $this->z1d."<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "menores que x2:  " . $this->z2e; 
		echo "<br/>";
		echo "maiores que x2:  " . $this->z2d."<br/>";echo "<br/>";
		echo "<br/>";

		echo "menores que x3:  " . $this->z3e; 
		echo "<br/>";
		echo "maiores que x3:  " . $this->z3d."<br/>";


		echo "<br/>";
		echo "<br/>";
		echo "menores que x3:  " . $this->z4e; 
		echo "<br/>";
		echo "maiores que x3:  " . $this->z4d."<br/>";


		echo "<br/>";

		echo "Entre x3 e x4: " . $this->calcularEntre($this->z3e, $this->z4e);
		*/

	}


	function calcularEntre($x, $y){
		if ($x > $y){
			return $x-$y;
		} else{
			return $y-$x;
		}
	}

	// calcular z, para comparar com dist. norm. padrao

	function calcularZ($n){
		return ($n - $this->m)/($this->sigma);
	}


	// P (X < x), para menores ou iguais a x, na distribuição normal padrão

	function distNormalPadrao($x)
	{
	  $b1 =  0.319381530;
	  $b2 = -0.356563782;
	  $b3 =  1.781477937;
	  $b4 = -1.821255978;
	  $b5 =  1.330274429;
	  $p  =  0.2316419;
	  $c  =  0.39894228;

	  if($x >= 0.0) {
	      $t = 1.0 / ( 1.0 + $p * $x );
	      return (1.0 - $c * exp( -$x * $x / 2.0 ) * $t *
	      ( $t *( $t * ( $t * ( $t * $b5 + $b4 ) + $b3 ) + $b2 ) + $b1 ));
	  }
	  else {
	      $t = 1.0 / ( 1.0 - $p * $x );
	      return ( $c * exp( -$x * $x / 2.0 ) * $t *
	      ( $t *( $t * ( $t * ( $t * $b5 + $b4 ) + $b3 ) + $b2 ) + $b1 ));
	    }
	}

}

$normal = new Normal();


?>