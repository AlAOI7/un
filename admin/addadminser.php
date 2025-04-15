<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');

if (isset($_POST['loginser'])) {
    $username = $_POST['username'];
    $passoward = md5($_POST['passs']);

    $q = " INSERT INTO  adminsearch (username,passs) 
                         VALUES('$username','$passoward') ";

    $query = mysqli_query($con, $q);
    // طريقة عرض الصولر في هائة الصفحة



}
header("Location:saperadmin.php");
