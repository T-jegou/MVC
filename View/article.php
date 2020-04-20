<?php require_once(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'Elements'.DIRECTORY_SEPARATOR.'header.php');?>

<?php foreach($article as $data):?>
<div class="card mx-auto" style="width: 50%;margin: 3%">
        <div class="card-header">
        <?= $data->p_name; ?>

        </div>
  
        <div class="card-body">
            <p class="card-text"><?= $data->p_content?></p>
            <p class="card-text">Ecrit par : <?= $data->p_author?></p>
           
        </div>
    </div>
<?php endforeach; ?>

<?php require_once(dirname(__DIR__).DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'Elements'.DIRECTORY_SEPARATOR.'footer.php');?>


