const editar = document.getElementById('editar');
const escolheravatar = document.getElementById('divEditar');

// Adicionando um evento de clique ao ícone
editar.addEventListener('click', function() {
  // Verificando se a div de conteúdo está visível ou não
  if (escolheravatar.style.display === 'none') {
    // Se estiver invisível, torna visível
    escolheravatar.style.display = 'flex';
  } else {
    // Se estiver visível, torna invisível
    escolheravatar.style.display = 'none';
  }
});

//MUDAR AVATAR
function mudarBackground(gender, number) {
    var imgperfil = document.getElementById("imgperfil");
    imgperfil.style.backgroundImage = "url('style/assets/card/avatar/" + gender + "-" + number.toString().padStart(2, '0') + ".svg')";
}
