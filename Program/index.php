<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>


    <form action="system.php" method="post">
        <h1>IMC</h1>
        <div class="card">
            <label for="peso"></label>
            <input type="text" id="peso" name="peso" placeholder="Seu peso" class="form__input" required>
            <br>
            <label for="altura"></label>
            <input type="text" id="altura" name="altura" placeholder="Altura em metros" class="form__input" required>
            <br>
            <input type="submit" value="Enviar" class="button">
        </div>
    </form>
</body>

</html>