<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>VEstilo | Controle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>


<div class="container">
    <hr class="prettyline">
    <br>
    <div style="text-align: center">
        <h1><b>VESTILO</b></h1>
        <h3>Sistema de controle</h3>

        <!-- Inicio do box de acesso -->
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Usuário:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <br>
    <hr class="prettyline">
</div>


<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

</div>

</body>
</html>