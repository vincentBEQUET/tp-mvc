<?php ob_start(); ?>

<form method="post" action="<?= url( '/affichage_user/'. $user->getId() .  '/edit') ?>">
    <input type="text" name="name" value="<?= $user->getNAme() ?>" />
    <input type="mail" name="email" value="<?= $user->getEmail() ?>" />
    <input type="password" name="password" value="<?= $user->getPassword() ?>" />
    <input type="submit" value="modifier" /> 
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>