<?php
    require_once 'db_connection.php';
    require_once 'main_func.php';



    if(isset($_POST['login']))
    {
        user_login($_POST['email'],$_POST['password']);
    }

    if(isset($_POST['signup']))
    {
        signup($_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['email'],$_POST['password']);
    }
    if(isset($_POST['post_ad']))
    {

        
            post_ad($_POST['title'],$_POST['category'],$_POST['description'],$_POST['photo'],$_POST['location'],$_POST['phone'],$_POST['email']);
        
    }


?>