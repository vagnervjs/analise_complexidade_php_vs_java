<div class="name"><p>Bubble Sort</p></div>
<?php
function bubbleSort( &$items ) {
    $temp = "";
    $size = count( $items );
    for( $i = 1; $i < $size; $i++ ) {
         for( $j = 0; $j < $size - $i; $j++ ) {
              if( $items[$j+1] < $items[$j] ) {
                   $temp = $items[$j];
                   $items[$j] = $items[$j+1];
                   $items[$j+1] = $temp;
              }
         }
    }
}

include("../generator.php");
?>