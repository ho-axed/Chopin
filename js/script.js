const Iniciodesesion = document.querySelector('.Iniciodesesion');
const Linklogin = document.querySelector('.Link-login');
const Linkregistrarse = document.querySelector('.Link-registrarse');
Linkregistrarse.addEventListener('click', ()=> {
    Iniciodesesion.classList.add('activo')
})
Linklogin.addEventListener('click', ()=> {
    Iniciodesesion.classList.remove('activo')
})