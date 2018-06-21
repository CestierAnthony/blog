<?php

require_once('model/CommentManager.php');

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function reportComment($id)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->reportComment($id);
    if ($affectedLines === false) {
        throw new Exception('Impossible de signaler le commentaire !');
    } else {
       header('Location: index.php');
    }
}