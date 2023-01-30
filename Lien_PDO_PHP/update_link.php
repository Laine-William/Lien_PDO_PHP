<?php 
  
require_once ("functions.php");

if(isset($_POST['link_id'], $_POST['title'], $_POST['url'])) {

  $link_id = htmlspecialchars($_POST['link_id']);
  $title = htmlspecialchars($_POST['title']);
  $url = htmlspecialchars($_POST['url']);

  $data = ['link_id' => $link_id, 'title' => $title, 'url' => $url]; 
      
  $update_link = update_link($data);

  header('Location: index.php');
}

if(isset($_GET['link_id'])) {

  $link_id = htmlspecialchars($_GET['link_id']);
  
  require_once("./inc/header.php");
    
?>
    
<main>
  <div class="container h-100">
    <div class="row justify-content-center h-50">
      <div class="col-md-6 shadow p-3 pt-5">
            
      <?php
              
      $links = get_link_by_id($link_id);
              
      foreach($links as $link) :

      ?>
                  
        <h2 class="mb-3">Modifier le lien # <?= $link['link_id']?></h2>

        <div class="mb-3">
          <form action="" method="post">
            <div class="mb-3">
              <div class="form-floating">
                <input type="hidden" id="link_id" name="link_id" value="<?= $link['link_id']?>">

                <input type="text" class="form-control" id="title" name="title" value="<?= $link['title']?>"/>
                          
                <label for="title">Titre</label>
              </div>
            </div>
              
            <div class="mb-3">
              <div class="form-floating">
                <input type="url" class="form-control" id="url" name="url" value="<?= $link['url']?>"/>
                  
                <label for="url">Lien</label>
              </div>
            </div>

            <div class="col-md-auto d-flex">        
              <button type="submit" class="btn btn-primary btn-lg" name="submit">Modifier</button>
            </div>
          </form>
        </div>
          
      <?php
              
        endforeach;

      ?>

      </div>
    </div>
  </div>
</main>
    
<?php

  }

  require_once("./inc/footer.php");
?>