<!DOCTYPE html>
<html leng="en">

<head>
    <meta charst="UTF-8">
    <mta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viemport" content="width=device-width,initial-secale=1.0">
        <title> طلب شهادة تخرج</title>

        <link href="img/un1.jpg" rel="icon">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">


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
                    <li class="active"><a href="../../index.php">الصفحة الرئيسية</a></li>
                    <li><a href=../managmdocu.php">ادارةالوثائق</a></li>
                    <li><a href="../stdserver.php">الخدمات الطلابية</a></li>
                    <li><a href="datamanag.php">شهادتي</a></li>
                    <li><a href="../student_services_request/indecsearch.php">خدمتي</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">الادارة<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../admin/logindocument.php">ادارة الوثائق</a></li>
                            <li><a href="../admin/loginserch.php">ادارة الباحثين</a></li>
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



    <section class="our-team text-center order-md-1">
        <div class="team">
            <div class="container ">
                <h1> البيانات المطلوبه من الطالب لطلب شهادة تخرج </h1>
                <h3>اضافة البيانات في الحقول التالية</h3>

                <form id="contact" action="../admin/admin_document/upload.php" method="post" enctype="multipart/form-data">


                    <center class="al  ">
                        <div class="column ">

                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="اسم الطالب " name="namee" id="input1" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="القب  " name="fname" id="input2" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" name="nameenglish" id="input3" placeholder="الاسم بلانجليزي  " required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p class="ty">النوع</p>
                                    <div class="radio">
                                        <label for="male">ذكر</label>
                                        <input type="radio" name="gender" value="ذكر" id="input14" required>
                                        <label for="female">انثى</label>
                                        <input type="radio" name="gender" id="input14" value="انثى" required>

                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="الجنسية  " name="sixs" id="input4" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="number" placeholder="الرقم الجامعي   " name="numberunvers" id="input5" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="مكان الميلاد   " name="placebirth" id="input6" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="تاريخ الميلاد  " name="datee" id="input7" onfocus="(this.type ='date')" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="email" placeholder="البريدالالكتلروني  " name="email" id="input8" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="number" placeholder="رقم الهاتف  " name="phonenumber" id="input9" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="سنة  التخرج " name="dategraduation" id="input10" onfocus="(this.type ='date')" required>
                                </fieldset>
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="سنة  الالتحاق " name="yearenrollment" id="input11" onfocus="(this.type ='date')" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <div class="add">
                                        <select name="college" size="1" id="input12" required>
                                            <option value="k1">الكلية</option>
                                            <option value="كلية الهندسة ">كلية الهندسة </option>
                                            <option value="العلوم التطبيقية">العلوم التطبيقية </option>
                                            <option value="التجارة">التجارة</option>
                                            <option value="كلية الطب">كلية الطب </option>
                                            <option value="كلية التربية">كلية التربية </option>
                                            <option value="كلية الاداب">كلية الاداب </option>
                                            <option value="كلية الحقوق">كلية الحقوق </option>
                                            <option value="مركز الحاسب الالي">مركز الحاسب الالي </option>
                                        </select>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" placeholder="القسم   " name="departmen" id="input13" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p>سند رسوم الشهادة الالكترونية</p>
                                    <input type="file" name="image" id="file1" accept="image/*" capture="environment" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p> صوره السجل الاكاديمي </p>
                                    <input type="file" name="imageing" id="file15" capture="environment" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p> صوره كشف التخرج</p>
                                    <input type="file" name="ingala" id="file15" capture="environment" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p>صورة الشهادة الثانوية العامة</p>
                                    <input type="file" name="ab" id="file15" capture="environment" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p>استمارة استخراج مواهل</p>
                                    <input type="file" name="cd" id="file15" capture="environment" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p>اخلا طرف</p>
                                    <input type="file" name="ef" id="file15" capture="environment" required>
                                </fieldset>
                            </div>

                        </div>


                        <div class="form-group">
                            <fieldset>
                                <input type="submit" id="submit" name="submit" value="submit" />
                            </fieldset>
                    </center>

            </div>
            </form>

        </div>
        </div>

    </section>


    <!-- start  section footer-->
    <!-- عباره عن ثلاثة اعمده  العمود الاول الروابط الخاصه بلموقع وتحته يكون المواقع الاجتماعيه-->
    <!--  العمود الثاني فيه اجزاء من المقالات او اخر المقالات الموجوده في لبموقع -->
    <!-- العمود الثالث يكون فيه اعمالناء او صور معينه -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class=" col-lg-4  col-md-6">
                    <h3> ارشادات</h3>
                    <ul class="list-unstyled three-columns">
                        <li><a href="../index.php ">الصفحة الرئيسية</a></li>
                        <li><a href="../managmdocu.php "> طلب شهادة</a></li>
                        <li><a href="../stdserver.php "> طلب خدمة طلابية</a></li>
                        <li><a>جامعة تعز </a></li>
                        <li><a href="datamanag.html">وثيقتي </a></li>
                        <li><a href="../student_services_request/indecsearch.php">خدمتي</a></li>
                    </ul>
                    <!-- الايقونات التي في التذييل -->
                    <ul class="list-unstyled social-list">
                        <li> <i class=" fa fa-facebook fa-2x "></i></li>
                        <li> <i class=" fa fa-thumbs-up fa-2x "></i> </li>
                        <li><i class=" fa fa-phone fa-2x "></i></li>
                        <li> <i class=" fa fa-cogs fa-2x "></i>
                            <!--fa-spin  لعمل حركه للايقونه -->
                        </li>
                        <li><i class=" fa fa-send fa-2x"></i></li>
                        <li> <i class=" fa fa-whatsapp fa-2x"></i> </li>
                    </ul>
                </div>

                <div class=" col-lg-4 col-md-6">
                    <h3>ادارتي </h3>
                    <div class="media">
                        <a class=" pull-left" href="#">
                            <!-- ايقونه التي في التذييل -->
                            <i class=" fa fa-bookmark fa-5x"></i>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                الوثائق
                            </h4>
                            ادارة لطلب الشهادة الجامعية
                        </div>
                    </div>
                    <div class="media">
                        <a class=" pull-left" href="#">
                            <!-- ايقونه التي في التذييل -->
                            <i class=" fa fa-edit fa-5x "></i>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"> خدمات </h4>
                            ادارة لطلب خدمة طلابية
                        </div>
                    </div>

                    <div class="media">
                        <a class=" pull-left" href="#">
                            <!-- ايقونه التي في التذييل -->
                            <i class=" fa fa-home fa-5x"></i>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                الجامعة
                            </h4>
                            توفر لطالب سهولة الحصول على بياناتة
                        </div>
                    </div>

                </div>
                <div class=" col-lg-4">
                    <h3> جامعة تعز </h3>
                    <!-- class="img-thumbnail "   الكلاس التالي يخلي الصورة مصغره -->
                    <img class="img-thumbnail" src="../img/img-footer/5.jpg" alt="photo size ">
                    <img class="img-thumbnail" src="../img/img-footer/6.jpg" alt="photo size ">
                    <img class="img-thumbnail" src="../img/img-footer/7.jpg" alt="photo size ">
                    <img class="img-thumbnail" src="../img/img-footer/8.jpg" alt="photo size ">
                    <img class="img-thumbnail" src="../img/img-footer/9.jpg" alt="photo size ">
                    <img class="img-thumbnail" src="../img/img-footer/10.jpg" alt="photo size ">
                    <img class="img-thumbnail" src="../img/img-footer/11.jpg" alt="photo size ">
                    <img class="img-thumbnail" src="../img/img-footer/12.jpg" alt="photo size ">
                </div>
            </div>
        </div>
        <div class="copyright text-center">جامعة تعز &copy; 2022 <span>نيابة شؤون</span>.الطلاب </div>
    </section>
    <!-- end  section  footer-->



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/mecrocoft.js"></script>
    <!--مكتبه خاصه بلانميشان -->
    <script src="js/WOW.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--مكتبه خاصه بلسكرول الذي على يمين الشاشه شىيط التمرير -->
    <script src="js/jquery.nicescroll.min.js"></script>

    <script>
        var input = Document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true
        });
    </script>
</body>

</html>