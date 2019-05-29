<?php $title = 'Jean Forteroche'; ?>
<?php require('header.php'); ?>
<?php require('formulaire.js'); ?>

<?php ob_start(); ?>

<form action="formulaire.js" method="post">
    <input type="text" id="nom" name="nom">
    <input type="email" id="email" name="email"> 

    <textarea name="text" id="text"></textarea>

    <input type="submit" value="Envoyer">
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>