<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora de anos bissextos</title>
    <link rel="stylesheet" href="estilo.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <section id="section">
        <div id="block">
           <header>
            <h1>CALCULADORA DE ANOS BISSEXTOS</h1>
           </header>
           <p>&emsp;Este é o resultado da data desejada
               <?php
               $dia = $_GET["dd"];
               $mes = $_GET["mm"];
               $ano = $_GET["year"];
               $radio = $_GET["radio"];
               if($ano ==""){
                   echo"ATENÇÃO!";
               }else{
                echo "<br>$dia/$mes/".($ano < 10? "0".$ano: $ano).($radio == 1?" d.C":" a.C");
               }
               ?>
           </p>
           <div id="res" style="height: 430px; margin-top: 50px; font-size: 30px" >
           
            <?php
            
            $d = $_GET["dd"];
            $m = $_GET["mm"];
            $y = $_GET["year"];
            $radio = $_GET["radio"];
            
            $ltYbis = 0;
            $bst = 0;
            $wd = 0;
            $k = 0;
            $ctr = 0;
            
            if($y < 0 || $y == "" ){
                echo "<script>alert('ERRO')</script>";
                echo "Por favor insira os dados corretamente!<br>Caso queira uma data a.C, selecione a opção.";
            
            }elseif($y > 9999 || $y < 0){
              
                echo "Insira uma data com ano entre 0 e 9999";
            
            }else{
    
                $ltYbis = 0;
                $ctr = 0;
                $k = -1;
                for ($i = 1; $i <= $y; $i++){
                    $ctr ++;
                    $k ++;
    
                    if($ctr == 4 && $i % 100 == 0 && ($i / 100) % 4 !== 0){
                        $ctr = 0;
                        $bst = false;                                
    
            }else if($ctr == 4){
                $k++;
                $ctr = 0;
                $bst = true;
                $ltYbis = $i;              
                
            }
            
            if($ctr == 0 && $k == 8){
                $k = 1;
            } 
    
            if($k == 7){
                $k = 0;
                
            }   
    
        }
        
        if($m ==  1 ||$m == 2){
            $jf = true;
        }else{
            $jf = false;
        }
        switch($m){
            case  1:
            case 10:
            $m = 1;
            break;         
            case 2:
            case 3:
            case 11:
            $m = 4;
            break;
            case 4:
            case 7:
            $m = 0;
            break;
            case 5:
            $m = 2;
            break;
            case 6:
            $m = 5;
            break;
            case 8: 
            $m = 3;
            break;
            case 9: 
            case 12:
            $m = 6;
            break; 
            default:
            $m = 'ERRO';        
        }
    
        if($d + $m + $k < 7){
            $wd = $d + $m + $k;
        } else {
            $wd = ($d + $m + $k) % 7;
        }
        if($jf == true && $bst == true && $ctr == 0){
            $wd--;
        }
        if($wd == -1){
            $wd = 6;
        }
        
        switch ($wd) {
            case 1:
            $wd = 'Domingo';
            break;
            case 2:
            $wd = 'Segunda-feira';
            break;
            case 3:
            $wd = 'Terça-feira';
            break;
            case 4:
            $wd = 'Quarta-feira';
            break;
            case 5:
            $wd = 'Quinta-feira';
            break;
            case 6:
            $wd = 'Sexta-feira';
            break;
            case 0:
            $wd = 'Sabado';
            break;
            default:
            $wd = 'ERRO';
         }if ($radio == 1){
                $yplus = $ltYbis + 4;
                $yminus = $ltYbis - 4;
                
                echo "O dia da semana é $wd e o ano "
               .($bst == true && $ctr == 0 ? 'é bissexto.':'não é bissexto.'). " O próximo ano bissexto é "
               .(($yplus % 100 == 0 && ($yplus / 100) % 4 !== 0 && $y > 4) == true ? ($ltYbis + 8)." d.C" : ($ltYbis + 4). " d.C"). 
                " e o anterior é ". ($y <= 4 ? ($ltYbis-=$ltYbis-4). " a.C" : (($yminus % 100 == 0 && ($yminus / 100) % 4 !== 0 && $ctr == 0) == true? 
                ($ltYbis - 8). " d.C" : ($y == $ltYbis ? ($ltYbis - 4) . " d.C" : $ltYbis . " d.C")));
        
            }else if ($radio == 2){
                $yplus = $ltYbis + 4;
                $yminus = $ltYbis - 4;
                
                echo "O dia da semana é $wd e o ano " 
               .($bst == true && $ctr == 0 ? 'é bissexto.':'não é bissexto.'). " O ano bissexto anterior é " 
               .(($yplus % 100 == 0 && ($yplus / 100) % 4 !== 0) == true ? ($ltYbis + 8) . " a.C" : ($ltYbis + 4). " a.C"). 
               " e o próximo é ". ($y <= 4 ? ($ltYbis-=$ltYbis-4). " d.C" : (($yminus % 100 == 0 && ($yminus / 100) % 4 !== 0 && $ctr == 0) == true? 
               ($ltYbis - 8). " a.C" : ($y == $ltYbis ? ($ltYbis - 4). " a.C" : $ltYbis . " a.C")));
            } 
    }
            ?>
            <p><a href="javascript:history.go(-1)" ><input type="submit" class="bt" value="VOLTAR"></a></p>
           <?php
           $data = date("d/m/Y \à\s\ H:i:s");          
                      
           echo "Consulta realizada em: <br/> $data";
           ?>

           </div>            
                  
        </div>       
   
    </section>   
    
</body>
</html>