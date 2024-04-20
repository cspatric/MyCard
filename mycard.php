<?php 
session_start();

// Obtém os valores da sessão
$nome = $_SESSION['nome_formatado'];
$email = $_SESSION['email'];
$telefone = $_SESSION['telefone_formatado'];
$cargo = $_SESSION['cargo'];
$cpf = $_SESSION['cpf_formatado'];
$nascimento = $_SESSION['nascimento'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCard</title>
    <link rel="stylesheet" href="style/mycardinfo.css">
    <link rel="stylesheet" href="style/card.css">
    <link rel="stylesheet" href="style/escolheravatar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <p class="credit">Developed with ❤️ by <a href="http://www.patricdev.site">@cspatric</a></p>
    <img src="style/assets/img.png" alt="">
    <section class="sec1">
        <i id="editar" class="editardiv fa-solid fa-user-pen"></i>
        <i onclick="goBack()" id="sair" class="sair fa-solid fa-pen-to-square"></i>
        <div class="card">
        <div id="front">
            <!-- Conteúdo da frente da div aqui -->
            <div id="imgperfil"></div>
            <p class="info" id="nome"> <?php echo $nome; ?></p>
            <p class="info" id="cargo"> <?php echo $cargo; ?></p>
            <img class="codebar" src="style/assets/codebar.png" alt="">
            <p class="info" id="email"><i class="fa-solid fa-envelope"></i> <?php echo $email; ?></p>
            <p class="info" id="telefone"><i class="fa-solid fa-phone"></i> <?php echo $telefone; ?></p>
        </div>
        <div id="back">
            <img class="vcodebar" src="style/assets/codebar.png" alt="">
            <img class="vlogo" src="logo.png" alt="">
            <div class="backflex">
            <!-- Conteúdo do verso da div aqui -->
            <p id="vnome"> <?php echo $nome; ?></p>
            <div class="flex">
            <p id="vcpf"> <?php echo $cpf; ?></p>
            <p id="vnascimento"> <?php echo $nascimento; ?></p>
            </div>
            <p id="vcargo"> <?php echo $cargo; ?></p>
            <p id="vemail"><i class="fa-solid fa-envelope"></i> <?php echo $email; ?></p>
            <p id="vtelefone"><i class="fa-solid fa-phone"></i> <?php echo $telefone; ?></p>
            </div>
        </div>
        </div>
        <div id="divEditar" class="escolheravatar">
            <h2>Escolha seu Avatar:</h2>
            <div>
        <!-- Botões com imagens masculinas -->
        <button onclick="mudarBackground('male', 1)"><img src="style/assets/card/avatar/male-01.svg" alt=""></button>
        <button onclick="mudarBackground('male', 2)"><img src="style/assets/card/avatar/male-02.svg" alt=""></button>
        <button onclick="mudarBackground('male', 3)"><img src="style/assets/card/avatar/male-03.svg" alt=""></button>
        <button onclick="mudarBackground('male', 4)"><img src="style/assets/card/avatar/male-04.svg" alt=""></button>
        <button onclick="mudarBackground('male', 5)"><img src="style/assets/card/avatar/male-05.svg" alt=""></button>
        <button onclick="mudarBackground('male', 6)"><img src="style/assets/card/avatar/male-06.svg" alt=""></button>
        <button onclick="mudarBackground('male', 7)"><img src="style/assets/card/avatar/male-07.svg" alt=""></button>
        <button onclick="mudarBackground('male', 8)"><img src="style/assets/card/avatar/male-08.svg" alt=""></button>
        <button onclick="mudarBackground('male', 9)"><img src="style/assets/card/avatar/male-09.svg" alt=""></button>
        <button onclick="mudarBackground('male', 10)"><img src="style/assets/card/avatar/male-10.svg" alt=""></button>

        <button onclick="mudarBackground('male', 11)"><img src="style/assets/card/avatar/male-11.svg" alt=""></button>
        <button onclick="mudarBackground('male', 12)"><img src="style/assets/card/avatar/male-12.svg" alt=""></button>
        <button onclick="mudarBackground('male', 13)"><img src="style/assets/card/avatar/male-13.svg" alt=""></button>
        <button onclick="mudarBackground('male', 14)"><img src="style/assets/card/avatar/male-14.svg" alt=""></button>
        <button onclick="mudarBackground('male', 15)"><img src="style/assets/card/avatar/male-15.svg" alt=""></button>
        <button onclick="mudarBackground('male', 16)"><img src="style/assets/card/avatar/male-16.svg" alt=""></button>
        <button onclick="mudarBackground('male', 17)"><img src="style/assets/card/avatar/male-17.svg" alt=""></button>
        <button onclick="mudarBackground('male', 18)"><img src="style/assets/card/avatar/male-18.svg" alt=""></button>
        <button onclick="mudarBackground('male', 19)"><img src="style/assets/card/avatar/male-19.svg" alt=""></button>
        <button onclick="mudarBackground('male', 20)"><img src="style/assets/card/avatar/male-20.svg" alt=""></button>

        <button onclick="mudarBackground('male', 21)"><img src="style/assets/card/avatar/male-21.svg" alt=""></button>
        <button onclick="mudarBackground('male', 22)"><img src="style/assets/card/avatar/male-22.svg" alt=""></button>
        <button onclick="mudarBackground('male', 23)"><img src="style/assets/card/avatar/male-23.svg" alt=""></button>
        <button onclick="mudarBackground('male', 24)"><img src="style/assets/card/avatar/male-24.svg" alt=""></button>
        <button onclick="mudarBackground('male', 25)"><img src="style/assets/card/avatar/male-25.svg" alt=""></button>
        <button onclick="mudarBackground('male', 26)"><img src="style/assets/card/avatar/male-26.svg" alt=""></button>
        <button onclick="mudarBackground('male', 27)"><img src="style/assets/card/avatar/male-27.svg" alt=""></button>
        <button onclick="mudarBackground('male', 28)"><img src="style/assets/card/avatar/male-28.svg" alt=""></button>
        <button onclick="mudarBackground('male', 29)"><img src="style/assets/card/avatar/male-29.svg" alt=""></button>
        <button onclick="mudarBackground('male', 30)"><img src="style/assets/card/avatar/male-30.svg" alt=""></button>


        <!-- Botões com imagens femininas -->
        <button onclick="mudarBackground('female', 31)"><img src="style/assets/card/avatar/female-31.svg" alt=""></button>
        <button onclick="mudarBackground('female', 32)"><img src="style/assets/card/avatar/female-32.svg" alt=""></button>
        <button onclick="mudarBackground('female', 33)"><img src="style/assets/card/avatar/female-33.svg" alt=""></button>
        <button onclick="mudarBackground('female', 34)"><img src="style/assets/card/avatar/female-34.svg" alt=""></button>
        <button onclick="mudarBackground('female', 35)"><img src="style/assets/card/avatar/female-35.svg" alt=""></button>
        <button onclick="mudarBackground('female', 36)"><img src="style/assets/card/avatar/female-36.svg" alt=""></button>
        <button onclick="mudarBackground('female', 37)"><img src="style/assets/card/avatar/female-37.svg" alt=""></button>
        <button onclick="mudarBackground('female', 38)"><img src="style/assets/card/avatar/female-38.svg" alt=""></button>
        <button onclick="mudarBackground('female', 39)"><img src="style/assets/card/avatar/female-39.svg" alt=""></button>

        <button onclick="mudarBackground('female', 40)"><img src="style/assets/card/avatar/female-40.svg" alt=""></button>
        <button onclick="mudarBackground('female', 41)"><img src="style/assets/card/avatar/female-41.svg" alt=""></button>
        <button onclick="mudarBackground('female', 42)"><img src="style/assets/card/avatar/female-42.svg" alt=""></button>
        <button onclick="mudarBackground('female', 43)"><img src="style/assets/card/avatar/female-43.svg" alt=""></button>
        <button onclick="mudarBackground('female', 44)"><img src="style/assets/card/avatar/female-44.svg" alt=""></button>
        <button onclick="mudarBackground('female', 45)"><img src="style/assets/card/avatar/female-45.svg" alt=""></button>
        <button onclick="mudarBackground('female', 46)"><img src="style/assets/card/avatar/female-46.svg" alt=""></button>
        <button onclick="mudarBackground('female', 47)"><img src="style/assets/card/avatar/female-47.svg" alt=""></button>
        <button onclick="mudarBackground('female', 48)"><img src="style/assets/card/avatar/female-48.svg" alt=""></button>
        <button onclick="mudarBackground('female', 49)"><img src="style/assets/card/avatar/female-49.svg" alt=""></button>
        
        <button onclick="mudarBackground('female', 50)"><img src="style/assets/card/avatar/female-50.svg" alt=""></button>
        <button onclick="mudarBackground('female', 51)"><img src="style/assets/card/avatar/female-51.svg" alt=""></button>
        <button onclick="mudarBackground('female', 52)"><img src="style/assets/card/avatar/female-52.svg" alt=""></button>
        <button onclick="mudarBackground('female', 53)"><img src="style/assets/card/avatar/female-53.svg" alt=""></button>
        <button onclick="mudarBackground('female', 54)"><img src="style/assets/card/avatar/female-54.svg" alt=""></button>
        <button onclick="mudarBackground('female', 55)"><img src="style/assets/card/avatar/female-55.svg" alt=""></button>
        <button onclick="mudarBackground('female', 56)"><img src="style/assets/card/avatar/female-56.svg" alt=""></button>
        <button onclick="mudarBackground('female', 57)"><img src="style/assets/card/avatar/female-57.svg" alt=""></button>
        <button onclick="mudarBackground('female', 58)"><img src="style/assets/card/avatar/female-58.svg" alt=""></button>
        <button onclick="mudarBackground('female', 59)"><img src="style/assets/card/avatar/female-59.svg" alt=""></button>
        <button onclick="mudarBackground('female', 60)"><img src="style/assets/card/avatar/female-60.svg" alt=""></button>

            </div>
            <h2>Escolha seu Cartão:</h2>
            <div>
                <button onclick="mudarCardBackground1()"><img class="escolhercard" src="style/assets/card/front.png" alt=""></button>
                <button onclick="mudarCardBackground2()"><img class="escolhercard" src="style/assets/card/front2.png" alt=""></button>
                <button onclick="mudarCardBackground3()"><img class="escolhercard" src="style/assets/card/front3.png" alt=""></button>
                <button onclick="mudarCardBackground4()"><img class="escolhercard" src="style/assets/card/front4.png" alt=""></button>
                <button onclick="mudarCardBackground5()"><img class="escolhercard" src="style/assets/card/front5.png" alt=""></button>
            </div>
        </div>
    </section>
    <script src="js/mudarAvatar.js"></script>
    <script src="js/mudarCard.js"></script>
    <script>
        function goBack() {
        window.history.back();
        }
    </script>
</body>
</html>