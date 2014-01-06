<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<span>Mes cours</span>
        </div>
    </div>
    <div class="wrapper">
        <section class="gererMesCours">
            <h2 role="heading" aria-level="2" class="titleIndex">Mes cours</h2>
            <hr/>
            <div class="cours">
                <div class="groupe">2384</div>
                <div class="titre">
                    <h3 role="heading" aria-level="3">Web</h3>
                    <span class="option">option web</span>
                </div>


                <div class="horaire">
                    <span class="debut">8H00</span>
                    <span class="fin">3e</span>
                </div>
                <div class="overImage">
                    <a href="voirCours.php" class="btn" title="Voir ce cours">Voir</a>
                    <a href="" class="btn" title="Modifier ce cours">Modifier</a>
                    <a href="" title="Supprimer ce cours" class="btn delete">Supprimer</a>

                </div>
            </div>  
            <div class="cours">
                <div class="groupe">2384</div>
                <div class="titre">
                    <h3 role="heading" aria-level="3">Web</h3>
                    <span class="option">option web</span>
                </div>


                <div class="horaire">
                    <span class="debut">8H00</span>
                    <span class="fin">3e</span>
                </div>
                <div class="overImage">
                    <a href="" class="btn" title="Voir ce cours">Voir</a>
                    <a href="" class="btn" title="Modifier ce cours">Modifier</a>
                    <a href="" title="Supprimer ce cours" class="btn delete">Supprimer</a>

                </div>
            </div> <div class="cours">
            <div class="groupe">2384</div>
            <div class="titre">
                <h3 role="heading" aria-level="3">Web</h3>
                <span class="option">option web</span>
            </div>


            <div class="horaire">
                <span class="debut">8H00</span>
                <span class="fin">3e</span>
            </div>
            <div class="overImage">
                <a href="" class="btn" title="Voir ce cours">Voir</a>
                <a href="" class="btn" title="Modifier ce cours">Modifier</a>
                <a href="" title="Supprimer ce cours" class="btn delete">Supprimer</a>

            </div>
        </div> 
        <div class="popupCreerCours">
            <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
            <h3 aria-level="3" role="heading" class="indexTitle">Crée un nouveau cours</h3>
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
    </section>
    <aside class="helper">
        <ul>
            <li><a data-link="creer" href="" title="Créer un nouveau cours">Créer un cours</a></li>
            <li><a data-link="modifier" href="" title="Modifier un cours">Modifier un cours</a></li>
            <li><a data-link="supprimer" href="" title="Supprimer un cours">Supprimer un cours</a></li>
            <li><a data-link="voir" href="" title="Voir un cours">Voir un cours</a></li>
        </ul>
    </aside>
</div>
<div class="wrapper">
    <section class="presenceTotalCours">
        <h2 role="heading" aria-level="2" class="titleIndex">Taux de présence à vos cours</h2>
        <hr/>
        <div class="pourcentagePresenceTotalCours">
            <span>60%</span>
        </div>
        <div class="graphPresenceTotalCours">
            <ul class="dataGraph" data-total="60">
                <li data-percent="60" data-cours="web">Web</li>
                <li data-percent="30" data-cours="2d">2D</li>
                <li data-percent="0" data-cours="3d">3D</li>
            </ul>
            <canvas id="graphPresenceTotalCours" width="600" height="300">
            </div>
            
        </section>
    </div> 
    <div class="wrapper">
        <section class="presenceParCours">
            <h2 role="heading" aria-level="2" class="titleIndex">Taux de présence par cours</h2>
            <hr/>
            <div class="pourcentagePresenceParCours">
                <span class="nom"><a href="" title="Voir le cours">Web</a></span>
                <span class="percent">50%</span>
            </div>
            <div class="pourcentagePresenceParCours">
               <span class="nom"><a href="">3D</a></span>
               <span class="percent">0%</span>
           </div>
           <div class="pourcentagePresenceParCours">
               <span class="nom"><a href="">2D</a></span>
               <span class="percent">50%</span>
           </div>
           
           
       </section>
   </div>
   <div class="overlay">

    </div>

</section>

</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="js/graphTotalCours.js"></script>
<?php include('footer.php'); ?>