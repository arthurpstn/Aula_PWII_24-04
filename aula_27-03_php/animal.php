<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="content mt-5">
        <div class="row justify-content-center">
              <div class="col-12 col-sm-8 col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label>Selecione um animal...</label>
                        <select name="animal" id="animal" class="form-control form-control-lg">
                            <option value="">Selecione...</option>
                            <option value="1">Tralalero Tralala</option>
                            <option value="2">Bombardillo Crocodilo</option>
                        </select>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-12 col-sm-6 col-md-4">
                            <button type="submit" class="btn btn-outline-danger btn-lg btn-block">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-sm-8 col-md-6 border rounded">
                        <?php
                        if(isset($_POST['animal'])){
                            if($_POST['animal'] == '1'){
                                echo '<img src="imgs/tralalero.jpg" alt="animal" class="img-fluid p-2 rounded">';
                            }else{
                                echo '<img src="imgs/bombardilo.jpg" alt="animal" class="img-fluid p-2 rounded">';
                            }
                        }else{
                            echo '<div class="row mt-5 justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <div class="alert alert-warning">
            <h1 class="display-4 text-center">
                Selecione um animal!
            </h1>
        </div>
    </div>
</div>';
                        }
                        ?>

                    </div>
                </div>
        </div>
    </div>
</body>
</html>