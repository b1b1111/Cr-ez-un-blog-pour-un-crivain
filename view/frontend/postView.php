<?php $title = htmlspecialchars($post['title']); ?>
<?php require('header.php'); ?>

<?php ob_start(); ?>

<div class="news">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
    
    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<div id="comment">
    <h2>Commentaires</h2>

    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div>
            <label for="author">Auteur</label> <br />
            <input type="text" id="author" name="author"/>
        </div>

        <div>
            <label for="comment">Commentaire</label> <br />
            <textarea name="comment" id="id"></textarea>
        </div>

        <div id="button_form">
            <input type="submit">
        </div>

</form>
</div>

<p><a href="index.php?action=listPosts&amp;id>">Retour à la liste des chapitres</a></p>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>