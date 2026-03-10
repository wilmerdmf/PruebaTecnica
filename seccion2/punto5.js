// Punto 5

// var_titulo_imagen
function () {
  var el = {{Click Element}};
  if (el && el.tagName === 'IMG') return el.getAttribute('title');
  if (el) {
    var img = el.querySelector('img');
    if (img) return img.getAttribute('title');
  }
  return undefined;
}

// var_src_imagen
function() {
  var el = {{Click Element}};
  if (el && el.tagName === 'IMG') return el.getAttribute('src');
  if (el) {
    var img = el.querySelector('img');
    if (img) return img.getAttribute('src');
  }
  return undefined;
}
