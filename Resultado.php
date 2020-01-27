<?php
if(isset($_POST['enviar'])){
    $PrimerNumero = $_POST['PrimerNumero'];
    $SegundoNumero = $_POST['SegundoNumero'];
    $PrimerFactorial = 1;
    $SegundoFactorial = 1;
    for($contador=1;$contador<=$PrimerNumero;$contador++){
        $PrimerFactorial = $PrimerFactorial*$contador;
    } 
    for($contador=1;$contador<=$SegundoNumero;$contador++){
        $SegundoFactorial = $SegundoFactorial*$contador;
    } 
    $PrimerPrimo = 0;
    $SegundoPrimo = 0;
    for($contador=2;$contador<=($PrimerNumero-1);$contador++){
        $Modulo = $PrimerNumero%$contador ;
        if($Modulo == 0){
            $PrimerPrimo = $PrimerPrimo+1;
        }
    } 
    for($contador=2;$contador<=($SegundoNumero-1);$contador++){
        $Modulo = $SegundoNumero%$contador ;
        if($Modulo == 0){
            $SegundoPrimo = $PrimerPrimo+1;
        }
    } 
    if ($PrimerPrimo == 0) {
        $PrimerPrimo = "Es primo";
    }
    else{
        $PrimerPrimo = "No es primo";
    }
    if ($SegundoPrimo == 0) {
        $SegundoPrimo = "Es primo";
    }
    else{
        $SegundoPrimo = "No es primo";
    }
    $PrimerSuma = 0;
    $SegundaSuma = 0;
    for($contador=1;$contador<=$PrimerNumero;$contador++){
        $PrimerSuma = $PrimerSuma+$contador;
    }
    for($contador=1;$contador<=$SegundoNumero;$contador++){
        $SegundaSuma = $SegundaSuma+$contador;
    }
    $PrimerSumaP = 0;
    $PrimerSumaI = 0;
    $SegundaSumaP = 0;
    $SegundaSumaI = 0;
    for($contador=0;$contador<=$PrimerNumero;$contador++){
        $Modulo = $contador%2 ;
        if($Modulo == 0){
            $PrimerSumaP = $PrimerSumaP+$contador;
        }
        else{
            $PrimerSumaI = $PrimerSumaI+$contador;
        }
    } 
    for($contador=0;$contador<=$SegundoNumero;$contador++){
        $Modulo = $contador%2 ;
        if($Modulo == 0){
            $SegundaSumaP = $SegundaSumaP+$contador;
        }
        else{
            $SegundaSumaI = $SegundaSumaI+$contador;
        }
    } 

}
echo'
<html>
    <body>
        <form name="Tarea3" action=" " method=" ">
            <table align="center" border="1">
            <tr>
                <td>Este es el factorial del numero '.$PrimerNumero.' = </td>
                <td>'.$PrimerFactorial.'</td>
            <tr>
            <tr>
                <td>Este es el factorial del numero '.$SegundoNumero.' = </td>
                <td>'.$SegundoFactorial.'</td>
            <tr>
            <tr>
                <td>El numero '.$PrimerNumero.' = </td>
                <td>'.$PrimerPrimo.'</td>
            <tr>
            <tr>
                <td>El numero '.$SegundoNumero.' = </td>
                <td>'.$SegundoPrimo.'</td>
            <tr>
            <tr>
                <td>Este es la suma de pares del numero '.$PrimerNumero.' = </td>
                <td>'.$PrimerSumaP.'</td>
            <tr>
            <tr>
                <td>Este es la suma de impares del numero '.$PrimerNumero.' = </td>
                <td>'.$PrimerSumaI.'</td>
            <tr>
            <tr>
                <td>Este es la suma de pares del numero'.$SegundoNumero.' = </td>
                <td>'.$SegundaSumaP.'</td>
            <tr>
            <tr>
                <td>Este es la suma de impares del numero'.$SegundoNumero.' = </td>
                <td>'.$SegundaSumaI.'</td>
            <tr>
            </table>
        </form>

    </body>
</html>'
?>

