<?php
session_start();

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

        // Função para formatar o CPF
        function formatar_cpf($cpf) {
            // Remove qualquer caractere que não seja número
            $cpf = preg_replace('/[^0-9]/', '', $cpf);
        
            // Adiciona os pontos e traço
            $cpf_formatado = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9);
            return $cpf_formatado;
        }

        // Função para formatar o telefone
        function formatar_telefone($telefone) {
            // Remove qualquer caractere que não seja número
            $telefone = preg_replace('/[^0-9]/', '', $telefone);
        
            // Adiciona os parênteses e o traço
            $telefone_formatado = '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 5) . '-' . substr($telefone, 7);
        
            return $telefone_formatado;
        }

        function formatar_nome($nome) {
            // Converte todas as palavras para minúsculas e então capitaliza a primeira letra de cada palavra
            $nome_formatado = ucwords(strtolower($nome));
        
            return $nome_formatado;
        }

        // Formata o CPF e o telefone antes de armazenar nas variáveis de sessão
        $nome_formatado = formatar_nome($nome);
        $cpf_formatado = formatar_cpf($cpf);
        $telefone_formatado = formatar_telefone($telefone);

        // Armazena os valores formatados em variáveis de sessão
        $_SESSION['nome_formatado'] = $nome_formatado;
        $_SESSION['email'] = $email;
        $_SESSION['telefone_formatado'] = $telefone_formatado;
        $_SESSION['cargo'] = $cargo;
        $_SESSION['cpf_formatado'] = $cpf_formatado;
        $_SESSION['nascimento'] = $nascimento;

        // Redireciona para a página desejada após o processamento do formulário
        header("Location: mycard.php");
        exit(); // Termina o script após o redirecionamento
    } else {
        // Se algum campo estiver vazio
        $aviso = 'Preencha todos os campos!';
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
    <link rel="shortcut icon" href="favicon2.png" type="image/x-icon">
</head>
<body>
    <p class="credit">Developed with ❤️ by <a href="http://www.patricdev.site">@cspatric</a></p>
    <img src="style/assets/img.png" alt="">
    <Section class="sec1">
        <div class="preencherinfo">
            <h1>Registre-se <i class="fa-solid fa-address-card"></i></h1>
            <form action="" method="post">
                <div class="formdiv">
                <div>
                <input maxlength="30" type="text" name="nome" id="" placeholder="Nome e Sobrenome">
                <input maxlength="90" type="email" name="email" id="" placeholder="Email">
                <input maxlength="11" type="tel" name="telefone" id="" placeholder="Telefone">
                </div>
                <div>
                <input maxlength="28" type="text" name="cargo" id="" placeholder="Cargo">
                <input maxlength="11" type="text" name="cpf" id="" placeholder="Cpf">
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