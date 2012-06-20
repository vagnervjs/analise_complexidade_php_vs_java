<div class="name"><p>Insertion Sort</p></div>
<?php 
function insertionSort($array)
{
	for($i = 1; $i < count($array); $i++)
	{
		$copiado = $array[$i];
		$j = $i;

		while (($j > 0 ) && ($copiado < $array[$j-1]))
		{
			$array[$j] = $array[$j-1];
			$j--;
		}
		$array[$j] = $copiado;
	}
	return ($array);
}

include("../generator.php");
?>