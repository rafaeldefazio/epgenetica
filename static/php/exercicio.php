<?php

class Exercicio{

	function arredondar($n, $c=4){
		return number_format(round($n, $c), $c);
	}

	function encriptar($n){
		return sha1($n);
	}
	
}