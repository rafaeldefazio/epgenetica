
<?php

require_once("exercicio.php");

class HW extends Exercicio{

	/*
	private
	$aa, $ab, $bb, //a1a1, a1a2 e a2a2
	$n, $n2, //n e 2n
	$p, $q, //p e q
	$esp_aa, $esp_ab, $esp_bb, //esperados de tds
	$d_aa, $d_ab, $d_bb, // d de todos (obs-esp)
	$d2_aa, $d2_ab, $d2_bb, // d² de todos
	$chi2_aa, $chi2_ab, $chi2_bb, $chi2_total, //chi2 parcial
	$h0, $hc; //chi2 total e h crítico
	*/


	function __construct(){

		$this->hc = 3.84;

		// randomizando a1a1, a1a2 e a2a2
		$this->aa = rand(25, 50);
		$this->ab = rand(50, 100);
		$this->bb = rand(25, 50);

		$this->n = $this->aa + $this->ab + $this->bb;
		$this->n2 = $this->n * 2;

		$this->p = $this->arredondar(((2 * $this->aa) + ($this->ab))/$this->n2);
		$this->q = $this->arredondar(1 - $this->p);

		$this->esp_aa = $this->arredondar(pow($this->p, 2)* $this->n);
		$this->esp_ab = $this->arredondar(2 *$this->p * $this->q * $this->n);
		$this->esp_bb = $this->arredondar(pow($this->q, 2) * $this->n);

		$this->d_aa =  $this->arredondar($this->aa - $this->esp_aa);
		$this->d_ab =  $this->arredondar($this->ab - $this->esp_ab);
		$this->d_bb =  $this->arredondar($this->bb - $this->esp_bb);

		$this->d2_aa = $this->arredondar(pow($this->d_aa, 2));
		$this->d2_ab = $this->arredondar(pow($this->d_ab, 2));
		$this->d2_bb = $this->arredondar(pow($this->d_bb, 2));

		$this->chi2_aa = $this->arredondar($this->d2_aa/$this->esp_aa);
		$this->chi2_ab = $this->arredondar($this->d2_ab/$this->esp_ab);
		$this->chi2_bb = $this->arredondar($this->d2_bb/$this->esp_bb);

		$this->chi2_total = $this->arredondar($this->chi2_aa + $this->chi2_ab + $this->chi2_bb);

		$this->heterozigose = $this->arredondar(2 *$this->n* $this->arredondar($this->p) * $this->arredondar($this->q));

		 if (floatval($this->chi2_total) > floatval($this->hc))
		 	$this->h0 = 0;
		 else
		 	$this->h0 = 1;

/*
		echo "<b>A1A1:</b> " . $this->aa . "<br/>";
		echo "<b>A1A2:</b> " . $this->ab . "<br/>";
		echo "<b>A2A2:</b> " . $this->bb . "<br/><br/>";
		echo "<b>n:</b> " . $this->n . "<br/>";
		echo "<b>2n:</b> " . $this->n2 . "<br/><br/>";
		echo "<b>p:</b> " . $this->p . "<br/>";
		echo "<b>q:</b> " . $this->q . "<br/><br/>";
		echo "<b>Esp A1A1:</b> " . $this->esp_aa . "<br/>";
		echo "<b>Esp A1A2:</b> " . $this->esp_ab . "<br/>";
		echo "<b>Esp A2A2:</b> " . $this->esp_bb . "<br/><br/>";
		echo "<b>Obs-Esp A1A1 (d):</b> " . $this->d_aa . "<br/>";
		echo "<b>Obs-Esp A1A2 (d):</b> " . $this->d_ab . "<br/>";
		echo "<b>Obs-Esp A2A2 (d):</b> " . $this->d_bb . "<br/><br/>";
		echo "<b>(d)² A1A1:</b> " . $this->d2_aa . "<br/>";
		echo "<b>(d)² A1A2:</b> " . $this->d2_ab . "<br/>";
		echo "<b>(d)² A2A2:</b> " . $this->d2_bb . "<br/><br/>";
		echo "<b>(X)² A1A1:</b> " . $this->chi2_aa . "<br/>";
		echo "<b>(X)² A1A2:</b> " . $this->chi2_ab . "<br/>";
		echo "<b>(X)² A2A2:</b> " . $this->chi2_bb . "<br/>";
		echo "<b>(X)² Total:</b> " . $this->chi2_total . "<br/><br/>";
		echo "<b>(X)² Arredondado:</b> " . $this->arredondar($this->chi2_total) . "<br/><br/>";
		echo "<b>H0 rejeitada?</b> " . $this->h0 . "<br/>";
*/

	}
}

$hw = new HW();
?>
