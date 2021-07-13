<?php
    require_once 'db_connection.php';

    function user_login($email , $pass)
    {
        global $connect ;
        $query = "select * from `users` where email = '".$email."' and password = '".$pass."' ";
        $result = mysqli_query($connect,$query);
        $subsc_check = mysqli_num_rows($result);
        if ($subsc_check == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;
            echo $_SESSION['email'];
        }
    }

    function signup($fname , $lname , $username , $email ,$password)
    {
        global $connect ;
        $query = "insert into signup (fname, lname, username, email, password)
        values ('$fname','$lname','$username','$email','$password')";
        $result = mysqli_query($connect,$query);
        if ($result)
        {
            header("location: ../login.html");
        }
    }
    

    function post_ad($title , $category , $description , $photo ,$location, $phone , $email)
    {
        global $connect;
        $query= "insert into ads (title, category, description, photo, location, phone, email)
        values ('$title','$category','$description','$photo','$location','$phone','$email')";
        $result = mysqli_query($connect,$query);
        if ($result)
        {
            header("location: ../main.html");
        }
    }
    




?>