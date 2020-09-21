<?php
    echo "<pre>";
    
    $Email = filter_input(INPUT_GET, 'email');
    
    $Password = filter_input(INPUT_GET, 'password');

    if (!empty($Email)){
    if (!empty($Password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "havi";
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO form1 (email,password)
    values ('$Email','$Password')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "name should not be empty";
    die();
    }
    ?>
    