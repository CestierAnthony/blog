
<style>
#menu{    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;width:100%;color:#fff;margin-top: -50px;list-style-type: none;}

li {
    float: left;
    
    width: 32%

}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;}

li a:hover {
    background-color: #111111;
}
</style>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/admin-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
           <div class="site-heading">
              <h1>Admin</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
 <ul id="menu">
      <li>        <a href="admin.php">Ajouter un article</a></li>
    <li><a href="admin.php?action=postAdmin">Modérer les articles</a></li>
   <li> <a href="admin.php?action=commentAdmin">Modérer les commentaires</a></li>
 </ul>
    <!-- Post Content -->
    <?php ob_start(); ?>
 <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

      <br>
      <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0; min-width:100%;}
.tg td{font-family:Arial,sans-serif;font-size:14px; text-align:center;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-uyhz{background-color:#000000;border-color:#ffccc9;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
#red{color:red}
</style>

<table class="tg">
<thead>
   <tr>
     <td class="tg-yw4l">Id</td>
    <td class="tg-yw4l">Titre</td>
    <td class="tg-yw4l">Voir</td>
    <td class="tg-yw4l">Editer</td>
    <td class="tg-yw4l">Supprimer</td>
  </tr>
</thead>
<?php

while ($data = $posts->fetch())


{
?>
  <tr>
     <td class="tg-yw4l"><?= htmlspecialchars($data['id']); ?></td>
    <td class="tg-yw4l"><?= htmlspecialchars($data['titre']); ?></td>
    <td class="tg-yw4l"><a href="index.php?action=post&id=<?= $data['id']; ?>" target="_blank">&#128065;</a></td>
    <td class="tg-yw4l"><a href="admin.php?action=editPost&id=<?= $data['id']; ?>" target="_blank">&#128393;</a></td>
    <td class="tg-yw4l" id="red"><a href="admin.php?action=deletePost&amp;id=<?= $data['id'] ?>">&#10006;</a></td>
  </tr>
<?php
} 
?>
</table>
</div>
</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>
 