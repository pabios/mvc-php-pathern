<?php
require('../../model/model.php');
function listPost(){
    $post = getPosts();
    require('../view/fontend/indexView.php');
}

function post(){
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require('../view/postView.php');
}

function addComment($postId,$author,$comment){
    $affectedLines = postComment($postId,$author,$comment);

    if($affectedLines === false){
        die('impossible d\'ajouter le commentaire');
    }else{
        header('Location: index.php?action=post&id='.$postId);
    }
}

