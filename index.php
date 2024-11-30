<?php
session_start();

$error_message = ''; // Variável para armazenar mensagem de erro

if (isset($_POST['e_submit'])):
    require_once("app/database/connect.php");

    $user = $_POST['user'];
    $pass = sha1($_POST['pwd']);

    $sql = 'SELECT * FROM USUARIO WHERE nome="'.$user.'" and senha="'.$pass.'"';
    $verificar = $conn->query($sql);

    if ($verificar->fetch()) {
        $_SESSION['user'] = $user;
        header('location: app/principal.php');
        exit; // Para garantir que o script pare após o redirecionamento
    } else {
        $error_message = "Dados errados!";
    }
endif;
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Login</title>    
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="user">Usuário:</label>
            <input type="text" id="user" name="user" required> <br><br>

            <label for="pwd">Senha:</label>
            <input type="password" id="pwd" name="pwd" required> <br><br>

            <input type="reset" value="Limpar">
            <input type="submit" name="e_submit" value="Enviar">
            
            <!-- Mensagem de erro -->
            <?php if (!empty($error_message)): ?>
                <div id="voltar_por_erro" style="color: white; margin-top: 10px;">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
