<?php $title = 'Jean Forteroche'; ?>
<?php require('header.php'); ?>
<?php require('admin\admin.php'); ?>

<?php ob_start(); ?>

<ul id="list_comment">
      <?php while($c = $comment->fetch()) { ?>
      <li><?= $c['id'] ?> : <?= $c['author'] ?> : <?= $c['comment'] ?><?php if($c['approuve'] == 0) { ?> - <a href="admin\admin.php?type=comments&approuve=<?= $c['id'] ?>">Approuver</a><?php } ?> - <a href="admin\admin.php?type=comments&supprime=<?= $c['id'] ?>">Supprimer</a></li>
      <?php } ?>
</ul>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>