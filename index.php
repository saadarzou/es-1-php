<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

   <form method="post">
    <!--l'utente inserisce una parola-->
    Inserisci una parola: <input type="text" name="parola">

    <br>
    <br>
     <!--creo il bottone-->
    <input type="submit" value="controlla">


   </form>




     <?php
      // array con parole censurate
      $paroleCensurate = array("stupido","scemo","coglione","negro","gay","idiota");

      //CONTROLLA SE IL TESTO ESISTE
      if (isset($_POST["parola"])){

      //prende il testo inserito dall'utente
      $testo = $_POST["parola"];

      //divide la frase in parole in base allo spazio
      $parole = explode(" ",$testo);

      //creo un array per inserire le parole non censurate
      $lista = array();

      for($i=0; $i < count($parole); $i++){


        //controlla se fra le parole esiste una che deve essere censurata
        if(in_array($parole[$i], $paroleCensurate)){
          $lista[$i]="****";
        }else{
          $lista[$i]=$parole[$i];
        }

       


      }

     // riunisce le parole dell?'arrray lista mettendo uno spazio tra di loro
        $testoCensurato = implode(" ",$lista);

        echo $testoCensurato;



      }




     ?>
</body>
</html>