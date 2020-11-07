let slideIndex = 1;

function outraImagem(n) {
  showImages(slideIndex += n);
}

function showImages(n) {
  let i;
  let x = document.getElementsByClassName("img-historia");
  if (n == x.length){
    document.getElementById('next').disabled = true;
  }
  else if(n == 1){
    document.getElementById('previous').disabled = true;
  }
  else{
    document.getElementById('next').disabled = false;
    document.getElementById('previous').disabled = false;
  }

  if (n > x.length) {
    slideIndex = 1;
  }
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function maisNoticia(n){
  mostraNoticia(index += n)
}

function mostraNoticia(n){
  let i;
  let x = document.getElementsByClassName("expo-material");
  if (n == x.length){
    document.getElementById('nextMA').disabled = true;
  }
  else if(n == 1){
    document.getElementById('previousMA').disabled = true;
  }
  else{
    document.getElementById('nextMA').disabled = false;
    document.getElementById('previousMA').disabled = false;
  }

  if (n > x.length) {
    slideIndex = 1;
  }
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";
  x[slideIndex].style.display = "block";
  x[slideIndex+1].style.display = "block";
}

function showModHist(numero){
  let modulos = document.querySelectorAll('[id^="hist-modulo"]');
  let modulo0 = document.getElementById('modulo0');
  let container = document.getElementById('histModuloContent');
  let container_2 = document.getElementById('matApModuloContent');
  modulo0.style.display = "none";
  container_2.style.display = 'none';
  container.style.display = 'flex';
  

  Array.prototype.forEach.call(modulos, (modulo,index)=>{
    if(index == numero - 1){
      modulo.style.display = 'flex';
    }
    else{
      modulo.style.display = 'none';
    }
  })
}
function showModHistA(numero){
  let modulos = document.querySelectorAll('[id^="hist-modulo"]');
  let modulo0 = document.getElementById('modulo0');
  modulo0.style.display = "none";

  Array.prototype.forEach.call(modulos, (index,modulo)=>{
    if(modulo == numero - 1){
      index.style.display = 'flex';
    }
    else{
      index.style.display = 'none';
    }
  })
}


function showModMatAp(numero){
  
  let modulos = document.querySelectorAll('[id^="matap-modulo"]');
  let modulo0 = document.getElementById('modulo0');
  let container = document.getElementById('matApModuloContent');
  let container_2 = document.getElementById('histModuloContent');
  let tituloModulo1 = document.getElementById('modTitulo-matAp');
  modulo0.style.display = "none";
  container_2.style.display = 'none';
  container.style.display = 'flex';
  
  Array.prototype.forEach.call(modulos, (modulo,index)=>{
    
    if(index == numero -1){
      modulo.style.display = 'flex';
    }
    else{
      modulo.style.display = 'none';
    }
    if(numero !=1){
      tituloModulo1.style.display = 'none';
    }
    else tituloModulo1.style.display = 'block';
  })

}

function pointer(element){
    
  element.style.cursor === 'pointer' ? 
  element.style.cursor = 'auto' :
  element.style.cursor = 'pointer';
}