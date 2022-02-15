<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Iflooruflooring</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="../img/logotipo.png" alt="logo">
        </div>
        <div class="boxlogin">
            <header>
             <h1>Login</h1>   
            </header><br><br>
            <div class="form">
                <form action="../testelogin.js" method="post">
                <div class="forminput">
                   <input type="email" name="email" id="email" class="form_input" autocomplete="off"placeholder=""requerid>
                   <label for="email"class="form_label">E-mail</label>
                   <br><br><br>
                    <input type="password" name="senha" id="senha"class="form_senha"placeholder="" requerid>
                    <label for="senha"class="form_label">Senha</label>
                </div>
                <div class="submit">
                    <button type="submit" name="entrar" id="entrar">Entrar</button>      
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="testelogin.js"></script>
</body>
</html>