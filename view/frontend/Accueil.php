<?php $title = 'Jean Forteroche'; ?>
<?php require('header.php'); ?>

<?php ob_start(); ?>


<section id="section_one" >

    <div id="presentation">
        <p>Bonjour à tous, <br />
        Je travaille actuellement sur mon prochain roman, "Billet simple pour l'Alaska", je souhaite innover et le publier par épisode en ligne sur mon propre site.<br />
        Vous aurez la possibilités de laisser des commentaires, n'hésitez pas, l'inspiration vient dabord de vous. <br />
        C'est donc avec une grande joie que je vous laisse découvrir l'aventure au fil des chapitres.</p>

        <h5 class="signature" >Jean Forteroche</h5>
    </div>

    <img id="jean_img" src="public/images/jean.jpg" alt="jean" >

</section>

<section id="section_two">

    <div id="resum">
        <p>Un soir de pluie, <br />
        V'là qu'on gratte à ma porte, je m'empresse d'ouvrir, sans doute un nouveau chat!<br />
        Nom de Dieu! Le beau félin que l'orage m'apporte, c'était toi, c'était toi, c'était toi...</p>

        <h5 class="signature" >Jean Forteroche</h5>

        <em><a href="index.php?action=listPosts&amp;id>">Lire les chapitres</a></em>
    </div>

    <img id="bear_img" src="public/images/bear.jpg" alt="bear" >

</section>

<footer>

</footer>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
