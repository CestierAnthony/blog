<head>
<script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc"></script>

<script type="text/javascript" >
tinymce.init({
  selector: 'textarea',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
</script> 
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
</head>
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
      <li>        <a href="admin.php?action=addpostAdmin">Ajouter un article</a></li>
    <li><a href="admin.php?action=postAdmin">Modérer les articles</a></li>
   <li> <a href="admin.php?action=commentAdmin">Modérer les commentaires</a></li>
 </ul>
    <br>
    <!-- Post Content -->
    <?php ob_start(); ?>
 <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <form action="admin.php?action=changePost" method="post" >
<input type="hidden" name="idBillet" value="<?= htmlspecialchars($post['id']); ?>"/>
    <input type="text" name="titreBillet" id="titreBillet" value="<?= htmlspecialchars($post['titre']); ?>"/>
  <br>
   <br>
    <input type="text" name="descriptionBillet" id="descriptionBillet" placeholder="Description du billet" maxlength="480" value="<?= htmlspecialchars($post['description']); ?>"/>
    <br><br>
    <textarea name="contenu">
   <?= htmlspecialchars($post['contenu']); ?>
</textarea>
              <input type="submit" value="Modifier" id="ajoutbillet"/>
                   </form>
                 </div>
               </div>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>
 