<?php
require('controller/frontend.php');
//router 
if(isset($_GET['action']) && $_GET['action'] == 'listPost'){
    listPost();  

}else if(isset($_GET['action']) && $_GET['action'] == 'post'){
    if(isset($_GET['id']) && $_GET['id']>0){
        post();
    }else{
        echo 'Erreur : aucun identifiant de post envoyeee';
    }
} elseif ($_GET['action'] == 'addComment') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        if (!empty($_POST['author']) && !empty($_POST['comment'])) {
            addComment($_GET['id'], $_POST['author'], $_POST['comment']);
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
    }
    else {
        echo 'Erreur : aucun identifiant de billet envoyé';
    }
}else{
    listPost();
}

