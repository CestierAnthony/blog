<?php
require_once('Manager.php');
class PostAdmin extends Manager
{
    public function getPosts() {
        $db = $this->dbConnect();
        $posts = $db->prepare('SELECT id, titre FROM billets ORDER BY id');
        $posts->execute(array($postId));
        return $posts;
    }
  
    public function editPosts($id) {   
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, titre, description, contenu FROM billets WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();
        return $post;
    } 

    public function deletePost() {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM billets WHERE id = ?");
        $req->execute(array($_GET['id']));
        $donnees = $req->fetch();
    }

    public function addPosts() {
        $db = $this->dbConnect();
        $titre = $_POST["titreBillet"];
        $contenu = $_POST["contenu"];
        $description = $_POST["descriptionBillet"];
        $date_creation = date("Y-m-d H:i:s");
        $req = $db->prepare("INSERT INTO billets(titre, description, contenu, date_creation) VALUES(:titre, :description, :contenu, :date_creation)");
        $req->execute(array(
        'titre' => $titre,
        'description' => $description,
        'contenu' => $contenu,
        'date_creation' => $date_creation
        ));

    }


    public function changePosts() {
        $db = $this->dbConnect();
        $id = $_POST["idBillet"];
        $titre = $_POST["titreBillet"];
            $desctiption = $_POST["descriptionBillet"];
        $contenu = $_POST["contenu"];
        $req = $db->prepare("UPDATE billets SET titre = :titre, description = :description, contenu = :contenu WHERE id = :id");
        $req->bindParam(':titre',$titre);
        $req->bindParam(':id',$id);
        $req->bindParam(':description',$description);
        $req->bindParam(':contenu',$contenu);
        $req->execute();
        return $id;
    }
}
