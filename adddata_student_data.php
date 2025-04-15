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
            $homeadressaa = $_POST['homeadress'];
            $homighbordaa = $_POST['homighbord'];
            $hoeighbophonaa =  $_POST['hoeighbophon'];
            $malebrotheraa = $_POST['malebrother'];
            $famlesesteraa = $_POST['famlesester'];
            $orderyouaa = $_POST['orderyou'];
            $becoussrequestaa = $_POST['becoussrequest'];
            $workaa = $_POST['work'];
            $typeworkstudaa = $_POST['typeworkstud'];
            $incomestudentaa = $_POST['incomestudent'];
            $nameparentaa = $_POST['nameparent'];
            $degreekinshipaa = $_POST['degreekinship'];
            $workparentaa = $_POST['workparent'];
            $incomeparentaa = $_POST['incomeparent'];
            $adressparentaa = $_POST['adressparent'];
            $phoneparentaa = $_POST['phoneparent'];
            $ponenigabhoordaa = $_POST['ponenigabhoord'];
            $namenigabhoordaa = $_POST['namenigabhoord'];
            $phonenearbyaa = $_POST['phonenearby'];
            $namenearbyaa = $_POST['namenearby'];
            $phonesaneaa = $_POST['phonesane'];
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