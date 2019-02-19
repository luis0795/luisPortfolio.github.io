function iniciar(){
	
origen1=document.getElementById('imagen');
origen1.addEventListener('dragstart', arrastrado, false);

	
		destino1=document.getElementById('cajasoltar1');

		destino1.addEventListener('dragenter', function(e){
		e.preventDefault(); },
		 false);

		destino1.addEventListener('dragover', function(e){
		e.preventDefault(); },
		 false);
		
		destino1.addEventListener('drop', soltado, false);
		 
		 
		 //
		 
		 destino2=document.getElementById('cajasoltar2');

		destino2.addEventListener('dragenter', function(e){
		e.preventDefault(); },
		 false);

		destino2.addEventListener('dragover', function(e){
		e.preventDefault(); },
		 false);
		
		destino2.addEventListener('drop', soltado, false);
		 
		  //
		 
		 destino3=document.getElementById('cajasoltar3');

		destino3.addEventListener('dragenter', function(e){
		e.preventDefault(); },
		 false);

		destino3.addEventListener('dragover', function(e){
		e.preventDefault(); },
		 false);
		
		destino3.addEventListener('drop', soltado, false);
}


function arrastrado(e){
	var codigo=origen1.getAttribute("class");
	e.dataTransfer.setData('Text', codigo);
}
function soltado(e){
	e.preventDefault();
	destino1.innerHTML=e.dataTransfer.getData('Text');
	destino2.innerHTML=e.dataTransfer.getData('Text');
	destino3.innerHTML=e.dataTransfer.getData('Text');
	
	
}


window.addEventListener('load', iniciar, false);