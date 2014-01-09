<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<span>Groupes</span>
        </div>
    </div>
    <div class="wrapper actionsSmall">
        <a href="creerGroupe.php" class="btn">Créer un groupe</a>
    </div>
    <div class="wrapper">
        <section class="listGroupes">
          <h2 role="heading" aria-level="2" class="titleIndex">Mes groupes</h2>
          <hr/>
          <div class="groupe">
              <a href="" data-groupe="2283" title="Voir la fiche du groupe">
                <span class="nom" data-groupe="">Groupe des supers gentils du monde entier</span>
                <span class="nbEleve" >1111 élèves</span>
            </a>
        </div>
        <div class="groupe">
          <a href="" data-groupe="2283" title="Voir la fiche du groupe">
            <span class="nom" data-groupe="2284">2384</span>
            <span class="nbEleve">111 élèves</span>
        </a>
    </div>

</section>
<div class="popupCreer">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Ajouter un nouveau groupe</h3>
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
        <input type="submit" value="Créer" class="btn">
    </form>
</div>  
<div class="popupModifier">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Modifier un groupe</h3>
    <hr/>
    <form action="">
     <label for="groupe">Quel groupe</label>
     <select required name="groupe" id="groupe">
        <option value="1">2284</option>
    </select>
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
    <h3 aria-level="3" role="heading" class="indexTitle">Supprimer un groupe</h3>
    <hr/>
    <form action="">
        <label for="groupe">Quel groupe ?</label>
        <select multiple="1" name="groupe[]" id="groupe">
            <option value="1">2384</option>
        </select>

        <input type="submit" value="Supprimer" class="btn">
    </form>
</div>
<div class="popupVoir">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Voir un groupe</h3>
    <hr/>
    <form action="">
        <label for="groupe">Lequel ?</label>
        <select name="groupe" id="groupe">
            <option value="1">2283</option>
        </select>

        <input type="submit" value="Voir" class="btn">
    </form>
</div>
<aside class="helper">
    <ul>
        <li><a data-link="creer" href="" title="Créer un nouveau groupe">Créer un groupe</a></li>
        <li><a data-link="modifier" href="" title="Modifier un groupe">Modifier un groupe</a></li>
        <li><a data-link="supprimer" href="" title="Supprimer un groupe">Supprimer un groupe</a></li>
        <li><a data-link="voir" href="" title="Voir un groupe">Voir un groupe</a></li>
    </ul>
</aside>
</div>
<div class="popupModifierThis">
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
<div class="popupSupprimerThis">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Supprimer ce groupe: 2284</h3>
    <hr/>
    <form action="">

        <input type="submit" value="Supprimer" class="btn">
    </form>
</div>
<div class="actions">
 <span><a class="voir" title="Aller sur la fiche du groupe" href="voirGroupe.php">Voir</a></span>
 <span><a class="modifier" title="Modifier le groupe" href="">Modifier</a></span>
 <span><a class="supprimer" title="Supprimer le groupe" href="">Supprimer</a></span>
 <a href="" title="Supprimer ce cours" class="btn delete">Supprimer</a>
</div>
</section>
<div class="overlay">

</div>
<?php include('footer.php'); ?>