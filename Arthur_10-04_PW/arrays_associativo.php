<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
     <div class="conteiner mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h2 class="text-dark text-center border-bottom">
                    Trabalhando com array associativo
                </h2>
                <h4 class="text-dark mt-3">
                    Declarando um Array em PHP:
                </h4>
                <h5 class="text-dark mt-3">
                    Primeira maneira
                </h5>
                <h6>
                    <p class="text-dark mt-3">
                        $dados = array('Professor' => 'Adriano', 'disciplina' => 'PWII', 'dia de aula' => 'quinta');
                    </p>
                </h6>
                <h5 class="text-dark mt-3">
                    Segunda maneira(Simplificada)
                    </h5>
                    <h6>
                    <p class="text-dark mt-3">
                        $dados = ['Professor' => 'Adriano', 'disciplina' => 'PWII', 'dia de aula' => 'quinta'];
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
                <?php
                $dados = array('Professor' => 'Adriano', 'disciplina' => 'PWII', 'dia de aula' => 'quinta');
                var_dump($dados);
                ?>
                <h4 class="text-dark mt-3">
                    Adicionando elemento ao array:
                </h4>
                <p>
                    $dados[] =;
                    <h5>
                    <?php
                $dados = ['Banana','Maça','Goiaba'];
                $dados[] = ['Melão'];
                var_dump($dados);
                ?>
                    </h5>
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