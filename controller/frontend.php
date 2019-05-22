<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function accueil() {
    require('view/frontend/accueil.php');
}

function listPosts() {
    $PostManager = new PostManager(); //Creation d'objet.
    $posts = $PostManager->getPosts();

    require('view/frontend/listPostView.php');
}

function post() {
    $PostManager = new PostManager();
    $CommentManager = new CommentManager();

    $post = $PostManager->getPost($_GET['id']);
    $comments = $CommentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment) {

    $CommentManager = new CommentManager();
    $affectedLines = $CommentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter un commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}