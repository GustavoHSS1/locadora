<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>
    <header id="cabecalho">
        <div id="box1">
        <h1>Locadora Localiza</h1>

        <?php require_once("menu.php")  ?>
        </div>
    </header>

    <section>
        <div id="div_principal">
            <div id="div_secundaria">
                <div>
                    <h1>Página da Locadora</h1>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum praesentium minima nihil excepturi voluptas? Recusandae placeat commodi, maiores odit dolorum illum eligendi sequi eos omnis? Porro ipsam cum blanditiis minima. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deserunt, necessitatibus inventore modi ipsam possimus sunt quod, enim, neque aliquid cum officiis est. Laudantium temporibus doloribus assumenda ipsum, nesciunt doloremque. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus minima cumque neque voluptatibus dignissimos excepturi harum rem amet voluptatem doloribus quis, vitae beatae repudiandae consequuntur? Sint fugit odio temporibus vel.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum soluta quibusdam similique cumque amet consequatur in omnis. Sunt delectus quisquam in facere cum aspernatur molestias, iste ex, consequuntur aliquam illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam enim sequi necessitatibus eligendi. Magni quod, sequi et aspernatur deleniti inventore est recusandae tenetur ullam quae similique dolore doloribus maxime quibusdam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis libero nostrum eos natus vel ratione iste facere aliquam! Reiciendis voluptas, facere deleniti doloremque ducimus eum iure a totam quisquam illo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Desenvolvido por <a href="https://www.instagram.com/gustavo_hnrqe/" target="_blank">Gustavo Henrique</a> </p>
    </footer>
</body>
</html>