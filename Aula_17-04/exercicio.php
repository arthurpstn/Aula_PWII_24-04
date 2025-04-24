<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="conteiner mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 alert alert-danger">
        <h2 class="text-dark text-center border-bottom">
        Quais são numeros primos? (somente positivos)
        </h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Digite um numero:</label>
                <input type="number" name="numero" class="form-control form-control-lg ">
                <input type="submit" name="enviar" value="Enviar" class="btn btn-outline-danger btn-lg btn-block">
            </div>
            <div class="form-group">
                <label>Resultado:</label>
                <?php
                    if(isset($_POST['enviar'])){
                        $numero = $_POST['numero'];
                        $num = 0;
                        for($i=1; $i<=$numero; $i++){
                            if($numero % $i == 0){
                                $num++;
                            }
                        }
                        if($num <= 0){
                            echo "Digite um numero positivo";

                        }
                        elseif($num == 2){
                            echo "O numero $numero é primo";
                        }else{
                            echo "O numero $numero não é primo";
                        }
                    }
                ?>
            </div>
        </form>
        </div>
    </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
</body>
</html>