<!-- Section: BestProduct -->
<section class="text-center my-5">
    <div class="container bestSeller">
        <!-- Section heading -->
        <h2 id="titleBestProduct" class="h1-responsive font-weight-bold text-center my-5">Nos meilleurs ventes du mois !</h2>
        <!-- Grid row -->
        <div class="row justify-content-center">
            <?php foreach ($bestSeller as $bestProduct) { ?>
                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Collection card -->
                    <div class="bestProduct">Produit vedette</div>
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <img class="badgePlatform" src="<?= $bestProduct->platform ?>">
                        <div class="view zoom">
                        <a href="<?= base_url('index.php/product/productDetail/' . $bestProduct->ID) ?>"><img class="sizeProduct" src="<?= $bestProduct->img ?>"></a>
                            <div class="shadow">
                                <strong class="categoryGame"><?= $bestProduct->game_cat ?></strong>
                                <strong class="price"><?= $bestProduct->price ?>€</strong>
                            </div>
                        </div>
                        <strong class="colorBlue white-text"><?= $bestProduct->game_name ?></strong>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
            <?php } ?>
            <!-- Grid column -->
        </div>
</section>
<!-- Section: BestProduct -->

<!-- Section: PopularProduct -->
<section class="text-center my-5">
    <div class="popularProduct">
        <h2 class="h1-responsive font-weight-bold my-5">Jeux les plus populaires</h2>
        <div class="row">
            <?php foreach ($popularGame as $PGame) { ?>
                <div class="col ">
                    <!-- Card -->
                    <div class="card collection-card z-depth-1-half ">
                        <!-- Card image -->
                        <img class="badgePlatformPGame" src="<?= $PGame->platform ?>">
                        <div class="view zoom">
                        <a href="<?= base_url('index.php/product/productDetail/' . $PGame->ID) ?>"><img class="imgPGame" src="<?= $PGame->img ?>"></a>
                            <div class="shadowPGame">
                                <strong class="categoryPGame"><?= $PGame->game_cat ?></strong>
                                <strong class="pricePGame"><?= $PGame->price ?>€</strong>
                            </div>
                        </div>
                        <strong><?= $PGame->game_name ?></strong>
                    </div>
                    <!-- Card -->
                    <div>
                        <i class="fas fa-gamepad fa-2x rewardPGame"></i>
                        <i class="fas fa-gamepad fa-2x rewardPGame"></i>
                        <i class="fas fa-gamepad fa-2x rewardPGame"></i>
                        <i class="fas fa-gamepad fa-2x rewardPGame"></i>
                        <i class="fas fa-gamepad fa-2x rewardPGame"></i>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Section: PopularProduct -->

<!-- Section: Game-->
<section class="text-center my-5">
    <div class="container">
        <!-- Grid row -->
        <div class="row justify-content-center">
            <?php foreach ($product as $game) { ?>
                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 mt-5">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <img class="badgePlatform" src="<?= $game->platform ?>">
                        <div class="view zoom">
                            <a href="<?= base_url('index.php/product/productDetail/' . $game->ID) ?>"><img class="sizeProduct" src="<?= $game->img ?>"></a>
                            <div class="shadow">
                                <strong class="categoryGame"><?= $game->game_cat ?></strong>
                                <strong class="price"><?= $game->price ?>€</strong>
                            </div>
                        </div>
                        <strong class="colorBlue white-text"><?= $game->game_name ?></strong>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
            <?php } ?>
            <!-- Grid column -->
        </div>
</section>
<!-- Section: Game -->


