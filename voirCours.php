<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<a href="cours.php">Mes cours</a>&nbsp;/&nbsp;<span>Web</span>
        </div>
    </div>
    <div class="wrapper">
        <section class="gererMonCours">
            <h2 role="heading" aria-level="2" class="titleIndex">Cours de Web</h2>
            <hr/>
            <p class="quote">Je donne cours de <b>Web</b> au étudiant 
                de <b>3e</b> année de <b>option web</b> au(x) groupe(s) <b>2384</b> 
                et au(x) groupe(s) <b>Groupe des vainqueurs </b>
                pendant une durée de <b>8 heure(s)</b>
            </p>
            <div class="cours">
                <div class="groupe" data-groupe="2384">2384</div>
                <div class="titre">
                    <h3 role="heading" aria-level="3">Web</h3>
                    <span class="option">option web</span>
                </div>


                <div class="horaire">
                    <span class="debut">8H00</span>
                    <span class="fin">3e</span>
                </div>
               
            </div>  

            <div class="popupModifier" >
                <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
                <h3 aria-level="3" role="heading" class="indexTitle">Modifier un cours</h3>
                <hr/>
                <form action="">
                    <div class="leftForm">
                        <label for="intitule">Intitulé</label>
                        <input type="text" name="intitule" id="intitule" placeholder="Math">

                        <label for="duree">Durée (heure(s))</label>
                        <select name="duree" id="duree">
                            <option value="1">1</option>
                        </select>

                        <label for="anneeLevel">Année d'étude</label>
                        <select name="anneeLevel" id="anneeLevel">
                            <option value="1">1e inforgraphie</option>
                        </select> 
                    </div>
                    <div class="rightForm">
                        <label for="option">Option</label>
                        <select multiple="1" name="option[]" id="option">
                            <option value="1">Web</option>
                        </select>

                        <label for="groupe">Groupe</label>
                        <select multiple="1" name="groupe[]" id="groupe">
                            <option value="1">2283</option>
                        </select>
                    </div>
                    <input type="submit" value="Modifier" class="btn">
                </form>
            </div>
            <div class="popupSupprimer">
                <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
                <h3 aria-level="3" role="heading" class="indexTitle">Supprimer un cours</h3>
                <hr/>
                <form action="">
                    <label for="cours">Quel cours ?</label>
                    <select name="cours" id="cours">
                        <option value="1">Web</option>
                    </select>

                    <input type="submit" value="Supprimer" class="btn">
                </form>
            </div>
        </section>

        <aside class="helper ">
            <ul>
                <li><a data-link="modifier" href="" title="Modifier le cours">Modifier le cours</a></li>
                <li><a data-link="supprimer" href="" title="Supprimer le cours">Supprimer le cours</a></li>
            </ul>
        </aside>
    </div>
    
    <div class="wrapper">
        <section class="elevesDuCours">
            <h2 role="heading" aria-level="2" class="titleIndex">Elèves du cours</h2>
            <hr/>
            <div class="eleve">
                <a href="voirEleve.php" title="Voir l'élève">
                    <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                    <div class="percent"><span></span></div>
                    <span class="nom" data-slug="julien-roland">Julien Roland</span>
                    <span class="groupe" data-groupe="2384">2384</span>
                </a>
            </div> 
            <div class="eleve">
                <a href="voirEleve.php" title="Voir l'élève">
                    <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                    <div class="percent"><span></span></div>
                    <span class="nom" data-slug="julien-roland">Julien Roland</span>
                    <span class="groupe" data-groupe="2384">2384</span>
                </a>
            </div> 
            <div class="eleve">
                <a href="voirEleve.php" title="Voir l'élève">
                    <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                    <div class="percent"><span></span></div>
                    <span class="nom" data-slug="julien-roland">Julien Roland</span>
                    <span class="groupe" data-groupe="2384">2384</span>
                </a>
            </div> 
            <div class="eleve">
                <a href="voirEleve.php" title="Voir l'élève">
                    <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                    <div class="percent"><span></span></div>
                    <span class="nom" data-slug="julien-roland">Julien Roland</span>
                    <span class="groupe" data-groupe="2384">2384</span>
                </a>
            </div> 
            <div class="eleve">
                <a href="voirEleve.php" title="Voir l'élève">
                    <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                    <div class="percent"><span></span></div>
                    <span class="nom" data-slug="julien-roland">Julien Roland</span>
                    <span class="groupe" data-groupe="2384">2384</span>
                </a>
            </div>
            <div class="eleve">
                <a href="voirEleve.php" title="Voir l'élève">
                    <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                    <div class="percent"><span></span></div>
                    <span class="nom" data-slug="julien-roland">Julien Roland</span>
                    <span class="groupe" data-groupe="2384">2384</span>
                </a>
            </div>

            <div class="eleve">
                <a href="voirEleve.php" title="Voir l'élève">
                    <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                    <div class="percent"><span></span></div>
                    <span class="nom" data-slug="benjamin-soir">Benjamin Soir</span>
                    <span class="groupe" data-groupe="2382">2382</span>
                </a>
            </div>
            <div class="eleve">
                <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                <div class="percent"><span></span></div>
                <span class="nom" data-slug="benjamin-soir">Benjamin Soir</span>
                <span class="groupe" data-groupe="2382">2382</span>
            </div>
            <div class="clear"></div>
            <div class="presenceGroupe">
                <h3>Total</h3>
                <span class="percent">65%</span>
            </div>
        </section>
        <aside class="helper voirCours">
            <ul class="groupe">
                <li class="active"><a data-link="tri" data-groupe="all" href="" title="Voir tous les élèves">Voir tous les élèves</a></li>
                <li><a data-link="tri" data-groupe="2384" href="" title="Voir les du groupe 2384">Voir élèves du groupe 2384</a></li>
                <li><a data-link="tri" data-groupe="2382" href="" title="Voir les du groupe 2384">Voir élèves du groupe 2382</a></li>

            </ul>
            <span class="separator"></span>
            <ul class="presence">
                <li><a href="" data-link="presence" data-groupe="all">Voir les présences</a></li>
            </ul>
        </aside>
    </div>
    <div class="wrapper">
        <section class="presenceTotalCoursAnnee">
            <h2 role="heading" aria-level="2" class="titleIndex">Taux de présence à ce a cours par année</h2>
            <hr/>
            <ol class="pourcentagePresenceTotalCoursAnnee">
                <li>
                    <span class="annee">2013 - 2014</span>
                    <span class="percent">100%</span>
                </li> 
                <li>
                    <span class="annee">2012 - 2013</span>
                    <span class="percent">100%</span>
                </li>
            </ol>


        </section>
        <aside class="helper">
            
        </aside>
    </div>
    <div class="wrapper">
        <section class="presenceCours">
            <h2 role="heading" aria-level="2" class="titleIndex">Taux de présence à ce cours par scéance</h2>
            <hr/>

            <div class="graphPresenceCours">
                <ul class="dataGraph" data-cours="web">
                    <li data-percent="100" data-sceance="28/11/13">Web</li>
                    <li data-percent="30" data-sceance="28/11/13">Web</li>
                    <li data-percent="70" data-sceance="28/11/13">Web</li>
                </ul>
                <canvas id="graphPresenceCours" width="800px" height="500">
                </div>
            </section>
            <aside class="helper">
            
        </aside>
        </div>
        <div class="wrapper">
            <section class="sceancesNext">
                <h2 role="heading" aria-level="2" class="titleIndex">Scéances à venir</h2>
                <hr/>
                <ol>
                    <li>
                        <a href="">14 février 2014</a>

                    </li>
                    <li>
                        <a href="">14 février 2014</a>

                    </li>
                    <li>
                        <a href="">14 février 2014</a>

                    </li>
                </ol>
            </section>
            <section class="sceancesOld">
                <h2 role="heading" aria-level="2" class="titleIndex">Scéances passée</h2>
                <hr/>
                <ol>
                    <li>
                        <a href="">14 février 2014</a>

                    </li>
                    <li>
                        <a href="">14 février 2014</a>

                    </li>
                    <li>
                        <a href="">14 février 2014</a>

                    </li>
                    <li><a href="">Voir la liste complète</a></li>
                </ol>
            </section>
            <aside class="helper">
            
        </aside>
        </div>

    </section>
    <div class="overlay">

    </div>

</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="js/graphBar-ck.js"></script>
<?php include('footer.php'); ?>