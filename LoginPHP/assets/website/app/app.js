const fila = document.querySelector('.contenedor-carousel');
const cursos = document.querySelectorAll('.cursos-card');

const flechaIzquierda = document.getElementById('flecha-izquierda');
const flechaDerecha = document.getElementById('flecha-derecha');

/**************** Even Listener ****** */
const clickDerecho = flechaDerecha.addEventListener('click', ()=>{
    fila.scrollLeft += fila.offsetWidth;

    const indicadorActivo = document.querySelector('.indicadores .activo');
    if(indicadorActivo.nextSibling ){
        indicadorActivo.nextSibling.classList.add('activo');
        indicadorActivo.classList.remove('activo');
    }
})



flechaIzquierda.addEventListener('click', ()=>{
    fila.scrollLeft -= fila.offsetWidth;

    const indicadorActivo = document.querySelector('.indicadores .activo');
    if(indicadorActivo.previousSibling){
        indicadorActivo.previousSibling.classList.add('activo');
        indicadorActivo.classList.remove('activo');
    }
})

/****************** Paginación********************* */
// let numberCard = 
const numeroPaginas = Math.ceil(cursos.length / 10);

for(let i = 0; i < numeroPaginas; i++){
    const indicador = document.createElement("button");

    if(i === 0){
        indicador.classList.add('activo');
    }

    document.querySelector('.indicadores').appendChild(indicador);

    indicador.addEventListener('click', (e)=>{
        fila.scrollLeft = i * fila.offsetWidth;

        document.querySelector('.indicadores .activo').classList.remove('activo');
        e.target.classList.add('activo');
    });

}


/******************   Hover  ************* */
cursos.forEach((curso)=> {
    curso.addEventListener('mouseenter', (e)=> {
        const elemento = e.currentTarget;
        setTimeout(() =>{
            cursos.forEach(curso => curso.classList.remove('hover'));
            elemento.classList.add('hover');            
        }, 100)
    });
})

fila.addEventListener('mouseleave', ()=>{
    cursos.forEach(curso => curso.classList.remove('hover'));
});
