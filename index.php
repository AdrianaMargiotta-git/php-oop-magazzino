<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazzino</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            
            class Store {
                public $name;
                public $location;
                public $products;

                public function __construct($name, $location) {
                    $this -> name = $name;
                    $this -> location = $location;
                }
                public function print_store() {
                    echo "Il nome dello stabilimento è: " . $this -> name . "<br>" . "ed è situato a: " . $this -> location . "<br>" . "Produce i seguenti modelli" . "<br>";
                    foreach ($this -> products as $item) {
                        echo "Nome del modello: " . $item -> name . "<br>" . "peso: " . $item -> weight. "<br>" . "prezzo: " . $item -> price . "<br>";
                    }
                }
            }

            class Product {
                public $name;
                public $weight;
                public $price;

                public function __construct($name = 'no name', $weight = 'no weight', $price = 'no price') {
                    $this -> name = $name;
                    $this -> weight = $weight;
                    $this -> price = $price;
                }
            }

            $magazzino1 = new Store ("Maserati", "Bologna");
            $product1 = new Product ("Levante", "2200Kg", "78.970€");
            $product2 = new Product ("Ghibli", "2000Kg", "74.150€");
            $product3 = new Product ("Quattroporte", "2065Kg", "130.480€");
            $magazzino1 -> products = [$product1, $product2, $product3];

            $magazzino2 = new Store ("Porsche", "Stoccarda");
            $product1 = new Product ("911", "1765Kg", "109.879€");
            $product2 = new Product ("Cayenne", "2430Kg", "80.623€");
            $magazzino2 -> products = [$product1, $product2];
        ?>

        <p> <?php $magazzino1 -> print_store(); ?> </p>

        <p> <?php $magazzino2 -> print_store(); ?> </p>
    </div>
   
</body>
</html>