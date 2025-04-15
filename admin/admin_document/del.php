<?php

include "conectdb/concte.php";



// if (empty($_GET['id'])) {
//     exit(("<h1> فشلة عملية الحذف </h1>"));
// }
// $resultt = "DELETE FROM aplouddd WHERE id=$_GET[id] ";
// $quer = mysqli_query($con, $resultt);


// if (!$quer) {
//     exit("<h1> فشل الحذف</h1>");
// } else {
//     header("location:showdata.php");
// }


// // حذف عن طريق set

if (isset($_POST['catogratydelet'])) {

    $catogry = $_POST['catogratydelet'];
    $desplay = " UPDATE aplouddd  SET status='2' WHERE id='$catogry' LIMIT 1 ";
    $quyredesplay = mysqli_query($con, $desplay);

    if ($quyredesplay) {
        $_SESSION['message'] = "catogery  updetad succassfulyy";
        header('location:showdata.php');
        exit(0);
    } else {
        $_SESSION['message'] = " semtthing wind ";
        header('location:showdata.php');
        exit(0);
    }
}
