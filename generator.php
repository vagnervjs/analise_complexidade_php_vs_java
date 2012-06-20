<?php
include("../microtime.php");

//PHP Server Configurations
ini_set("memory_limit","10000000000000256M");
ini_set('max_execution_time','100000');
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

$func = $_GET["algorithm"];

function choiceAlgorithm($algorithm, &$array){
	unset($time_end);
	unset($time_start);

	if ($algorithm == 1){
		$time_start = microtime_float();
		bubbleSort($array);
		$time_end = microtime_float();
	}
	if ($algorithm == 2){
		$time_start = microtime_float();
		bubbleSort2($array);
		$time_end = microtime_float();
	}
	if ($algorithm == 3){
		$time_start = microtime_float();
		quickSort($array);
		$time_end = microtime_float();
	}

	if ($algorithm == 4){
		$time_start = microtime_float();
		insertionSort($array);
		$time_end = microtime_float();
	}

	if ($algorithm == 5){
		$time_start = microtime_float();
		shellSort($array);
		$time_end = microtime_float();
	}

	if ($algorithm == 6){
		$time_start = microtime_float();
		selecaoDireta($array);
		$time_end = microtime_float();
	}

	if ($algorithm == 7){
		$time_start = microtime_float();
		heapSort($array);
		$time_end = microtime_float();
	}

	if ($algorithm == 8){
		$time_start = microtime_float();
		mergeSort($array);
		$time_end = microtime_float();
	}

	$tempo = $time_end - $time_start;
	$tempo = number_format($tempo, 4);

	return $tempo*10;
}

?>
<div id="results">
<?php
$i = 500;		//quantidade inicial
$k = 500;		//quantidade a somar por intervalo
$l = 6;			//quantidade de intervalos
$max = $k*$l;	//quantidade maxima de elementos

for ($j=0; $j <= $l; $j++) {
	if ($i <= $max){
		$total_elem[$j] = $i;
		$vet[$j] = range(1, $i);

		//--------------- Ordenado ---------------//
			$time1[$j] = choiceAlgorithm($func, $vet[$j]);

		//--------------- Desordenado ---------------//
		shuffle($vet[$j]);
		$time2[$j] = choiceAlgorithm($func, $vet[$j]);

		//--------------- Ordenado Decrescente ---------------//
			rsort($vet[$j]);
			$time3[$j] = choiceAlgorithm($func, $vet[$j]);

		$i = $i + $k;
	}
}
include('table.php');
include('grafics.php');
?>
	<div class="topicos">
		<li>Algoritmo</li>
	</div>
	<a onclick="window.open('code.php?key=<?php echo base64_encode($func); ?>','janela','toolbar=no,location=no, directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,menubar=no,width=500,height=600' );">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ver código</a>
</div>