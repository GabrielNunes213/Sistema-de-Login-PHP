var usuario = document.getElementById('usuario');
var senha = document.getElementById('senha');

usuario.addEventListener('focus',()=>{
    usuario.style.borderColor = "#4A5F6A";
});

usuario.addEventListener('blur',()=>{
    usuario.style.borderColor = "#ccc";
});

senha.addEventListener('focus',()=>{
    senha.style.borderColor = "#4A5F6A";
});

senha.addEventListener('blur',()=>{
    senha.style.borderColor = "#ccc";
});