<?php

    // creo una classe di un oggetto
    class Movie {

        public $titolo;
        public $durata;
        public $genere;
        public $anno;
        public $colore = 'si';

        // definisco un costruttore
        function __construct(string $_titolo, int $_durata, array $_genere, int $_anno){

            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->genere = $_genere;
            $this->anno = $_anno;
            

            if($_anno < 1954){
                $this->colore = 'no';
            }
        }  

    }

    
    // istanzio oggetti
    $Gladiatore = new Movie("Il Gladiatore",155,["Storico","Azione"],2000);
    $LaRonde = new Movie("La Ronde", 97, ["Commedia"], 1950);
    $Troy = new Movie("Troy", 162, ["Azione","Epico","Storico"], 2004);

    var_dump($Gladiatore);
    var_dump($LaRonde);
    var_dump($Troy);


?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
<!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    
<!-- <table class="table">
  <thead>
    <tr>
      
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table> -->

<!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>