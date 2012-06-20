<div class="topicos">
	<li>Gráficos</li>
</div>
<div id="graph">

<?php
require ('GChart/gChart.php');

echo "Entrada Ascendente</br>";
$barChart = new gBarChart(500,200,'g');
$barChart->addDataSet(array($time1[0]*1000));
$barChart->addDataSet(array($time1[1]*1000));
$barChart->addDataSet(array($time1[2]*1000));
$barChart->addDataSet(array($time1[3]*1000));
$barChart->addDataSet(array($time1[4]*1000));
$barChart->addDataSet(array($time1[5]*1000));
$barChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa", "ffa500"));
$barChart->setLegend(array("5000 Elementos", "10000 Elementos", "15000 Elementos", "20000 Elementos", "25000 Elementos", "30000 Elementos"));
$barChart->setGradientFill('c',0,array('FFFFFF',0,'76A4FB',1));
$barChart->setAutoBarWidth();
?>
<img src="<?php print $barChart->getUrl();  ?>" /> 

<?php
echo "</br></br>Entrada Aleatória</br>";
$barChart = new gBarChart(500,200,'g');
$barChart->addDataSet(array($time2[0]*1000));
$barChart->addDataSet(array($time2[1]*1000));
$barChart->addDataSet(array($time2[2]*1000));
$barChart->addDataSet(array($time2[3]*1000));
$barChart->addDataSet(array($time2[4]*1000));
$barChart->addDataSet(array($time2[5]*1000));
$barChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa", "ffa500"));
$barChart->setLegend(array("5000 Elementos", "10000 Elementos", "15000 Elementos", "20000 Elementos", "25000 Elementos", "30000 Elementos"));
$barChart->setGradientFill('c',0,array('FFFFFF',0,'76A4FB',1));
$barChart->setAutoBarWidth();
?>
<img src="<?php print $barChart->getUrl();  ?>" /> 

<?php
echo "</br></br>Entrada Descendente</br>";
$barChart = new gBarChart(500,200,'g');
$barChart->addDataSet(array($time3[0]*1000));
$barChart->addDataSet(array($time3[1]*1000));
$barChart->addDataSet(array($time3[2]*1000));
$barChart->addDataSet(array($time3[3]*1000));
$barChart->addDataSet(array($time3[4]*1000));
$barChart->addDataSet(array($time3[5]*1000));
$barChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa", "ffa500"));
$barChart->setLegend(array("5000 Elementos", "10000 Elementos", "15000 Elementos", "20000 Elementos", "25000 Elementos", "30000 Elementos"));
$barChart->setGradientFill('c',0,array('FFFFFF',0,'76A4FB',1));
$barChart->setAutoBarWidth();
?>
<img src="<?php print $barChart->getUrl();  ?>" /> 
<h6>* Todos os gráficos acima seguem a mesma proporção</h6>
<?php
echo "Gráfico para comparação geral dos 3 casos</br>";

