<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<a href="eleves.php">Elèves</a>&nbsp;/&nbsp;<span>Julien Roland</span>
        </div>
    </div>
    <div class="wrapper">
        <section class="ficheEleve">
            <div class="vcard">
                <div class="photo">
                    <img src="http://placehold.it/350x200" alt="Photo de l'élève">
                </div>
                <h2 aria-level="2" role="heading" class="eleveNom">Julien Roland</h2>
                <ul >
                    <li><b>Mail:</b> roland.julien.perso@gmail.com</li>
                    <li><b>Année:</b> 3e année infographie </li>
                    <li><b>Option:</b> Web</li>
                    <li class="groupe"><b>Groupe:</b> 
                        <ul class="list">
                            <li>2283</li>
                            <li>2284</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="popupModifier">
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
        <div class="popupSupprimer">
         <div class="close"><a href="" title="Fermer la fenêtre"><span>Fermer</span></a></div>
         <h3 aria-level="3" role="heading" class="indexTitle">Supprimer cet élève: Jean Marc</h3>
         <hr/>
         <form action="">

            <input type="submit" value="Supprimer" class="btn">
        </form>
    </div>
</section>
<aside class="helper">
    <ul>
        <li><a data-link="modifier" href="" title="Modifier l'élève">Modifier l'élève</a></li>
        <li><a data-link="supprimer" href="" title="Supprimer l'élève">Supprimer l'élève</a></li>
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
        </canvas>
    </div>


</section>
<aside class="helper">

</aside>
</div>
<div class="wrapper">
 <section class="presenceTotalCours">
 <h2 role="heading" aria-level="2" class="titleIndex">Taux de présence à tous les cours</h2>
    <hr/>
    <div class="pourcentagePresenceTotalCours">
        <span>60%</span>
    </div>
    <div class="graphPresenceTotalCoursProf">
        <ul class="dataGraph" data-total="60">
            <li data-percent="60" data-cours="web">Web</li>
            <li data-percent="30" data-cours="2d">2D</li>
            <li data-percent="0" data-cours="3d">3D</li>
        </ul>
        <canvas id="graphPresenceTotalCoursProf" width="600" height="300">
        </canvas>
    </div>


</section>
<aside class="helper">

</aside>
</div>
</section>
<div class="overlay">

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="js/graphTotalCours.js"></script>
<script src="js/graphTotalCoursProf.js"></script>
<?php include('footer.php'); ?>