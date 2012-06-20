<div id="about">
	<div class="name" id="slideToggle">
		<p>O Projeto</p>
	</div>
	<div class="slideTogglebox" style="margin-top: -14px; margin-left: 15px;">
		<spam  style="margin-left: 20px;">
			Este projeto tem como objetivo analisar o desempenho e complexidade de diversos algoritmos de ordenação, no qual foram implementados nas linguagens PHP e Java, podendo assim gerarmos uma comparação entre ambas linguagens após a realização de vários testes de execução com entradas possuindo quantidade significante de elementos ordenados de forma aleatória, acedente (do menor para o maior) ou descendente (do maior para o menor).
		</spam>
		<div style="margin-top: 10px; margin-right:10px; margin-bottom: 10px;">
			<img width="250px" height="250px" style="border: dashed 1px #9C9C9C;" title="Bubble Sort" src="img/animations/bubble_sort_animation.gif" />
			<img width="250px" height="250px" style="border: dashed 1px #9C9C9C;" title="Quick Sort" src="img/animations/quicksort_animation.gif" />
			<img width="250px" height="250px" style="border: dashed 1px #9C9C9C;" title="Insertion Sort" src="img/animations/insertion_sort_animation.gif" />
			<img width="250px" height="250px" style="border: dashed 1px #9C9C9C;" title="Shell Sort" src="img/animations/shell_sort_animation.gif" />
			<img width="250px" height="250px" style="border: dashed 1px #9C9C9C;" title="Selection Sort" src="img/animations/selection_sort_animation.gif" />
			<img width="250px" height="250px" style="border: dashed 1px #9C9C9C;" title="Heap Sort" src="img/animations/heapsort_animation.gif" />
			<img width="250px" height="250px" style="border: dashed 1px #9C9C9C;" title="Merge Sort" src="img/animations/merge_sort_animation.gif" />
		</div>
	</div>
	
	<div class="name" id="slideToggle2">
		<p>As linguagens</p>
	</div>
	<div class="slideTogglebox2" style="margin-top: -14px; margin-left: 15px;">
		<div style="margin-left: 200px; margin-top: 10px; margin-bottom: 10px;"><img src="img/php.jpg" /><img src="img/java.png" /></div>
		<spam  style="margin-left: 20px;">
			Os algoritmos em PHP podem ser em executados em tempo real na aplicação (menu lateral esquerdo) sendo executada a partir de um servidor web com suporte a linguagem, para cada algoritmo fizemos uma análise do tempo e comparação para cada tipo de entrada. Em Java, desenvolvemos uma aplicação com o mesmo objetivo de executar os algoritmos de ordenação, também com análise de tempo e entradas com diferentes formas de ordenação e quantidade de elementos, para uma análise mais concreta executamos esses algoritmos 10 vezes cada. 
		</spam>
			</br>
		<spam  style="margin-left: 20px;">
			Ao realizarmos diversas execuções dos algoritmos percebemos uma vantagem bastante superior da linguagem Java comparado ao PHP. Iremos analisar detalhadamente esses dados na sessão "Relatórios". 
		</spam>
			</br></br>
		<li><a title="Clique para iniciar o download" href="java/AlgoritmosOrdenacao.zip" />Download da aplicação em Java</a></li>		
	</div>

	<div class="name" id="slideToggle3">
		<p>Relatórios</p>
	</div>
	<div class="slideTogglebox3" style="margin-top: -14px; margin-left: 15px;">
		<spam  style="margin-left: 20px;">
			Os gráficos a seguir apresentam os dados de execução dos algoritmos nas duas linguagens utilizadas. Alguns detalhes devem ser considerados:</br>
		</spam>
		<div  style="margin-left: 30px;">		
			<li>Todos os algoritmos foram executados 10 vezes cada em ambas as linguagens, portanto os dados apresentados são uma média de tempo dessas execuções. Este método foi utilizado
				 para garantirmos dados mais concretos;</li>
			<li>A quantidade de entrada de elementos são as mesmas para ambas as linguagens;</li>
			<li>Os algoritmos foram executados sempre no mesmo hardware;</li>
			<li>O cálculo de tempo foi feito apenas no início e fim do algoritmo de ordenação, demais rotinas foram desconsideradas;</li>			
		</div>
		</br>
		<li><a title="Clique para iniciar o download" href="reports/AlgoritmosOrdenacao_Relatorio.pdf" />Download do relatório completo em pdf.</a></li>		
			<?php 
			 	include('reports/index.php');
			?>
	</div>
	<!--<div class="name" id="slideToggle6">
		<p>Conclusão</p>
	</div>
	<div class="slideTogglebox6" style="margin-top: -14px; margin-left: 15px;">
		<spam  style="margin-left: 20px;">
			Conclusão...</br>
		</spam>		
	</div>-->
</div>
