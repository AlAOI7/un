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
        error_reporting(E_ALL ^ E_NOTICE);
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'databaseunivercetytaiz');


        if (isset($_POST['submit'])) {
            $difficuldd = $_POST['difficul'];
            $difficultydd = $_POST['difficulty'];
            $healthstatusdaddd = $_POST['healthstatusdad'];
            $tydiseasedaddd = $_POST['tydiseasedad'];
            $healthstatusmomdd = $_POST['healthstatusmom'];
            $tydiseasemomdd = $_POST['tydiseasemom'];
            $broyhdiseasdd = $_POST['broyhdiseas'];
            $typediseasedd = $_POST['typedisease'];
            $tyhomestuddd = $_POST['tyhomestud'];
            $amountpymndd = $_POST['amountpymn'];
            $familypropertydd = $_POST['familyproperty'];
            $otherpropretydd = $_POST['otherproprety'];
            $wifeotherdaddd = $_POST['wifeotherdad'];
            $brothsesdd = $_POST['brothses'];
            $sestersedd = $_POST['sesterse'];
            $nobrothsesdd = $_POST['nobrothses'];
            $nosestersedd = $_POST['nosesterse']; //
            $brotherschooldd = $_POST['brotherschool'];
            $brotheruniverdd = $_POST['brotheruniver'];
            $brothworkdd = $_POST['brothwork'];
            $brothermarriddd = $_POST['brothermarrid'];

            $q = " INSERT INTO  researcher_question (  difficul,difficulty,healthstatusdad,tydiseasedad,healthstatusmom,tydiseasemom,broyhdiseas,typedisease,tyhomestud,amountpymn,familyproperty,otherproprety,wifeotherdad,brothses,sesterse,nobrothses,nosesterse,brotherschool,brotheruniver,brothwork,brothermarrid) 
         VALUES('$difficuldd','$difficultydd','$healthstatusdaddd','$tydiseasedaddd ','$healthstatusmomdd','$tydiseasemomdd','$broyhdiseasdd','$typediseasedd','$tyhomestuddd','$amountpymndd','$familypropertydd','$otherpropretydd','$wifeotherdaddd','$brothsesdd','$sestersedd','$nobrothsesdd','$nosestersedd','$brotherschooldd','$brotheruniverdd','$brothworkdd','$brothermarriddd') ";
            $query = mysqli_query($con, $q);

            $desplay = "select * from researcher_question ";
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