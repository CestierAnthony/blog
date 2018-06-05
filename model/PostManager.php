<?php
require_once('Manager.php');
class PostManager extends Manager
{
    public function getPosts()
    {
    $db = $this->dbConnect();
// On récupère les derniers billets
    $req = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh\') AS date_creation_fr FROM billets ORDER BY date_creation DESC');
    return $req;
    }

    public function getPost($id)
    {   
// Récupération du billet
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh\') AS date_creation_fr FROM billets WHERE id = ?');
    $req->execute(array($id));
    $post = $req->fetch();

    return $post;
    } 
}