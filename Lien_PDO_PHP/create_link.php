<?php 
  
require_once("functions.php");

if(isset($_POST['title'], $_POST['url'])) {

  $title = htmlspecialchars($_POST['title']);
  $url = htmlspecialchars($_POST['url']);

  $data = ['title' => $title, 'url' => $url]; 
      
  $create_link = create_link($data);
}

require_once("./inc/header.php");

?>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="mb-3">
          <!-- formulaire ajout -->
          <form action="" method="post">
            <div class="row g-2">
              <div class="col-md">
                <div class="form-floating">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Stack overflow" required/>
                    
                  <label for="title">Titre</label>
                </div>
              </div>
                  
              <div class="col-md">
                <div class="form-floating">
                  <input type="url" class="form-control" id="url" name="url" placeholder="https://stackoverflow.com" required/>
                  
                    <label for="url">Lien</label>
                </div>
              </div>
              
              <div class="col-md-auto d-flex">
                <button type="submit" class="btn btn-primary btn-lg" name="submit">Ajouter</button>
              </div>
            </div>
          </form>
          <!-- formulaire ajout -->
        </div>