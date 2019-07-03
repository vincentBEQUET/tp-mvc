<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis minus quia perspiciatis aperiam. Voluptates aliquam incidunt, quo eos quisquam asperiores perspiciatis delectus est et! Nemo quia sed laboriosam fugiat assumenda!
</p>

<a href="<?= url('add_user') ?>">add_user</a><br>
<a href="<?= url('add_film') ?>">add_film</a><br>
<a href="<?= url('affichage_user') ?>">affichage_user</a><br>
<a href="<?= url('affichage_film') ?>">affichage_film</a><br>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>