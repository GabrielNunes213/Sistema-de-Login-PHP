<?php
include('VerificarLogin.php');
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2 id="bem-vindo">Bem-Vindo, <?php echo $_SESSION['usuario'];?></h2>
    <a id="sair" href="logout.php">Fazer Logout</a>

</body>
</html>
 
