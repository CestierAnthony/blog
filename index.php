<?php
require('controller/frontend/PostManager.php');
require('controller/frontend/CommentManager.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
         else if($_GET['action'] == 'report') {
            reportComment($_GET['id']);
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addPost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        listPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
