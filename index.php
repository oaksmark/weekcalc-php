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
    
    <section id="section" >
        <div id="block">
           <header>
            <h1>CALCULADORA DE ANOS BISSEXTOS</h1>
           </header>
            <p>Calcule aqui a data desejada</p>
            
            <!--para alterar para php iclua um form aqui-->
                <form method="GET" action="calculator.php">
                <div><p>Dia: 
                    <select class="inpt" name="dd" id="dd">
                        <?php 
                            for($i=1;$i<=31;$i++):
                                ?>
                                <option value="<?php echo $i?>"><?php echo $i?></option>
                                <?php 
                            endfor ?>
                    </select></p>
                </div>
                
                <div><p>Mês: 
                    <select class="inpt" name="mm" id="mm">
                        <?php
                            $m = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
                            for($i=0;$i<12;$i++):
                                ?> 
                                <option value="<?php echo $i?>"><?php echo $m[$i]?></option>
                                <?php
                            endfor ?>
                    </select></p>
                </div>
                <p>Ano: <input type="number" class="inpt" placeholder="  Digite o ano" name="year" id="yyyy" min="0" max="9999"></p>
                
                <label class="container">d.C
                    <input type="radio" id="dc"name="radio" value="1" checked="checked">
                    <span class="checkmark"></span>
                </label>
                    <label class="container">a.C
                    <input type="radio" id="ac" name="radio" value="2">
                    <span class="checkmark"></span>
                </label>
                <p><input type="submit" class="bt" value="CALCULAR"id="calcular"></p>
                <p id="res">Saiba o dia da semana da data desejada e se o ano é bissexto de acordo com o calendário 
                    <a href="https://pt.wikipedia.org/wiki/Ano_bissexto#Calend%C3%A1rio_Gregoriano" target="balnk" >Gregoriano. </a>
                </p>      
            </div>

            </form>
        <!--feche o form aqui-->
       
    
    </section>
    <script type="text/javascript" src="script.js"></script>
    
</body>
</html>