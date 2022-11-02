const marvel = {
    render: () => {
      const urlAPI = 'https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=cefbd57bd9ea6aeb058a0839896f197f&hash=90c9ddb41876bb88468c5b7abad42378';
      const container = document.querySelector('#marvel-row');
      let contentHTML = '';
  
      fetch(urlAPI)
        .then(res => res.json())
        .then((json) => {
          for (const hero of json.data.results) {
            let urlHero = hero.urls[0].url;
            contentHTML += `
              <div class="col-md-4">
                  <a href="${urlHero}" target="_blank">
                    <img src="${hero.thumbnail.path}.${hero.thumbnail.extension}" alt="${hero.name}" class="img-thumbnail">
                  </a>
                  <h3 class="title">${hero.name}</h3>
              </div>`;
          }
          container.innerHTML = contentHTML;
        })
    }
  };
  marvel.render();

  document.getElementById("btnPeticionFecth").addEventListener("click",function() {
    fetch(urlAPI)
    .then(respuesta => respuesta.json() )
    .then(dataJson => document.getElementById("caja").innerText=dataJson,value);
})


document.getElementById("btnPeticionJquery".addEventListener("click",async function() {
let respuesta = await fetch(urlAPI);
let dataJson= await respuesta.json();

document.getElementById("caja").innerText=dataJson.value;
}))

$(document).ready(function() {
document.getElementById("btnJquerys").addEventListener("click",function() {
    $.getJSON(urlAPI),function(dataJson) {
      ${"#marvel-row"}.then(dataJson.value);
    }
})
})