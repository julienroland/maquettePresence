<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<span>Elèves</span>
        </div>
    </div>
    <div class="wrapper actionsSmall">
        <a href="creerEleve.php" class="btn">Créer un cours</a>
    </div>
    <div class="wrapper">
        <section class="listEleves">
            <div class="search">
                <form action="">
                    <label for="search">Chercher un(e) élève:</label>
                    <input type="search" autocomplete = "off" name="search" id="search" placehold="Julien Roland">
                    <div class="autoCompletionEleves">
                        <ol class="listAutocomplete">


                        </ol>
                    </div>
                </form>
            </div>
            <div class="list">

                <ol class="eleves">
                 <li class="headerList">
                    <span class="nom">Nom</span>
                    <span class="anneeLevel">Année</span>
                    <span class="groupe">Groupe</span>
                    <span class="option">Option</span>
                </li> 
            </ol>
            <div class="clear"></div>
            <div class="range">
                <div class="identifier">
                    <span>A</span>
                </div>
                <ol class="eleves">

                    <li class="etudiant" data-slug="anne-marie">
                        <span data-slug="anne-marie" class="nom"><a href="voirEleve.php" title="Voir la fiche de l'élève">Anne Marie</a></span>
                        <span data-anneeLevel="3" class="anneeLevel">3e</span>
                        <span data-groupe="2283" class="groupe">2283</span>
                        <span data-option="" class="option"></span>
                    </li> 
                    <li class="etudiant" data-slug="annie-rosmant">
                        <span data-slug="annie-rosmant" class="nom"><a href="voirEleve.php" title="Voir la fiche de l'élève">Annie Rosmant</a></span>
                        <span data-anneeLevel="3" class="anneeLevel">3e</span>
                        <span data-groupe="2283" class="groupe">2283</span>
                        <span data-option="" class="option"></span>
                    </li>
                </ol>
            </div>
            <div class="range">
                <div class="identifier">
                    <span>J</span>
                </div>
                <ol class="eleves">
                    <li class="etudiant" data-slug="julien-roland">
                        <span data-slug="julien-roland" class="nom"><a href="voirEleve.php" title="Voir la fiche de l'élève">Julien Roland</a></span>
                        <span data-anneeLevel="3" class="anneeLevel">3e</span>
                        <span data-groupe="2283" class="groupe">2283</span>
                        <span data-option="" class="option"></span>
                    </li> 
                    <li class="etudiant" data-slug="jean-marc">
                        <span data-slug="jean-marc" class="nom"><a href="voirEleve.php" title="Voir la fiche de l'élève">Jean Marc</a></span>
                        <span data-anneeLevel="3" class="anneeLevel">3e</span>
                        <span data-groupe="2283" class="groupe">2283</span>
                        <span data-option="" class="option"></span>
                    </li>
                </ol>
            </div>

        </div>

    </section>
    <div class="popupCreer">
        <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
        <h3 aria-level="3" role="heading" class="indexTitle">Ajouter un nouveau élève</h3>
        <hr/>
        <form action="">
            <div class="leftForm">
                <label for="prenom">Prénom </label>
                <input type="text" required name="prenom" id="prenom" placeholder="Jean">

                <label for="nom">Nom</label>
                <input type="text" required name="nom" id="nom" placeholder="Jean">
                
                <label for="email">Email</label>
                <input type="mail" required name="email" id="email" placeholder="Jean">
                
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" placeholder="Jean">
            </div>
            <div class="rightForm">
                <label for="groupe">Groupe</label>
                <select multiple="1" required name="groupe[]" id="groupe">
                    <option value="1">2284</option>
                </select><span>semaine(s)</span>

                <label for="anneeLevel">Année</label>
                <select required name="anneeLevel" id="anneeLevel">
                    <option value="1">1er</option>
                </select>

                <label for="option">Option</label>
                <select required name="option" id="option">
                    <option value="1">web</option>
                </select>

            </div>
            <label for="cours">L'ajouter à des cours</label>
            <select multiple="1"  name="cours" id="cours">
                <option value="1">web</option>
                <option value="1">Dessin</option>
            </select>
            <input type="submit" value="Créer" class="btn">
        </form>
    </div>  
    <div class="popupModifier">
        <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
        <h3 aria-level="3" role="heading" class="indexTitle">Modifier un élève</h3>
        <hr/>
        <form action="">
           <label for="eleve">Quel élève</label>
           <select required name="eleve" id="eleve">
            <option value="1">Jean Marc</option>
        </select>
        <div class="leftForm">
            <label for="prenom">Prénom </label>
            <input type="text" required name="prenom" id="prenom" placeholder="Jean">

            <label for="nom">Nom</label>
            <input type="text" required name="nom" id="nom" placeholder="Jean">

            <label for="email">Email</label>
            <input type="mail" required name="email" id="email" placeholder="Jean">

            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" placeholder="Jean">
        </div>
        <div class="rightForm">
            <label for="groupe">Groupe</label>
            <select multiple="1" required name="groupe[]" id="groupe">
                <option value="1">2284</option>
            </select><span>semaine(s)</span>

            <label for="anneeLevel">Année</label>
            <select required name="anneeLevel" id="anneeLevel">
                <option value="1">1er</option>
            </select>

            <label for="option">Option</label>
            <select required name="option" id="option">
                <option value="1">web</option>
            </select>

        </div>
        <label for="cours">L'ajouter à des cours</label>
        <select multiple="1"  name="cours" id="cours">
            <option value="1">web</option>
            <option value="1">Dessin</option>
        </select>
        <input type="submit" value="Modifier" class="btn">
    </form>
