<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <!-- creiamo un form con il method="get" che poi l'azione verra trasferita al server.php -->
    <form action="server.php" method="get">

        <div class="word-censured">
            <!-- input dove il client inserisce una parola -->
            <label for="word">Insert the word censured: </label>
            <input type="text" name="word" id="word">
        </div>

        <div class="paragraph">
            <!-- textarea dove il client inserisce un paragrafo -->
            <label for="paragraph">Insert the paragraph: </label>
            <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
        </div>


        <!-- bottone che manda i dati -->
        <button type="submit">click me!</button>
    </form>

</body>
</html>