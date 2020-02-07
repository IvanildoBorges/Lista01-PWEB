<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 3</title>
</head>
<body>
    
<form action="pessoa.php" method="get">
    Informe o nome <input type="text" name="nome">
    <br>
    Informe o sexo 
    <input type="radio" name="sex" value="M"> M
    <input type="radio" name="sex" value="F"> F
    <br>
    Qual sua idade? <input type="number" name="idade" min="1" max="200">
    <br>
    <input type="submit" name="ok" values="Enviar">

</form>

</body>
</html>