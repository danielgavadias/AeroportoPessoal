<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $responsavel = $_POST["responsavel"];
    $empresa = $_POST["empresa"];
    $projeto = $_POST["projeto"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $prazo = $_POST["prazo"];

    $orcamentos = [

    "responsavel" => $responsavel,
    "empresa" => $empresa,
    "projeto" => $projeto,
    "telefone" => $telefone,
    "email" => $email,
    "prazo" => $prazo,
    ];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro</title>
</head>
<body>
    
    <div class="Nav-bar">
        <img src="imgHtml/Gemini_Generated_Image_5kpxl15kpxl15kpx-removebg-preview.png" alt="">
        <a href="index.html">INICIO</a>
        <a href="solicitar_projeto.html">ORÇAMENTO</a>
        <a href="financeiro.php">FINANCEIRO</a>
        <a href="juridico.php">JURIDICO</a>
        <a href="#">PROJETOS</a>
        <a href="#">DESENVOLVIMENTO</a>
    </div><!--Nav-bar-->

    <!-- Cabeçalho principal -->
     <div class="cabecalho">
        <h1>FINANCEIRO</h1>
        <p>Consulte os projetos que ainda aguardam confirmação de pagamento</p>

        
     
    
    
    
    
    
    
    
    </div>


    
    
</body>
</html>