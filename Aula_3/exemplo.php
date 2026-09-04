<!-- Vanessaborges2.github.io/Gerador-Formulario !-->
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exemplo de Funções em PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exemplo de Funções em PHP</h1>
        <br>
        <h4>Formulário</h4>
        <form method="post"><!----- NÃO HÁ ACTION, POIS O PHP ESTÁ NA MESMA PAGINA(ARQUIVO) !-----> 
            <div class="mb-3">
                <label for="nome" class="form-label">Informe o seu nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Informe a sua idade:</label>
                <input type="number" id="idade" name="idade" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

        <!----- PROGRAMAÇÃO EM PHP ! ----->
        <br>
        <h4>PHP - Funções</h4>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $nome = $_POST["nome"] ?? "";
                $idade = $_POST["idade"] ?? 0;
                
                if($nome != "" && $idade > 0)
                {
                    #----- FUNÇÃO COM CARACTERES(STRING) -----#
                    $qtd = strlen($nome);
                    echo "<p>Quantidade de caracteres do nome: $qtd</p>";
                    echo "<p>Maiúsculo: " . strtoupper($nome) . "</p>";
                    
                    $s = str_replace("a", "4", $nome);
                    echo "<p>Substituição do caracter a: $s </p>";
                    
                    $dia = date("d");
                    echo "<p>Dia: $dia</p>";
                    $mes = date("m");
                    echo "<p>Mês: $mes</p>";
                    $tempo = date("d/m/Y H:i:s");

                    #----- FUNÇÕES COM NÚMERO(INT) -----#
                    $exp = pow($idade, 2);
                    echo "<p>Exponencial: $idade</p>";

                    $valor = rand(1, 10);
                    echo "<p>Valor aleatório: $valor</p>";

                    $resultado = 3 / 9;
                    $resultado = number_format($resultado, 2, ",", ".");
                    echo "<p>Resultado formatado (pt-BR): $resultado</p>";
                }
            }
        ?>
    </div>
</body>
</html>