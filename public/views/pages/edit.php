<?php ob_start(); ?>

<form method="post" action="<?= url('edit') ?>">
    <input type="text" name="name" value="<?= $user['name'] ?>" />
    <input type="mail" name="email" value="<?= $user['email'] ?>" />
    <input type="password" name="password" value="<?= $user['password'] ?>" />
    <input type="submit" value="modifier" /> 
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>