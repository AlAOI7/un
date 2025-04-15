<!DOCTYPE html>
<html leng="er">

<head>
    <meta charst="UTF-8">
    <mta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viemport" content="width=device-width,initial-secale=1.0">
        <title>خدمات طلابية</title>

        <!-- Bootstrap core CSS-->
        <link href="img/un1.jpg" rel="icon">
        <link rel="stylesheet" href="css/fo.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/styless.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/animate.css">


        <link rel="stylesheet" href="css/bootstrap-rtl.css">


        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>


</head>

<!--  echo $_SERVER["PHP_SELF"];   -->

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
                <ul class="nav navbar-nav ">

                    <li class="active"><a href="../index.php">الصفحة الرئيسية</a></li>
                    <li><a href="../managmdocu.php">ادارةالوثائق</a></li>
                    <li><a href="../stdserver.php">الخدمات الطلابية</a></li>
                    <li><a href="../managmentdatacertifect/datamanag.php">شهادتي</a></li>
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



    <!--end section Countact us-->
    <div class="toptitle">
        <h1> التقدم بطلب اعفاء </h1>
        <h3>البيانات المطلوبه من الطالب اضافته</h3>
    </div>
    <div class="step-row">
        <div id="progress"></div>
        <div class="step-col"><small>الخطوةالاولى</small></div>
        <div class="step-col"><small>الخطوة الثانية</small></div>
        <div class="step-col"><small>الخطوة الثالثة</small></div>
        <div class="step-col"><small>الخطوة الرابعة</small></div>
        <div class="step-col"><small>الخطوة الخامسة</small></div>
    </div>


    <div class=" ala container text-center">
        <form action="../admin/admin_search/addgeneral_information.php" method="post" enctype="multiport/form-data">
            <h1 id="goup"> </h1>
            <div class="">

                <!--  جدول ادخال البيانات الشخصية للطالب -->
                <div class="al" id="Form1" class="contact">
                    <div class="row">
                        <div class="column">
                            <div class="form-group">
                                <fieldset>
                                    <!-- autocomplete  للاكمال التلقائي -->
                                    <input class="form-control  input-lg " type="text" placeholder="اسم الطالب " name="uname" required autocomplete autofocus>
                                </fieldset>
                            </div>

                            <!---->
                            <div class="form-group">
                                <fieldset>
                                    <!-- autocomplete  للاكمال التلقائي -->
                                    <input class="form-conterol input-lg " type="text" placeholder="الجنسية " name="nationality" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <!-- autocomplete  للاكمال التلقائي -->
                                    <input class="form-conterol input-lg " type="email" placeholder="البريد الالكتروني" name="email" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <!-- autocomplete  للاكمال التلقائي -->
                                    <input class="form-conterol input-lg " type="text" placeholder="مكان الميلاد " name="placeofbirth" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <!-- autocomplete  للاكمال التلقائي -->
                                    <input class="form-conterol input-lg " type="text" placeholder="المديرية " name="directoratye" required>
                                </fieldset>
                            </div>
                            <div class="form-group">

                                <fieldset>
                                    <!-- autocomplete  للاكمال التلقائي -->
                                    <input class="form-conterol input-lg " type="text" placeholder="تاريخ الميلاد " onfocus="(this.type ='date')" name="datebirth" required>
                                </fieldset>
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <p> اختار احد الخدمات التي ترغب بها</p>
                                    <div class="add">
                                        <select name="studentservices" size="1" required>
                                            <option value="student">الخدمة المقدمة للطالب </option>
                                            <option value=" اعفاء من رسوم حكومية"> اعفاء من رسوم حكومية </option>
                                            <option value="اعفاء من رسوم انشطة">اعفاء من رسوم انشطة </option>
                                            <option value="اعفاء من رسوم موازي">اعفاء من رسوم موازي </option>
                                            <option value="اعفاء من رسوم نفقة"> اعفاء من رسوم نفقة </option>
                                            <option value="مساعدات علاجية">مساعدات علاجية</option>
                                            <option value="مساعدات مالية">مساعدات مالية</option>
                                            <option value="مواصلات ">مواصلات </option>
                                            <option value="ملازم">ملازم</option>
                                            <option value="تعاقدات">تعاقدات</option>
                                        </select>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p>الحالة الاجتماعية</p>

                                    <input type="radio" id="male" name="maritalstatus" value="عازب" required>
                                    <label for="male">عازب </label>
                                    <input type="radio" id="female" name="maritalstatus" value="متزوج" required>
                                    <label for="female">متزوج</label>


                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <!-- autocomplete  للاكمال التلقائي -->
                                    <input class="form-conterol input-lg " type="text" placeholder="اخرى" name=" otherstatus" required>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label> في حال كان متزوج او اخراء</label><br>
                                    <input class="form-conterol input-lg " type="number" placeholder="كم عدد الاطفال " name="numbercheld" required>
                                </fieldset>
                            </div>

                            <fieldset>
                                <p> الملفات والصور المطلوب ارفاقها</p>
                                <div class="add">
                                    <div class="form-group">
                                        <fieldset>
                                            <p>سند دفع جزء من الرسوم</p>
                                            <!-- ـحديد اي صورة يمكن اختيارها -->
                                            <input class="form-conterol input-lg " type="file" name="image" id="file1" required accept="image/*">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>

                                            <p> صوره شخصية 4*6 </p>
                                            <!-- ـحديد اي صورة يمكن اختيارها -->
                                            <input class="form-conterol input-lg " type="file" name="imageing" id="file1" required accept="image/*">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <p> صورة البطاقة الشخصية والجامعية للطالب </p>
                                            <div class="add">
                                                <!-- capture="environment"   لاختيار الكاميرة المراد التقاط الصورة من خلالها الكيمرة الخلفية  -->
                                                <input class="form-conterol input-lg " type="file" name="ingala" id="file2" required accept="image/*" capture="environment">
                                                <input class="form-conterol input-lg " type="file" name="ab" id="file22" required accept="image/*" capture="environment">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <div class="add">
                                                <p> صورة البطاقة الشخصية لعائل الاسرة </p>
                                                <!-- capture="environment"   لاختيار الكاميرة المراد التقاط الصورة من خلالها الكيمرة الخلفية  -->
                                                <input class="form-conterol input-lg " type="file" name="cd" id="file21" accept="image/*" capture="environment" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <p> وثائق مرضية ان وجدةمن الافضل ان تكون في ملف </p>
                                            <input class="form-conterol input-lg " type="file" name="ef" id="file21" accept="image/*,.pdf ,.doc" capture="environment">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <p>شهادة الوفاة لعائل الاسرة ان كان متوفي </p>
                                            <div class="add">
                                                <!-- capture="environment"   لاختيار الكاميرة المراد التقاط الصورة من خلالها الكيمرة الخلفية  -->
                                                <input class="form-conterol input-lg " type="file" name="gh" id="file2" accept="image/*" capture="environment">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <p> صورة البطاقة الجامعية للاخوة ان وجدو </p>
                                            <div class="add">
                                                <!-- capture="environment"   لاختيار الكاميرة المراد التقاط الصورة من خلالها الكيمرة الخلفية  -->
                                                <input class="form-conterol input-lg " type="file" name="ig" id="file2" accept="image/*,.pdf,.doc" capture="environment">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <p> صوره التقارير الطبية ان وجد او اذاكان هناك مريض </p>
                                            <!-- ـحديد اي صورة يمكن اختيارها -->
                                            <input class="form-conterol input-lg " type="file" name="kl" id="file1556" accept="image/*" capture="environment">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <p>صورة من الضمان الاجتماعي ان وجد </p>
                                            <!-- ـحديد اي صورة يمكن اختيارها -->
                                            <input class="form-conterol input-lg " type="file" name="mn" id="file156" accept="image/*" capture="environment">
                                        </fieldset>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <a href="#goduon">
                                    <div class="btn-box">
                                        <button class=" " type="button" id="Next1">التالي</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 id="goduon"> </h1>

            <h1 id="goup1"> </h1>
            <!--*********************************************************************-->
            <div class="">
                <!--     جدولالبيانات التاكيدية للطالب     2 -->
                <div class="al" id="Form2" class="contact">

                    <div class="row">
                        <div class="column">
                            <div class="form-group">
                                <fieldset>

                                    <!---->

                                    <p> السكن اثناء الدراسة </p>
                                    <div class="form-group">
                                        <fieldset>
                                            <input class="form-conterol input-lg " type="text" placeholder="عنوان السكن اثناء الدراسة   " name="homeadress" required>
                                        </fieldset>
                                    </div>

                                    <div class="form-group">
                                        <fieldset>
                                            <label> ساكن في جوار </label>
                                            <input class="form-conterol input-lg " type="text" placeholder="جوار   " name="homighbord" required>
                                        </fieldset>
                                    </div>

                                    <div class="form-group">
                                        <fieldset>
                                            <label> رقم الهاتف لاي شخص في المكان المجاور لك </label><br>
                                            <input class="form-conterol input-lg " type="tel" placeholder="رقم الهاتف  " name="hoeighbophon" id="phone" required>
                                        </fieldset>
                                    </div>

                                </fieldset>
                            </div>

                            <div class="form-group">
                                <fieldset>

                                    <div class="form-group">
                                        <fieldset>
                                            <label for="female">عدد الاخوة </label><br>
                                            <input class="form-conterol input-lg " type="number" placeholder="الذكور  " name="malebrother">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <input class="form-conterol input-lg " type="number" placeholder="الاناث   " name="famlesester">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <input class="form-conterol input-lg " type="number" placeholder="ترتيبك بينهم    " name="orderyou">
                                        </fieldset>
                                    </div>

                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label>ماهو السبب الذي جعلك تتقدم الى طلب الاعفاء </label><br>
                                    <textarea class="textt" placeholder="السبب" name="becoussrequest"></textarea>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <div>
                                        <p>هل تعمل </p>
                                        <div class="form-group">
                                            <fieldset>
                                                <input type="radio" id="male" name="work" value="نعم" required>
                                                <label for="male">نعم </label>
                                                <input type="radio" id="female" name="work" value="لا" required>
                                                <label for="female">لا</label>
                                            </fieldset>
                                        </div>
                                        <div class="form-group">
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder="نوع العمل   " name="typeworkstud">
                                            </fieldset>
                                        </div>
                                        <div class="form-group">
                                            <fieldset>
                                                <label>كم مقدار دخلك من خلال عملك</label><br>
                                                <input class="form-conterol input-lg " type="text" placeholder="  مقدار الدخل للطالب  " name="incomestudent">
                                            </fieldset>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p> بيانات ولي الامر </p>

                                    <div class="form-group">
                                        <fieldset>
                                            <input class="form-conterol input-lg " type="text" placeholder="اسم ولي الامر  " name="nameparent" required>
                                            <input class="form-conterol input-lg " type="text" placeholder="درجة القرابة " name="degreekinship" required>
                                            <input class="form-conterol input-lg " type="text" placeholder="نوع العمل  " name="workparent" required>
                                            <input class="form-conterol input-lg " type="text" placeholder="مقدار دخلة " name="incomeparent" required>
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <label> عنوان ولي الامر اين يسكن</label><br>
                                            <input class="form-conterol input-lg " type="text" placeholder="عنوان والي الامر    " name="adressparent" required>
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <label> رقم هاتف ولي الامر </label><br>
                                            <input class="form-conterol input-lg " type="number" placeholder="رقم الهاتف  " name="phoneparent" id="phone" required>
                                        </fieldset>
                                    </div>

                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <p> بيانات تاكيدية </p>

                                    <div class="add">
                                        <input class="form-conterol input-lg " type="number" placeholder=" رقم هاتف احد جيرانك " name="ponenigabhoord" required>
                                        <input class="form-conterol input-lg " type="text" placeholder="اسم اقرب جار الك   " name="namenigabhoord" required>
                                    </div>
                                    <div class="add">
                                        <input class="form-conterol input-lg " type="number" placeholder=" رقم هاتف احد المقربين  " name="phonenearby">
                                        <input class="form-conterol input-lg " type="text" placeholder="اسم الشخص المقرب     " name="namenearby">
                                    </div>
                                    <div class="form-group">
                                        <fieldset>
                                            <label> رقم هاتف عاقل الحارة </label><br>
                                            <input class="form-conterol input-lg " type="number" placeholder="رقم الهاتف  " name="phonesane" id="phone" required>
                                        </fieldset>
                                    </div>

                                </fieldset>
                            </div>
                            <div class="form-group">
                                <div class="btn-box">
                                    <a href="#goup">
                                        <button type="button" id="Back1" calss="ri">الصفحة السابقة</button>
                                    </a>
                                    <a href="#goduon2">
                                        <button type="button" id="Next2" calss="lf">التالي</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <h id="goduon2"></h>
            <h id="goup2"></h>
            <!--*********************************************************************-->
            <!--  جدول البيانات الدراسية للطالب  3   -->
            <div class="al" id="Form3" class="contact">
                <div class="row">
                    <div class="column">
                        <div class="form-group">
                            <fieldset>
                                <p>
                                <h3>البيانات الدراسية للطالب </h3>
                                </p>
                                <!---->

                                <div class="add">
                                    <select name="collegstud" size="1" required>
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
                                    <input class="form-conterol input-lg " type="text" placeholder="القسم  " name="departstd" required>
                                    <input class="form-conterol input-lg " type="text" placeholder="المستوى  " name="levelstd" required>
                                    <input class="form-conterol input-lg " type="text" placeholder="الحالة الدراسية" name="schoolstatus" required>
                                    <input class="form-conterol input-lg " type="text" placeholder="مقدار الرسوم" name="feeamount" required>

                                    <div class="form-group">
                                        <fieldset>

                                            <p>هل حصلة على اعفاء سابق </p>
                                            <input type="radio" id="male" name="previotion" value="نعم" required>
                                            <label for="male">نعم </label>
                                            <input type="radio" id="female" name="previotion" value="لا" required>
                                            <label for="female">لا</label>
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder=" كم نسبة الاعفاء الذي حصلت علية   " name="ecempltionrate">

                                            </fieldset>
                                            <fieldset>
                                                <label>عدد الاعفاءت التي حصلت عليها </label><br>
                                                <input class="form-conterol input-lg " type="number" placeholder="كم مره حصلة على اعفاء   " name="numbeltion">
                                            </fieldset>

                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <fieldset>
                                        <p>هل لديك اخوة يدرسون في الجامعة</p>

                                        <input type="radio" id="male" name="brotherstud" value="نعم" required>
                                        <label for="male">نعم </label>
                                        <input type="radio" id="female" name="brotherstud" value="لا" required>
                                        <label for="female">لا</label>
                                        <br>


                                        <label for="female">كم عدد اخوتك الذين يدرسون في الجامعه</label><br>
                                        <input class="form-conterol input-lg " type="number" placeholder="كم عددهم  " name="numberbrotherstd" required>




                                        <div class="form-group">
                                            <fieldset>
                                                <p> في اي كليه يدرس اخوانك </p>
                                                <div class="add">
                                                    <select name="wahtcollege" size="1">
                                                        <option value="student">في اي كليه يدرس اخوانك </option>
                                                        <option value=" العلوم التطبيقيه "> العلوم التطبيقية
                                                        </option>
                                                        <option value="الهندسة">الهندسة</option>
                                                        <option value="   التجارة  "> التجارة </option>
                                                        <option value="   الطب "> الطب </option>
                                                        <option value="    التربية "> التربية </option>
                                                        <option value="  الحقوق   "> الحقوق </option>
                                                        <option value="   الاداب  "> الاداب </option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>


                                        <label> كم مرة حصلو اخوتك على اعفاءات </label><br>
                                        <input class="form-conterol input-lg " type="number" placeholder="عدد الاعفاءات    " name="nubroxemp">
                                    </fieldset>
                                </div>

                            </fieldset>
                        </div>
                        <div class="form-group">

                            <div class="btn-box">
                                <a href="#goup1">
                                    <button type="button" id="Back2">الصفحة السابقة</button>
                                </a>
                                <a href="#goduon3">
                                    <button type="button" id="Next3">التالي</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <h id="goduon3"></h>
            <h id="goup3"></h>
            <!--*********************************************************************-->
            <div class="">
                <!--  جدول الوسائط الاجتماعية للاسرة 4  -->
                <div class="al" id="Form4" class="contact">
                    <div class="row">
                        <div class="column">
                            <div class="form-group">


                                <fieldset>

                                    <!---->
                                    <!---->
                                    <p>الوسط الاجنتماعي للاسرة </p>
                                    <div class="add">
                                        <input class="form-conterol input-lg " type="text" placeholder="عنوان سكن الاسرة" name="homefamily" required>

                                        <fieldset>
                                            <div>
                                                <p>نوع السكن </p>
                                                <input type="radio" id="male" name="typehomfam" value="ملك" required>
                                                <label for="male">ملك </label>
                                                <input type="radio" id="female" name="typehomfam" value="ايجار" required>
                                                <label for="female">ايجار </label>
                                                <fieldset>
                                                    <input class="form-conterol input-lg " type="text" placeholder="كم الايجار  " name="numberrent" required>
                                                </fieldset>
                                            </div>
                                        </fieldset>
                                        <input type="text" placeholder="المستوى التعليمي للاب  " name="educdad">
                                        <input type="text" placeholder="المستوى التعليمي للام  " name="educmom">
                                        <fieldset>
                                            <p>مهنة الاب</p>
                                            <div class="add">
                                                <input class="form-conterol input-lg " type="text" placeholder="مهنة الاب  " name="workdad">
                                                <input class="form-conterol input-lg " type="text" placeholder="مقدار الدخل  " name="incomdad">
                                                <input class="form-conterol input-lg " type="text" placeholder="مكان العمل  " name="adressworkdad">
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <p>مهنة الام</p>
                                            <div class="add">
                                                <input class="form-conterol input-lg " type="text" placeholder="مهنة الام  " name="workmom">
                                                <input class="form-conterol input-lg " type="text" placeholder="مقدار الدخل  " name="incommom">
                                                <input class="form-conterol input-lg " type="text" placeholder="مكان العمل  " name="adressworkmom">
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <p>iهل للاسرة مساعدة من الضمان الاجتماعي </p>
                                            <div>
                                                <input type="radio" id="male" value="نعم" name="guarantee">
                                                <label for="male">نعم </label>

                                                <input type="radio" id="female" value="لا" name="guarantee">
                                                <label for="female">لا </label>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <p>من هو عائل الاسرة حالين </p>
                                            <div class="add">
                                                <input class="form-conterol input-lg " type="text" placeholder="عائل الاسره " name="familiar" required>
                                                <input class="form-conterol input-lg " type="text" placeholder="عنوان العمل  " name="adressfami" required>
                                                <input class="form-conterol input-lg " type="text" placeholder="مهنتة  " name="profession" required>
                                                <input class="form-conterol input-lg " type="text" placeholder="مقدار الدخل  " name="incomefamili" required>
                                                <input class="form-conterol input-lg " type="text" placeholder="نوع العمل   " name="workfamili" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="btn-box">
                                <a href="#goup2">
                                    <button type="button" id="Back3">الصفحة السابقة</button>
                                </a>
                                <a href="#goduon4">
                                    <button type="button" id="Next4">التالي</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--*********************************************************************-->
            <h id="goduon4"></h>
            <!-- جدول الاسئله الموجة للطالب  5   -->
            <div class="">
                <div class="al" id="Form5" class="contact">
                    <div class="row">
                        <div class="column">
                            <!---->
                            <fieldset>
                                <p>الاسئلة الموجة لطالب </p>
                                <div class="add">
                                    <fieldset>
                                        <p>هل واجهة صعوبه اثناء الدراسة الجامعية وماهي </p>
                                        <div>
                                            <input type="radio" id="male" value="نعم واجهة" name="difficul" required>
                                            <label for="male">نعم واجهة </label>
                                            <input type="radio" id="female" value="لا لم اواجة" name="difficul" required>
                                            <label for="female">لا لم اواجة </label>
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder="ماهي الصعوبة التي واجهتها  " name="difficulty" required>
                                            </fieldset>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p>الحالة الصحية للوالد </p>
                                        <div>
                                            <input type="radio" id="male" value="جيدة" name="healthstatusdad" required>
                                            <label for="male">جيدة </label>
                                            <input type="radio" id="female" value="مريض" name="healthstatusdad" required>
                                            <label for="female">مريض </label>
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder="ماهو المرض   " name="tydiseasedad" required>
                                            </fieldset>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <p>الحالة الصحية للوالدة </p>
                                        <div>
                                            <input type="radio" id="male" value="جيدة" name="healthstatusmom" required>
                                            <label for="male">جيدة </label>
                                            <input type="radio" id="female" value="مريضة" name="healthstatusmom" required>
                                            <label for="female">مريضة </label>
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder="ماهو المرض  " name="tydiseasemom" required>
                                            </fieldset>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p>هل يوجد احد من اخوانك مريض او معاق </p>
                                        <div>
                                            <input type="radio" id="male" value="نعم" name="broyhdiseas" required>
                                            <label for="male">نعم </label>
                                            <input type="radio" id="female" value="لا" name="broyhdiseas" required>
                                            <label for="female">لا </label>
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder="ما هو المرض او الاعاقة  " name="typedisease" required>
                                            </fieldset>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p>سكن الطالب </p>
                                        <div>
                                            <input type="radio" id="male" value="ملك" name="tyhomestud" required>
                                            <label for="male">ملك </label>
                                            <input type="radio" id="female" value="ايجار" name="tyhomestud" required>
                                            <label for="female">ايجار </label>
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder=" كم الايجار " name="amountpymn " required>
                                            </fieldset>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p>هل للاسرة املاك خاصة </p>
                                        <div>
                                            <input type="radio" id="male" value="منزل" name="familyproperty" required>
                                            <label for="male">منزل </label>
                                            <input type="radio" id="female" value="ارض" name="familyproperty" required>
                                            <label for="female">ارض </label>
                                            <fieldset>
                                                <input class="form-conterol input-lg " type="text" placeholder=" املاك اخراء" name="otherproprety" required>
                                            </fieldset>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p>هل للوالد زوجة اخرء</p>
                                        <div>
                                            <input type="radio" id="male" value="نعم" name="wifeotherdad" required>
                                            <label for="male">نعم </label>
                                            <input type="radio" id="female" value="لا" name="wifeotherdad" required>
                                            <label for="female">لا </label>
                                        </div>
                                    </fieldset>



                                    <fieldset>
                                        <p> كم عدد الاخوة الاشقاء </p>
                                        <div class="add">
                                            <input class="form-conterol input-lg " type="number" placeholder="ذكور  " name="brothses" required>
                                            <input class="form-conterol input-lg " type="number" placeholder="اناث  " name="sesterse" required>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p> كم عدد الاخوة الغير اشقاء </p>
                                        <div class="add">
                                            <input class="form-conterol input-lg " type="number" placeholder="ذكور  " name="nobrothses" required>
                                            <input class="form-conterol input-lg " type="number" placeholder="اناث  " name="nosesterse" required>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p> كم عدد الاخوة في سن الدراسة والجامعة </p>
                                        <div class="add">
                                            <input class="form-conterol input-lg " type="number" placeholder="في سن الدراسة    " name="brotherschool" required>
                                            <input class="form-conterol input-lg " type="number" placeholder="في سن الجامعة  " name="brotheruniver" required>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <p>هل يوجد اخوة يعملون </p>
                                        <div>
                                            <input type="radio" id="male" value="نعم" name="brothwork" required>
                                            <label for="male">نعم </label>
                                            <input type="radio" id="female" value="لا" name="brothwork" required>
                                            <label for="female">لا </label>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="add">
                                            <input class="form-conterol input-lg " type="number" placeholder=" كم عدد الاخوة المتزوجين   " name="brothermarrid" required>
                                        </div>
                                    </fieldset>

                                </div>
                            </fieldset>
                            <div class="btn-box">
                                <a href="#goup3">
                                    <button type="button" id="Back4">الصفحة السابقة</button>
                                </a>
                                <button type="submit" name="submit">تسجيل</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>



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
                        <li><a href="../managmentdatacertifect/datamanag.html">وثيقتي </a></li>
                        <li><a href="indecsearch.php">خدمتي</a></li>
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




    <script>
        var Form1 = document.getElementById("Form1");
        var Form2 = document.getElementById("Form2");
        var Form3 = document.getElementById("Form3");
        var Form4 = document.getElementById("Form4");
        var Form5 = document.getElementById("Form5");

        var Next1 = document.getElementById("Next1");
        var Next2 = document.getElementById("Next2");
        var Next3 = document.getElementById("Next3");
        var Next4 = document.getElementById("Next4");
        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");
        var Back3 = document.getElementById("Back3");
        var Back4 = document.getElementById("Back4");



        var progress = document.getElementById("progress");

        Next1.onclick = function() {
            Form1.style.right = "-9200px";
            Form2.style.right = "40px";
            progress.style.width = "120px";
        }
        Back1.onclick = function() {
            Form1.style.right = "40px";
            Form2.style.right = "1300px";
            progress.style.width = "20px";
        }
        Next2.onclick = function() {
            Form2.style.right = "-9100px";
            Form3.style.right = "30px";
            progress.style.width = "260px";
        }
        Back2.onclick = function() {
            Form2.style.right = "30px";
            Form3.style.right = "1550px";
            progress.style.width = "140px";
        }

        Next3.onclick = function() {
            Form3.style.right = "-6100px";
            Form4.style.right = "30px";
            progress.style.width = "360px";
        }
        Back3.onclick = function() {
            Form3.style.right = "30px";
            Form4.style.right = "2020px";
            progress.style.width = "240px";
        }

        Next4.onclick = function() {
            Form4.style.right = "-7100px";
            Form5.style.right = "30px";
            progress.style.width = "430px";
        }
        Back4.onclick = function() {
            Form4.style.right = "30px";
            Form5.style.right = "3550px";
            progress.style.width = "350px";
        }
    </script>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!--مكتبه خاصه بلانميشان -->
    <script src="js/WOW.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--مكتبه خاصه بلسكرول الذي على يمين الشاشه شىيط التمرير -->
    <script src="js/jquery.nicescroll.min.js"></script>
</body>

</html>