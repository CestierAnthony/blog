<?php $title = "Jean Forteroche - Billet simple pour l'Alaska"; ?>
    <!-- Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Billet simple pour l'Alaska.</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

<?php ob_start(); ?>

<?php
while ($data = $posts->fetch())
{
?>
    <!-- Contenu de la page -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="index.php?action=post&amp;id=<?= $data['id']; ?>"">
              <h2 class="post-title">
              <?= htmlspecialchars($data['titre']); ?>
              </h2>
              <h3 class="post-subtitle">

<?= nl2br(htmlspecialchars($data['contenu']));
?>
              </h3>
            </a>
              <p class="post-meta">Écrit par Jean Forteroche le <?= $data['date_creation_fr']; ?></p>
          </div>
          <hr>   
        </div>
      </div>

    </div>
    <?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>