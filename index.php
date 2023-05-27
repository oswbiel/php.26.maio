<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>TESTE PHP</title>
</head>
<body>
    <div class="container">
        <div><a href="comentar.php">comentario</a></div>
        <?php
            echo '<h1> Testes com PHP</h1>';
            $nome = " Oswaldo";
            echo '<br>meu nome é'.$nome;
            echo "<br>Meu nome é $nome";

            $a = 3;
            $b = 7;
            echo '<br>' .$a+$b;
            if($a>$b){
                echo '<p>a é maior que b</p>';
            
            }elseif($b>$a){
                echo '<p>b é maior que a</p>';
            }else{
                echo '<p>são iguais</p>';
            }
            
        ?>
    
    </div>
</body>
</html>