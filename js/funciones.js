//Funciones AJAX
    //Funcion para llamado a home
function fnAjax(url){
    //alert(url);       
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState==4 && ajaxRequest.status==200){
            document.getElementById('imprimir').innerHTML = ajaxRequest.responseText;
        }        
    }    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
}

//JQUERY VALIDACIONES

