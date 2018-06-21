<?php

require_once('model/PostAdmin.php');

function postAdmin()
{
    $postAdmin = new PostAdmin(); // Création d'un objet
    $posts = $postAdmin->getPosts(); // Appel d'une fonction de cet objet
    require('view/backend/postView.php');
}

function addpostAdmin()
{
    $addpostAdmin = new PostAdmin(); // Création d'un objet
    $addposts = $addpostAdmin->addPosts(); // Appel d'une fonction de cet objet
    require('view/backend/addpostView.php');

}

function editpostAdmin()
{
    $postAdmin = new PostAdmin();
    $post = $postAdmin->editPosts($_GET['id']);
    require('view/backend/posteditView.php');

}


function changepostAdmin()
{
    $postAdmin = new PostAdmin();
    $postid = $postAdmin->changePosts();
    $post = $postAdmin->editPosts($postid);
    require('view/backend/posteditView.php');

}

function deletePost($id)
{
    $postAdmin = new PostAdmin();
    $affectedLines = $postAdmin->deletePost($id);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: admin.php?action=postAdmin');
    }
    
}
