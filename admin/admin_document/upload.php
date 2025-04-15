<!DOCTYPE html>
<html leng="en">

<head>
    <meta charst="UTF-8">
    <mta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viemport" content="width=device-width,initial-secale=1.0">
        <title> بيانات الطالب التي تم اضافتهاء</title>
        <link rel="stylesheet" href="frm.css">
</head>

<body>

    <div class="container">
        <button width="100px"> <a href="al.php"> enter</a> </button>
        <h1>بيانات الطالب c</h1>
        <table callpading='10' width='100%' height='80%' border='5px solid #d00' bgcolor='#fff' bordercolor='#f03'>
            <thead>
                <th>id</th>
                <th>name</th>
                <th>mode</th>
                <th>image</th>
                <th>imageing</th>
                <th>ingala</th>
                <th>abala</th>
                <th>cdala</th>
                <th>efala</th>
            </thead>
            <tbody>

                <?php
                include "conectdb/concte.php";

                //include "conected.php";
                if (isset($_POST['submit'])) {
                    $username = strip_tags($_POST['namee']);
                    $namefirst = strip_tags($_POST['fname']);
                    $englishnam = strip_tags($_POST['nameenglish']);
                    $gen = strip_tags($_POST['gender']);
                    $sacss = strip_tags($_POST['sixs']);
                    $nuun = strip_tags($_POST['numberunvers']);
                    $place = strip_tags($_POST['placebirth']);
                    $dat = strip_tags($_POST['datee']);
                    $emaill = strip_tags($_POST['email']);
                    $phon = strip_tags($_POST['phonenumber']);
                    $dagr = strip_tags($_POST['dategraduation']);
                    $yearnor = strip_tags($_POST['yearenrollment']);
                    $coll = strip_tags($_POST['college']);
                    $dep = strip_tags($_POST['departmen']);

                    $files = $_FILES['image'];
                    $filesing = $_FILES['imageing'];
                    $filesinging = $_FILES['ingala'];
                    $filesab = $_FILES['ab'];
                    $filescd = $_FILES['cd'];
                    $filesef = $_FILES['ef'];
                    //--------------------- الخاص بصور --------------------
                    //الصورة الاولة
                    $filename = $files['name'];
                    $fileerorr = $files['error'];
                    $filetemp = $files['tmp_name'];
                    //الصورة الثانية
                    $filenameing = $filesing['name'];
                    $fileerorring = $filesing['error'];
                    $filetemping = $filesing['tmp_name'];
                    // الصورة الثالثة
                    $filenameingala = $filesinging['name'];
                    $fileerorringala = $filesinging['error'];
                    $filetempingala = $filesinging['tmp_name'];
                    //الصورة الرابعة
                    $filenameab = $filesab['name'];
                    $fileerorrab = $filesab['error'];
                    $filetempab = $filesab['tmp_name'];
                    // الصورة الخامسة
                    $filenamecd = $filescd['name'];
                    $fileerorrcd = $filescd['error'];
                    $filetempcd = $filescd['tmp_name'];
                    // الصورة السادسة
                    $filenameef = $filesef['name'];
                    $fileerorref = $filesef['error'];
                    $filetempef = $filesef['tmp_name'];


                    $fileext = explode('.', $filename);
                    $filecheck = strtolower(end($fileext));

                    $fileexting = explode('.', $filenameing);
                    $filechecking = strtolower(end($fileexting));

                    $fileextinging = explode('.', $filenameingala);
                    $filecheckinging = strtolower(end($fileextinging));

                    $fileextab = explode('.', $filenameab);
                    $filecheckab = strtolower(end($fileextab));

                    $fileextcd = explode('.', $filenamecd);
                    $filecheckcd = strtolower(end($fileextcd));

                    $fileextef = explode('.', $filenameef);
                    $filecheckef = strtolower(end($fileextef));

                    $fileextstored = array('png', 'jpg', 'jpeg');

                    if (in_array($filecheck, $fileextstored) && in_array($filechecking, $fileextstored) && in_array($filecheckinging, $fileextstored) && in_array($filecheckab, $fileextstored) && in_array($filecheckcd, $fileextstored) && in_array($filecheckef, $fileextstored)) {
                        $destinationfile = 'uploud/' . $filename;
                        $destinationfileing = 'uploud/' . $filenameing;
                        $destinationfileingala = 'uploud/' . $filenameingala;
                        $destinationfileab = 'uploud/' . $filenameab;
                        $destinationfilecd = 'uploud/' . $filenamecd;
                        $destinationfileef = 'uploud/' . $filenameef;

                        move_uploaded_file($filetemp, $destinationfile);
                        move_uploaded_file($filetemping, $destinationfileing);
                        move_uploaded_file($filetempingala, $destinationfileingala);
                        move_uploaded_file($filetempab, $destinationfileab);
                        move_uploaded_file($filetempcd, $destinationfilecd);
                        move_uploaded_file($filetempef, $destinationfileef);

                        $q = " INSERT INTO  aplouddd (  namee,fname,nameenglish,gender,sixs,numberunvers,placebirth,datee,email,phonenumber,dategraduation,yearenrollment,college,departmen ,image ,imageing,ingala,ab,cd,ef) 
                         VALUES('$username','$namefirst','$englishnam','$gen ','$sacss','$nuun','$place','$dat','$emaill','$phon','$dagr','$yearnor','$coll','$dep','$destinationfile','$destinationfileing ','$destinationfileingala','$destinationfileab','$destinationfilecd','$destinationfileef') ";

                        $query = mysqli_query($con, $q);
                        // طريقة عرض الصولر في هائة الصفحة

                        //تعديل على هاذه الصفحة لكي ينتقل الى صفحة خاصه بلطالب 
                        header("location:../managmdocu.php");
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>