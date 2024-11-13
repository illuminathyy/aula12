<?php
include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados

session_start();

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo_usuario = $_POST['tipo_usuario']; // Médico ou Enfermeiro
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
 
    try {
        // Consulta SQL para verificar o usuário e senha, filtrando pelo tipo
        $sql = "SELECT * FROM `medico` WHERE usuario = :usuario AND senha = :senha`";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':tipo_usuario', $tipo_usuario);
        $stmt->execute();
        
        // Verifica se o usuário foi encontrado
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Se o usuário foi encontrado, verificamos a senha
            if (password_verify($senha, $user['senha'])) {
                // Se a senha estiver correta, cria as variáveis de sessão
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['usuario'] = $user['usuario'];
                $_SESSION['nome'] = $user['nome'];
                $_SESSION['tipo_usuario'] = $user['tipo_usuario']; // 'medico' ou 'enfermeiro'

                // Redireciona para a página de acordo com o tipo de usuário
                if ($user['tipo_usuario'] == 'medico') {
                    header('Location: dashboard_medico.php'); // Página para médicos
                } else {
                    header('Location: dashboard_enfermeiro.php'); // Página para enfermeiros
                }
                exit();
            } else {
                // Senha incorreta
                header('Location: login.php?erro=1');
                exit();
            }
        } else {
            // Usuário não encontrado
            header('Location: login.php?erro=1');
            exit();
        }
    } catch (PDOException $e) {
        // Em caso de erro de conexão ou consulta, exibe a mensagem
        echo "Erro: " . $e->getMessage();
    }
}

// $codigosql = "INSERT INTO `medico` (`id`, `nome`, `especialidade`, `crm`, `usuario`, `senha`) VALUES (NULL, '$nome', '$especialidade', '$crm', '$usuario', '$senha')";

// try {
//     $resultado = $conexao->query($codigosql);
//     if($resultado) {
// 	echo "Comando executado!";
//     } else {
// 	echo "Erro ao executar o comando!";
//     }
// } catch (Exception $e) {
//     echo "Erro $e";
// }

// $conexao = null;
// ?>

