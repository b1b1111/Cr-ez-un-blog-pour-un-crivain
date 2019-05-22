<?php
require('controller/frontend.php');

try { 

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
            else if ($_GET['action'] == 'accueil') {
                accueil();
            }
                else if ($_GET['action'] == 'post') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        post();
                    }
                    else {
                        throw new Exception('Aucun id de billet envoyé !');
                    }
                }

        else if ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Error : Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Error : Aucun identifiant de billet envoyé !');
            } 
        }
    }
    else {
        accueil();
    }

}
catch(Exception $e) {
    echo 'Erreur :' .$e->getMessage();
}

    