<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
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
            max-width: 1000px;
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

    <title>Como Usar - Gerador de Currículos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Como Usar</h1>
    <p>
        Aqui você encontrará um tutorial detalhado sobre como preencher o formulário para criar seu currículo utilizando nosso gerador.
    </p>
    <p>
        Instruções:
        <ol>
            <li>Preencha todos os campos obrigatórios.</li>
            <li>Adicione suas informações pessoais, objetivos, qualificações e experiências.</li>
            <li>Se desejar, inclua uma foto e revise todas as informações antes de enviar.</li>
            <li>Clique no botão "Visualizar e Imprimir Currículo".</li>
        </ol>
    </p>
</body>
</html>
