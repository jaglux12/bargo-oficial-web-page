function saludo(){
  alert("ijueputa");
}

window.onload = function(){
  var texto = document.getElementById("boton_saludo")
  texto.addEventListener("click",saludo,false);
}
