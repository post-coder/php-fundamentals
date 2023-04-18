<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Cicli</title>
</head>
<body>

  <h1>PHP - Cicli</h1>

  <?php 
  
  for($i = 0; $i < 10; $i += 2) {

    echo $i + 1 . '<br>';
    
  }

  echo "<br>";

  $c = 0;

  do  {
    echo $c . '<br>';

    $c++;
  } while ($c < 20);
  
  ?>

  <hr>

  <h3>Foreach</h3>

  <?php 

  $products = [
    'biscuits',
    'cornflakes',
    'milk'
  ];

  foreach($products as $product) {

    echo $product . "<br>";
    
  }

  ?>

  <hr>
  <h4>Foreach di array letterali</h4>
  <?php 

  $alunno = [
    "nome" => "Carlo",
    "cognome" => "Brambilla",
    "eta" => 25,
  ];
  
  // sintassi per ottenere sia le chiavi di un array letterale, che i loro valori

  foreach($alunno as $chiave => $valore ) {

    echo $chiave . ': ' . $valore . "<br>" ;

    // equivalente del template literal di JS
    echo "{$chiave}: {$valore}<br>";
    // echo "$chiave: $valore <br>";
    
  }

  ?>

  <hr>

  <h3>Array Multidimensionali</h3>

  <?php 
  	
  $animals = [
    "mammals" => ["cow", "pig", "horse", "dog"],
    "birds" => ["duck", "chicken"]
  ];

  foreach($animals as $animalClass) {

    foreach($animalClass as $singleAnimal) {

      echo "{$singleAnimal}<br>";

    }

  }


  ?>

  
</body>
</html>