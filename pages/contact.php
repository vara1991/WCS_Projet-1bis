<?php
    session_start();
    include('../layouts/head.php');
    include('../controller/controller.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoyer'])){

        $errors = [];

        if (empty($_POST['name'])) {
            $errors['name'] = "Vous avez oublié votre nom";
        }
        if (empty($_POST['email'])) {
            $errors['email'] = "Vous avez oublié votre email";
        }
        if (empty($_POST['message'])) {
            $errors['message'] = "Vous avez oublié votre message";
        }else {
            sendMail($_POST);
        }
    }
?>

<main class="contact-background">

    <h2>Nous contacter</h2>

    <div class="contact" >

        <div class="table">

            <form class="form-style-7" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

            <ul>

                <li>
                    <label for="select_sexe">Sexe</label>
                    <select name="sexe" id="select_sexe">
                        <option>Femme</option>
                        <option>Homme</option>
                    </select>
                </li>

                <li>
                    <label for="input_name" >Nom</label>
                    <input type="text" name="name" maxlength="100" id="input_name" value=<?php if(isset($_POST['name'])) echo $_POST['name']?>>
                    <p class="errors">
                        <code>
                            <?php if(isset($errors['name'])) echo $errors['name']; ?>
                        </code>
                    </p>
                </li>

                <li>
                    <label for="input_email">Email</label>
                    <input type="email" name="email" maxlength="100" id="input_email" value=<?php if(isset($_POST['email'])) echo $_POST['email']?>>
                    <p class="errors">
                        <code>
                            <?php if(isset($errors['email'])) echo $errors['email']; ?>
                        </code>
                    </p>
                </li>

                <li>
                    <label for="text_message">Message</label required>
                    <textarea name="message" onkeyup="adjust_textarea(this)" id="text_message"><?php if(isset($_POST['message'])) echo $_POST['message']?></textarea>
                    <p class="errors">
                        <code>
                            <?php if(isset($errors['message'])) echo $errors['message']; ?>
                        </code>
                    </p>
                </li>

                <li>
                    <button type="submit"name="envoyer" >envoyer</button>
                </li>

            </ul>

            </form>

            <?php
                if(isset($_POST['envoyer']) && empty($errors)) {
            ?>
                <div class="message_envoie">
                    <p>Roquet Racoon vous remercie</p>
                    <p><?php echo $_POST['name'];?></p>
                    <p>pour votre message</p>
                </div>

             <?php
                }
             ?>

        </div>

    </div>

</main>


<?php include('../layouts/footer.php') ?>