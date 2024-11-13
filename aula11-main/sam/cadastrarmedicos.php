<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar médicos</title>
</head>
<body>
    <form action="salvarmedicos.php">
	<label for="nome">Nome:</label>
	<input type="text" name="nome" id="nome"><br>

    <label for="especialidade">Especialidade:</label>
	<input type="text" name="especialidade" id="especialidade"><br>

    <label for="crm">CRM:</label>
	<input type="text" name="crm" id="crm"><br>

    <label for="usuario">Usuário:</label>
	<input type="text" name="usuario" id="usuario"><br>

    <label for="senha">Senha:</label>
	<input type="text" name="senha" id="senha"><br>

	<input type="submit" value="Salvar"> 
    </form>
</body>

</html>