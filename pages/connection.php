<?php
    session_start();
    include('../layouts/head.php');
    include('../controller/controller.php');

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['connecter'])){

        $error = [];

        if(empty($_POST['pseudo'])) {
            $error['pseudo'] = "Vous avez oublié votre pseudo";
        }

        if(empty($_POST['pass'])){
            $error['pass'] = "Vous avez oublié votre mot de passe";
        }

        if(isset($_POST['pass']) && $_POST['pass'] != '1'){
            $error['pass1'] = "Entrer 1 !";
        } else {
            getLoginAuth($_POST);
        }

    }

?>

    <hr class="hr-login">
    <main class="login">

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset class="login-field">
                <label for="pseudo" >Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" value=<?php if(!empty($_POST['pseudo'])) echo $_POST['pseudo']?>>
                <p class="errors">
                    <code>
                        <?php if(isset($error['pseudo'])) echo $error['pseudo']; ?>
                    </code>
                </p>
                <label for="pass">Mot de passe : 1</label>
                <input type="password" name="pass" id="pass" value=<?php if(!empty($_POST['pass']) && $_POST['pass'] == 1) echo $_POST['pass']?>>
                <p class="errors">
                    <code>
                        <?php
                        if(isset($error['pass'])){
                            echo $error['pass'];
                        }elseif(isset($error['pass1'])){
                            echo $error['pass1'];
                        }
                        ?>
                    </code>
                </p>
                <button type="submit" name="connecter" >Se connecter</button>
            </fieldset>
        </form>

    </main>
    <hr class="hr-login">

<?php include('../layouts/footer.php') ?>
