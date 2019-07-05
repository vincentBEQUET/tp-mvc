<?php ob_start(); ?>

<form method="post" action="<?= url('edit') ?>">
    <input type=" text" name="name" value="<?=$user['name']?>"> 
</form> 
    
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>