const urlAPI =
  "https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=cefbd57bd9ea6aeb058a0839896f197f&hash=90c9ddb41876bb88468c5b7abad42378";



async function myQuery() {
  const {data} = await (await fetch(urlAPI)).json();
  const {results} = data
  console.log(results);

  results.forEach(item => {
    makeCard(item.name,item.thumbnail.path,item.thumbnail.extension)
  });

}

function makeCard(title,content,ext) {
  const card = `
  <div class="col-md-4 mt-3">
  <div class="card">
    <h2 class="card-header">${title}</h2>
    <div class="card-body">
    <img class="img-thumbnail" src="${content}.${ext}">
    </div>
  </div>
</div>`;

document.getElementById('marvel-row').innerHTML += card;

}

myQuery();