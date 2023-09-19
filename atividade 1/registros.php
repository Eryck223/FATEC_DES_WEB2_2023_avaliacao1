<!DOCTYPE html>
<html>
<head>
    <title>Registros Cadastrados - Fatec Araras</title>
</head>
<body>
    <h1>Registros Cadastrados</h1>
    
    <?php
    // Função para ler os registros cadastrados e exibi-los na página
    function exibirRegistros() {
        if (file_exists("registro.txt")) {
            $registros = file_get_contents("registro.txt");
            echo "<pre>$registros</pre>";
        } else {
            echo "<p>Ainda não há registros cadastrados.</p>";
        }
    }

    // Chama a função para exibir os registros cadastrados
    exibirRegistros();
    ?>
    
    <br>
    <a href="cadastrar_aluno.php">Voltar para o Cadastro de Aluno</a>
</body>
</html>
