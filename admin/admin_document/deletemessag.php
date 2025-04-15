<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');
if (empty($_GET['id'])) {
    exit(("<h1> فشلة عملية الحذف </h1>"));
}
$resultt = "DELETE FROM maass WHERE id=$_GET[id] ";
$quer = mysqli_query($con, $resultt);


if (!$quer) {
    exit("<h1> فشل الحذف</h1>");
} else {
    header("location:showmessag.php");
}
