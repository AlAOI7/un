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
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'databaseunivercetytaiz');
        if (isset($_POST['submit'])) {

            // السكن اثناد الدراسه وبيانات تاكيدية 
            $homeadressaa = strip_tags($_POST['homeadress']);
            $homighbordaa = strip_tags($_POST['homighbord']);
            $hoeighbophonaa = strip_tags($_POST['hoeighbophon']);
            $malebrotheraa = strip_tags($_POST['malebrother']);
            $famlesesteraa = strip_tags($_POST['famlesester']);
            $orderyouaa = strip_tags($_POST['orderyou']);
            $becoussrequestaa = strip_tags($_POST['becoussrequest']);
            $workaa = strip_tags($_POST['work']);
            $typeworkstudaa = strip_tags($_POST['typeworkstud']);
            $incomestudentaa = strip_tags($_POST['incomestudent']);
            $nameparentaa = strip_tags($_POST['nameparent']);
            $degreekinshipaa = strip_tags($_POST['degreekinship']);
            $workparentaa = strip_tags($_POST['workparent']);
            $incomeparentaa = strip_tags($_POST['incomeparent']);
            $adressparentaa = strip_tags($_POST['adressparent']);
            $phoneparentaa = strip_tags($_POST['phoneparent']);
            $ponenigabhoordaa = strip_tags($_POST['ponenigabhoord']);
            $namenigabhoordaa = strip_tags($_POST['namenigabhoord']);
            $phonenearbyaa = strip_tags($_POST['phonenearby']);
            $namenearbyaa = strip_tags($_POST['namenearby']);
            $phonesaneaa = strip_tags($_POST['phonesane']);
            $q = " INSERT INTO  data_student_data ( homeadress,homighbord,hoeighbophon,malebrother,famlesester,orderyou,becoussrequest,work,degreekinship ,workparent,incomestudent,adressparent,phoneparent,ponenigabhoord,namenigabhoord,phonenearby,namenearby,phonesane) 
    VALUES( '$homeadressaa','$homighbordaa','$hoeighbophonaa','$malebrotheraa','$famlesesteraa','$orderyouaa','$becoussrequestaa ','$workaa','$degreekinshipaa','$workparentaa','$incomestudentaa','$adressparentaa','$phoneparentaa','$ponenigabhoordaa','$namenigabhoordaa','$phonenearbyaa','$namenearbyaa','$phonesaneaa') ";

            $query = mysqli_query($con, $q);

            $desplay = "select * from data_student_data ";
            $quyredesplay = mysqli_query($con, $desplay);

            $row = mysqli_num_rows($quyredesplay);
            while ($result = mysqli_fetch_array($quyredesplay)) {
        ?>


        <?php

            }
        }
        ?>
        </tbody>
        </table>
    </div>
</body>

</html>