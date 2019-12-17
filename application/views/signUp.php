<div class="container">
    <div class="row">
        <?php echo form_open(); ?>

        <label class="labelSignUp" for="firstName">Nom</label>
        <?= form_error('firstName'); ?>
        <input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" size="50" /><br>

        <label class="labelSignUp" for="seconName">Prénom</label>
        <?php echo form_error('secondName'); ?>
        <input type="text" name="secondName" value="<?php echo set_value('secondName'); ?>" size="50" /><br>


        <label class="labelSignUp" for="pseudo">Pseudo</label>
        <?php echo form_error('pseudo'); ?>
        <input type="text" name="pseudo" value="<?php echo set_value('pseudo'); ?>" size="50" /><br>


        <label class="labelSignUp" for="mail">Email</label>
        <?php echo form_error('mail'); ?>
        <input type="text" name="mail" value="<?php echo set_value('mail'); ?>" size="50" /><br>


        <label class="labelSignUp" for="firstName">Phone</label>
        <?php echo form_error('phone'); ?>
        <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" size="50" /><br>


        <label class="labelSignUp" for="password">Mot de passe</label>
        <?php echo form_error('password'); ?>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" /><br>


        <label class="labelSignUp" for="confirmPassword">Confirmation de mot de passe</label>
        <?php echo form_error('confirmPassword'); ?>
        <input type="password" name="confirmPassword" value="" size="50" /><br>


        <div><input type="submit" value="Envoyer" /></div>

        </form>
    </div>
</div>