<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
     <div class="conteiner mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                    <h2 class="text-dark text-center border-bottom">
                        Trabalhando com array
                    </h2>
                <h4 class="text-dark mt-3">
                    Declarando um Array em PHP:
                </h4>
                <h5 class="text-dark mt-3">
                    Primeira maneira
                </h5>
                <h6>
                    <p class="text-dark mt-3">
                        $dados = array('Banana', 'Maça', 'Goiaba')
                    </p>
                </h6>
                <h5 class="text-dark mt-3">
                    Segunda maneira(Simplificada)
                    </h5>
                    <h6>
                    <p class="text-dark mt-3">
                        $dados = ['Banana', 'Maça', 'Goiaba'];
                    </p>
                    </h6>
                <h4 class="text-dark mt-3">
                    Verificando conteudo do array:
                </h4>
                <h6 class="text-dark mt-3">
                <p class="text-dark mt-3">
                    var_dump($dados);
                </p>
                </h6>
                <h5>
                <?php
                $dados = array('Banana','Maça','Goiaba');
                var_dump($dados);
                ?>
                </h5>
                <h4 class="text-dark mt-3">
                    Adicionando elemento ao array:
                </h4>
                <p>
                    $dados[] ='Melão';
                <h5>
                <?php
                $dados[] ='Melão';
                var_dump($dados);
                ?>
                </h5>
                </p>
                <h4 class="text-dark mt-3">
                    Imprimindo um array:
                </h4>
                <p class="text-dark mt-2">
                foreach($dados as $dado){<br>
                    echo $dado;<br>
                }
                </p>
                <p class="text-dark">
                <ul class="text-dark">
                <?php
                 foreach($dados as $dado){
                    echo "<li>$dado</li>";
                 }
                ?>
                </ul>
                </p>
                <h4 class="text-dark mt-3">
                    Imprimindo um indice especifico:
                </h4>
                <p class="text-dark mt-2">
                    echo $dados[2];
                </p>
                <?php
                 $dados = ['Banana','Maça','Goiaba'];
                 $dados[] = ['Melão'];
                 echo "<h5>".$dados[2]."</h5>";
                ?>
            </div>
        </div>
     </div>
    </form>
</body>
</html>