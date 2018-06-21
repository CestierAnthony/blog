<?php

require('controller/backend/LogIn.php');
session_start();
if(!empty($_SESSION['id']))
{
	require('controller/backend/CommentAdmin.php');
    require('controller/backend/PostAdmin.php');

        if ($_GET['action'] == 'deleteComment') {
            deleteComment($_GET['id']);
        }
        else if($_GET['action'] == 'acceptComment') {
            acceptComment($_GET['id']);
        }
        else if($_GET['action'] == 'deletePost') {
            deletePost($_GET['id']);
        }
        else if($_GET['action'] == 'addPost') {
            addpostAdmin($_GET['id']);
        }
        else if($_GET['action'] == 'postAdmin'){
            postAdmin();
        }
        else if($_GET['action'] == 'editPost'){
            editpostAdmin($_GET['id']);
        }
        else if($_GET['action'] == 'commentAdmin'){
            commentAdmin();
        }
        else if($_GET['action'] == 'changePost'){
            changepostAdmin();
        }
        else if($_GET['action'] == 'addpostAdmin'){
            addpostAdmin();
        }
         else if($_GET['action'] == 'logOut'){
            logOut();
        }
        else{
        postAdmin();
        }
}

else{
    if($_GET['action'] == 'logIn'){
        logIn();
    } else {
        showlogIn();
    }

}

  