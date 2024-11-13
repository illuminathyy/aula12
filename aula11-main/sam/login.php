<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
include 'conexao.php';
?>
    <div>
        
        <h2>Login - Usuário</h2>
        <form action="autenticar.php">
            <div>
            <select name="tipo">
                <option value="medico">Médico</option><br>
                <option value="enfermeiro">Enfermeiro</option>
            </select><br>
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" id="usuario"><br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
            <?php if (isset($_GET['erro'])): ?>
                <div class="error">
                    <p style="color: red;">Usuário ou senha incorretos. Tente novamente.</p>
                </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
