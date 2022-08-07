function saludo(){
  alert("ijueputa");
}

window.onload = function(){
  var texto = document.getElementById("boton_saludooo")
  texto.addEventListener("click",saludo,false);
}
