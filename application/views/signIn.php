<?= form_open() ?>

<?= form_error('mail') ?>
<input type="text" name="mail" value="<?php echo set_value('mail'); ?>" size="50" placeholder="Email"/><br>

<?= form_error('password') ?>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" placeholder="Mot de passe"/><br>

<div><input type="submit" value="Envoyer" /></div>

</form>
</body>
    