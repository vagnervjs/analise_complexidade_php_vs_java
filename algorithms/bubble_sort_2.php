<div class="name"><p>Bubble Sort Melhorado</p></div>
<?php
function bubbleSort2( &$items )
{
    $temp = "";
    $size = count( $items );
    $troca = 1;
    for($j = $size-1; ($j>=1) && ($troca==1); $j--) 
        {
                $troca=0;
                 for($i=0; $i<$j; $i++)
                {
                        if($items[$i]>$items[$i+1])
                        {
                                $temp = $items[$i];
                                $items[$i] = $items[$i+1];
                                $items[$i+1] = $temp;
                                $troca = 1;
                        }
                }
         }
}

include("../generator.php");
?>