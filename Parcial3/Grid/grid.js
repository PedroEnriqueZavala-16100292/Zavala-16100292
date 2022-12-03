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
        console.log (response);
        $("#jsGrid").jsGrid({
            width: "100%",
            height: "400px",      
            data: JSON.parse(response),
            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
            
            fields: [
                { name: "idreceta", title: "receta",type: "text", width: 100},
                { name: "idnombre" , title: "nombre",type: "text", width: 50 },
                { name: "idedad",title: "edad", type: "text", width: 100},
            ]
        });
      }); 
});