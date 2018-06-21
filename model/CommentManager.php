<?php
require_once('Manager.php');
class CommentManager extends Manager
{
    public function getComments($postId) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? AND report="0" ORDER BY date_commentaire');
        $comments->execute(array($postId));
        return $comments;
    }

    public function postComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
        return $affectedLines;
    }   

 public function reportComment() {
    $db = $this->dbConnect();
    $req = $db->prepare("UPDATE commentaires SET report='1' WHERE id = ?");
    $req->execute(array($_GET['id']));
    $donnees = $req->fetch();
    } 
}