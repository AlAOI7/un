<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>استمارة الخريج</title>
    <link href="img/un1.jpg" rel="icon">
    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->


    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="css/print.css" rel="stylesheet" media="print">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="">ادارة الوثائق</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>


    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar- toggled">
            <li class="nav-item active">
                <a class="nav-link" href="indexduc.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>االادارة</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="showdata.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>بيانات الطلاب للعرض </span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="sendemail.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>ارسال رسالة عبر الايميل </span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="search.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>البحث عن الطلاب</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>الصفحات</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">العامه</h6>

                    <a class="dropdown-item" href="../../index.php">الصفحة الرئيسية </a>
                    <a class="dropdown-item" href="../../managmentdatacertifect/datamanag.php">تسجيل طالب</a>

                    طالب</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">صفحة اخرء:</h6>
                    <a class="dropdown-item" href="404.html">الاخبار </a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="showall.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>عرض كل البيانات </span></a>
            </li>





        </ul>
        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="indexduc.php">ادارة الوثائق </a>
                    </li>
                    <li class="breadcrumb-item active">بيانات خاصه</li>
                </ol>


            </div>
            <!-- /.container-fluid -->

            <body>
                <main class="main-content">
                    <section class="left-section">


                        <div class="profile">
                            <div class="image">
                                <img src="ic.png" alt="">
                            </div>
                            <h2 class="name">بيانات الطالب </h2>
                            <?php
                            error_reporting(E_ALL ^ E_NOTICE);
                            include "conectdb/concte.php";
                            $gid = intval($_GET['id']);
                            $desplay = "select * from aplouddd where id=" . $gid . " ";
                            $quyredesplay = mysqli_query($con, $desplay);
                            $result = mysqli_fetch_assoc($quyredesplay);

                            if (isset($gid) and is_numeric($gid)) {
                            ?>

                                <p class="career"> <span class="coloral">الاسم:</span>
                                    <?php echo $result['namee']; ?>
                                </p>
                        </div>

                        <h3 class="main-title">المعلومات الشخصية </h3>
                        <div class="contact-info">

                            <ul>
                                <li>
                                    <?php echo $result['fname']; ?>
                                    <span class="coloral">:القب </span>

                                </li>
                                <li>

                                    <?php echo $result['nameenglish']; ?>
                                    <span class="coloral">:الاسم بلانجليزي </span>


                                </li>
                                <li>

                                    <?php echo $result['gender']; ?>
                                    <span class="coloral">:الجنس</span>


                                </li>
                                <li>

                                    <?php echo $result['sixs']; ?>
                                    <span class="coloral">:الجنسية</span>


                                </li>
                                <li>

                                    <?php echo $result['numberunvers']; ?>
                                    <span class="coloral">:الرقم الاكاديمي</span>

                                </li>

                                <li>

                                    <?php echo $result['placebirth']; ?>
                                    <span class="coloral">:مكان الميلاد</span>


                                </li>

                                <li>

                                    <?php echo $result['datee']; ?>
                                    <span class="coloral">:تاريخ الميلاد</span>


                                </li>

                                <li>

                                    <?php echo $result['email']; ?>
                                    <span class="coloral">:البريد الالكتروني </span>


                                </li>

                                <li>

                                    <?php echo $result['phonenumber']; ?>
                                    <span class="coloral">:رقم الهاتف </span>


                                </li>

                                <li>

                                    <?php echo $result['placebirth']; ?>
                                    <span class="coloral">:مكان الميلاد</span>


                                </li>


                            </ul>
                        </div>




                        <div class="references-section">
                            <h3 class="main-title">بيانات جامعية </h3>
                            <div class="referee">
                                <h6 class="sub-title">
                                    <?php echo $result['dategraduation']; ?>
                                    <span class="coloral">:سنة التخرج</span>

                                </h6>
                                <p class="sub-para">
                                    <?php echo $result['yearenrollment']; ?>
                                    <span class="coloral">:سنة الالتحاق </span>

                                </p>
                                <ul>
                                    <li>

                                        <?php echo $result['college']; ?>
                                        <span class="coloral">:الكلية</span>

                                    </li>
                                    <li>

                                        <?php echo $result['departmen']; ?>
                                        <span class="coloral">:القسم </span>


                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="text-center">

                            <button onclick="window.print();" class="btn btn-primary" id="print-btn">طباعة
                            </button>
                        </div>


                    <?php

                            } else {
                                echo " error data ";
                            }

                            mysqli_free_result($quyredesplay);
                            mysqli_close($con);
                    ?>

                    </section>

                </main>

                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span style="color: black; font-weight: bold;">نيابة شؤون الطلاب @ جامعة تعز </span>
                        </div>
                    </div>
                </footer>

                <!-- Bootstrap core JavaScript-->
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="js/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>



            </body>

</html>