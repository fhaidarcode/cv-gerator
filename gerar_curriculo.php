<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Currículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #342F2F;
        }
        section {
            max-width: 800px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .info {
            margin-bottom: 20px;
        }
        .info label {
            font-weight: bold;
        }
        .info p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Currículo Gerado</h1>
    <section>
        <div class="info">
            <label>Nome Completo:</label>
            <p><?php echo isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : ''; ?></p>
        </div>
        <div class="info">
            <label>Estado Civil:</label>
            <p><?php echo isset($_GET['estadocivil']) ? htmlspecialchars($_GET['estadocivil']) : ''; ?></p>
        </div>
        <div class="info">
            <label>E-mail:</label>
            <p><?php echo isset($_GET['endemail']) ? htmlspecialchars($_GET['endemail']) : ''; ?></p>
        </div>
        <div class="info">
            <label>Endereço:</label>
            <p><?php echo isset($_GET['endereco']) ? htmlspecialchars($_GET['endereco']) : ''; ?></p>
        </div>
        <div class="info">
            <label>Idade:</label>
            <p><?php echo isset($_GET['idade']) ? htmlspecialchars($_GET['idade']) : ''; ?></p>
        </div>
        <div class="info">
            <label>Data de Nascimento:</label>
            <p><?php echo isset($_GET['dat']) ? htmlspecialchars($_GET['dat']) : ''; ?></p>
        </div>
        <div class="info">
            <label>Telefone:</label>
            <p><?php echo isset($_GET['telefone']) ? htmlspecialchars($_GET['telefone']) : ''; ?></p>
        </div>
        <div class="info">
            <label>Objetivos:</label>
            <p><?php echo isset($_GET['objetivo']) ? nl2br(htmlspecialchars($_GET['objetivo'])) : ''; ?></p>
        </div>
        <div class="info">
            <label>Formação Acadêmica:</label>
            <p><?php echo isset($_GET['formacao']) ? nl2br(htmlspecialchars($_GET['formacao'])) : ''; ?></p>
        </div>
        <div class="info">
            <label>Experiências Profissionais:</label>
            <p><?php echo isset($_GET['experiencia']) ? nl2br(htmlspecialchars($_GET['experiencia'])) : ''; ?></p>
        </div>
    </section>
</body>
</html>
