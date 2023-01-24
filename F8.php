<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="imagem/png" href="img/Ignotus.png" />
    <title>Document</title>
</head>
<style>
     .by{
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        text-align: center;
        height: auto;
        color: white;
        font-size: 1rem;
        font-family: Helvetica, sans-serif;
        
    }

     .texto4{
        text-align: center;
        color: white;
        font-size: 1.5rem;
        font-family: Helvetica, sans-serif;
        margin-top: 1rem;
    }
    @media (max-width: 500px){

        .input {
            margin-top: 1rem;
            width: 18rem;
            height: 2rem;
            border-radius: 10px;
            border: none;
            font-size: 1rem;
        }
        .texto4{
            color: white;
            font-size: 0.5rem;
            font-family: Helvetica, sans-serif;
            margin-top: 1rem;
            text-align: center;
        }
    }
</style>
<body>
   

    <div class="container">
        
        <h1 class="texto4">I used to live in Merano, but then I saw something in the sky and decided to travel, so I went to Bolzano, Bressanone, Vipiteno, Pertisau, Tegernsee, Kufstein, Kitzbuhel, Krimml, San Candido, Cortina d'Ampezzo, Fomi di Sopra, Tolmezzo, Ukanc, and finally arrived in the municipality of Cerkno</h1>

        <form method="post" action="verifica.php">
            <input class="input" type="text" name="resposta" id="res" size="25" /><br/>
            <input class="input" type="hidden" name="pagina" value="F8" size="25" /><br/>
            <input class="botao" type="submit" name="enviar" value="Next" />

        </form>
            <div class="by">
                <p>By: Eduardo Franco, Gabriel Duque</p>
            </div>

    </div>

</body>
</html>
