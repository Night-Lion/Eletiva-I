<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercicio 12</h1>
        <form method="post">
            <p>Gerador de senha aleatória: </p>
            <button type="submit" class="btn btn-primary">Gerar senha</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <br>
        <br>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    echo "<h1>Resposta:</h1>";
                    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    $senha = "";
                    for ($i = 0; $i < 8; $i++)
                        {
                            $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
                        }
                    echo "<p>Senha: $senha</p>";
                }
        ?>
    </div>
</body>
</html>