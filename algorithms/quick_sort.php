<div class="name"><p>Quick Sort</p></div>
<?php 
function quickSort( $array )
{
 $cur = 1;
 $stack[1]['l'] = 0;
 $stack[1]['r'] = count($array)-1;
 
 do 
 {
  $l = $stack[$cur]['l'];
  $r = $stack[$cur]['r'];
  $cur--;
 
  do
  {
   $i = $l;
   $j = $r;
   $tmp = $array[(int)( ($l+$r)/2 )];

   do
   {
    while( $array[$i] < $tmp )
     $i++;
 
    while( $tmp < $array[$j] ) 
     $j--;
 
    if( $i <= $j )
    {
     $w = $array[$i];
     $array[$i] = $array[$j];
     $array[$j] = $w;
 
     $i++;
     $j--;
    }
 
   }while( $i <= $j );
 
 
   if( $i < $r )
   {
    $cur++;
    $stack[$cur]['l'] = $i;
    $stack[$cur]['r'] = $r;
   }
   $r = $j;
 
  }while( $l < $r );
 
 }while( $cur != 0 );
 
 return $array;
}

include("../generator.php");
?>