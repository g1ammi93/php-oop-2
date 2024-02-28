<?php
require 'data/products.php';

$food_products = array_filter($products, fn ($p) => $p::$type === 'food');
$kennel_products = array_filter($products, fn ($p) => $p::$type === 'kennel');
$toy_products = array_filter($products, fn ($p) => $p::$type === 'toy');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fontawesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <main class="container">
        <section id="food-products" class="my-5">
            <h2>Food <i class="<?= FoodProduct::$icon ?> my-3"></i></h2>
            <div class="row row-cols-4">
                <?php foreach ($food_products as $product) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <?= $product->category->name ?>
                                <i class="<?= $product->category->icon ?>"></i>

                                <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title"><?= $product->name ?></h5>
                                    <p>Scadenza: <?= $product->expiration ?></p>
                                    <p>Ingredienti:</p>
                                    <ul>
                                        <?php foreach ($product->ingredients as $ingredient) : ?>
                                            <li><?= $ingredient ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                    <p>Prezzo: <?= $product->price ?></p>

                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </section>
        <section id="toy-products" class="my-5">
            <h2>Toy <i class="<?= ToyProduct::$icon ?> my-3"></i></h2>
            <div class="row row-cols-4">
                <?php foreach ($toy_products as $product) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">

                                <?= $product->category->name ?>
                                <i class="<?= $product->category->icon ?>"></i>

                                <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title"><?= $product->name ?></h5>
                                    <p>Colore: <?= $product->color ?></p>
                                    <p>Materiale: <?= $product->materials ?></p>
                                    <p>Prezzo: <?= $product->price ?></p>

                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </section>
        <section id="kennel-products" class="my-5">
            <h2>Kennel <i class="<?= KennelProduct::$icon ?> my-3"></i></h2>
            <div class="row row-cols-4">
                <?php foreach ($kennel_products as $product) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">

                                <?= $product->category->name ?>
                                <i class="<?= $product->category->icon ?>"></i>

                                <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title"><?= $product->name ?></h5>
                                    <p>Colore: <?= $product->color ?></p>
                                    <p>Taglia: <?= $product->size ?></p>
                                    <p>Prezzo: <?= $product->price ?></p>

                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </section>
    </main>
</body>

</html>