<?php
$key = base64_decode($_GET[key]);
switch ($key) {
    case 1:
		$link = "algorithms/bubble_sort.php";
        break;
    case 2:
		$link = "algorithms/bubble_sort2.php";
        break;
    case 3:
		$link = "algorithms/quick_sort.php";
        break;
    case 4:
		$link = "algorithms/insertion_sort.php";
        break;
    case 5:
		$link = "algorithms/shell_sort.php";
        break;
    case 6:
		$link = "algorithms/selection_sort.php";
        break;
    case 7:
		$link = "algorithms/heap_sort.php";
        break;
    case 8:
		$link = "algorithms/merge_sort.php";
        break;
}
	highlight_file ($link); 
?>

