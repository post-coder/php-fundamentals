<?php 

$parole = ['boolean', 'corso', 'studente'];

$parolaDaCercare = $_GET['parola'] ?? '';

$isWordInTheList = in_array($parolaDaCercare, $parole);

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack PHP</title>

  <style>
    .red {
      color: red;
    }

    .green {
      color: green;
    }
  </style>
</head>
<body>

  <h1>Snack PHP</h1>

  <h2>Invio parola da cercare in lista</h2>

  <form action="snack.php" method="GET">

    <input type="text" name="parola" placeholder="inserisci una parola da controllare">

    <input type="submit">

  </form>
  
  <?php 
  
  if($parolaDaCercare != "") {

    ?>
    <h2>Dati ricevuti</h2>
    <p class="<?php echo $isWordInTheList ? 'green' : "red" ?>">


      <?php
      
      // controllare che la parola inserita dall'utente sia presente nell'array fornitoci
      if( $isWordInTheList ) { 

        echo "la parola '{$parolaDaCercare}' è presente nella lista";

      } else {

        echo "la parola '{$parolaDaCercare}' non è presente nella lista";

      }

      ?>
    </p>

    <?php 
    
  }
  ?>


  <hr>

  <?php 
  // Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.

  foreach($_GET as $chiave => $valore) {
    
    echo "{$chiave}: {$valore}<br>";

  }


  ?>

  <hr>

  <?php 
  
  // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
  
  $superParagraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor dignissim neque, quis rhoncus eros efficitur sit amet. Nulla venenatis sit amet augue sed suscipit. Pellentesque sollicitudin fringilla magna, eget sodales velit rhoncus ac. Sed commodo libero vitae ex ornare blandit. Nam ut risus efficitur, consequat elit facilisis, iaculis urna. Vivamus rutrum quam massa, ut pellentesque nulla fermentum vitae. Integer eu massa et sem ornare facilisis. Sed porta ullamcorper lectus, non rhoncus felis eleifend nec. Pellentesque condimentum fringilla neque, sit amet luctus enim fermentum et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo efficitur lectus id semper. Donec sit amet sapien tempor, pellentesque odio vitae, sodales tellus. Pellentesque vestibulum imperdiet augue. Morbi quis mi ligula. Nulla vestibulum diam dolor, vitae sollicitudin velit euismod sit amet. Quisque quis bibendum leo. Aliquam vel lorem ex. Fusce facilisis varius facilisis. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer vitae pretium dolor. Fusce lacinia lectus vel lacus tempor, in suscipit dui ornare. Nulla facilisi. Proin eu lacinia lacus, tristique commodo lacus. Nunc gravida vel purus id sodales. Nulla facilisi. Vivamus convallis lectus feugiat tempor euismod. Vivamus varius a urna vel laoreet. Duis ut dui mollis, laoreet lacus quis, imperdiet magna. Aliquam laoreet consequat commodo. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus et leo ut lorem sodales lacinia porttitor nec neque. Sed a suscipit eros. Pellentesque finibus quis enim at feugiat. Maecenas sollicitudin mi orci, at convallis diam ultrices eu. Nulla nibh libero, euismod sodales lacus id, aliquam ultricies nisi. Praesent viverra erat a turpis congue mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc nec fermentum quam. Morbi euismod leo magna. Nam condimentum ipsum a vestibulum scelerisque. Etiam eget diam sem. Donec faucibus dolor est, nec rhoncus lorem pretium in. Nulla sit amet ultrices ante, sed dapibus ipsum. Pellentesque faucibus ut turpis a tempor. Pellentesque feugiat, diam non dictum posuere, elit ipsum blandit lorem, eget hendrerit enim tellus nec nisi. Nam vulputate eget massa a consectetur. Mauris eget maximus eros, at cursus mauris. Vestibulum auctor nunc sed massa maximus sodales. Vestibulum vehicula sapien id augue semper, sit amet scelerisque ex lobortis. Ut nec sollicitudin velit. Praesent ac dictum dui, at mollis tortor. Ut risus elit, accumsan vel posuere a, consequat quis sem. Vivamus in eros quis dolor vestibulum lacinia. Donec eu volutpat est. Phasellus sed elementum felis. Ut vel tortor non neque semper rhoncus eu pulvinar risus. Proin at laoreet leo. Nam a mi et felis blandit elementum vel et risus";

  // vorrei un array di periodi, ovvero frasi delimitate da un punto

  $separatore = ".";
  $paragrafi = explode($separatore, $superParagraph);

  // var_dump($paragrafi);

  ?>

  <!-- genero un elemento di lista per ogni paragrafo -->

  <ul>

    <?php 

    foreach($paragrafi as $paragrafoSingolo) {

      ?>

      <li><?php echo $paragrafoSingolo ?></li>

      <?php

    }

    ?>

  </ul>


  
</body>
</html>