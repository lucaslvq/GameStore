<?= form_open() ?>

<label for="pseudo">Pseudo</label>
<?= form_error('pseudo') ?>
<input type="text" name="pseudo" value="<?php echo set_value('firstName'); ?>" size="50"/><br>

<label for="password">Mot de passe</label>
<?= form_error('pseudo') ?>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50"/><br>

<div><input type="submit" value="Envoyer" /></div>

</form>
</body>
    