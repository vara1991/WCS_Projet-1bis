<?php
    include('../layouts/head.php');

    if(isset($_POST)) {
        $errors = [];
        $name = $_POST['name'];
        $email = $_POST['email'];

        if (empty($_POST['email'])){
            $errors['email'] = "Le champs email est obligatoire";
        }
        if (empty($_POST['message'])){
            $errors['message'] = "Le champs message est obligatoire";
        }
     }
?>

    <main>

        <div class="containeurform backform">

            <h2>Nous contacter</h2>

            <div class="contact" >
                <div class="table">
                    <form class="form-style-7" action="contact.php" method="POST">
                    <ul>
                        <li>
                            <label for="sexe">Sexe</label>
                            <select name="sexe">
                                <option>Femme</option>
                                <option>Homme</option>
                                <span>Votre sexe</span>
                            </select>
                        </li>
                        <li>
                            <label for="name" >Nom</label>
                            <input type="text" name="name" maxlength="100" value=<?php if(isset($_POST['name'])) echo $_POST['name']?>>
                            <span>Entrez votre nom complet ici</span>
                        </li>
                        <li>
                            <label for="email">Email</label>
                            <input type="email" name="email" maxlength="100" value=<?php if(isset($email)) echo $email?>>
                            <span>Entrez votre adresse mail valide</span>
                            <p class="error" >
                                <code>
                                    <?php if(isset($errors['email'])) echo $errors['email'] ?>
                                </code>
                            </p>
                        </li>

                        <li>
                            <label for="bio">Message</label required>
                            <textarea name="message" onkeyup="adjust_textarea(this)"value=<?php if(isset($name)) echo $name?>></textarea>
                            <span>Ecrivez votre message ici</span>
                            <p class="error" >
                                <code>
                                    <?php if(isset($errors['message'])) echo $errors['message'] ?>
                                </code>
                            </p>
                        </li>
                        <li>
                            <input type="submit" value="Envoyer" name="envoyer" >
                        </li>
                    </ul>
                    </form>

                    <?php
                        $to = 'varaponegaire.@gmail.com';
                        $message = $_POST['message'];
                        $message = $_POST['email'];
                        $subject = 'Nouveau message';
                        $content = "Le message a été envoyé par $email: $message";
                        $headers = 'From: v.gaire@hotmail.fr';

                        mail($to, $subject, $content, $headers);

                    ?>



                </div>
            </div>
        </div>
    </main>
</body>

<?php include('../layouts/footer.php') ?>