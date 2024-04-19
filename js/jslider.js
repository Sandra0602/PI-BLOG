const btnSignUp = document.getElementById("sign-up"),
      btnSignIn = document.getElementById("sign-in"),
      formRegister = document.querySelector(".register"),
      formLogin = document.querySelector(".login");

btnSignUp.addEventListener("click", e =>{
        formLogin.classList.add("hide");
        formRegister.classList.remove("hide")
      })

btnSignIn.addEventListener("click", e =>{
        formRegister.classList.add("hide");
        formLogin.classList.remove("hide")
      })

      function rotar_imagen(){
        var tiempo = 1000;//tiempo en milisegundos
        var arrImagenes = ['http://3.bp.blogspot.com/_bVS2bdfO4As/RkvjtoibTxI/AAAAAAAAAso/c1Y93BkfBrs/s320/01_HomerSimpson.gif','http://www.seeklogo.com/images/H/Homer_Butt_Homero_Trasero-logo-807B1B6A2E-seeklogo.com.gif', 'http://2.bp.blogspot.com/__UX7GOPM7wI/SeAOEWkWsWI/AAAAAAAAAWQ/0xaOwEIue_I/s200/Homer_Simpson.png'];
        
        _img = document.getElementById('rotativo');
        
        //cargar la 1er imagen
        _img.src = arrImagenes[0];
        var i=1;
        setInterval(function(){
          _img.src = arrImagenes[i];
          i = (i == arrImagenes.length-1)? 0 : (i+1);
        }, tiempo);
      }

// Obtener todas las imágenes del carrusel
var images = document.querySelectorAll('#slider img');
var currentImageIndex = 0;

// Cambiar la imagen
function changeImage() {
    // Ocultar todas las imágenes
    images.forEach(function(image) {
        image.style.display = 'none';
    });

    // Mostrar la siguiente imagen y ajustar el índice
    images[currentImageIndex].style.display = 'block';
    currentImageIndex++;

    // Si hemos llegado al final de las imágenes, volvemos al principio
    if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }
}

// Cambiar la imagen cada 3 segundos
setInterval(changeImage, 2000);
