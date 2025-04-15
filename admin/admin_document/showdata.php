<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>البيانات الحديثة في ادارة الوثائق</title>
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

        <a class="navbar-brand mr-1" href="indexduc.html">ادارة الوثائق</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="بحث..." aria-label="Search" aria-describedby="basic-addon2">
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
                    <a class="dropdown-item" href="#">عرض الرسائل الواردة</a>
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
                    <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-">
            <li class="nav-item active">
                <a class="nav-link" href="indexduc.html">
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

            <li class="nav-item">
                <a class="nav-link" href="showall.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>عرض كل البيانات في قاعدة البيانات</span></a>
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
                        البيانات الحديثة
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <tbody>
                                    <!-- خاص بلبحث-->


                                    <h1>بيانات الطلاب </h1>

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
                                            <th> عرض الملفات </th>
                                            <th> حذف البيانات </th>

                                        </thead>
                                        <tbody>

                                            <?php

                                            $con = mysqli_connect('localhost', 'root');
                                            mysqli_select_db($con, 'databaseunivercetytaiz');
                                            // طريقة عرض الصولر في هائة الصفحة
                                            //     <!-- $desplay = "SELECT * FROM aplouddd  ORDER BY id desc  ";
                                            //     $quyredesplay = mysqli_query($con, $desplay);
                                            //     while ($result = mysqli_fetch_array($quyredesplay)) {
                                            //    -->
                                            $catogrete = "SELECT *from aplouddd where status!='2'";
                                            $catogrerun = mysqli_query($con, $catogrete);
                                            if (mysqli_num_rows($catogrerun) > 0) {
                                                foreach ($catogrerun as $result) {






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
                                                        <td> <img src="<?php echo $result['ef']; ?> " height="100px" while="100px"></td>




                                                        <td><button type="submit" width="100px" name="submit" style="border-radius: 10%;" height="90%" color='#fff' bordercolor='#f03'>
                                                                <?php echo "  <a href='datastudentdata.php?id=" . $result['id'] . "'> عرض البيانات</a> "; ?>
                                                            </button></td>
                                                        <td><button type="submit" width="100px" name="submit" style="border-radius: 10%;" height="90%" color='#fff' bordercolor='#f03'>
                                                                <?php echo "  <a href='showfile.php?id=" . $result['id'] . "'> عرض الملفات</a> "; ?>
                                                            </button></td>

                                                        <!-- <td><button type="submit" width="100px" height="90%" color='#fff' name="deletedata" bordercolor='#f00'>
                             echo "  <a href='showdata.php?id=" . $result['id'] . "'> حذف البيانات</a> "; ?></button></td>
              -->



                                                        <!-- <td><button style="border-radius: 10%;" > <a
                                                            href="del.php?id= <?php echo $result['id']; ?>"> حذف
                                                            البيانات</a> </button></td> -->



                                                        <td>

                                                            <button name="catogratydelet"><a href="del.php?id= <?php echo $result['id']; ?>"> حذف البيانات </a></button>

                                                        </td>


                                                        </td>

                                                    </tr>
                                            <?php
                                                }
                                            }
                                            mysqli_free_result($catogrerun);
                                            mysqli_close($con);
                                            ?>




                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>

                <p class="small text-center text-muted my-5">
                    <em>عرض البيانات المرفقة الخاصه بطلاب الحديثة...</em>
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