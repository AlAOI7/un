<?php
error_reporting(E_ALL ^ E_NOTICE);

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');



$desplay1 = "SELECT * from genderal ORDER BY id DESC";
$quyredesplay1 = mysqli_query($con, $desplay1);
$result1 = mysqli_fetch_array($quyredesplay1);

$desplay2 = "SELECT * from data_student_data ORDER BY id DESC";
$quyredesplay2 = mysqli_query($con, $desplay2);
$result2 = mysqli_fetch_array($quyredesplay2);

$desplay3 = "SELECT * from researcher_question ORDER BY id DESC";
$quyredesplay3 = mysqli_query($con, $desplay3);
$result3 = mysqli_fetch_array($quyredesplay3);

$desplay4 = "SELECT * from student_data ORDER BY id DESC";
$quyredesplay4 = mysqli_query($con, $desplay4);
$result4 = mysqli_fetch_array($quyredesplay4);

$desplay5 = "SELECT * from student_family ORDER BY id DESC";
$quyredesplay5 = mysqli_query($con, $desplay5);
$result5 = mysqli_fetch_array($quyredesplay5);

$ger1 = $result1['id'];
$ger2 = $result2['id'];
$ger3 = $result3['id'];
$ger4 = $result4['id'];
$ger5 = $result5['id'];
$q = " INSERT INTO conect_table ( id_stud, id_gende, id_reser, id_datastd, id_fami) VALUES ('$ger1','$ger2','$ger3','$ger4','$ger5')";



// طريقة عرض الصولر في هائة الصفحة
$desplay11 = "SELECT g.*,c.* from genderal as g inner join conect_table as c where g.id=c.id_gende ORDER BY g.id DESC";
$desplay21 = "SELECT h.*,d.* from data_student_data as h inner join conect_table as d where h.id=d.id_stud ORDER BY h.id DESC";
$desplay31 = "SELECT i.*,e.* from researcher_question as i inner join conect_table as e where i.id=e.id_reser ORDER BY i.id DESC";
$desplay41 = "SELECT j.*,f.* from student_data as j inner join conect_table as f where j.id=f.id_datastd ORDER BY j.id DESC";
$desplay51 = "SELECT k.*,x.* from student_family as k inner join conect_table as x where k.id=x.id_fami ORDER BY k.id DESC";
$quyredesplay11 = mysqli_query($con, $desplay11);
$quyredesplay21 = mysqli_query($con, $desplay21);
$quyredesplay31 = mysqli_query($con, $desplay31);
$quyredesplay41 = mysqli_query($con, $desplay41);
$quyredesplay51 = mysqli_query($con, $desplay51);


$result11 = mysqli_fetch_array($quyredesplay11);
$result21 = mysqli_fetch_array($quyredesplay21);
$result31 = mysqli_fetch_array($quyredesplay31);
$result41 = mysqli_fetch_array($quyredesplay41);
$result51 = mysqli_fetch_array($quyredesplay51);


