<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar pacientes</title>
</head>
<body>
    <form action="salvarpacientes.php">
	<label for="nome">Nome do paciente:</label>
	<input type="text" name="nome" id="nome"><br>

    <label for="medicamento">Medicamento Administrado:</label>
	<input type="text" name="medicamento" id="medicamento"><br>

    <label for="data">Data da Administração:</label>
	<input type="date" name="data" id="data"><br>

    <label for="hora">Hora da Administração:</label>
	<input type="datetime" name="hora" id="hora"><br>

    <label for="dose">Dose:</label>
	<input type="number" name="dose" id="dose"><br>

	<input type="submit" value="Salvar"> 
    </form>
</body>

</html>