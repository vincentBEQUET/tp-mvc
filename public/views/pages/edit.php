<?php ob_start(); ?>

<form method="post" action="<?= url('/affichage_user/' . $user->getId() . '/edit') ?>">
    <input type="hidden" name="id" value="<?= $user->getId() ?>" />
    <input type="text" name="name" value="<?= $user->getName() ?>" />
    <input type="mail" name="email" value="<?= $user->getEmail() ?>" />
    <input type="password" name="password" value="<?= $user->getPassword() ?>" />
    <input type="hidden" name="created_at" value="<?= $user->getCreatedAt() ?>" />
    <input type="hidden" name="avatar" value="<?= $user->getAvatar() ?>" />
    <input type="submit" value="modifier" />
</form>

<?php
if (!empty($_POST))
{
    var_dump($_POST);
}
?>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>