$desplay56 = "SELECT * from conect_table  ORDER BY id DESC";
$quyredesplay56 = mysqli_query($con, $desplay56);
$result56 = mysqli_fetch_array($quyredesplay56);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- هاذه الميتاء عند دخول هاذه الصفحه بعد عدة ثواني سخؤج من الصفحة هاذه الى صفحة الرؤيسيه الخاصه بلادارة -->
    <meta http-equiv="refresh" content="9;url=indexser.php">
    <meta charset="UTF-8">
    <title>ادارة الباحثين </title>
    <link href="img/un1.jpg" rel="icon">

    <link rel="stylesheet" href="css/stylprint.css">

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

        <a class="navbar-brand mr-1" href="indexser.php">الصفحة الرئيسية</a>

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
                    <a class="dropdown-item" href="blank.html">صفحة مهياة</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="showall.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>عرض كل البيانات في قاعدة البيانات</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-chart-serch"></i>
                    <span> خروج</span></a>
            </li>




        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <div class="resume">


                    <div class="post ">
                        <div class="resume_right">

                            <div class="resume_item resume_about">
                                <div class="title">
                                    <p class="bold">الخدمة الطلابية</p>
                                </div>
                                <p> <span class="arabec">الخدمة المطلوبة: </span>
                                    <span class="collo">
                                        <?php echo $result11['studentservices']; ?>
                                    </span>

                                </p>
                                <p>
                                    <span class="arabec">السبب بتقدم طلب خدمة طلابية:</span>
                                    <span class="collo">
                                        <?php echo $result21['becoussrequest']; ?>
                                    </span>
                                </p>

                            </div>

                            <div class="resume_content">



                                <div class="resume_item resume_info resume_education">
                                    <div class="title">
                                        <p class="bold">البيانات الدراسية للطالب </p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                <p><span class="arabec">الكلية:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['collegstud']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="info">
                                                <p><span class="arabec">القسم:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['departstd']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">المستوى:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['levelstd']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="info">
                                                <p><span class="arabec">الحاله الدراسية:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['schoolstatus']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="info">
                                                <p><span class="arabec">مقدار الرسوم:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['feeamount']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p><span class="arabec">حصل على اعفاء سابق:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['previotion']; ?>
                                                    </span>
                                                </p>
                                                <p><span class="arabec">مقدار الاعفاء:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['ecempltionrate']; ?>
                                                    </span>
                                                </p>
                                                <p><span class="arabec">عدد الاعفات التي حصل عليها:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['numbeltion']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p><span class="arabec">وجود اخوة يدرسون:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['brotherstud']; ?>
                                                </p>
                                                <p><span class="arabec">كم عدد اخوتك:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['numberbrotherstd']; ?>
                                                    </span>
                                                </p>
                                                <p><span class="arabec"> في اي كلية يدرسون:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['wahtcollege']; ?>
                                                    </span>
                                                </p>
                                                <p><span class="arabec">كم مره حصلو على الاعفاءات:</span>
                                                    <span class="collo">
                                                        <?php echo $result41['nubroxemp']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>







                                <div class="resume_item resume_education">
                                    <div class="title">
                                        <p class="bold">الوسائط الاجتماعية للاسرة</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="skill_name">
                                                <span class="arabec">عنوان سكن الاسرة:</span>
                                                <span class="collo">
                                                    <?php echo $result51['homefamily']; ?>
                                                </span>
                                            </div>
                                            <div class="skill_per">
                                                <span class="arabec">نوع السكن:</span>
                                                <span class="collo">
                                                    <?php echo $result51['typehomfam']; ?>
                                                </span>
                                                <div>
                                                    <span class="arabec">كم الايجار:</span>
                                                    <span class="collo">
                                                        <?php echo $result51['numberrent']; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="skill_name">
                                                <span class="arabec">المستوى التعليمي للاب:</span>
                                                <span class="collo">
                                                    <?php echo $result51['educdad']; ?>
                                                </span>
                                            </div>
                                            <div class="skill_per">
                                                <span class="arabec">المستوى التعليمي للام:</span>
                                                <span class="collo">
                                                    <?php echo $result51['educmom']; ?>
                                                </span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="skill_name">
                                                <span class="arabec">مهنة الاب:</span>
                                                <span class="collo">
                                                    <?php echo $result51['workdad']; ?>
                                                </span>
                                            </div>
                                            <div class="skill_per">
                                                <span class="arabec">مقدار الدخل:</span>
                                                <span class="collo">
                                                    <?php echo $result51['incomdad']; ?>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="arabec">مكان العمل:</span>
                                                <span class="collo">
                                                    <?php echo $result51['adressworkdad']; ?>
                                                </span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="skill_name">
                                                <span class="arabec">مهنة الام:</span>
                                                <span class="collo">
                                                    <?php echo $result51['workmom']; ?>
                                                </span>
                                            </div>

                                            <div class="skill_per">
                                                <span class="arabec">مقدار الدخل:</span>
                                                <span class="collo">
                                                    <?php echo $result51['incommom']; ?>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="arabec">مكان العمل:</span>
                                                <span class="collo">
                                                    <?php echo $result51['adressworkmom']; ?>
                                                </span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="skill_name">
                                                <span class="arabec">وجود مساعدة من الضمان الاجتماعي:</span>
                                                <span class="collo">
                                                    <?php echo $result51['guarantee']; ?>
                                                </span>
                                            </div>
                                            <div class="skill_per">
                                                <span class="arabec">عائل الاسره:</span>
                                                <span class="collo">
                                                    <?php echo $result51['familiar']; ?>
                                                </span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="skill_name">
                                                <span class="arabec">مهنة عائل الاسرة:</span>
                                                <span class="collo">
                                                    <?php echo $result51['profession']; ?>
                                                </span>
                                            </div>

                                            <div class="skill_per">
                                                <span class="arabec">مقدار الدخل:</span>
                                                <span class="collo">
                                                    <?php echo $result51['incomefamili']; ?>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="arabec">نوع العمل:</span>
                                                <span class="collo">
                                                    <?php echo $result51['workfamili']; ?>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="arabec">عنوان عمل:</span>
                                                <span class="collo">
                                                    <?php echo $result51['adressfami']; ?>
                                                </span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>






                                <div class="  resume_item resume_skillss resume_education ">
                                    <div class="title">
                                        <p class="bold">الاسئلة الموجة للطالب </p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">وجود صعوبة اثناء الدراسة:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['difficul']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> الصعوبه التي واجهها:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['difficulty']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">الحالة الصحية للاب:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['healthstatusdad']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> المرض:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['tydiseasedad']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">الحالة الصحية للام:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['healthstatusmom']; ?>:
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> المرض:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['tydiseasemom']; ?>:
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec"> احد من اخوانة مريض او معاق:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['broyhdiseas']; ?>:
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec">المرض او الاعاقه:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['typedisease']; ?>:
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec"> نوع سكن الطالب:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['tyhomestud']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> كم الايجار:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['amountpymn']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">املاك خاصه للاسرة:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['familyproperty']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> املاك اخرى:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['otherproprety']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">زوجه اخرء للاب:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['wifeotherdad']; ?>
                                                    </span>
                                                </p>
                                                <p style="color:#f00"> الاخوة الاشقاء </p>
                                                <p>
                                                    <span class="arabec"> عدد الخوة الاشقاء الذكور:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['brothses']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> عدد الخوة الاشقاء الاناث:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['sesterse']; ?>
                                                    </span>
                                                </p>
                                                <p style="color:#f00"> الاخوة الغير اشقاء </p>
                                                <p>
                                                    <span class="arabec"> عدد الخوة الغير اشقاء الذكور:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['nobrothses']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> عدد الخوة الغير اشقاء الاناث:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['nosesterse']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">عدد الاخوة في سن الدراسة:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['brotherschool']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec">عدد الاخوة في سن الجامعة:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['brotheruniver']; ?>
                                                    </span>

                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <p>
                                                    <span class="arabec">اخوة يعملون:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['brothwork']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="arabec"> عدد الاخوة المتزوجين:</span>
                                                    <span class="collo">
                                                        <?php echo $result31['brothermarrid']; ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>






                            </div>
                        </div>
                    </div>

















                    <?php
                    error_reporting(E_ALL ^ E_NOTICE);
                    $con = mysqli_connect('localhost', 'root');
                    mysqli_select_db($con, 'databaseunivercetytaiz');


                    $desplay1 = "SELECT * from genderal ORDER BY id DESC";
                    $quyredesplay1 = mysqli_query($con, $desplay1);
                    $result1 = mysqli_fetch_array($quyredesplay1);

                    $ger1 = $result1['id'];
                    $q = " INSERT INTO conect_table ( id_gende ) VALUES ('$ger1')";

                    // طريقة عرض الصولر في هائة الصفحة
                    $desplay11 = "SELECT g.*,c.* from genderal as g inner join conect_table as c where g.id=c.id_gende ORDER BY g.id DESC";

                    $quyredesplay11 = mysqli_query($con, $desplay11);

                    $result11 = mysqli_fetch_array($quyredesplay11);



                    ?>


                    <?php

                    $desplay56 = "SELECT * from conect_table  ORDER BY id DESC";
                    $quyredesplay56 = mysqli_query($con, $desplay56);
                    $result56 = mysqli_fetch_array($quyredesplay56);
                    ?>

                    <div class="polio">
                        <div class="resume_left">
                            <div class="resume_profile ">
                                <img src="<?php echo $result11['gh']; ?> ">
                            </div>
                            <legend>
                                <h3>
                                    <span class="arabec">رقم الطالب :<span>
                                            <span class="collo">
                                                <?php echo $result56['id']; ?>
                                            </span>
                                        </span>
                                </h3>
                            </legend>

                            <div class="resume_item resume_work">
                                <div class="title">
                                    <p class="bold">بيانات الطالب</p>

                                </div>
                                <ul>
                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec">اسم الطالب:</span>
                                                <span class="collo">
                                                    <?php echo $result11['uname']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec">الجنسية:</span>
                                                <span class="collo">
                                                    <?php echo $result11['nationality']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="data">
                                            <span class="collo">
                                                <?php echo $result11['email']; ?>
                                            </span>

                                            <span class="arabec">ألبريد الالكتروني:</span>

                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec">مكان الميلاد:</span>
                                                <span class="collo">
                                                    <?php echo $result11['placeofbirth']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec">المديرية:</span>
                                                <span class="collo">
                                                    <?php echo $result11['directoratye']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec">تاريخ الميلاد:</span>
                                                <span class="collo">
                                                    <?php echo $result11['datebirth']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec"> الحالة الاجتماعية:</span>
                                                <span class="collo">
                                                    <?php echo $result41['maritalstatus']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec">حالة اجتماعية اخرى:</span>
                                                <span class="collo">
                                                    <?php echo $result41['otherstatus']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <div>
                                                <span class="arabec">عدد الاطفال في حال كان متزوج او اخرء:</span>
                                                <span class="collo">
                                                    <?php echo $result41['numbercheld']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>




                            <div class="  resume_item resume_skills">
                                <div class="title">
                                    <p class="bold">معلومات عامة</p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="info">
                                            <p>
                                                <span class="arabec"> عنوان السكن اثناء الدراسة:</span>
                                                <span class="collo">
                                                    <?php echo $result21['homeadress']; ?>
                                                </span>
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="info">
                                            <p>
                                                <span class="arabec">السكن في جوار:</span>
                                                <span class="collo">
                                                    <?php echo $result21['homighbord']; ?>
                                                </span>
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="info">
                                            <p>
                                                <span class="arabec">
                                                    رقم هاتف احد الجيؤان في السكن:</span>
                                                <span class="collo">
                                                    <?php echo $result21['hoeighbophon']; ?>
                                                </span>
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="info">
                                            <p>
                                                <span class="arabec">عدد الاخوة الذكور:</span>
                                                <span class="collo">
                                                    <?php echo $result21['famlesester']; ?>
                                                </span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <p>
                                                <span class="arabec">عدد الاخوة الاناث:</span>
                                                <span class="collo">
                                                    <?php echo $result21['famlesester']; ?>
                                                </span>
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="info">
                                            <p>
                                                <span class="arabec">ترتيبك بين اخوتك:</span>
                                                <span class="collo">
                                                    <?php echo $result21['orderyou']; ?>
                                                </span>
                                            </p>
                                        </div>
                                    </li>


                                    <li>
                                        <p class="bold">بيانات تاكيدية</p>
                                        <div class="data">
                                            <span class="arabec">رقم هاتف احد الجيران:</span>
                                            <span class="collo">
                                                <?php echo $result21['ponenigabhoord']; ?>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="arabec">اسم اقرب جار لك:</span>
                                            <span class="collo">
                                                <?php echo $result21['namenigabhoord']; ?>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="arabec">رقم احد المقربين:</span>
                                            <span class="collo">
                                                <?php echo $result21['phonenearby']; ?>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="arabec">اسم الشخص المقرب:</span>
                                            <span class="collo">
                                                <?php echo $result21['namenearby']; ?>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="arabec">رقم هاتف عاقل الحاره:</span>
                                            <span class="collo">
                                                <?php echo $result21['phonesane']; ?>
                                            </span>
                                        </div>


                                    </li>

                                </ul>
                            </div>





                            <div class="resume_item resume_work">
                                <div class="title">
                                    <p class="bold">بيانات تعريفية وتاكيدية</p>

                                </div>
                                <ul>






                                    <li>
                                        <div class="data">
                                            <span class="arabec">يعمل الطالب:</span>
                                            <span class="collo">
                                                <?php echo $result21['work']; ?>
                                            </span>
                                        </div>
                                        <div class="data">
                                            <span class="arabec">نوع العمل:</span>
                                            <span class="collo">
                                                <?php echo $result21['typeworkstud']; ?>
                                            </span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <span class="arabec">مقدار دخل الطالب:</span>
                                            <span class="collo">
                                                <?php echo $result21['incomestudent']; ?>
                                            </span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="data">
                                            <p class="bold">بيانات ولي الامر</p>
                                            <div><span class="arabec"> اسم ولي الامر:</span>
                                                <span class="collo">
                                                    <?php echo $result21['nameparent']; ?>
                                                </span>
                                            </div>
                                            <div><span class="arabec">درجة القرابة:</span>
                                                <span class="collo">
                                                    <?php echo $result21['degreekinship']; ?>
                                                </span>
                                            </div>
                                            <div><span class="arabec">نوع العمل:</span>
                                                <span class="collo">
                                                    <?php echo $result21['workparent']; ?>
                                                </span>
                                            </div>
                                            <div><span class="arabec"> مقدار الدخل:</span>
                                                <span class="collo">
                                                    <?php echo $result21['incomeparent']; ?>
                                                </span>
                                            </div>
                                            <div><span class="arabec">عنوان ولي الامر:</span>
                                                <span class="collo">
                                                    <?php echo $result21['adressparent']; ?>
                                                </span>
                                            </div>
                                            <div> <span class="arabec"> رقم هاتف ولي الامر:</span>
                                                <span class="collo">
                                                    <?php echo $result21['phoneparent']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>



                        </div>

                    </div>

                </div>
                <!-- footer section  -->

            </div>
            <center>
                <button onclick="window.print();" class="btn btn-primary" id="print-btn">طباعة </button>
            </center>
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


    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>