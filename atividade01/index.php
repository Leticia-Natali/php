<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <div class="fundo">
            <div class="fbase">
                <div class="base">
                    <label for="base">Qual a base do triângulo:</label><br>
                    <input type="number" id="base" name="base">
                </div>
                <div class="altura">
                    <label for="altura">Qual a altura do triângulo:</label><br>
                    <input type="number" id="altura" name="altura">
                </div>
                <br>
                <div class="enviar">
                    <button type="submit" name="triangulo">Enviar</button>
                </div>
            </div>
        </div>
    </form>

        <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_POST['triangulo'])){
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;

        if($area > 100){
            echo "A área do triângulo é maior que o limite.";
        }else{
            echo "A área é menor do que o limite.";

                }
            }
        }
    ?>
</body>
