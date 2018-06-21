
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
              <h1>Administration</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
 <ul id="menu">
      <li>       
      <li>        <a href="admin.php?action=addpostAdmin">Ajouter un article</a><li><a href="admin.php?action=postAdmin">Modérer les articles</a></li>
   <li> <a href="admin.php?action=commentAdmin">Modérer les commentaires</a></li>
 </ul>
    <!-- Post Content -->
    <?php ob_start(); ?>
      <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0; min-width:100%;}
.tg td{font-family:Arial,sans-serif;font-size:14px; text-align:center;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-uyhz{background-color:#000000;border-color:#ffccc9;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
#red{color:red}
</style> 
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<br>
<table class="tg">
  <thead>
   <tr>
     <td class="tg-yw4l">Id du commentaire</td>
    <td class="tg-yw4l">Id de l'article</td>
    <td class="tg-yw4l">Auteur</td>
    <td class="tg-yw4l">Message</td>
    <td class="tg-yw4l">Accepter</td>
    <td class="tg-yw4l">Supprimer</td>
  </tr>
</thead>
 <?php
        while ($comment = $comments->fetch())
        {
        ?>
  <tr>
    <td class="tg-yw4l"><?= nl2br(htmlspecialchars($comment['id'])); ?></td>
      <td class="tg-yw4l"><?= htmlspecialchars($comment['id_billet']); ?></td>
        <td class="tg-yw4l"><?= htmlspecialchars($comment['auteur']); ?></td>
          <td class="tg-yw4l"><?= nl2br(htmlspecialchars($comment['commentaire'])); ?></td>
             <td class="tg-yw4l" id="red"><a href="admin.php?action=acceptComment&amp;id=<?= $comment['id'] ?>">&#10003;</a></td>
   <td class="tg-yw4l" id="red"><a href="admin.php?action=deleteComment&amp;id=<?= $comment['id'] ?>">&#10006;</a></td>
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
