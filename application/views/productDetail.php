<!-- Section : Detail -->
<div class="container mt-5">
    <div class="row">
        <?php foreach ($gameDetail as $DGame) { ?>
            <div class="col-sm">
                <img class="imgDetail" src="<?= $DGame->img ?>">
            </div>
            <!-- Card Detail -->
            <div class="col-6 mx-auto">
                <div class="card text-center cardProductDetail">
                    <div class=" card-header colorBlue white-text">
                        <strong><?= $DGame->game_name ?></strong>
                    </div>
                    <div class=" card-header headingDetail">
                        <div>
                            <img class="iconPlatform" src="<?= $DGame->platform ?>">
                            <strong class="ml-3"><?= $DGame->game_cat ?></strong>
                        </div>

                    </div>
                    <div class="card-body content">
                        <h4 class="card-title">Acheter ce jeux pour seulement</h4>
                        <p class="priceDetail"><?= $DGame->price ?>€</p>
                        <a class="btn unique-color btn-sm">Ajouter au panier <i class="fas fa-cart-arrow-down"></i></a>
                    </div>
                    <div class="card-footer text-muted colorBlue white-text">
                        <p class="mb-0">Livraison express <i class="fas fa-shipping-fast"></i></p>
                    </div>
                </div>
            </div>
            <!-- Card Detail -->
        <?php } ?>
        <!-- Card share  -->
        <div class="col">
            <div class="card text-center cardProductDetail">
                <div class=" card-header colorBlue white-text">
                    <strong>Partager ?</strong>
                </div>
                <div class="card-body content">
                    <div>
                        <a href="https://www.facebook.com/"><img class="sizeImgShare" src="<?= base_url('assets/img/facebook.png'); ?>"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/?hl=fr"><img class="sizeImgShare" src="<?= base_url('assets/img/instagram.png'); ?>"></a>
                    </div>
                    <div>
                        <a href="https://twitter.com/?lang=fr"><img class="sizeImgShare" src="<?= base_url('assets/img/twitter.png'); ?>"></a>
                    </div>
                </div>
                <div class="card-footer text-muted colorBlue white-text">
                    <p class="mb-0">Merci <i class="far fa-grin-wink"></i></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Card share -->
    <!-- About -->
    <div class="container">
        <div class="col contentAbout mt-5 mb-5">
            <ul class="tabs">
                <li class="tab-link current contentTab" data-tab="tab-1">Description</li>
                <li class="tab-link" data-tab="tab-2">Configuration</li>
            </ul>
            <div id="tab-1" class="tab-content current contentTab">
                <?= $DGame->game_desc ?>
            </div>
            <div id="tab-2" class="tab-content contentTab">
                Configuration minimale*
                OS:WINDOWS® 7, 8, 8.1, 10 (64-bit required)
                Processor:Intel® Core™ i5-4460, 3.20GHz or AMD FX™-6300
                Memory:8 GB RAM
                Graphics:NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x (VRAM 2GB)
                DirectX:Version 11
                Network:Broadband Internet connection
                Storage:30 GB available space
                Sound Card:DirectSound (DirectX® 9.0c)
            </div>
        </div>
    </div>
    <!-- About -->
</div>
<!-- Section : Detail -->