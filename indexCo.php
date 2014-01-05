<?php include('header.php'); ?>

    <section role="main" class="main accueil" id="main">
        <h1 class="section">Contenu principal du site</h1>

        <div class="breadcrumbs">
            <div class="wrapper">
                <span>Accueil</span>
            </div>
        </div>
        <div class=" news">
            <div class="wrapper">
                <section class="sceanceEnCours">
                    <h2 role="heading" aria-level="2" class="titleIndex">Scéance en cours</h2>
                    <hr/>
                    <div class="sceance">
                        <div class="titre">
                            <h3 role="heading" aria-level="3">Web</h3>
                        </div>
                        <div class="number">
                            <span>0</span>
                        </div>
                        <span class="text">présent(s)</span>

                        <div class="overImage">
                            <a href="" class="btn">Voir</a>
                        </div>
                    </div>

                </section>

                <section class="mesCours">
                    <h2 role="heading" aria-level="2" class="titleIndex">Mes cours</h2>
                    <hr/>
                    <div class="cours" data-type="web">
                        <div class="titre">
                            <h3 role="heading" aria-level="3">Web</h3>
                        </div>
                        <div class="horaire">
                            <span class="debut">8H00</span>
                            <span class="fin">18H00</span>
                        </div>
                        <div class="overImage">
                            <a href="voirCours.php" class="btn">Voir</a>
                        </div>
                    </div>
                    <div class="cours" data-type="web">
                        <div class="titre">
                            <h3 role="heading" aria-level="3">Web</h3>
                        </div>
                        <div class="horaire">
                            <span class="debut">8H00</span>
                            <span class="fin">18H00</span>
                        </div>
                        <div class="overImage">
                            <a href="" class="btn">Voir</a>
                        </div>
                    </div>
                    <div class="cours" data-type="typography">
                        <div class="titre">
                            <h3 role="heading" aria-level="3">Typographie</h3>
                        </div>
                        <div class="horaire">
                            <span class="debut">10H30</span>
                            <span class="fin">12H30</span>
                        </div>
                        <div class="overImage">
                            <a href="" class="btn">Voir</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class=" calendrier">
            <div class="wrapper">
                <section class="planning">
                    <h2 class="titleIndex" role="heading" aria-level="2">Planning</h2>
                    <hr/>
                    <div class="groupe old">
                        <span class="jour">Lundi</span>

                        <div class="day">
                            <span class="number">1</span>

                            <div class="overDay">
                                <a href="" class="creer">
                                    Créer
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="groupe">
                        <span class="jour">Mardi</span>

                        <div class="day">
                            <span class="number">2</span>

                            <div class="overDay">
                                <a href="" class=" creer">
                                    Créer
                                </a>
                            </div>
                            <ol class="sceances">
                                <li class="quatreH">
                                    <span>Web</span>

                                </li>
                                <li class="deuxH">Typographie</li>
                            </ol>
                        </div>
                    </div>
                    <div class="groupe">
                        <span class="jour">Mercredi</span>

                        <div class="day">
                            <span class="number">3</span>

                            <div class="overDay">
                                <a href="" class=" creer">
                                    Créer
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="groupe">
                        <span class="jour">Jeudi</span>

                        <div class="day">
                            <span class="number">4</span>

                            <div class="overDay">
                                <a href="" class=" creer">
                                    Créer
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="groupe">
                        <span class="jour">Vendredi</span>

                        <div class="day">
                            <span class="number">5</span>

                            <div class="overDay">
                                <a href="" class="creer">
                                    Créer
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
</section>

</section>

<?php include('footer.php'); ?>
