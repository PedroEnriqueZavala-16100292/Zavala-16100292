$(document).ready(function() {
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "./Consulta.php",
        "method": "GET",
        "headers": {
          "Accept": "*/*"
        }
      };
      
      $.ajax(settings).done(function (response) {
        
       /* 
        console.log(tabla);*/
        console.log(response);
        let tabla = response;



        $("#jsGrid").jsGrid({
            width: "100%",
            height: "400px",
     
            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
     
            data: response,
     
            fields: [
                { name: "idReceta", type: "text", width: 150, validate: "required" },
                { name: "idNombre", type: "text", width: 50 },
                { name: "idEdad", type: "text", width: 150, validate: "required" }
            ]
        });
      }); 
});