if ($time3[5] > 5){
	$lineChart = new gLineChart(500,350);
	$lineChart->addDataSet(array($time1[0],$time1[1],$time1[2],$time1[3],$time1[4],$time1[5]));
	$lineChart->addDataSet(array($time2[0],$time2[1],$time2[2],$time2[3],$time2[4],$time2[5]));
	$lineChart->addDataSet(array($time3[0],$time3[1],$time3[2],$time3[3],$time3[4],$time3[5]));
	$lineChart->setLegend(array("Entrada Ascendente", "Entrada Aleatória", "Entrada Descendente"));
	$lineChart->setColors(array("9ACD32", "FF0000", "63B8FF"));
	$lineChart->setVisibleAxes(array('x','y'));
	$lineChart->setDataRange(0,1);
	$lineChart->addAxisRange(0, 1000, 5000, 1000);
	$lineChart->addAxisRange(1, 0, 10);
	$lineChart->setGridLines(33,20);
}
else if($time3[5] < 5){
	$lineChart = new gLineChart(500,350);
	$lineChart->addDataSet(array($time1[0],$time1[1],$time1[2],$time1[3],$time1[4],$time1[5]));
	$lineChart->addDataSet(array($time2[0],$time2[1],$time2[2],$time2[3],$time2[4],$time2[5]));
	$lineChart->addDataSet(array($time3[0],$time3[1],$time3[2],$time3[3],$time3[4],$time3[5]));
	$lineChart->setLegend(array("Entrada Ascendente", "Entrada Aleatória", "Entrada Descendente"));
	$lineChart->setColors(array("9ACD32", "FF0000", "63B8FF"));
	$lineChart->setVisibleAxes(array('x','y'));
	$lineChart->setDataRange(0,1);
	$lineChart->addAxisRange(0, 1000, 5000, 1000);
	$lineChart->addAxisRange(1, 0, 5);
	$lineChart->setGridLines(33,20);
}
else if($time3[5] > 15){
	$lineChart = new gLineChart(500,350);
	$lineChart->addDataSet(array($time1[0],$time1[1],$time1[2],$time1[3],$time1[4],$time1[5]));
	$lineChart->addDataSet(array($time2[0],$time2[1],$time2[2],$time2[3],$time2[4],$time2[5]));
	$lineChart->addDataSet(array($time3[0],$time3[1],$time3[2],$time3[3],$time3[4],$time3[5]));
	$lineChart->setLegend(array("Entrada Ascendente", "Entrada Aleatória", "Entrada Descendente"));
	$lineChart->setColors(array("9ACD32", "FF0000", "63B8FF"));
	$lineChart->setVisibleAxes(array('x','y'));
	$lineChart->setDataRange(0,1);
	$lineChart->addAxisRange(0, 1000, 5000, 1000);
	$lineChart->addAxisRange(1, 0, 20);
	$lineChart->setGridLines(33,20);
}
elseif($time3[5] < 1){ 
	$lineChart = new gLineChart(500,350);
	$lineChart->addDataSet(array($time1[0],$time1[1],$time1[2],$time1[3],$time1[4],$time1[5]));
	$lineChart->addDataSet(array($time2[0],$time2[1],$time2[2],$time2[3],$time2[4],$time2[5]));
	$lineChart->addDataSet(array($time3[0],$time3[1],$time3[2],$time3[3],$time3[4],$time3[5]));
	$lineChart->setLegend(array("Entrada Ascendente", "Entrada Aleatória", "Entrada Descendente"));
	$lineChart->setColors(array("9ACD32", "FF0000", "63B8FF"));
	$lineChart->setVisibleAxes(array('x','y'));
	$lineChart->setDataRange(0,1);
	$lineChart->addAxisRange(0, 1000, 5000, 1000);
	$lineChart->addAxisRange(1, 0, .05);
	$lineChart->setGridLines(33,20);
}

else{ 
	$lineChart = new gLineChart(500,350);
	$lineChart->addDataSet(array($time1[0],$time1[1],$time1[2],$time1[3],$time1[4],$time1[5]));
	$lineChart->addDataSet(array($time2[0],$time2[1],$time2[2],$time2[3],$time2[4],$time2[5]));
	$lineChart->addDataSet(array($time3[0],$time3[1],$time3[2],$time3[3],$time3[4],$time3[5]));
	$lineChart->setLegend(array("Entrada Ascendente", "Entrada Aleatória", "Entrada Descendente"));
	$lineChart->setColors(array("9ACD32", "FF0000", "63B8FF"));
	$lineChart->setVisibleAxes(array('x','y'));
	$lineChart->setDataRange(0,1);
	$lineChart->addAxisRange(0, 1000, 5000, 1000);
	$lineChart->addAxisRange(1, 0, 1);
	$lineChart->setGridLines(33,20);
}
?>
<img src="<?php print $lineChart->getUrl();  ?>" />
</div>