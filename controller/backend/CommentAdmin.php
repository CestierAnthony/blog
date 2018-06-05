<?php

require_once('model/CommentAdmin.php');

function commentAdmin()
{
    $commentAdmin = new CommentAdmin(); // Création d'un objet
    $comments = $commentAdmin->getComments(); // Appel d'une fonction de cet objet

    require('view/backend/commentView.php');
}


function deleteComment($id)
{
    $commentAdmin = new CommentAdmin();

    $affectedLines = $commentAdmin->deleteComment($id);

    if ($affectedLines === false) {
        throw new Exception('Impossible de spprimer le commentaire !');
    }
    else {
        header('Location: admin.php?action=commentAdmin');
    }
}


function acceptComment($id)
{
    $commentAdmin = new CommentAdmin();

    $affectedLines = $commentAdmin->acceptComment($id);

    if ($affectedLines === false) {
        throw new Exception('Impossible de spprimer le commentaire !');
    }
    else {
        header('Location: admin.php?action=commentAdmin');
    }
}