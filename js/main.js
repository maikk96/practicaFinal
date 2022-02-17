function subir_archivos(form){
  let barra_estado = form.children[1].children[0],
    span = barra_estado.children[0],
    botom_cancelar = form.children[2].children[0];

  barra_estado.classList.remove('barra_verde', 'barra_roja');

  //peticion
  let peticion = new XMLHttpRequest();

  //progreso

  peticion.upload.addEventListener("progress",(event) =>{
    le



  });

}