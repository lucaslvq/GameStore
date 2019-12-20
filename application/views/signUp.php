<!-- Form SignUp -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <?php echo form_open(); ?>
        <p class="h4 mb-4 text-white text-center">Inscription</p>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <?= form_error('firstName'); ?>
                <input class="form-control" type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" size="50" placeholder="Prénom" />
            </div>
            <div class="col">
                <!-- Last name -->
                <?= form_error('secondName'); ?>
                <input type="text" class="form-control" name="secondName" value="<?php echo set_value('secondName'); ?>" size="50" placeholder="Nom" /><br>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col">
                <!-- Pseudo -->
                <?= form_error('pseudo'); ?>
                <input type="text" class="form-control" name="pseudo" value="<?php echo set_value('pseudo'); ?>" size="50" placeholder="Pseudo" />
            </div>
            <div class="col mb-4">
                <!-- Email  -->
                <?= form_error('mail'); ?>
                <input type="text" class="form-control" name="mail" value="<?php echo set_value('mail'); ?>" size="50" placeholder="Email" />
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-4 mb-4">
                <!-- Phone  -->
                <?= form_error('phone'); ?>
                <input type="text" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>" size="50" placeholder="Numéro de téléphone" />
            </div>
            <div class="col-4">
                <!-- date  -->
                <?= form_error('date'); ?>
                <!-- <input type="date" class="form-control" name="date" value="<?php echo set_value('date'); ?>" size="50" placeholder="" /> -->
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-4">
                <!-- Password  -->
                <?= form_error('password'); ?>
                <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" size="50" placeholder="Mot de passe" />
            </div>
            <div class="col-4">
                <!-- ConfirmPassword  -->
                <?= form_error('confirmPassword'); ?>
                <input type="password" class="form-control" name="confirmPassword" value="" size="50" placeholder="Confirmation du mot de passe" />
            </div>
        </div>
        <!-- Default checked -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="checkPro" checked>
            <label class="custom-control-label text-white" for="checkPro">Vous êtes un professionnel ?</label>
        </div>
        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Envoyer</button>
        </form>
    </div>
</div>
<!-- Form SignUp --> 

