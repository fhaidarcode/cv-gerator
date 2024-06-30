<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo para Impressão</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        .dados {
            margin-bottom: 20px;
        }
        .dados label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Currículo</h1>
    <div class="dados">
        <label>Nome Completo:</label> <?php echo $_POST['nome']; ?><br>
        <label>Estado Civil:</label> <?php echo $_POST['estadocivil']; ?><br>
        <label>E-mail:</label> <?php echo $_POST['endemail']; ?><br>
        <label>Endereço:</label> <?php echo $_POST['endereco']; ?><br>
        <label>Idade:</label> <?php echo $_POST['idade']; ?><br>
        <label>Data de Nascimento:</label> <?php echo $_POST['dat']; ?><br>
        <label>Telefone:</label> <?php echo $_POST['telefone']; ?><br>
 
    </div>

    <h2>Objetivos:</h2>
    <div class="dados">
        <?php echo nl2br($_POST['objetivo']); ?>
    </div>

    <h2>Formação Acadêmica:</h2>
    <div class="dados">
        <?php echo nl2br($_POST['formacao']); ?>
    </div>

    <h2>Experiências Profissionais:</h2>
    <div class="dados">
        <?php echo nl2br($_POST['experiencia']); ?>
    </div>
</body>
</html>
