<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .card-body {
            margin: 20px;
            padding: 10px;
            border: 5px dotted #ccc;
        }
        textarea {
            width: 100%;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #D9D9D9;
            min-height: 100vh; /* Altura mínima da viewport */
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #342F2F;
            color: #fff;
            padding: 30px;
            text-align: center;
        }
        nav {
            background-color: #666;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        section {
            flex: 1; /* Ocupa todo o espaço restante */
            padding: 20px;
            text-align: center;
            overflow-y: auto; /* Permite rolagem vertical se o conteúdo exceder a altura */
        }
        footer {
            background-color: #342F2F;
            color: #fff;
            padding: 10px;
            text-align: center;
            width: 100%;
            z-index: 1000; /* Ajuste o z-index para garantir que o rodapé esteja acima do conteúdo */
            margin-top: auto; /* Empurra o rodapé para a parte inferior da viewport */
        }
        .corpo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .lateral {
            max-width: 550px;
            width: 100%;
            padding: 20px;
            background-color: #C2BABA;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        }
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical; /* Permite redimensionamento vertical */
            min-height: 150px; /* Altura mínima do textarea */
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }
        /* Estilos para impressão */
        @media print {
            body {
                background-color: #fff;
            }
            .no-print {
                display: none;
            }
            .lateral {
                width: 100%;
                margin: 0;
                box-shadow: none;
                border: none;
                padding: 0;
            }
            /* Ajustes para o cabeçalho e layout de impressão */
            .header {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
                page-break-inside: avoid; /* Evita quebras de página no meio do cabeçalho */
            }
            .header img {
                max-width: 100px;
                height: auto;
                margin-right: 20px;
                border-radius: 8px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
            .header h2 {
                margin: 0;
            }
            .header p {
                margin-bottom: 5px;
            }
            .header hr {
                border-top: 2px solid #ccc;
                margin-top: 10px;
                margin-bottom: 20px;
            }
            /* Ajustes para o conteúdo */
            .content {
                margin-bottom: 20px;
                page-break-inside: avoid; /* Evita quebras de página no meio do conteúdo */
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="https://cdn-icons-png.flaticon.com/512/2936/2936630.png" height="82px" width="82px">
        <h1>Gerador de Currículos</h1>
    </header>

   <nav>
    <a href="index.html">Página Inicial</a> |
    <a href="como_usar.html">Como usar</a> |
    <a href="contato.html">Contate-nos</a>
</nav>

    <section>
        <h2>Bem-vindo ao Gerador de Currículos online!</h2>
        <p>Preencha o formulário abaixo com seus dados e gere automaticamente um currículo funcional de forma rápida e gratuita. </p>
        
        <div class="corpo">
            <div class="lateral">
                <form id="curriculoForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <p><b><i>FORMULÁRIO:</b></p></i>
                    <label for="nome">Nome Completo:</label><br/>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" required><br>
                    <label for="estadocivil">Estado Civil:</label><br/>
                    <input type="text" name="estadocivil" placeholder="Seu estado civil" required><br>
                    <label for="endemail">E-mail:</label><br/>
                    <input type="email" name="endemail" placeholder="Digite seu e-mail" required><br>
                    <label for="endereco">Endereço:</label><br/>
                    <input type="text" name="endereco" placeholder="Digite seu endereço" required><br>
                    <label for="idade">Idade:</label><br/>
                    <input type="number" name="idade" placeholder="Informe sua idade" required><br>
                    <label for="dat">Data de Nascimento:</label><br/>
                    <input type="date" name="dat" required><br>
                    <label for="telefone">Telefone:</label><br/>
                    <input type="tel" name="telefone" placeholder="Telefone para contato" required><br>
                    
                    
                    <div class="card-body" id="div-objetivos">
                        <label for="objetivo">Objetivos:</label><br/>
                        <button class="btn btn-sm right" id="btn-adicionar-objetivo" title="Adicionar objetivo">Adicionar </button>
                        <div id="objetivo-form" style="display: none;">
                            <textarea name="objetivo" placeholder="Informe seus objetivos" rows="4" required></textarea><br>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('#btn-adicionar-objetivo').click(function() {
                                $('#objetivo-form').toggle(); // Alterna a exibição do formulário de objetivos
                                $('#formacao-form').hide(); // Esconde o formulário de formação acadêmica se estiver aberto
                                $('#experiencia-form').hide(); // Esconde o formulário de experiência profissional se estiver aberto
                            });
                        });
                    </script>

                    <div class="card-body" id="div-formacao">
                        <label for="formacao">Formação Acadêmica:</label><br/>
                        <button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação acadêmica">Adicionar </button>
                        <div id="formacao-form" style="display: none;">
                            <textarea name="formacao" placeholder="Informe suas formações acadêmicas" rows="4" required></textarea><br>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('#btn-adicionar-formacao').click(function() {
                                $('#formacao-form').toggle(); // Alterna a exibição do formulário de formação acadêmica
                                $('#objetivo-form').hide(); // Esconde o formulário de objetivos se estiver aberto
                                $('#experiencia-form').hide(); // Esconde o formulário de experiência profissional se estiver aberto
                            });
                        });
                    </script>

                    <div class="card-body" id="div-experiencias">
                        <label for="experiencia">Experiências Profissionais:</label><br/>
                        <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência profissional">Adicionar </button>
                        <div id="experiencia-form" style="display: none;">
                            <textarea name="experiencia" placeholder="Informe suas experiências profissionais" rows="4" required></textarea><br>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('#btn-adicionar-experiencia').click(function() {
                                $('#experiencia-form').toggle(); // Alterna a exibição do formulário de experiência profissional
                                $('#objetivo-form').hide(); // Esconde o formulário de objetivos se estiver aberto
                                $('#formacao-form').hide(); // Esconde o formulário de formação acadêmica se estiver aberto
                            });
                        });
                    </script>

                    <input type="submit" name="submit" value="Visualizar e Imprimir Currículo">
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; Versão: 1.0 - Todos os direitos reservados.</p>
    </footer>

    <script>
        $(document).ready(function() {
            // Your jQuery code here if needed
        });
    </script>
</body>
</html>

<?php
// Processamento do formulário
if (isset($_POST['submit'])) {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $estadocivil = $_POST['estadocivil'];
    $endemail = $_POST['endemail'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $dat = $_POST['dat'];
    $telefone = $_POST['telefone'];
    $objetivo = $_POST['objetivo'];
    $formacao = $_POST['formacao'];
    $experiencia = $_POST['experiencia'];

    // Aqui você pode processar os dados como desejar
    // Por exemplo, exibir em uma nova página ou gerar um arquivo PDF
}
?>
