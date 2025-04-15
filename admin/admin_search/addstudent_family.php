<!DOCTYPE html>
<html leng="en">

<head>
    <meta charst="UTF-8">
    <mta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viemport" content="width=device-width,initial-secale=1.0">
        <title> بيانات الطالب التي تم اضافتهاء</title>
        <link rel="stylesheet" href="form.css">
</head>

<body>

    <div class="container">



        <?php
        //       error_reporting(E_ALL ^ E_NOTICE);
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'databaseunivercetytaiz');


        if (isset($_POST['submit'])) {
            $homefamilycc = strip_tags($_POST['homefamily']);
            $typehomfamcc = strip_tags($_POST['typehomfam']);
            $numberrentcc = strip_tags($_POST['numberrent']);
            $educdadcc = strip_tags($_POST['educdad']);
            $educmomcc = strip_tags($_POST['educmom']);
            $workdadcc = strip_tags($_POST['workdad']);
            $incomdadcc = strip_tags($_POST['incomdad']);
            $adressworkdadcc = strip_tags($_POST['adressworkdad']);
            $workmomcc = strip_tags($_POST['workmom']);
            $incommomcc = strip_tags($_POST['incommom']);
            $adressworkmomcc = strip_tags($_POST['adressworkmom']);
            $guaranteecc = strip_tags($_POST['guarantee']);
            $adressworkdadcc = strip_tags($_POST['adressworkdad']);
            $familiarcc = strip_tags($_POST['familiar']);
            $adressfamicc = strip_tags($_POST['adressfami']);
            $professioncc = strip_tags($_POST['profession']);
            $incomefamilicc = strip_tags($_POST['incomefamili']);
            $workfamilicc = strip_tags($_POST['workfamili']);

            $q = " INSERT INTO  student_family (  homefamily,typehomfam,numberrent,educdad,educmom,workdad,incomdad,workmom,incommom,adressworkmom,guarantee,adressworkdad,familiar,adressfami,profession,incomefamili,workfamili) 
         VALUES('$homefamilycc','$typehomfamcc','$numberrentcc','$educdadcc ','$educmomcc','$workdadcc','$incomdadcc','$workmomcc','$incommomcc','$adressworkmomcc','$guaranteecc','$adressworkdadcc','$familiarcc','$adressfamicc','$professioncc','$incomefamilicc','$workfamilicc') ";
            $query = mysqli_query($con, $q);

            $desplay = "select * from student_family ";
            $quyredesplay = mysqli_query($con, $desplay);

            $row = mysqli_num_rows($quyredesplay);
            while ($result = mysqli_fetch_array($quyredesplay)) {
        ?>


        <?php

            }
        }
        ?> </tbody>
        </table>
    </div>
</body>

</html>