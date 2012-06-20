<div class="name"><p>Shell Sort</p></div>
<?php
function shellSort($elements)
{
	$length = count($elements);
	$k=0;
	$gap[0]=(int) ($length / 2);
	while($gap[$k]>1)
	{
		$k++;
		$gap[$k]=(int)($gap[$k-1]/2);
	}
	for($i=0;$i<=$k;$i++)
	{
		$step=$gap[$i];
		for($j=$step;$j<$length;$j++)
		{
			$temp=$elements[$j];
			$p=$j-$step;
			while($p>=0 && $temp<$elements[$p])
			{
				$elements[$p+$step]=$elements[$p];
				$p=$p-$step;
			}
			$elements[$p+$step]=$temp;
		}
	}
	return $elements;
}

include("../generator.php");
?>