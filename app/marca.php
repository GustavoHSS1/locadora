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
</head>
<body>
    <header id="cabecalho">
        <div id="box1">
        <h1>Locadora Localiza</h1>

        <?php require_once("menu.php")  ?>
        </div>
    </header>
    <?php
    require_once("database/connect.php");

    if ($conn) {
        $sql = 'SELECT * FROM marca';
        $resultado = $conn->query($sql);

        if ($resultado && $linha = $resultado->fetch()) {
            echo "<table id='tabela'>
                <tr>
                    <th>Nome</th>
                    <th>Código</th>
                </tr>";

            do {
                echo "<tr>
                    <td>" . htmlspecialchars($linha['nome']) . "</td>
                    <td>" . htmlspecialchars($linha['codigo']) . "</td>
                </tr>";
            } while ($linha = $resultado->fetch());

            echo "</table>";
        } else {
            echo "<p>Tabela sem registro</p>";
        }
    } else {
        echo "<p>Erro ao conectar ao banco de dados.</p>";
    }
    ?>

<footer>
        <p>Desenvolvido por <a href="https://www.instagram.com/gustavo_hnrqe/" target="_blank">Gustavo Henrique</a> </p>
    </footer>
</body>
</html>