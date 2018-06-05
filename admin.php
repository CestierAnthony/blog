<?php
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
        else if($_GET['action'] == 'addPosts') {
            addPost($_GET['id']);
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
		else{
			addpostAdmin();
		}
