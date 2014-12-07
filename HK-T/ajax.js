function buscarPalabras()
{
var buscaAjax;
if(window.XMLHttpRequest)
{
	buscaAjax = new XMLHttpRequest();
}else{
	buscaAjax = new ActiveXOject("Microsoft.XMLHTTP");
	}
	buscaAjax.onreadystatechange = function(){
		if(buscaAjax.readyState==4 && buscaAjax.status==200){
			document.getElementById('resultado').innerHTML = buscaAjax.responseText;
			}
		}
		var dato = document.form1.palabra.value;
		buscaAjax.open("GET","config.php?variable="+dato,true);
		buscaAjax.send();

}