<?php 
    
    // Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos foram preenchidos
    if (!empty($_POST["nome"]) && 
        !empty($_POST["email"]) &&
        !empty($_POST["telefone"]) &&
        !empty($_POST["cargo"]) &&
        !empty($_POST["cpf"]) &&
        !empty($_POST["nascimento"])
    ) {
        // Obtém os valores e coloca em variáveis
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cargo = $_POST["cargo"];
        $cpf = $_POST["cpf"];
        $nascimento = $_POST["nascimento"];

        header("Location: mycard.php");
        // Agora você pode fazer o que precisa com os dados
    } else {
        // Se algum campo estiver vazio
        $aviso = 'ㅤ   Preencha todos os campos! <i class="fa-solid fa-triangle-exclamation"></i>   ㅤ';
    }
}

    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCard</title>
    <link rel="stylesheet" href="style/mycardinfo.css">
    <link rel="stylesheet" href="style/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <img src="assets/img.png" alt="">
    <Section class="sec1">
        <div class="preencherinfo">
            <h1>Registre-se <i class="fa-solid fa-address-card"></i></h1>
            <form action="" method="post">
                <div class="formdiv">
                <div>
                <input type="text" name="nome" id="" placeholder="Nome e Sobrenome">
                <input type="email" name="email" id="" placeholder="Email">
                <input type="tel" name="telefone" id="" placeholder="Telefone">
                </div>
                <div>
                <input type="text" name="cargo" id="" placeholder="Cargo">
                <input type="text" name="cpf" id="" placeholder="Cpf">
                <input type="date" name="nascimento" id="" placeholder="Data de Nascimento">
                </div>
                </div>
                <button id="enviar" type="submit" >Fazer Cartão <i class="fa-solid fa-screwdriver-wrench"></i></button>
            </form>
            <p class="aviso"><?php echo $aviso?></p>
        </div>
    </Section>
   
</body>
</html>