<?php

require_once("exercicio.php");

class Binomial extends Exercicio
{
    

	function __construct()
	{


		$this->p = rand(1, 9) / 10;
		$this->q = 1 - $this->p;

		$this->n = rand(10, 30);
		$this->x = rand(1, $this->n);
		

	}


	function probIgual($p, $q, $n, $x){
		return $this->combination($n, $x) * pow($p,$x) * pow($q,($n - $x));
	}

	function probIgualMenor($p, $q, $n, $x){
		$total = 0;
		$i = $x;

		while ($i >= 0){
			$total += $this->probIgual($p, $q, $n, $i);
			$i--;
		}

		return $total;

	}

	function probMenor($p, $q, $n, $x){
		$total = 0;
		$i = $x-1;

		while ($i >= 0){
			$total += $this->probIgual($p, $q, $n, $i);
			$i--;
		}

		return $total;

	}

	function probIgualMaior($p, $q, $n, $x){
		$total = 0;
		$i = $x;

		while ($i <= $n){
			$total += $this->probIgual($p, $q, $n, $i);
			$i++;
		}

		return $total;

	}

	function probMaior($p, $q, $n, $x){
		$total = 0;
		$i = $x+1;

		while ($i <= $n){
			$total += $this->probIgual($p, $q, $n, $i);
			$i++;
		}

		return $total;

	}

	function combination($n, $p){
		return ($this->fatorial($n) / ($this->fatorial($p) * $this->fatorial($n-$p)));
	}


	function fatorial($n){ 
	    if($n <= 1){   
	        return 1;   
	    }  
	    else{   
	        return $n * $this->fatorial($n - 1);   
	    }   
	} 

}


?>

