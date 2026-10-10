<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $responsavel = $_POST["responsavel"];
    $empresa = $_POST["empresa"];
    $projeto = $_POST["projeto"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $prazo = $_POST["prazo"];
    $pago = $_POST["pago"];

    $novoOrcamento = [

    "responsavel" => $responsavel,
    "empresa" => $empresa,
    "projeto" => $projeto,
    "telefone" => $telefone,
    "email" => $email,
    "prazo" => $prazo,
    ];

    $conteudoJson = file_get_contents(__DIR__ . "/dados/orcamentos.json");
    $orcamentos = json_decode($conteudoJson, true);
    $orcamentos[] = $novoOrcamento;

    $jsonAtualizado = json_encode(
        $orcamentos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents(__DIR__ . "/dados/orcamentos.json", $jsonAtualizado);
}

$conteudoJson = file_get_contents(__DIR__ . "/dados/orcamentos.json");
$orcamentos = json_decode($conteudoJson, true);

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

        <?php foreach($orcamentos as $orcamento){?>
        <p>Responsavel: <?= $orcamento["responsavel"] ?></p>
        <p>Empresa: <?= $orcamento["responsavel"] ?></p>
        <p>Projeto: <?= $orcamento["responsavel"] ?></p>
        <p>Telefone: <?= $orcamento["responsavel"] ?></p>
        <p>Email: <?= $orcamento["responsavel"] ?></p>
        <p>Prazo: <?= $orcamento["responsavel"] ?></p>

        <button class=""></button>



        
     
    
    
    
    
    
    
    
    </div>


    
    
</body>
</html>