<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');
if (empty($_GET['id'])) {
    exit(("<h1> فشلة عملية الحذف </h1>"));
}
$resultt = "DELETE FROM conect_table WHERE id=$_GET[id] ";
$quer = mysqli_query($con, $resultt);


if (!$quer) {
    exit("<h1> فشل الحذف</h1>");
} else {
    header("location:show.php");
}


// // حذف عن طريق set
// if (isset($_POST['catogratydelet'])) {

//     $catogry = $_POST['catogratydelet'];
//     $desplay = " UPDATE aplouddd  SET status='2' WHERE id='$catogry' LIMIT 1 ";
//     $quyredesplay = mysqli_query($con, $desplay);

//     if ($quyredesplay) {
//         $_SESSION['message'] = "catogery  updetad susccassfuly";
//         header('location:showdata.php');
//         exit(0);
//     } else {
//         $_SESSION['message'] = " semtthing wind ";
//         header('location:showdata.php');
//         exit(0);
//     }
// }
