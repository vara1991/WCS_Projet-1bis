<?php
    session_start();
    include('../layouts/head.php');
    include('../controller/controller.php');

    $error = [];

    if (empty($_POST['pseudo'])) {
        $error['pseudo'] = "Ce champ est obligatoire";
    }
    if (empty($_POST['pass'])) {
        $error['pass'] = "Ce champ est obligatoire";
    } else {
        getLoginAuth($_POST);
    }


?>

    <main class="login">

        <form method="POST">
            <fieldset class="login-field">
                <label for="pseudo" >Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" value=<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo']?>>
                <p class="errors">
                    <code>
                        <?php if(isset($error['pseudo'])) echo $error['pseudo']; ?>
                    </code>
                </p>
                <label for="pass">Mot de passe : 1</label>
                <input type="password" name="pass" id="pass">
                <p class="errors">
                    <code>
                        <?php
                        if(isset($error['pass'])){
                            echo $error['pass'];
                        } else {
                            echo "Entrer 1";
                        }
                        ?>
                    </code>
                </p>
                <button type="submit" name="connecter" >Se connecter</button>
            </fieldset>
        </form>

    </main>

</body>

</html>

