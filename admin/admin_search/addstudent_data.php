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
            $collegstudbb = strip_tags($_POST['collegstud']);
            $departstdbb = strip_tags($_POST['departstd']);
            $levelstdbb = strip_tags($_POST['levelstd']);
            $schoolstatusbb = strip_tags($_POST['schoolstatus']);
            $feeamountbb = strip_tags($_POST['feeamount']);
            $previotionbb = strip_tags($_POST['previotion']);
            $ecempltionratebb = strip_tags($_POST['ecempltionrate']);
            $numbeltionbb = strip_tags($_POST['numbeltion']);
            $brotherstudbb = strip_tags($_POST['brotherstud']);
            $numberbrotherstdbb = strip_tags($_POST['numberbrotherstd']);
            $wahtcollegebb = strip_tags($_POST['wahtcollege']);
            $nubroxempbb = strip_tags($_POST['nubroxemp']);



            $q = " INSERT INTO  student_data ( collegstud,departstd,levelstd,schoolstatus,feeamount,previotion,ecempltionrate,numbeltion,brotherstud,numberbrotherstd,wahtcollege,nubroxemp) 
         VALUES('$collegstudbb','$departstdbb','$levelstdbb','$schoolstatusbb ','$feeamountbb','$previotionbb','$ecempltionratebb','$numbeltionbb','$brotherstudbb','$numberbrotherstdbb','$wahtcollegebb',' $nubroxempbb') ";
            $query = mysqli_query($con, $q);

            $desplay = "select * from student_data ";
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