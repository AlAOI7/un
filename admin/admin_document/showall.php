<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>عرض كل البيانات</title>
    <link href="img/un1.jpg" rel="icon">

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

        <a class="navbar-brand mr-1" href="indexduc.php">ادارة الوثائق</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>



    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-">
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

                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">صفحة اخرء:</h6>
                    <a class="dropdown-item" href="404.html">الاخبار </a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>



        </ul>


        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">ادارة الوثائق</a>
                    </li>
                    <li class="breadcrumb-item active">عرض البيانات </li>
                </ol>

                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        عرض كل البيانات في قواعد البيانات
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <tbody>

                                    <table callpading='11' width='100%' height='100%' border='5px solid #000' bgcolor='#fff' bordercolor='#f03'>
                                        <thead>
                                            <th>id</th>
                                            <th>الاسم</th>
                                            <th>الرقم الاكاديمي</th>
                                            <th>الكلية</th>
                                            <th>القسم</th>
                                            <th>رقم الهاتف</th>
                                            <th>سند رسوم الشهادة</th>
                                            <th>اخلا طرف</th>
                                            <th> عرض صفحة الطالب </th>


                                        </thead>
                                        <tbody>

                                            <?php

                                            include "../conectdb/concte.php";

                                            // طريقة عرض الصولر في هائة الصفحة
                                            $desplay = "SELECT * FROM aplouddd  ORDER BY id desc  ";
                                            $quyredesplay = mysqli_query($con, $desplay);
                                            while ($result = mysqli_fetch_array($quyredesplay)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $result['id']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['namee']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['numberunvers']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['college']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['departmen']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $result['phonenumber']; ?>
                                                    </td>
                                                    <td> <img src="<?php echo $result['image']; ?> " height="100px" while="100px"></td>
                                                    <td> <img src="<?php echo $result['ingala']; ?> " height="100px" while="100px"></td>

                                                    <td><button type="submit" width="100px" name="submit" style="border-radius: 10%;" height="90%" color='#fff' bordercolor='#rgb(163, 200, 255)'>
                                                            <?php echo "  <a href='datastudentdata.php?id=" . $result['id'] . "'> عرض البيانات</a> "; ?>
                                                        </button></td>
                                                    <td><button type="submit" width="100px" name="submit" style="border-radius: 10%;" height="90%" color='#fff' bordercolor='rgb(163, 200, 255)'>
                                                            <?php echo "  <a href='showfile.php?id=" . $result['id'] . "'> عرض الملفات</a> "; ?>
                                                        </button></td>

                                                    <!-- <td><button type="submit" width="100px" height="90%" color='#fff' name="deletedata" bordercolor='#f00'>
                                 echo "  <a href='showdata.php?id=" . $result['id'] . "'> حذف البيانات</a> "; ?></button></td>
                  -->


                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            mysqli_free_result($quyredesplay);
                                            mysqli_close($con);
                                            ?>




                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>

                <p class="small text-center text-muted my-5">
                    <em>عرض كل البيانات لطلاب...</em>
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


    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>


</body>

</html>