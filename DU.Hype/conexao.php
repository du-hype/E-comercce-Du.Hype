<?php
$servidor = "localhost";   
$usuario  = "root";        
$senha    = "";            
$banco    = "bd_duhype"; 

// ======== CONEXÃO ========
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// ======== VERIFICAÇÃO ========
if ($conexao->connect_error) {
    die("falha na conexao: " . $conexao->connect_error);
} else {
    echo "conectado com sucesso";
}
?>
