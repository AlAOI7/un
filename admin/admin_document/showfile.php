<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ادارة الوثائق</title>

    <link rel="stylesheet" href="css/styl.css">
    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="indexduc.php">الصفحة الرئيسية</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="بحث" aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">البريد الوارد</a>
                    <a class="dropdown-item" href="showmessag.php">عرض الرسائل الواردة</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sendemail.php">الرد برسالة </a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">تسجيل
                        خروج</a>
                </div>
            </li>
        </ul>

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


        <!--        لعرض البيانات اي الصور في الشاشة الرئيسية للموظف -->

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">ادارة الوثائق</a>
                    </li>
                    <li class="breadcrumb-item active">الموظف</li>
                </ol>



                <fieldset class="show7">
                    <?php
                    error_reporting(E_ALL ^ E_NOTICE);
                    include "conectdb/concte.php";
                    $gid = intval($_GET['id']);
                    $desplay = "select * from aplouddd where id=" . $gid . " ";
                    $quyredesplay = mysqli_query($con, $desplay);
                    $result = mysqli_fetch_assoc($quyredesplay);

                    if (isset($gid) and is_numeric($gid)) {
                    ?>

                        <legend>
                            <center>
                                <h3> اسم الطالب :<span>
                                        <?php echo $result['namee']; ?>
                                    </span> </h3>
                            </center>
                        </legend>


                        <figure class="img-fig">



                            <div class="g1">
                                <div class="boxx">

                                    <label> سند سداد الرسوم</label>
                                    <a href="<?php echo $result['image']; ?> "> <img src="<?php echo $result['image']; ?> " height="200px" while="200px"></a>
                                    <br><br>
                                    <button type="submit" width="100px" name="submit" height="90%" color='#3ff' bordercolor='#003'>
                                        <?php echo "   <a href='showphoto1.php?id=" . $result['id'] .  "'> طباعة الصورة</a> "; ?>
                                    </button>
                                </div>
                                <div class="boxx">

                                    <label>السجل الاكاديمي </label>
                                    <a href="<?php echo $result['imageing']; ?>"><img src="<?php echo $result['imageing']; ?> " height="200px" while="200px"></a>
                                    <br><br>
                                    <button type="submit" width="100px" name="submit" height="90%" color='#3ff' bordercolor='#003'>
                                        <?php echo "   <a href='showphoto2.php?id=" . $result[' id'] . "'> طباعة الصورة</a> "; ?>
                                    </button>
                                </div>

                                <div class="boxx">

                                    <label> كشف التخرج</label>
                                    <a href="<?php echo $result['ingala']; ?> "> <img src="<?php echo $result['ingala']; ?> " height="200px" while="200px"></a>
                                    <br><br>
                                    <button type="submit" width="100px" name="submit" height="90%" color='#3ff' bordercolor='#003'>
                                        <?php echo "   <a href='showphoto3.php?id=" . $result['id'] .  "'> طباعة الصورة</a> "; ?>
                                    </button>
                                </div>
                            </div>




                            <div class=" g1">


                                <div class="boxx">

                                    <label>مواهل الثانوية العامة</label>
                                    <a href="<?php echo $result['ab']; ?> "> <img src="<?php echo $result['ab']; ?> " height="200px" while="200px"></a>
                                    <br><br>
                                    <button type="submit" width="100px" name="submit" height="90%" color='#3ff' bordercolor='#003'>
                                        <?php echo "   <a href='showphoto4.php?id=" . $result['id'] .  "'> طباعة الصورة</a> "; ?>
                                    </button>
                                </div>

                                <div class="boxx">

                                    <label>استمارت استخراج مؤاهل</label>
                                    <a href="<?php echo $result['cd']; ?> "> <img src="<?php echo $result['cd']; ?> " height="200px" while="200px"></a>
                                    <br><br>
                                    <button type="submit" width="100px" name="submit" height="90%" color='#3ff' bordercolor='#003'>
                                        <?php echo "   <a href='showphoto5.php?id=" . $result['id'] .  "'> طباعة الصورة</a> "; ?>
                                    </button>
                                </div>
                                <div class="boxx">

                                    <label>اخلاء طرف </label>
                                    <a href="<?php echo $result['ef']; ?> "> <img src="<?php echo $result['ef']; ?> " height="200px" while="200px"></a>
                                    <br><br>
                                    <button type="submit" width="100px" name="submit" height="90%" color='#3ff' bordercolor='#003'>
                                        <?php echo "   <a href='showphoto6.php?id=" . $result['id'] .  "'> طباعة الصورة</a> "; ?>
                                    </button>
                                </div>


                            <?php

                        } else {
                            echo " error data ";
                        }

                        mysqli_free_result($quyredesplay);
                        mysqli_close($con);
                            ?>


                            </div>





                        </figure>




                </fieldset>


                <!-- footer section  -->

                <div class=" card-footer small text-muted">
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span style="color: black; font-weight: bold;">نيابة شؤون الطلاب @ جامعة تعز </span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/Chart.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <script src="js/script.js"></script>



</body>

</html>