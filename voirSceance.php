<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<a href="cours.php">Mes scéances</a>&nbsp;/&nbsp;<span>Scéance du 28/02/1992 - web</span>
        </div>
    </div>
    <div class="wrapper">
        <section class="gererMaSceance" data-sceance="1">
            <h2 role="heading" aria-level="2" class="titleIndex">Web: 28/02/1992</h2>
            <hr/>
            <p class="quote">Cours de <b>web</b> le <b>Lundi</b>
               pendant <b>8</b> heure(s), commençant à <b>4:00</b> 
               et finissant à <b>12:00</b> avec le(s) groupe(s) <b>2384</b>.
           </p>
           <div class="sceance">
            <div class="titre">
                <h3 role="heading" aria-level="3">Web</h3>
            </div>
            <div class="number">
                <span>0</span>
            </div>
            <span class="text">présent(s)</span>

            <div class="overImage">
                <a href="#presence" title="Prendre les présence" class="btn">Présences</a>
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
            <li><a data-link="modifier" href="" title="Modifier la scéance">Modifier la scéance</a></li>
            <li><a data-link="supprimer" href="" title="Supprimer la scéance">Supprimer la scéance</a></li>
        </ul>
    </aside>
</div>

<div class="wrapper">
    <section class="elevesDuCours presenceCours" id="presence">
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
                <span class="nom" data-slug="benjamin-soir">Benjamin Soir</span>
                <span class="groupe" data-groupe="2382">2382</span>
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
    <section class="elevesDuCours" id="presence">
        <h2 role="heading" aria-level="2" class="titleIndex">Présences par groupe</h2>
        <hr/>
        <div class="graphPresenceParGroupe">
            <ul class="dataGraph" data-total="100">
                <li data-percent="10" data-groupe="absent">Absent(s)</li>
                <li data-percent="60" data-groupe="2284">Web</li>
                <li data-percent="30" data-groupe="2282">2D</li>
                
            </ul>
            <canvas id="graphPresenceParGroupe" width="600" height="300">
            </div>

        </section>
        <aside class="helper">

        </aside>
    </div>
    <div class="actionsPresence">
        <span><a class="present" data-presence="3" title="Mettre l'élève présent" href="voirSceance.php">Présent</a></span>
        <span><a class="justifier" data-presence="2" title="Mettre l'élève absent mais justifier" href="">Absence justifier</a></span>
        <span><a class="absent" data-presence="1" title="Mettre l'élève absent" href="">Absent</a></span>
        <span><a class="aucune" data-presence="0" title="Mettre aucune présence" href="">Aucune présence</a></span>
        <a href="" title="Supprimer ce cours" class="btn delete">Supprimer</a>
    </div>
    <div class="overlay">

    </div>
<div class="nextOrOld">
    <a href="voirSceance" title="Aller sur la fiche de la scéance suivante">Scéances suivante </a>
    <a href="voirSceance" title="Aller sur la fiche de la scéance précédante">Scéances précédante </a>
</div>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="js/graphParGroupe-ck.js"></script>
<?php include('footer.php'); ?>