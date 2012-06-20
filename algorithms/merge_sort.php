<div class="name"><p>Merge Sort</p></div>
<?php
function merge(&$lF, &$rF)
{
	$result = array();
	while (count($lF)>0 && count($rF)>0) 
	{
		if ($lF[0] <= $rF[0])
		{
			array_push($result, array_shift($lF));
		}
		else {
			array_push($result, array_shift($rF));
		}
	}
	array_splice($result, count($result), 0, $lF);
	array_splice($result, count($result), 0, $rF);
	return $result;
}

function mergeSort(&$array)
{
	if (sizeof($array) <= 1)
		return $array;
    $leftFrag = array_slice($array, 0, (int)(count($array)/2));
    $rightFrag = array_slice($array, (int)(count($array)/2));
    $leftFrag = mergeSort($leftFrag);
    $rightFrag = mergeSort($rightFrag);
    $returnArray = merge($leftFrag, $rightFrag);
    return $returnArray;
}

include("../generator.php");
?>