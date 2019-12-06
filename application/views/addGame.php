<h3>Formulaire d'ajout</h3>

<?= form_open(); ?>

<label for="ID_CATEGORY">ID de la catégorie</label>
<?= form_error('ID_CATEGORY'); ?>
<input type="text" name="ID_CATEGORY" value="<?= set_value('ID_CATEGORY'); ?>" size ="50" /><br>

<label for="name">Nom du jeu</label>
<?= form_error('name'); ?>
<input type="text" name="name" value="<?= set_value('name'); ?>" size ="50" /><br>

<label for="description">Description</label>
<?= form_error('description'); ?>
<input type="text" name="description" value="<?= set_value('description'); ?>" size ="50" /><br>

<label for="price">Prix</label>
<?= form_error('price'); ?>
<input type="text" name="price" value="<?= set_value('price'); ?>" size ="50" /><br>


<div>
    <input type="submit" value="Envoyer"/>
</div>
</form>
</body>