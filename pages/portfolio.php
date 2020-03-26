<?php
    session_start();
    include('../layouts/head.php');
    include('../controller/data.php');
?>

<main>

    <h2>Portfolio</h2>

    <div class="containerportfolio">
        <section class="chemin">
            <div class="grid background">
                <div class="img-chemin">
                    <div class=" overlay-image _bj "><a href="#pays1">
                        <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler24.jpg" alt="Alt text" />
                        <div class=" normal _bm ">
                        <div class=" text _q ">Mon road trip<br>
                        ESPAGNE</div>
                        </div>
                        <div class=" hover _bl ">
                        <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler15.jpg" alt="Alt text hover" />
                        <div class=" text _q ">Mi viaje por carretera<br>
                            ESPANA</div>
                        </div>
                    </a></div>
                    </div>
                    <div class="dot"><img src="../assets/image/roadT.png" alt=""></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"><img src="../assets/image/roadT1.png" alt=""></div>
                    <div class="img-chemin">
                        <div class=" overlay-image _bj "><a href="#pays2">
                            <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler110.jpg" alt="Alt text" />
                            <div class=" normal _bm ">
                            <div class=" text _q ">Mon road trip<br>
                            HOLLANDE</div>
                            </div>
                            <div class=" hover _bl ">
                            <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler109.jpg" alt="Alt text hover" />
                            <div class=" text _q ">Mijn reis naar <br>
                                HOLLAND</div>
                            </div>
                        </a></div>
                    </div>
                    <div class="img-chemin">
                        <div class=" overlay-image _bj "><a href="#pays3">
                            <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler29.jpg" alt="Alt text" />
                            <div class=" normal _bm ">
                            <div class=" text _q ">Mon road trip<br>
                            FRANCE</div>
                            </div>
                            <div class=" hover _bl ">
                            <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler33.jpg" alt="Alt text hover" />
                            <div class=" text _q ">Mon road trip <br>
                                FRANCE</div>
                            </div>
                        </a></div>
                    </div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot">
                    <img src="../assets/image/roadT3.png" alt=""></div>
                    <div class="dot"><img src="../assets/image/roadT4.png" alt=""></div>
                    <div class="img-chemin">
                        <div class=" overlay-image _bj "><a href="#pays4">
                            <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler68.jpg" alt="Alt text" />
                            <div class=" normal _bm ">
                            <div class=" text _q ">Mon road trip<br>
                            IRELAND</div>
                            </div>
                            <div class=" hover _bl ">
                            <img class=" image _bk " src="../assets/image/photographie-audreyritzenthaler62.jpg" alt="Alt text hover" />
                            <div class=" text _q ">My road trip<br>
                                IRELAND</div>
                            </div>
                        </a></div>
                    </div>
                </div>
        </section>
        <hr>

        <section class="adventure">

            <section class="presentation">
                <h3>Résultat de mon aventure !</h3>
                <p>Ici tu pourras retrouver l'intégralité de mes images réalisées durant mon épopée !</p>
            </section>

            <?php foreach ($photo as $photo) { ?>
                <section id="<?php echo $photo['id']; ?>">
                    <h4><?php echo $photo['titre']; ?></h4>
                    <p><?php echo $photo['description']; ?></p>
                    <div class="myPicture">
                        <img src="<?php echo $photo['img1']; ?>" alt="">
                        <img src="<?php echo $photo['img2']; ?>" alt="">
                        <img src="<?php echo $photo['img3']; ?>" alt="">
                        <img src="<?php echo $photo['img4']; ?>" alt="">
                        <img src="<?php echo $photo['img5']; ?>" alt="">
                        <img src="<?php echo $photo['img6']; ?>" alt="">
                    </div>
                </section>
                <hr>
            <?php } ?>

        </section>
    </div>
</main>

<?php include('../layouts/footer.php') ?>
