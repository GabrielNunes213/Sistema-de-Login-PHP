<?php
    session_start();
    include('Conexao.php');

if(empty($_POST['usuario']) or empty($_POST['senha'])) {
    header ('Location: Login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT usuario FROM usuario WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: PainelAdm.php');
    exit();
} else {
    $_SESSION['nao_logado'] = true;
    header('Location: Login.php');
    exit();
}


?>