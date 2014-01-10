<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<a href="eleves.php">Mes groupes</a>&nbsp;/&nbsp;<span>2284</span>
        </div>
    </div>
    <div class="wrapper">
        <section class="groupeDetails">
         <h2 aria-level="2" role="heading" class="indexTitle">Groupe 2284</h2>
         <hr/>
         <ul>
            <li>Nom du groupe: <b>2284</b></li>
            <li class="option"><b>Option(s)</b> du groupe:
                <ul>
                    <li>Web</li>    
                    <li>Web</li>    
                </ul>
            </li>
            <li class="groupe"><b>Année(s):</b>
                <ul>
                    <li>3e</li>    
                    <li>1e</li>    
                </ul>
            </li>
        </ul>

    </section>
    <aside class="helper">
        <h1 aria-level="1" class="section">Intéraction avec le groupe</h1>
        <ul>
            <li><a data-link="modifier" href="" title="Modifier le groupe">Modifier le groupe</a></li>
            <li><a data-link="supprimer" href="" title="Supprimer le groupe">Supprimer le groupe</a></li>
        </ul>
    </aside>
    <div class="popupModifier">
        <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
        <h3 aria-level="3" role="heading" class="indexTitle">Modifier ce groupe: 2284</h3>
        <hr/>
        <form action="">
            <div class="leftForm">  

                <label for="nom">Nom du groupe</label>
                <input type="text" required name="nom" id="nom" placeholder="Jean">

                <label for="anneeLevel">Année des membres</label>
                <select multiple="1" required name="anneeLevel[]" id="anneeLevel">
                    <option value="1">1e</option>
                </select>

            </div>
            <div class="rightForm">
                <label for="option">Option des membres</label>
                <select multiple="1" required name="option[]" id="option">
                    <option value="1">web</option>
                </select>           

            </div>
            <label for="cours">Ajouter à un cours</label>
            <select multiple="1" required name="cours[]" id="cours">
                <option value="1">web</option>
            </select>
            <input type="submit" value="Modifier" class="btn">
        </form>
    </div>
    <div class="popupSupprimer">
        <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
        <h3 aria-level="3" role="heading" class="indexTitle">Supprimer le groupe: 2283</h3>
        <hr/>
        <form action="">
            <input type="submit" value="Supprimer" class="btn">
        </form>
    </div>
</div>
<div class="wrapper">
    <section class="elevesGroupe">
        <h2 aria-level="2" role="heading" class="indexTitle">Liste des élèves du groupe 2284</h2>
        <hr/>
        <div class="eleve">
            <a href="voirEleve.php" data-groupe="2284" title="Voir l'élève">
                <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                <div class="percent"><span></span></div>
                <span class="nom" data-slug="julien-roland">Julien Roland</span>
                <span class="groupe" data-groupe="2384">2384</span>
            </a>
        </div>  
        <div class="eleve">
            <a href="voirEleve.php" data-groupe="2284" title="Voir l'élève">
                <img src="http://placehold.it/100x100" alt="Photo de l'élève">
                <div class="percent"><span></span></div>
                <span class="nom" data-slug="julien-roland">Julien Roland</span>
                <span class="groupe" data-groupe="2384">2384</span>
            </a>
        </div> 
        <div class="popupSupprimerEleves">
            <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
            <h3 aria-level="3" role="heading" class="indexTitle">Supprimer un/des élève(s) du groupe</h3>
            <hr/>
            <form action="">
                <label for="cours">Quel élève ?</label>
                <select multiple="1" name="eleve" id="eleve">
                    <option value="1">Jean pasici</option>
                </select>

                <input type="submit" value="Supprimer" class="btn">
            </form>
        </div>
        <div class="popupAjouter">
            <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
            <h3 aria-level="3" role="heading" class="indexTitle">Ajouter un/des élève(s) au groupe</h3>
            <hr/>
            <form action="">
                <label for="cours">Quel élève ?</label>
                <select multiple="1" name="eleve" id="eleve">
                    <option value="1">Jean pasici</option>
                </select>

                <input type="submit" value="Supprimer" class="btn">
            </form>
        </div>
    </section>
    <aside class="helper ">
       <h1 aria-level="1" class="section">Intéraction avec l'élève du groupe</h1>
       <ul>
        <li><a data-link="ajouter" href="" title="Ajouter un élève">Ajouter un élève au groupe</a></li>
        <li><a data-link="supprimerEleves" href="" title="Supprimer un élève">Supprimer un élève au groupe</a></li>
    </ul>
</aside>
</div>
<div class="popupSupprimerThis">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Supprimer cet élève du groupe</h3>
    <hr/>
    <form action="">

        <input type="submit" value="Supprimer" class="btn">
    </form>
</div>
<div class="actionsEleves">
    <span><a class="voir" title="Aller sur la fiche de l'élève" href="voirEleve.php">Voir</a></span>
    <!-- <span><a class="modifier" title="Modifier l'élève" href="">Modifier</a></span> -->
    <span><a class="supprimer" title="Supprimer l'élève du groupe" href="">Supprimer du groupe</a></span>
    <a href="" title="Fermer" class="btn delete">Fermer</a>
</div>
</section>
<div class="overlay">

</div>
<?php include('footer.php'); ?>