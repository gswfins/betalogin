<?php
// Função de redirecionamento
function redirecionar($url) {
    header("Location: $url");
    exit();
}
// Obtém os dados do formulário
$username = $_POST['usr'];
$password = $_POST['pwd'];

// Valida os dados (exemplo simples)
// No mundo real, você deve verificar esses dados em um banco de dados
$usuario_valido = 'george';
$senha_valida = '1234';

if ($username === $usuario_valido && $password === $senha_valida) {
    // Redireciona para a página de perfil
    redirecionar('perfil.php');
} else {
    // Se os dados forem inválidos, redireciona de volta para a página de login
    redirecionar('login.php');
}
?>