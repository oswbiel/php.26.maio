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
        <form action="recebe_comentario.php" method="post">
            <div>
                <input type="text" name="nome" placeholder="digite seu nome" required>

            </div>
            <div>
                <textarea name="comentario" rows="10" placeholder="digite seus comentarios" required>
                </textarea>
            </div>
            <div>
                <input type="submit" value="salvar">
            </div>
    </div>
</body>

</html>