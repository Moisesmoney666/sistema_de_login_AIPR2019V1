<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Crie uam nova senha</title>
</head>

<body>
    <main clsse="container">

        <section class="row justify-content-center">

            <div class="col-lg-5 mt-5">
                <h3 class="text-center bg-dark text-light p-2 rounded  ">
                    Crie uma nova senha
                </h3>
                <h4 clss="text-center">
                    <?= @$msg ?>
                </h4>
                <form action="" method="post">
                    <div class="form-group">
                        <label>
                            Nova Senha
                        </label>
                        <input type="password" name="senha" class="form-control" placeholder="Nova Senha" required>

                    </div>

                    <div class="form-group">
                        <label>
                            Confirme a Senha
                        </label>
                        <input type="password" name="csenha" class="form-control" placeholder="Confirme a Senha" required>
                    </div>
                    <div class="form-group">
                            <input type="submit" value="::Criar nova senha::"name="criar"class=" btn btn-primary  btn-block"style="background-color:deepskyblue; color:white; font-wight:border; padding: 10px; font-size: 22px; box-shadow:3px 3px 5px black " > 
                    </div>

                </form>


        </section>

    </main>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>