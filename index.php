<!doctype html>
<html itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
	<meta charset="utf-8" http-equiv="Content-type" content="text/html;charset=utf-8" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/ajax_acao.js"></script>
	<script type="text/javascript" src="js/sliding_effect.js"></script>
	<script language="javascript" src="js/slidUpDown.js"></script>			
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
	<link href="img/unesp.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="img/unesp.ico" rel="icon" />
	<title>Projeto e Análise de Algoritmos | FCT Unesp</title>
</head>
<body onload=slide();>
	<div id="page">
		<div id="header">
			Complexidade de Algoritmos</br>
			<p>Projeto e Análise de Algoritmos | Trabalho Prático 01</p>
			<div id="logo"></div>
		</div>
		<div id="content">
			<div id="left_bar">
				<p><a href="index.php">Algoritmos</a></p>
				<ul id="sliding-navigation">
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/bubble_sort.php?algorithm=1', 'center_bar');">Bubble Sort</a></li>
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/bubble_sort_2.php?algorithm=2', 'center_bar');">Bubble Sort Melhorado</a></li>
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/quick_sort.php?algorithm=3', 'center_bar');">Quick Sort</a></li>
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/insertion_sort.php?algorithm=4', 'center_bar');">Insertion Sort</a></li>
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/shell_sort.php?algorithm=5', 'center_bar');">Shell Sort</a></li>
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/selection_sort.php?algorithm=6', 'center_bar');">Seleção Direta</a></li>
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/heap_sort.php?algorithm=7', 'center_bar');">Heap Sort</a></li>
					<li class="sliding-element"><a href="#" onclick="abrirPag('algorithms/merge_sort.php?algorithm=8', 'center_bar');">Merge Sort</a></li>
				</ul>
			</div>
			<div id="center_bar">
				<?php include ('about.php');?>
			</div>
		</div>
		<div id="footer">
			<a href="http://www.fct.unesp.br" target="_blank" title="Faculdade de Ciências e Tecnologia"><b>FCT Unesp</b></br>
			<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4742236T0" target="_blank" title="Currículo Lates">Prof. Danilo Medeiros Eler</a></br>
			<b>Alunos:</b> <a title="RA: 1289314">Luiz Felipe Marques</a> | <a title="RA: 1288350">Luiz Paulo Rabachini</a> | <a title="RA: 1288539">Vagner J. Santana</a></br>
		</div>
	</div>
</body>
</html>