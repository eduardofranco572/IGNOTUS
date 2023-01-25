<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        $resposta = $_POST['resposta'];//essa puxa a resposta que o usuario mandar
        // $respostacerta = $_POST['respostacerta'];//essa puxa a resposta certa que tu deve coloca em um input tipo hidden na pagina anterior
        $pagina = $_POST['pagina'];//aqui tu vai puxa o nome da pagina  que tu deve coloca em um input tipo hidden na pagina anterior, dica coloca como numero
        $arraypaginas = array("F1.php","F2.php","F3.php","F4.php","F5.php","F6.php","F7.php","F8.php","F9.php","F10.php","F11.php","F12.php");//aqui to coloca o nome das paginas
        $respostacerta = array("","","","","","","","","","","","");
        //as respostas foram retiradas pois a um possivel retorno do projeto para o foturo!
        $a = array(
            "F1" => 0,
            "F2" => 1,
            "F3" => 2,
            "F4" => 3,
            "F5" => 4,
            "F6" => 5,
            "F7" => 6,
            "F8" => 7,
            "F9" => 8,
            "F10" => 9,
            "F11" => 10,
            "F12" => 11,
            "F13" => 12,
            "F14" => 13,


        );

    // echo"".$a["pagina1"];
    // echo"".$a[$pagina];
    // echo"".$arraypaginas[$a[$pagina]];

    if( $resposta == $respostacerta[$a[$pagina]]){
        echo"<script>window.location.href='".$arraypaginas[$a[$pagina]+1]."'</script>"; 

        //usa um script de java para manda o cara para a proxima pagina, so que usando o array
        //tipo (script(onde coloca a pagina para ir tu coloca $arraypaginas[$pagina++;])), para ir para a proxima pagina do puzzle

    }else{
         echo"<script>alert(' !ERROR! - Try Again ')</script>";
         echo"<script>window.location.href='".$arraypaginas[$a[$pagina]]."'</script>"; 

        //tu faz um script para dar um alerta e mandar para pagina
        //tipo (script(onde coloca a pagina para ir tu coloca $arraypaginas[$pagina])), para ir para a pagina que ele erro do puzzle
        }
        ?>
    </body>
</html>
