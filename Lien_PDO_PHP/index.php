<?php 
  
require_once("create_link.php");

?>
    
        <!-- affiche la liste des liens -->
        <ul class="list-group">
              
          <?php 
                
            $links = get_all_link();

            foreach($links as $link) :

          ?>
                    
          <li class="list-group-item d-flex justify-content-between align-items-center" >
            <a href="<?= $link['url'] ?>">
                     <?= $link['title'] ?>
            </a>
                      
            <span>
              <a href="update_link.php?link_id=<?= $link['link_id'] ?>">
                <i class="fa-regular fa-pen-to-square me-1 text-warning"></i>
              </a>
              
              <a href="delete_link.php?link_id=<?= $link['link_id'] ?>">
                <i class="fa-solid fa-trash ms-1 text-danger"></i>
              </a>
            </span>
          </li>
          
          <?php

            endforeach;

          ?>
        
        </ul>
        <!-- affiche la liste des liens -->
      </div>
    </div>
  </div>
</main>

<?php

  require_once("./inc/footer.php");

?>