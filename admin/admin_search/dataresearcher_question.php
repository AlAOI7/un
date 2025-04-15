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
            $difficuldd = strip_tags($_POST['difficul']);
            $difficultydd = strip_tags($_POST['difficulty']);
            $healthstatusdaddd = strip_tags($_POST['healthstatusdad']);
            $tydiseasedaddd = strip_tags($_POST['tydiseasedad']);
            $healthstatusmomdd = strip_tags($_POST['healthstatusmom']);
            $tydiseasemomdd = strip_tags($_POST['tydiseasemom']);
            $broyhdiseasdd = strip_tags($_POST['broyhdiseas']);
            $typediseasedd = strip_tags($_POST['typedisease']);
            $tyhomestuddd = strip_tags($_POST['tyhomestud']);
            $amountpymndd = strip_tags($_POST['amountpymn']);
            $familypropertydd = strip_tags($_POST['familyproperty']);
            $otherpropretydd = strip_tags($_POST['otherproprety']);
            $wifeotherdaddd = strip_tags($_POST['wifeotherdad']);
            $brothsesdd = strip_tags($_POST['brothses']);
            $sestersedd = strip_tags($_POST['sesterse']);
            $nobrothsesdd = strip_tags($_POST['nobrothses']);
            $nosestersedd = strip_tags($_POST['nosesterse']); //
            $brotherschooldd = strip_tags($_POST['brotherschool']);
            $brotheruniverdd = strip_tags($_POST['brotheruniver']);
            $brothworkdd = strip_tags($_POST['brothwork']);
            $brothermarriddd = strip_tags($_POST['brothermarrid']);

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