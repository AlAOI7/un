<?php
error_reporting(E_ALL ^ E_NOTICE);

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');

// طريقة عرض الصولر في هائة الصفحة

$desplay1 = "SELECT * from genderal  ORDER BY id DESC";
$quyredesplay1 = mysqli_query($con, $desplay1);
$result1 = mysqli_fetch_array($quyredesplay1);


$desplay4 = "SELECT * from student_data  ORDER BY id DESC";
$quyredesplay4 = mysqli_query($con, $desplay4);
$result4 = mysqli_fetch_array($quyredesplay4);


$ger1 = $result1['id'];
$ger4 = $result4['id'];

$q = " INSERT INTO conect_table ( id_gende,id_datastd) VALUES ('$ger1','$ger4')";

// طريقة عرض الصولر في هائة الصفحة
$desplay11 = "SELECT g.*,c.* from genderal as g inner join conect_table as c where g.id=c.id_gende ORDER BY g.id DESC";
$desplay41 = "SELECT j.*,f.* from student_data as j inner join conect_table as f where j.id=f.id_datastd ORDER BY j.id DESC";

$quyredesplay11 = mysqli_query($con, $desplay11);
$quyredesplay41 = mysqli_query($con, $desplay41);

$result11 = mysqli_fetch_array($quyredesplay11);
$result41 = mysqli_fetch_array($quyredesplay41);



?>




<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ادارة الباحثين</title>


    <link href="img/un1.jpg" rel="icon">

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

        <a class="navbar-brand mr-1" href="indexser.php">ادارة الباحثين</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars">



            </i>
        </button>

        <!-- Navbar Search -->


        <!-- Navbar -->



    </nav>










    <div id="wrapper">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <ul class="sidebar navbar-">
            <li class="nav-item active">
                <a class="nav-link" href="indexser.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>االادارة</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="show.php">
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
                    <a class="dropdown-item" href="../../student_services_request/indecsearch.php">تسجيل طالب</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">صفحة اخرء:</h6>
                    <a class="dropdown-item" href="404.html">الاخبار </a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>خروج</span></a>
            </li>





        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">ادارة الباحثين</a>
                    </li>
                    <li class="breadcrumb-item active">البحث</li>
                </ol>

                <!-- Area Chart Example-->











                <!-- خاص بلبحث-->
                <center>
                    <form action="" method="post">
                        search word :<input type="text" name="search">
                        <input type='submit' name="submit1" value="بحث !!">
                        <?php

                        if (isset($_POST["submit1"])) {
                        ?>
                    </form>
                </center>

                <h1>بيانات التي تظهر للموظف </h1>
                <section id="main-content">
                    <section class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        جدول البيانات المضافة مؤاخران
                                    </header>
                                    <div class="table-responsive">
                                        <table callpading='13' class="tab" width='00%' height='50%' border='5px solid #000' bgcolor='#fff' bordercolor='#f03'>
                                            <thead>
                                                <th>id</th>
                                                <th>اسم الطالب</th>
                                                <th>البريد الالكتروني</th>
                                                <th>المديرية</th>
                                                <th>الخدمة المقدمة</th>
                                                <th>الكلية</th>
                                                <th>القسم</th>
                                                <th>المستوى</th>
                                                <th> الحالة الدراسية</th>
                                                <th>مقدار الرسوم</th>
                                                <th>عرض البيانات</th>
                                                <th>عرض الصور</th>
                                                <th>حذف البيانات</th>
                                            </thead>

                                            <tbody>
                                                <?php

                                                $searchkey = $_POST['search'];
                                                $ala = mysqli_connect('localhost', 'root');
                                                $con = mysqli_select_db($ala, 'databaseunivercetytaiz');


                                                $sqk = mysqli_query($ala, "SELECT  * FROM  genderal WHERE uname LIKE '%$searchkey%' or directoratye  LIKE '%$searchkey%' or studentservices  LIKE '%$searchkey%' ");
                                                while ($result = mysqli_fetch_array($sqk)) {
                                                ?>
                                            <tbody>


                                                <tr>
                                                    <td>
                                                        <?php echo $result['id']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['uname']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['email']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['directoratye']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['studentservices']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result41['collegstud']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result41['departstd']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result41['levelstd']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result41['schoolstatus']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result41['feeamount']; ?>
                                                    </td>
                                                    <td> <img src="<?php echo $result11['image']; ?> " height="100px" while="100px"></td>
                                                    <?php

                                                    $desplay56 = "SELECT * from conect_table  ORDER BY id DESC";
                                                    $quyredesplay56 = mysqli_query($ala, $desplay56);
                                                    $result56 = mysqli_fetch_array($quyredesplay56);
                                                    ?>
                                                    <td><button style="width: 80px; border-radius: 50%;"><a href="showfile.php?id=<?php echo $result11['id']; ?>" class="btn3"> عرض الملفات </a></button></td>
                                                    <td><button style="width: 100px; border-radius: 50%;"><a href="viewddataall.php?id=<?php echo $result56['id']; ?>" class="btn3"> عرض البيانات الكلية </a></button></td>
                                                    <td><button style="width: 80px; border-radius: 50%;"> <a href="del.php?id= <?php echo $result56['id']; ?>">
                                                                حذف البيانات</a> </button></td>

                                                </tr>
                                        <?php
                                                }
                                            }

                                            // mysqli_free_result($quyredesplay);
                                            // mysqli_close($ala);
                                        ?>
                                            </tbody>
                                        </table>


                                    </div>


                                </section>

                    </section>
                </section>
                <!--main content end-->

                </section>










                <p class="small text-center text-muted my-5">
                    <em>للبحث عن طالب اذا كان موجود في قاعدة البيانات...</em>
                </p>

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

    <!-- Scroll to Top Button-->



    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>



</body>

</html>