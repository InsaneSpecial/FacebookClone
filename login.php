<?php
    $con = mysqli_connect('localhost','root','','facebookclone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header('location:http://localhost/FACEOOKCLONEBOILERPLATE/mainpage.html');
    }else{
        header('location:http://localhost/FACEOOKCLONEBOILERPLATE/');
    }
