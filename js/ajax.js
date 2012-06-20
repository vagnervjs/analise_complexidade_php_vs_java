function GetXMLHttp(){
 var xmlHttp;
 
 try
 {
 xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 catch(e)
 {
	try
	{
	xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(ex)
	{
		try
		{
		xmlHttp = new XMLHttpRequest();
		xmlHttp.overrideMimeType('text/html');
		}
		catch(exc)
		{
		alert("Esse browser nÃ£o tem recursos para uso do Ajax");
		xmlHttp = null;
		}
	 }
 }
 return xmlHttp;
}

var xmlHttp = GetXMLHttp();