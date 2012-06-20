<div class="name"><p>Seleção Direta</p></div>
<?php
function selecaoDireta($array)
{
	$length = count($array);
	for ($i=0; $i < $length; $i++)
	{
		$menor = $i;
		for ($j = $i+1; $j < $length; $j++)
		{
			if ($array[$j] < $array[$menor])
				$menor= $j;
		}
		if ($menor != $i)
		{
			$aux = $array[$i];
			$array[$i] = $array[$menor];
			$array[$menor] = $aux;
		}
	}
	return ($array);
}

include("../generator.php");
?>