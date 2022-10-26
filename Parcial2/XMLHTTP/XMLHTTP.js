window.onload=function(){
    

    document.getElementById('btn-menu').addEventListener('click',function()  {
        document.getElementById('navegador').classList.toggle('active');
         console.log('desplegar y esconder con Javascript');
     })

        document.getElementById("btnajax").addEventListener("click",pedirheader);
        
        document.getElementById("btnreset").addEventListener("click",iniciarheader);

        function pedirheader() {
            console.log("hola cambiar");
            var solicitud = new XMLHttpRequest();  //crear objeto hxmlhttp
            
            solicitud.onreadystatechange = function() {
                if (solicitud.readyState ==  4 ) {
                    document.getElementById("mydiv").innerHTML = solicitud.responseText;
                }}; //declaramos  la funcion
            solicitud.open("GET","header.txt",true);
            solicitud.send();
    
        }

    
        function iniciarheader() {
            document.getElementById("mydiv").innerText = "hola de regreso";
            console.log("hola regresar");
        }
    }

    
