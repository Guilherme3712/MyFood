<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
   
    <div style="background-image: url('image/login.png'); height: 100vh;">
        <div style="padding-top: 300px">
            <div class="card cardlogin border" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title">Falta pouco para matar sua fome!</h2>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Como deseja continuar?</h6>
                    <div class="form m-2">
                    <form action="validar" method="post">
                        <label for="usuario">Usuário:</label>
                        <input type="text" name="usuario" id="usuario">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha">
                        <input type="submit" value="Enviar">
                    </form>
                </div>    
            </div>
        </div>
    </div> 
      
    <script src="js/bootstrap.js"></script>
</body>
</html>