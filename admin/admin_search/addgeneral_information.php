<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');

//include "conected.php";
if (isset($_POST['submit'])) {
    $username = strip_tags($_POST['uname']);
    $nationalityaa = strip_tags($_POST['nationality']);
    $emaill =  strip_tags($_POST['email']);
    $placeofbirthaa = strip_tags($_POST['placeofbirth']);
    $directoratyeaa = strip_tags($_POST['directoratye']);
    $datebirthaa = strip_tags($_POST['datebirth']);
    $studentservicesaa = strip_tags($_POST['studentservices']);
    $files = $_FILES['image'];
    $filesing = $_FILES['imageing'];
    $filesala = $_FILES['ingala'];
    $filesab = $_FILES['ab'];
    $filescd = $_FILES['cd'];
    $filesef = $_FILES['ef'];
    $filesgh = $_FILES['gh'];
    $filesij = $_FILES['ij'];
    $fileskl = $_FILES['kl'];
    $filesmn = $_FILES['mn'];

    //الصورة الاولة
    $filename = $files['name'];
    $fileerorr = $files['error'];
    $filetemp = $files['tmp_name'];
    //////////////////////
    $filenameing = $filesing['name'];
    $fileerorring = $filesing['error'];
    $filetemping = $filesing['tmp_name'];
    //////////////////
    $filenameala = $filesala['name'];
    $fileerorrala = $filesala['error'];
    $filetempala = $filesala['tmp_name'];
    //////
    $filenameab = $filesab['name'];
    $fileerorrab = $filesab['error'];
    $filetempab = $filesab['tmp_name'];
    ///////////////////
    $filenamecd = $filescd['name'];
    $fileerorrcd = $filescd['error'];
    $filetempcd = $filescd['tmp_name'];
    /////////////////////////////
    $filenameef = $filesef['name'];
    $fileerorref = $filesef['error'];
    $filetempef = $filesef['tmp_name'];
    //////////////////////////////////
    $filenamegh = $filesgh['name'];
    $fileerorrgh = $filesgh['error'];
    $filetempgh = $filesgh['tmp_name'];
    ///////////////////////////////
    $filenameij = $filesij['name'];
    $fileerorrij = $filesij['error'];
    $filetempij = $filesij['tmp_name'];

    $filenamekl = $fileskl['name'];
    $fileerorrkl = $fileskl['error'];
    $filetempkl = $fileskl['tmp_name'];

    $filenamemn = $filesmn['name'];
    $fileerorrmn = $filesmn['error'];
    $filetempmn = $filesmn['tmp_name'];


    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileexting = explode('.', $filenameing);
    $filechecking = strtolower(end($fileexting));

    $fileextala = explode('.', $filenameala);
    $filecheckala = strtolower(end($fileextala));

    $fileextab = explode('.', $filenameab);
    $filecheckab = strtolower(end($fileextab));
    $fileextcd = explode('.', $filenamecd);
    $filecheckcd = strtolower(end($fileextcd));


    $fileextef = explode('.', $filenameef);
    $filecheckef = strtolower(end($fileextef));

    $fileextgh = explode('.', $filenamegh);
    $filecheckgh = strtolower(end($fileextgh));


    $fileextij = explode('.', $filenameij);
    $filecheckij = strtolower(end($fileextij));

    $fileextkl = explode('.', $filenamekl);
    $filecheckkl = strtolower(end($fileextkl));


    $fileextmn = explode('.', $filenamemn);
    $filecheckmn = strtolower(end($fileextmn));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored) && in_array($filechecking, $fileextstored) && in_array($filecheckala, $fileextstored)  && in_array($filecheckab, $fileextstored)  && in_array($filecheckcd, $fileextstored)  && in_array($filecheckef, $fileextstored)  && in_array($filecheckgh, $fileextstored)  && in_array($filecheckij, $fileextstored)  && in_array($filecheckkl, $fileextstored)  && in_array($filecheckmn, $fileextstored)) {
        $destinationfile = 'uploud/' . $filename;
        $destinationfileing = 'uploud/' . $filenameing;
        $destinationfileala = 'uploud/' . $filenameala;
        $destinationab = 'uploud/' . $filenameab;
        $destinationfilecd = 'uploud/' . $filenamecd;
        $destinationfileef = 'uploud/' . $filenameef;
        $destinationfilegh = 'uploud/' . $filenamegh;
        $destinationfileij = 'uploud/' . $filenameij;
        $destinationfilekl = 'uploud/' . $filenamekl;
        $destinationfilemn = 'uploud/' . $filenamemn;

        move_uploaded_file($filetemp, $destinationfile);
        move_uploaded_file($filetemping, $destinationfileing);
        move_uploaded_file($filetempala, $destinationfileala);
        move_uploaded_file($filetempab, $destinationab);
        move_uploaded_file($filetempcd, $destinationfilecd);
        move_uploaded_file($filetempef, $destinationfileef);
        move_uploaded_file($filetempgh, $destinationfilegh);
        move_uploaded_file($filetempij, $destinationfileij);
        move_uploaded_file($filetempkl, $destinationfilekl);
        move_uploaded_file($filetempmn, $destinationfilemn);


        $q = " INSERT INTO  genderal (uname,nationality,email,placeofbirth,directoratye,datebirth,studentservices,image,imageing,ingala,ab,cd,ef,gh,ij,kl,mn)
         VALUES('$username','$nationalityaa','$emaill','$placeofbirthaa','$directoratyeaa','$datebirthaa','$studentservicesaa','$destinationfile','$destinationfileing','$destinationfileala','$destinationab','$destinationfilecd','$destinationfileef','$destinationfilegh','$destinationfileij','$destinationfilekl','$destinationfilemn')";

        $query = mysqli_query($con, $q);
    }
}

//  header("Location:adminadd1.php");







$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');

include "adddata_student_data.php";
include "dataresearcher_question.php";
include "addstudent_family.php";
include "addstudent_data.php";

header("Location:../../index.php");
