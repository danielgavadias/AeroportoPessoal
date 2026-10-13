<?php 
    
if (isset($_POST["pagar"])) //Verifica SE o orçamento já foi pago
{   
    $indice = $_POST["indice"];

    $conteudoJson = file_get_contents(__DIR__ . "orcamentos.json");
    $orcamentos = json_decode($conteudoJson, true);

    if (isset($orcamentos[$indice])) 

    {
        $orcamentos[$indice]["pago"] = true;

        $jsonAtualizado = json_encode(
            $orcamentos,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        file_put_contents(__DIR__ . "orcamentos.json",$jsonAtualizado);
    }
} 

elseif ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $responsavel = $_POST["responsavel"];
    $empresa = $_POST["empresa"];
    $projeto = $_POST["projeto"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $prazo = $_POST["prazo"];
    $pago = false;

    $novoOrcamento = [
        "responsavel" => $responsavel,
        "empresa" => $empresa,
        "projeto" => $projeto,
        "telefone" => $telefone,
        "email" => $email,
        "prazo" => $prazo,
        "pago" => $pago
    ];

    $conteudoJson = file_get_contents(__DIR__ . "orcamentos.json");
    $orcamentos = json_decode($conteudoJson, true);
    $orcamentos[] = $novoOrcamento;

    $jsonAtualizado = json_encode
    (
        $orcamentos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents(__DIR__ . "orcamentos.json", $jsonAtualizado);
}

$conteudoJson = file_get_contents(__DIR__ . "orcamentos.json");
$orcamentos = json_decode($conteudoJson, true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro</title>
</head>
<body>
    
<form method="POST">
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

    <div class="orcamento">

        <?php foreach($orcamentos as $indice => $orcamento){?>
        <p>Responsavel: <?= $orcamento["responsavel"]?></p>
        <p>Empresa: <?= $orcamento["empresa"]?></p>
        <p>Projeto: <?= $orcamento["projeto"]?></p>
        <p>Telefone: <?= $orcamento["telefone"]?></p>
        <p>Email: <?= $orcamento["email"]?></p>
        <p>Prazo: <?= $orcamento["prazo"]?></p>

        <?php if($orcamento["pago"] == false){?>
            
        <input type="hidden" name="indice" value="<?= $indice; ?>">   
        
        <button class="submit" name="pagar">
            O PAGAMENTO JÁ FOI EFETUADO: ATUALIZAR
        </button>

        <?php }} ?>
    
    </div>

    </form> 
</body>
</html>