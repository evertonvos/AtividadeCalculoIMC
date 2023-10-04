<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset="utf-8">
    	<title>Título da página</title>
    </head>
    
    <body>
         <p>Entre com os dados necessários</p>
         
     <form>
          Peso: <input name="peso">
          <br/>
          Altura: <input name="altura">
          </br>
          <button>Calcular IMC </button>
     </form>
         <?php
            if (isset($_GET["peso"]) )
            if (isset($_GET["altura"]) ){
             
             $peso = $_GET["peso"];
             $altura = $_GET["altura"];
             $IMC = ($peso / ($altura*$altura));
          

           echo "<p> Seu IMC é: $IMC</p>";
            if ($IMC < 18.5){
               echo "<p>Sua Classificação é: Abaixo do peso</p>";
          }else if ($IMC < 25){
               echo "<p>Sua Classificação é: Peso Normal</p>";
          }else if ($IMC < 30){
               echo "<p>Sua Classificação é: Excesso de peso</p>";
          }else if ($IMC < 35){
               echo "<p>Sua Classificação é: Obesidade Classe I</p>";
          }else if ($IMC < 40){
               echo "<p>Sua Classificação é: Obesidade Classe II</p>";
          }else  {
               echo "<p>Sua Classificação é: Obesidade Classe III</p>";
          }
          
          } 
          ?>


     </body>	

</html>