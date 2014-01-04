<?php include('header.php'); ?>
<h1 class="section" role="heading" aria-level="1">Page d'accueil du site e-commerce etude et vie</h1>
<section class="container ">
  <h1 class="section" role="heading" aria-level="1">Contenu de la page</h1>

  <section role="main" class="main wrapper one" id="main">
    <h1 class="section">Contenu principal du site</h1>
    <div class="logo">
     <h1><a href=""><abbr title="Haute Ecole de La Province de Liège">HEPL</abbr></a></h1>
   </div>
   <div class="intro">
     <p>
       Plateforme de gestion de présence pour les professeurs de la Haute Ecole de La Province de Liège.
     </p>
   </div>
   <div class="connexion">
     <form action="indexCo.php">
       <label for="">Votre e-mail</label>
       <input type="email" name="" id="" placeholder="prenom.nom@hepl.be">

       <label for="">Votre mot de passe</label>
       <input type="password" name="" id="">

       <input type="submit" value="Connexion">
       <div class="problemeCompte">
        <a href="">Mot de passe oublié ?</a>
        <span>/</span>
        <a href="">Pas encore inscrit ?</a>
      </div>
    </form>
  </div>
</section>

</section>
<?php include('footer.php'); ?>
