function fnAjax(url){       
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState==4 && ajaxRequest.status==200){
            document.getElementById('page-content').innerHTML = ajaxRequest.responseText;
        }        
    }    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
}