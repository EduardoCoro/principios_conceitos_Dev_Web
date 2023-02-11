<?php
    var_dump ($_POST);

    $n1 ='';
    $n2 ='';
    $Result ='';
    $btn='';

    if(! empty($_POST)){
        
            $n1 = $_POST['txtN1'];
            $n2 = $_POST['txtN2'];

            $btn = $_POST['btnAção'];

            if( $btn =="+")
                $Result = $n1 + $n2 ;
            else if( $btn =="-")
                $Result = $n1 - $n2;
            else if( $btn =="/"){
                if($n1 == 0 || $n2 == 0){
                    $Result="Divisão por 0 (ZERO) é inválida";
                }
                else{
                    $Result = $n1 / $n2; 
                }        
            }  
            else
                $Result = $n1 * $n2;   
        
    }
?>


<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>Calculadora </title>
        <meta charset="utf-8";
    </head>
    <body>
        <form action="" method="post">
            <br><br>
            <label>N1:</label><input type="text" name="txtN1" value="<?php echo $n1; ?>"><br><br>
            <label>N2:</label><input type="text" name="txtN2" value="<?php echo $n2; ?>"><br>
            <br>
            <input name="btnAção" type="submit" value="+">
            <input name="btnAção" type="submit" value="-">
            <input name="btnAção" type="submit" value="/">
            <input name="btnAção" type="submit" value="*">
            <br><br>
            <label>Resultado <?php echo "$n1 $btn $n2 : $Result" ?></label>
        </form>    
    </body>    
</html>
    