</div>
<div class="popupSupprimer">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Supprimer un élève</h3>
    <hr/>
    <form action="">
        <label for="cours">Quel élève ?</label>
        <select multiple="1" name="eleve[]" id="eleve">
            <option value="1">Jean Marc</option>
        </select>

        <input type="submit" value="Supprimer" class="btn">
    </form>
</div>
<div class="popupVoir">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Voir un élève</h3>
    <hr/>
    <form action="">
        <label for="cours">Lequel ?</label>
        <select name="eleve" id="eleve">
            <option value="1">Jean March</option>
        </select>

        <input type="submit" value="Voir" class="btn">
    </form>
</div>
<aside class="helper">
    <ul>
        <li><a data-link="creer" href="" title="Créer un nouvelle élève">Créer un élève</a></li>
        <li><a data-link="modifier" href="" title="Modifier un élève">Modifier un élève</a></li>
        <li><a data-link="supprimer" href="" title="Supprimer un élève">Supprimer un élève</a></li>
        <li><a data-link="voir" href="" title="Voir un élève">Voir un élève</a></li>
    </ul>
</aside>
</div>
<div class="popupModifierThis">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Modifier cet élève: Jean Marc</h3>
    <hr/>
    <form action="">
        <div class="leftForm">
            <label for="prenom">Prénom </label>
            <input type="text" required name="prenom" id="prenom" placeholder="Jean">

            <label for="nom">Nom</label>
            <input type="text" required name="nom" id="nom" placeholder="Jean">

            <label for="email">Email</label>
            <input type="mail" required name="email" id="email" placeholder="Jean">

            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" placeholder="Jean">
        </div>
        <div class="rightForm">
            <label for="groupe">Groupe</label>
            <select multiple="1" required name="groupe[]" id="groupe">
                <option value="1">2284</option>
            </select><span>semaine(s)</span>

            <label for="anneeLevel">Année</label>
            <select required name="anneeLevel" id="anneeLevel">
                <option value="1">1er</option>
            </select>

            <label for="option">Option</label>
            <select required name="option" id="option">
                <option value="1">web</option>
            </select>

        </div>
        <label for="cours">L'ajouter à des cours</label>
        <select multiple="1"  name="cours" id="cours">
            <option value="1">web</option>
            <option value="1">Dessin</option>   
        </select>
        <input type="submit" value="Modifier" class="btn">
    </form>
</div>
<div class="popupSupprimerThis">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Supprimer cet élève: Jean Marc</h3>
    <hr/>
    <form action="">

        <input type="submit" value="Supprimer" class="btn">
    </form>
</div>
<div class="actions">
<span><a class="voir" title="Aller sur la fiche de l'élève" href="voirEleve.php">Voir</a></span>
   <span><a class="modifier" title="Modifier l'élève" href="">Modifier</a></span>
   <span><a class="supprimer" title="Supprimer l'élève" href="">Supprimer</a></span>
   <a href="" title="Supprimer ce cours" class="btn delete">Fermer</a>
</div>
</section>
<div class="overlay">

</div>
<?php include('footer.php'); ?>