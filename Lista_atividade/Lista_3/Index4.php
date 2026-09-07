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
        <h1>Exercicio 4</h1>
        <form method="post">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe um dia:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
                <label for="valor2" class="form-label">Informe um mês:</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
                <label for="valor3" class="form-label">Informe um ano:</label>
                <input type="number" id="valor3" name="valor3" class="form-control" required="">
                </div><div class="mb-3">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <br>
        <br>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $dia = $_POST["valor1"];
                    $mes = $_POST["valor2"];
                    $ano = $_POST["valor3"];

                    echo "<h1>Resposta:</h1>";

                    if (checkdate($mes, $dia, $ano))
                    {
                        $data = date("d/m/Y", mktime(0, 0, 0, $mes, $dia, $ano));

                        echo "<p>Data válida: $data</p>";
                    }
                    else
                    {
                        echo "<p>Data inválida!</p>";
                    }
                }
        ?>
    </div>
</body>
</html>