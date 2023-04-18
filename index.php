<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Fundamentals</title>
</head>
<body>
  <h1>PHP Fundamentals</h1>

  <?php 
  
  $user = $_GET['user'] ?? 'nessuno';

  // $user = isset($_GET['user']) ? $_GET['user'] : 'nessuno';

  // if(isset($_GET['user'])) {
  //   $user = $_GET['user'];
  // } else {
  //   $user = "nessuno";
  // }

  echo "Utente: " . $user;

  ?>
  <hr>
  <h2>Array</h2>
  <?php 
  
  // in PHP, TUTTI gli array sono in realtà degli oggetti
  // (array letterali)

  $persone = ['Gabriel', 'Luca', 'Martina', 'Giovanni', 'Gabriele'];

  // possiamo aggiungere un valore ad un array semplicemente così
  // equivalente del metodo push() in JS
  $persone[] = "Domenico";

  // equivalente del console.log in PHP: var_dump

  var_dump($persone);

  echo "<hr>";

  // sintassi per creare un oggetto in PHP
  $alunno = [
    "nome" => "Carlo",
    "cognome" => "Brambilla",
    "eta" => 25,
  ];

  echo $alunno['nome'];

  // possiamo modificare il valore delle proprietà dell'array
  $alunno['nome'] = "Domenico";
  
  // possiamo aggiungere delle proprietà ad un array letterale (oggetto)
  // anche dopo averlo creato, semplicemente così
  $alunno['matricola'] = '123456';

  
  var_dump($alunno);
  
  ?>

  <hr>


  <?php 
  
  	
  $team = [ // primo livello: array "contenitore" con indici numerici
    
    [ // secondi livelli: array associtativi
        "name" => "Fabio",
        "lastname" => "Forghieri",
        "role" => "Co-Founder",
    ],
    [
        "name" => "Michele",
        "lastname" => "Papagni",
        "role" => "Head of Teaching",
    ]
  ];

  $primoElemento = $team[0];

  var_dump($team);

  echo $team[0]['lastname'];

  ?>

  <br>
  <h3>Numero random</h3>
  <?php 
  
  echo rand(1,100);

  ?>

  <hr>
  <a href="cicli.php">pagina dei cicli</a>
  <br>
  <a href="snack.php">pagina degli snacks</a>

</body>
</html>