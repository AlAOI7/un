<?php
include '../conectdb/concte.php';
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>دخول المشرف </title>
    <meta charset="UTF-8">
    <link href="img/un1.jpg" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/logadmin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>


</head>

<body>



    <!--start nnavbar-->

    <nav class="navbar navbar-inverse navbar-default  navbar-fixed-top  " role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- container  يمسك المحتوى بتاعي يخلي داخل1170بكسل الخاص بل بوتستراب   اذا لم نكتب هاذه الكلاس  المحتوى سوف يملى الصفحه بتاعي-->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">نيابة شؤون الطلاب<span>'جامعة تعز</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">الصفحة الرئيسية</a></li>
                    <li><a href="../managmdocu.php">ادارةالوثائق</a></li>
                    <li><a href="../stdserver.php">الخدمات الطلابية</a></li>
                    <li><a href="../managmentdatacertifect/datamanag.php">شهادتي</a></li>
                    <li><a href="../student_services_request/indecsearch.php">خدمتي</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">الادارة<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin/logindocument.php">ادارة الوثائق</a></li>
                            <li><a href="admin/loginserch.php">ادارة الباحثين</a></li>
                            <li><a href="stdy.php #se">جامعة تعز</a></li>
                            <li class="divider"></li>

                            <li><a href="#loginlog"> للتواصل مع الفريق </a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-form navbar-left " role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="بحث">
                    </div>
                    <button type="submit" class="btn btn-default">بحث</button>
                </div>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <!--end navbar -->





    <section class="   parback  price-table1 text-center">
        <div class="container">
            <div class="row">




                <div class="docc col-md-4 col-md-6 col-xs-12">
                    <div class="price-box1">
                        <h2 class="text-primary">ادارة الوثائق</h2>

                        <!-- list-unstyled   لالغاء الترقيم للقوئم-->
                        <div class="tex">اضافة بيانات مشرف للادارة</div>

                        <form action="addadminduc.php" method="post">
                            <!-- 
                                    <p class="forer"></p>
                                    </select> -->
                            <center>
                                <p>اسم المستخدم </p>
                                <input type="username" name="username" placeholder="أدخل اسم المشرف">
                                <p>كلمة السر</p>
                                <input type="password" name="passs" placeholder="ادخل كلمة السر للمشرف">
                                <input type="submit" name="loginduc" value="اضافة مشرف">

                            </center>
                        </form>

                    </div>
                </div>




                <div class="  col-md-4 col-md-6 col-xs-12">
                    <div class="price-box1">

                    </div>
                </div>


                <div class="serr col-md-4 col-md-6 col-xs-12">
                    <div class="price-box1">
                        <h2 class="text-primary">ادارة الباحثين</h2>
                        <!-- list-unstyled   لالغاء الترقيم للقوئم-->
                        <div class="tex">اضافة بيانات مشرف للادارة</div>
                        <form action="addadminser.php" method="post">

                            <center>
                                <p>اسم المستخدم </p>
                                <input type="username" name="username" placeholder="أدخل اسم المشرف">
                                <p>كلمة السر</p>
                                <input type="password" name="passs" placeholder="ادخل كلمة السر للمشرف">
                                <input type="submit" name="loginser" value="اضافة مشرف ">

                            </center>
                        </form>



                    </div>
                </div>


            </div>

        </div>
    </section>







    <?php
    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'databaseunivercetytaiz');


    if (isset($_POST['sub'])) {
        $uname = $con->real_escape_string($_POST['adminn']);

        $query = "SELECT * FROM admin WHERE adminn = '$uname' ";
        $rs = $con->query($query);
        $num = $rs->num_rows;
        $rows = $rs->fetch_assoc();
        if ($num > 0) {
            session_start();
            $_SESSION['adminn'] = $rows['adminn'];

            echo "<script type = \"text/javascript\">
         
            window.location = (\"saperadmin.php\")
            </script>";
        } else {
            echo "<script type = \"text/javascript\">
           
            window.location = (\"../index.php\")
            </script>";
        }
    }
    ?>




    <!-- عند عرض كلمة السر المشفرة لا يمكن ان يعرضها وهي مششفره في ادارة من الاداراة -->
    <!--
    <table callpading='5' width='100%' height='100%' border='5px solid #000' bgcolor='#fff' bordercolor='#f03'>
        <thead>
            <th>الرقم</th>
            <th>الاسم</th>
            <th>البريد الالكتروني </th>
            <th>رقم الهاتف </th>
            <th>الرسالة</th>


        </thead>
        <tbody>

            <?php

            // $con = mysqli_connect('localhost', 'root');
            // mysqli_select_db($con, 'databaseunivercetytaiz');
            // // طريقة عرض الصولر في هائة الصفحة
            // $desplay = "SELECT * FROM adminsearch  ORDER BY id  ";
            // $quyredesplay = mysqli_query($con, $desplay);
            // while ($result = mysqli_fetch_array($quyredesplay)) {
            ?>
                <tr>
                    <td>
                        <?php echo $result['id']; ?>
                    </td>
                    <td>
                        <?php echo $result['username']; ?>
                    </td>
                    <td>
                        <?php echo $result['passs']; ?>
                    </td>




                </tr>
            <?php
            // }
            // mysqli_free_result($quyredesplay);
            // mysqli_close($con);
            ?>

        </tbody>
    </table>
        -->


</body>

</html>