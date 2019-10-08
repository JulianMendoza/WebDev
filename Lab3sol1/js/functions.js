/* add in your functions here */
function outputCountryBox(name,continent,cities,photos){
  function outputCities(){
    document.write(`<div class="inner-box">`);
    document.write("<h3>Cities</h3><ul>");
    for(var i=0;i<cities.length;i++){
      document.write("<li>"+cities[i]+"</li>");
    }
    document.write("</ul>");
    document.write(`</div>`);
  }
  function outputPhotos(){
    document.write(`<div class="inner-box">`);
    document.write(`<h3>Popular Photos</h3>`);
    for(var i=0;i<photos.length;i++){
      document.write(`<img src=`+photos[i]+` class="photo">`);
    }
    document.write(`</div>`);
  }
  document.write(`<div class="item">`);
  document.write(`<h2>`+name+`</h2>`);
  document.write(`<p>`+continent+`</p>`);
  outputCities();
  outputPhotos();
  document.write(`<button>Visit</button>`)
  document.write('</div>')
}
