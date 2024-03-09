<<<<<<< HEAD
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    if (window.scrollY > 0) {
        header.classList.add("abajo");
    } else {
        header.classList.remove("abajo");
    }
});
=======
window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo", window.scrollY>0);
})
>>>>>>> 0624295c592d3ff380264c06bcc918086a2c6bb2
