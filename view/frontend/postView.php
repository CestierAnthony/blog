<?php $title = htmlspecialchars($post['titre']); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?= htmlspecialchars($post['titre']); ?></h1>
              <span class="meta">Écrit par Jean Forteroche le <?= $post['date_creation_fr']; ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <?php ob_start(); ?>

    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p>
  <?= nl2br(htmlspecialchars($post['contenu'])); ?>
            </p>
              <hr>
    
            <p>

<h2>Commentaires :</h2>

    <?php
        while ($comment = $comments->fetch())
        {
        ?>
        <p style="float: right ">
  <a style="color: red " href="index.php?action=report&amp;id=<?= $comment['id'] ?>">Signaler</a>
</p>
<p>
<strong>
<?= htmlspecialchars($comment['auteur']); ?>
</strong> le <?= $comment['date_commentaire_fr']; ?>
</p>

<p><?= nl2br(htmlspecialchars($comment['commentaire'])); ?>
</p>

<hr>

<?php
} 
?>
</p>

<h2>Ajouter un commentaire</h2>
<br>
<form action="index.php?action=addPost&amp;id=<?= $post['id'] ?>" method="post">
    <div>
      <div>
        <input type="text" placeholder="Votre pseudo" id="author" name="author" style="width: 100%;"/></div>
        <br>
        <div>
      <textarea id="comment" rows="7" name="comment" placeholder="Votre commentaire..." style="width: 100%;"></textarea>

    </div>
    </div>
     <br>
    <div>
        <input type="submit" style="float: right;" />
    </div>
</form>

<!-- ... -->

          </div>
        </div>
      </div>

    </article>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
