<?php require_once(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'Elements'.DIRECTORY_SEPARATOR.'header.php');?>
  <!-- Page Content -->
<?php foreach ($articles as $article):?>
    <div class="card mx-auto" style="width: 50%;margin: 3%">
        <div class="card-header">
        <?= $article->p_name?>

        </div>
  
        <div class="card-body">
            <p class="card-text"><?= substr($article->p_content, 0, 300)?> ... </p>
            <p class="card-text">Ecrit par : <?= $article->p_author?></p>
            <a href="index.php?article=<?= $article->p_id ?>" class="btn btn-primary">Lire l'article</a>
        </div>
    </div>
    <?php endforeach;?>

<?php require_once(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'Elements'.DIRECTORY_SEPARATOR.'footer.php');?>
