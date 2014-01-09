<?php include('header.php'); ?>
<section role="main" class="main" id="main">
    <h1 class="section">Contenu principal du site</h1>

    <div class="breadcrumbs">
        <div class="wrapper">
            <a href="indexCo.php">Accueil</a>&nbsp;/&nbsp;<span>Configuration</span>
        </div>
    </div>
    <div class="wrapper">
        <section class="couleur">
           <h2 aria-level="2" role="heading" class="indexTitle">Couleurs</h2>
           <hr/>

           <div class="config">
               <h3 aria-level="3" role="heading">Cours</h3>
               <ul class="cours">

               </ul>
           </div>
           <div class="config">
               <h3 aria-level="3" role="heading">Présence</h3>
               <ul class="presence"></ul>
           </div>
           <div class="config">
               <h3 aria-level="3" role="heading">Groupe</h3>
               <ul class="groupe"></ul>
           </div>
           <button class="btn save" >Sauvegarder</button>
       </div>

   </section>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

   <?php include('footer.php'); ?>