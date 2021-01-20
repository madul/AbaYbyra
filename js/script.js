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

function showModulo(numero){
  let modulos = document.querySelectorAll('[id^="modulo"]');

  Array.prototype.forEach.call(modulos, (index,modulo)=>{
    console.log("index: ",index);
    console.log("modulo: ", modulo);
    if(modulo == numero){
      index.style.display = 'flex';
    }
    else{
      index.style.display = 'none';
    }
  })
}