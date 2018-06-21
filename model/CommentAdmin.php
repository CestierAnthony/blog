<?php
require_once('Manager.php');
class CommentAdmin extends Manager
{
    public function getComments() {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, id_billet, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE report="1" ORDER BY date_commentaire');
        $comments->execute(array($postId));
        return $comments;
    }

    public function deleteComment() {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM commentaires WHERE id = ?");
        $req->execute(array($_GET['id']));
        $donnees = $req->fetch();
    }

    public function acceptComment() {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE commentaires SET report='0' WHERE id = ?");
        $req->execute(array($_GET['id']));
        $donnees = $req->fetch();
    }
}
