<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<span>Mes scéances</span>
        </div>
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
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li> 
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li>
                </ul>
                <div class="mois"><span>Décembre</span></div>
                <ul class="sceancesMois">
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li> 
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li>
                </ul>
                <div class="mois"><span>Décembre</span></div>
                <ul class="sceancesMois">
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li> 
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li>
                </ul>
                <div class="mois"><span>Décembre</span></div>
                <ul class="sceancesMois">
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li> 
                    <li class="impair"><a href="">28 Février</a></li>
                    <li class="pair"><a href="">22 Mars</a></li>
                </ul>

            </div>

        </div>
        <a href="" title="Aller sur la page de la ligne du temps complète" class="moreContent">Voir toute la ligne du temps</a>
    </section>    

</div>



</section>

</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="js/graphTotalCours.js"></script>
<?php include('footer.php'); ?>