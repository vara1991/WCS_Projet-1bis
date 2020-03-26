<?php
    session_start();
    include('../layouts/head.php');
    include('../controller/data.php');
?>

<main>
    <div class="containerportfolio">

        <section id="articles">
            <h2>Les Avis de la Presse Nationale</h2>
            <h3>articles :</h3>
                <?php foreach ($articles as $article) { ?>
                    <div class="containerimg">
                        <img class="effect" src="<?php echo $article['img']; ?>" >
                        <p><?php echo $article['description']; ?></p>
                    </div>
                <?php } ?>
        </section>

    </div>
</main>

<?php include('../layouts/footer.php') ?>








