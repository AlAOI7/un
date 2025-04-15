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
            $homefamilycc = $_POST['homefamily'];
            $typehomfamcc = $_POST['typehomfam'];
            $numberrentcc = $_POST['numberrent'];
            $educdadcc = $_POST['educdad'];
            $educmomcc = $_POST['educmom'];
            $workdadcc = $_POST['workdad'];
            $incomdadcc = $_POST['incomdad'];
            $adressworkdadcc = $_POST['adressworkdad'];
            $workmomcc = $_POST['workmom'];
            $incommomcc = $_POST['incommom'];
            $adressworkmomcc = $_POST['adressworkmom'];
            $guaranteecc = $_POST['guarantee'];
            $adressworkdadcc = $_POST['adressworkdad'];
            $familiarcc = $_POST['familiar'];
            $adressfamicc = $_POST['adressfami'];
            $professioncc = $_POST['profession'];
            $incomefamilicc = $_POST['incomefamili'];
            $workfamilicc = $_POST['workfamili'];

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