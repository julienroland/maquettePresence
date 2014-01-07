<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<span>Mes scéances</span>
        </div>
    </div>
    <div class="wrapper">
        <section class="planningSceances">
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
                        <a href="" title="Créer une scéance à cette date" class=" creer">
                            Créer
                        </a>
                    </div>
                    <ol class="sceances">
                        <li class="quatreH">
                            <a href="voirSceance.php" title="Voir la scéance">
                             Web
                         </a>
                     </li>
                     <li class="deuxH">
                        <a href="voirSceance.php" title="Voir la scéance">Typographie</a>
                    </li>
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

    <div class="popupCreerCours">
        <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
        <h3 aria-level="3" role="heading" class="indexTitle">Crée un nouveau cours</h3>
        <hr/>
        <form action="">
            <label for="cours">Quel cours</label>
            <select name="cours" required id="cours">
                <option value="1">Web</option>
            </select> 

            <label for="day">Quel jour</label>
            <select name="day" required id="day">
                <option value="1">Lundi</option>
            </select>

            <div class="leftForm">
                <label for="date_debut">Heure du début</label>
                <input type="text" required name="date_debut" id="date_debut" placeholder="Math">

                <label for="date_fin">Heure de fin</label>
                <input type="text" required name="date_fin" id="date_fin" placeholder="Math">

            </div>
            <div class="rightForm">
                <label for="motif">Tous les</label>
                <select required name="motif" id="motif">
                    <option value="1">1</option>
                </select><span>semaine(s)</span>

                <label for="temps">Pendant</label>
                <select required name="temps" id="temps">
                    <option value="1">14 semaines</option>
                </select>
            </div>
            <input type="submit" value="Créer" class="btn">
        </form>
    </div>  
    <div class="popupModifierCours">
        <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
        <h3 aria-level="3" role="heading" class="indexTitle">Modifier un cours</h3>
        <hr/>
        <form action="">
            <label for="cours">Quel cours ?</label>
            <select name="cours" id="cours">
                <option value="1">Web</option>
            </select>
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
    <div class="popupSupprimerCours">
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
    <div class="popupVoirCours">
        <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
        <h3 aria-level="3" role="heading" class="indexTitle">Voir un cours</h3>
        <hr/>
        <form action="">
            <label for="cours">Lequel ?</label>
            <select name="cours" id="cours">
                <option value="1">Web</option>
            </select>

            <input type="submit" value="Voir" class="btn">
        </form>
    </div>

    <aside class="helper">
        <ul>
            <li><a data-link="creer" href="" title="Créer une nouvelle scéance">Créer une scéance</a></li>
            <li><a data-link="modifier" href="" title="Modifier une scéance">Modifier une scéance</a></li>
            <li><a data-link="supprimer" href="" title="Supprimer une scéance">Supprimer une scéance</a></li>
            <li><a data-link="voir" href="" title="Voir une scéance">Voir une scéance</a></li>
        </ul>
    </aside>
</div>
<div class="wrapper">
    <section class="ligneSceances">
        <h2 role="heading" aria-level="2" class="titleIndex">Liste des scéances</h2>
        <hr/>

        <div class="ligne">
           <div class="anneeEcole">
                <!-- <form action="">
                    <label for="annee">Chercher une année</label>
                    <input type="search" name="annee" id="annee" placeholder="2013">
                </form> -->
                <ul class="anneeTemps">
                    <li class="one">
                        <span>2013</span>
                        <span class="separatorDate">-</span>  
                        <span>2014</span>
                    </li>
                    <div class="betweenAnnee"><span></span></div>
                    <li class="two">
                        <span>2013</span>
                        <span class="separatorDate">-</span>  
                        <span>2014</span>
                    </li>

                </ul>
            </div>
            <div class="temps">
                <div class="mois"><span>Novembre</span></div>
                <ul class="sceancesMois">
                    <li class="impair"><a data-cours="web" data-sceance="1" href="">28 Février (Web)</a></li>
                    <li class="pair"><a data-cours="web" data-sceance="2" href="">22 Mars(Web)</a></li> 
                    <li class="impair"><a data-cours="web" data-sceance="3" href="">28 Février(Web)</a></li>
                    <li class="pair"><a data-cours="web" data-sceance="4" href="">22 Mars(Web)</a></li>
                </ul>
                <div class="mois"><span>Décembre</span></div>
                <ul class="sceancesMois">
                    <li class="impair"><a data-cours="web" href="">28 Février</a></li>
                    <li class="pair"><a data-cours="web" href="">22 Mars</a></li> 
                    <li class="impair"><a data-cours="web" href="">28 Février</a></li>
                    <li class="pair"><a data-cours="web" href="">22 Mars</a></li>
                </ul>
                <div class="mois"><span>Décembre</span></div>
                <ul class="sceancesMois">
                    <li class="impair"><a data-cours="web" href="">28 Février</a></li>
                    <li class="pair"><a data-cours="web" href="">22 Mars</a></li> 
                    <li class="impair"><a data-cours="web" href="">28 Février</a></li>
                    <li class="pair"><a data-cours="web" href="">22 Mars</a></li>
                </ul>
                <div class="mois"><span>Décembre</span></div>
                <ul class="sceancesMois">
                    <li class="impair"><a data-cours="web" href="">28 Février</a></li>
                    <li class="pair"><a data-cours="web" href="">22 Mars</a></li> 
                    <li class="impair"><a data-cours="web" href="">28 Février</a></li>
                    <li class="pair"><a data-cours="web" href="">22 Mars</a></li>
                </ul>

            </div>

        </div>
        <a href="ligneSceance.php" title="Aller sur la page de la ligne du temps complète" class="moreContent">Voir toute la ligne du temps</a>
        
        
    </section>    

</div>


</section>

<div class="overlay">

</div>
<div class="popupModifierSceanceLigne">
    <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
    <h3 aria-level="3" role="heading" class="indexTitle">Modifier un cours</h3>
    <hr/>
    <form action="">
        <label for="cours">Quel cours ?</label>
        <select name="cours" id="cours">
            <option value="1">Web</option>
        </select>
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
<div class="popupSupprimerSceanceLigne">
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
<div class="actions">
   <span><a class="voir" title="Aller sur la fiche de la scéance" href="voirSceance.php">Voir</a></span>
   <span><a class="modifier" title="Modifier la scéance" href="">Modifier</a></span>
   <span><a class="supprimer" title="Supprimer la scéance" href="">Supprimer</a></span>
   <a href="" title="Supprimer ce cours" class="btn delete">Supprimer</a>
</div>
</section>
<?php include('footer.php'); ?>