<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login cliente</title>
</head>
<body>
    <div class= "caixa">
        <form action="verificar_login.php" method="post">
            <label for="login">login</label>
            <input type="text" name="login">
            <label for="senha">senha</label>
            <input type="password" name="senha">

            <input type="submit" value="Entrar" name="entrar">
        </form>
    </div>
   <style>
       body{
            color:white; 
            background-size: 100vw 100vh;
            background-image: url("https://www.mazag.com.br/wp-content/uploads/2015/01/paralax-home.jpg");
        }
    </style>    
</body>
</html>