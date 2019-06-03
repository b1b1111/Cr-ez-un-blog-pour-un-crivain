<?php $title = 'Jean Forteroche'; ?>
<?php require('header.php'); ?>


<?php ob_start(); ?>

<form  action="" method="POST" enctype="multipart/form-data" id="form_contact">

    <input type="hidden" name="action" value="submit">

    <label for="name">Votre nom:</label><br/>
    <input name="name" type="text" value="" size="30"/><br>

    <label for="email">Votre adresse mail:</label><br/>
    <input name="email" type="text" value="" size="30"/><br>
    
    <label for="message">Votre message:</label><br/>
    <textarea name="message" rows="7" cols="35"></textarea><br>

    <input type="submit" name="submit" value="Envoyez Email"/>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
