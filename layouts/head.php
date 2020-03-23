
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Roquet Raccoon</title>
        <meta name="author" content="Varapone Jules Stephane Mohamed Audrey Antoine">
        <meta name="description" content="La galerie photo de Roquet Raccoon">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../assets/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap"/>
    </head>

    <body>

        <header>

            <nav>
                <ul class="navbar">
                    <?php
                    if (empty($_SESSION['isConnected']) && empty($_SESSION['username'])) { ?>
                        <li><a href="../index.php">A propos</a></li>
                        <li><a href="../pages/contact.php">Contact</a></li>
                        <li><a href="../pages/connection.php">Connection</a></li>

                    <?php } else { ?>
                        <li><a href="../index.php">A propos</a></li>
                        <li><a href="../pages/portfolio.php">Portfolio</a></li>
                        <li><a href="../pages/article.php">Article</a></li>
                        <li><a href="../pages/contact.php">Contact</a></li>
                        <li><a href="../pages/connection.php">Connection</a></li>
                    <?php } ?>
                </ul>

            </nav>

            <h1 class="big_title">Roquet Raccoon</h1>

            <div class="déconnection">
            <?php
            if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
                echo    "<form method='POST' action='../index.php' >
                                    <button  type='submit' name='déconnection'> Se déconnecter</button>
                         </form>";
             } else {
                echo "";
            }
            ?>
            </div>

        </header>