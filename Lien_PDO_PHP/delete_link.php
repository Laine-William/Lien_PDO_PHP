<?php
 
require_once ('functions.php');
    
if (isset ($_GET ['link_id'])) {

    $link_id = htmlspecialchars($_GET['link_id']);

    $delete_link = delete_link($link_id);

    header('Location: index.php');
    
    exit();
}

?>