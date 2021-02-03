<form class="col-md-12" action="lovers_controller.php" method="POST">
    <h2 class="text-center mb-5">💗 Bienvenue jeune LOVER 💗</h2>

    <div class="row justify-content-center">

        <div class="col-md-6 mb-3">
            <label for="lastname">Nom</label>
            <input type="text" class="form-control <?= (isset($error['lastname'])) ? 'error_input' : '' ?>" id="lastname" placeholder="Votre nom" value="<?= $lastname ?? '' ?>" name="lastname">

            <p class="error"><?= ($error['lastname']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control <?= (isset($error['firstname'])) ? 'error_input' : '' ?>" id="firstname" placeholder="Votre prénom" value="<?= $firstname ?? '' ?>" name="firstname">

            <p class="error"><?= ($error['firstname']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="birthdate">Date de naissance</label>
            <input type="date" class="form-control <?= (isset($error['birthdate'])) ? 'error_input' : '' ?>" id="birthdate" value="<?= $birthdate ?? '' ?>" name="birthdate">

            <p class="error"><?= ($error['birthdate']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="gender">Genre</label>
            <select class="custom-select d-block w-100 <?= (isset($error['gender'])) ? 'error_input' : '' ?>" id="gender" name="gender">
                <?php
                if ($gender != '') {
                ?>
                    <option value="<?= $gender; ?>"><?= $gender; ?></option>
                <?php
                } else {  ?>
                    <option value="">Votre genre...</option>
                <?php } ?>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>

            <p class="error"><?= ($error['gender']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="zipcode">Code postal</label>
            <input type="text" class="form-control <?= (isset($error['zipcode'])) ? 'error_input' : '' ?>" id="zipcode" placeholder="Votre code postal" value="<?= $zipcode ?? '' ?>" name="zipcode">

            <p class="error"><?= ($error['zipcode']) ?? '' ?></p>
        </div>



        <div class="col-md-6 mb-3">
            <label for="mail">Email</label>
            <input type="mail" class="form-control <?= (isset($error['mail'])) ? 'error_input' : '' ?>" id="mail" placeholder="john.doe@example.com" value="<?= $mail ?? '' ?>" name="mail">

            <p class="error"><?= ($error['mail']) ?? '' ?></p>
        </div>



        <div class="col-md-6 mb-3">
            <label for="interestedIn">Type de recherche...</label>
            <select class="custom-select d-block w-100 <?= (isset($error['interestedIn'])) ? 'error_input' : '' ?>" id="interestedIn" name="interestedIn">
                <?php
                if ($interestedIn != '') {
                ?>
                    <option value="<?= $interestedIn; ?>"><?= $interestedIn; ?></option>
                <?php
                } else {  ?>
                    <option value="">Vous êtes interessé par...</option>
                <?php } ?>
                <option value="Hommes">Hommes</option>
                <option value="Femmes">Femmes</option>
            </select>
            <p class="error"><?= ($error['interestedIn']) ?? '' ?></p>
        </div>


        <div class="col-md-12 my-5 text-center">
            <button class="btn btn-danger px-3" type="submit" name="OK">Rencontrer nos célibataires</button>
        </div>

    </div>
</form>