window.addEventListener('scroll', function(){
    let animacion = document.getElementById('animate');
    let posicionObj1 = animacion.getBoundingClientRect().top;
    console.log(posicionObj1);
    let sizePantalla = window.innerHeight/6;

    if(posicionObj1 < sizePantalla){
        animacion.style.opacity = 0;
    }
    else{
        animacion.style.opacity = 1;
    }
})