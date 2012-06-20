function abrirPag(valor, div){
	var url = valor;
	var divexibir = div;

	xmlHttp.open("GET",url,true);
	xmlHttp.onreadystatechange 	= function (){
			if (xmlHttp.readyState == 4)
				document.getElementById(divexibir).innerHTML = xmlHttp.responseText;
	};
	xmlHttp.send(null);

	if (xmlHttp.readyState == 1) {
	document.getElementById(divexibir).innerHTML = "<div id='load'><center>Executando Algoritmo, aguarde...</br><div id='loading'></div></center></div>";
	}

	return url;
}