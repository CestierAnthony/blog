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
    <p>Cette page n'existe pas, <a href="index.php"/>cliquer ici</a> pour retourner à la page d'accueil.</p>
<!-- ... -->

          </div>
        </div>
      </div>

    </article>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
