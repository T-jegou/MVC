<?php require_once(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'Elements'.DIRECTORY_SEPARATOR.'header.php');?>
  <!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Bienvenue sur la demo du MVC</h1>
      <p class="lead">Retrouve les sources sur mon git T-jegou</p>
      <p class="lead">Il y actuellement <?= $nbarticle ?> articles disponible sur le site</p>
      <ul class="list-unstyled">
      <li>test 1 2</li>
        
        <a href="index.php?liste">Acceder a la liste de nos articles</a>
      </ul>
    </div>
  </div>
</div>

<?php require_once(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'Elements'.DIRECTORY_SEPARATOR.'footer.php');?>


