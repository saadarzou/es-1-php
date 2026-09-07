<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

   <form method="post">
    //l'utente inserisce una parola
    Inserisci una parola: <input type="text" name="parola">

    <br>
    <br>
     //creo il bottone
    <input type="submit" value="controlla">


   </form>




     <?php
      // array con parole censurate
      $paroleCensurate = array("stupido","scemo","coglione","negro","gay","idiota");

      //CONTROLLA SE IL TESTO ESISTE
      if (isset($_POST["parola"])){

      //prende il testo inserito dall'utente
      $testo = $_POST["parola"];git 

      //divide la frase in parole in base asllo spazio
      $parole = explode(" ",$testo);

    //creo un array per inserire le parole non censurate
      $lista = array();

      for($i=0;$i<6;$i++){

       if (in_array($parole[$i], $paroleCensurate)) {

            // Se è vietata, metto ***
            $lista[] = "***";

        } else {

            // Se non è vietata, lascio la parola uguale
            $lista[] = $parole[$i];
        }
      }



      }




     ?>
</body>
</html>