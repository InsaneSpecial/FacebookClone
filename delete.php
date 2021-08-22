<?php
$con = mysqli_connect('localhost', 'root', '', 'facebookclone');
$phoneoremail = $_POST['phoneoremail'];

$check = mysqli_query($con, "DELETE FROM userdata WHERE phoneoremail = '$phoenoremail'");

if ($check > 0) {
    header('location:http://localhost/FACEOOKCLONEBOILERPLATE/');
}
