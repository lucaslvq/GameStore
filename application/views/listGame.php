<h3>Liste des jeux</h3>


<?php foreach ($list_game AS $list){ ?>
    <p><?= $list->name?></p>
    <p><?= $list->ID_GAMES?></p>
    <p><?= $list->ID_CATEGORY?></p>
    <p><?= $list->price?></p>
<?php } ?>

    