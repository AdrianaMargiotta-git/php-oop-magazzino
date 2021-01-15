<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazzino</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        class Store {
            public $name;
            public $location;
            public $products;

            public function __construct($name, $location) {
                $this -> name = $name;
                $this -> location = $location;
            }
            public function print() {
                echo "Name: ". $this -> name . "<br>" . "Location: ". $this -> location. "<br>"; //. "Produzione: ". $this -> products;
            }
        }
        $magazzino1 = new Store ("Maserati", "Bologna");
        $magazzino1 -> print();

        $magazzino2 = new Store ("Porsche", "Stoccarda");
        // $magazzino2 -> products = "Tedesca";
        $magazzino2 -> print();

       


    ?>
</body>
</html>



<!-- Definire la classe Magazzino e la classe Prodotto nel seguente modo:
Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori
Prodotto: definire gli attributi per nome, peso e prezzo
Generare alcune istanze di ogni classe, hai fini di test e per meglio comprendere i concetti -->