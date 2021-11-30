<<<<<<< HEAD:formsac.php
<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $motivo = $_POST['motivo'];
        $mensagem = $_POST['mensagem'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, motivo, mensagem)
        VALUES ('$nome','$email','$motivo','$mensagem')");
    }

?>

<!DOCTYPE html>
<html lang=pt-BR>
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="Imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Imagens/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Sac Fansta</title>
    <link rel="stylesheet" href="stylesac.css">
</head>
<body>
<div class="box">
<form action ="formsac.php" method ="POST">
<fieldset>
    <legend>SAC Fansta games</legend><br>
    <div class="nome">
        <label for="name"> Nome: </label>
        <input type="text" name=nome id="name" placeholder="Seu nome completo" required>
    </div><br>
    <div class="email">
        <label for="email">E-mail: </label>
        <input type="email" name=email id="email" placeholder="Seu e-mail" required>
    </div><br>
    <div class="motivo">
        Motivo: <select name="motivo">
            <option value="Pedido">Pedido</option>
            <option value="Reclamação">Reclamação</option>
            <option value="Sugestão">Sugestão</option>
            <option value="Outros"selected>Outros</option>
        </select>
    </div><br>
    <div class="OBS">
    <label for=OBS> Escreva: </label>
<textarea id=OBS name=mensagem
rows="7" cols="50%" placeholder="Descreve o motivo do contato..." >
</textarea>
    </div><br>

    <div class="button">
        <Label for=ir> </Label>
        <input type="submit" name = "submit" value="Enviar" id="submit">
    </div>
</fieldset>
</form>
</div>
</body>
=======
<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $motivo = $_POST['motivo'];
        $mensagem = $_POST['mensagem'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, motivo, mensagem)
        VALUES ('$nome','$email','$motivo','$mensagem')");
    }

?>

<!DOCTYPE html>
<html lang=pt-BR>
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="Imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Imagens/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Sac Fansta</title>
    <link rel="stylesheet" href="stylesac.css">
</head>
<body>
<div class="box">
<form action ="formsac.php" method ="POST">
<fieldset>
    <legend>SAC Fansta games</legend><br>
    <div class="nome">
        <label for="name"> Nome: </label>
        <input type="text" name=nome id="name" placeholder="Seu nome completo" required>
    </div><br>
    <div class="email">
        <label for="email">E-mail: </label>
        <input type="email" name=email id="email" placeholder="Seu e-mail" required>
    </div><br>
    <div class="motivo">
        Motivo: <select name="motivo">
            <option value="Pedido">Pedido</option>
            <option value="Reclamação">Reclamação</option>
            <option value="Sugestão">Sugestão</option>
            <option value="Outros"selected>Outros</option>
        </select>
    </div><br>
    <div class="OBS">
    <label for=OBS> Escreva: </label>
<textarea id=OBS name=mensagem
rows="7" cols="50%" placeholder="Descreve o motivo do contato..." >
</textarea>
    </div><br>

    <div class="button">
        <Label for=ir> </Label>
        <input type="submit" name = "submit" value="Enviar" id="submit">
    </div>
</fieldset>
</form>
</div>
</body>
>>>>>>> 4fb16bf8a58e07071ab77069a2dbf5c215f7815f:formsac.html
</html>