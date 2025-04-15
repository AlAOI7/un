<!DOCTYPE html>
<html alig="er" dir="ltr">

<head>
  <meta charset="utf-8">
  <!--  تستخدم لمتصفح انترنت اكسبلولار -->
  <meta http-equiv="X-UA-comatible" content="IE=edge">
  <!--  خاص بل فيرسة موبايل لكي يعمل الموقع على الموبايل -->
  <meta name=" viewport" content="width=device-width, initial-scale=1">
  <title>نيابة شؤون الطلاب جامعة تعز</title>

  <link href="img/un1.jpg" rel="icon">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/bootstrap-rtl.css">
  <link rel="stylesheet" href="css/styleserch.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- عند كتابت ميديا سكرين عند الطباعه تلغا جميع التنسيقات  -->
  <!--     <link rel="stylesheet" href="css/style.css"     media="screan"> -->

  <!-- عند عمليت الطباعه نفلي الميديا برينت  للملف الذي وضع فيه الميديا برنت  
        بلمعنا بعد عمليت الطباعه اظهر التنسيقات عند الكباعه فثط عند الmedia print-->
  <!--     <link rel="stylesheet" href="css/اسم الملف الذي عملنا فيه التعديل عند الباعه test.css"     media="print"> -->
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/animate.css">
  <!-- يقوم بعمل انميشان عبر wow للكلمات والوسومات المرادة-->

  <!--       <link rel="stylesheet" href="css/prpear_theme.css">
           <link rel="stylesheet" href="css/grean_theme.css">    
               <link rel="stylesheet" href="css/black_theme.css ">       
                       <link rel="stylesheet" href="css/red_theme.css ">       
-->
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
          <li class="active"><a href="index.php">الصفحة الرئيسية</a></li>
          <li><a href="managmdocu.php">ادارةالوثائق</a></li>
          <li><a href="stdserver.php">الخدمات الطلابية</a></li>
          <li><a href="managmentdatacertifect/datamanag.php">شهادتي</a></li>
          <li><a href="student_services_request/indecsearch.php">خدمتي</a></li>
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




  <!-- startg section   wow -->
  <!-- wow  name  هاذه هواص مكتبة الانميشان -->
  <!--data-wow-duration ="4s"  لحساب وقت تنفيذ الانميشان كم يستغرق تنفيذ الانميشان -->
  <!-- data-wow-delay   لحساب تاخير الانميشان  متى يظهر بعد كم ثواني  -->
  <!-- data-wow-offset="500" عندما تكون  تتحرك الصفحه 500 بكسل اظهرلي العنصر -->
  <!--data-wow-iteration  عدد المرات الذي تريد ان تكرر فيها الانميشان -->
  <!--    <section class="about text-center       wow flip"   data-wow-duration="1s"  data-wow-delay="1"   data-wow-offset="600"  data-wow-iteration="3">  -->


  <!-- end section -->


  <!--  start carousel indicators-->

  <!-- نقاط التحرك في اول الصفخه النقاط لصور المتحركه-->
  <div id="carosal" class=" carousel slide" data-ride="carousel">
    <!--indicators-->
    <ol class="carousel-indicators  hidden-xs ">
      <li data-target="#carosal" data-slide-to="0" class="active"></li>
      <li data-target="#carosal" data-slide-to="1"></li>
      <li data-target="#carosal" data-slide-to="2"></li>
    </ol>
    <!--slide show-->
    <!-- الصوره المتحركه مع المحتوى -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="im" src="img/imag3.jpg" alt="hr">
        <div class="carousel-caption hidden-xs">
          <h1> خدمات طلابية </h1>
          <p class="lead">لطلب الاعفاء من اي رسوم عليك او تريد اي مساعدة من الجامعه لاي خدمة تقدمها الجامعه</p>
          <div class="btn btn-primary"><a href="stdserver.php " style="color: black;">انتقل الى الصفحة الخاصة بطلب
              اعفاءات من رسوم </a></div>
        </div>

      </div>

      <!-- الصوره المتحركه مع المحتوى -->
      <div class="item ">
        <img class="im" src="img/imag4.jpg" alt="hr">
        <div class="carousel-caption hidden-xs">
          <h1>طلب شهادة كرتونية</h1>
          <p class="lead">لطلب الشهادة الكرتونية يجب ارفاق البيانات المطلوبه من الطالب وبشكل صحيح</p>
          <div class="btn btn-default"><a href="managmdocu.php" style="color: black;">انتقل الى الصفحة الخاصة بطلب شهادة
              كرتونية </a></div>
        </div>
      </div>

      <!-- الصوره المتحركه مع المحتوى -->
      <div class="item ">
        <img class="im" src="img/imag7.jpg" alt="">
        <div class="carousel-caption hidden-xs">
          <h1> الاخبار </h1>
          <p class="lead"></p>الاخبار التي تقدمها جامعة تعز للحصول على الخدمات في اي وقت وتقديم معلومات مهمه للطالب
          </p>
          <div class="btn btn-primary" style="color: black;">المعلومات المتججدة عن الجامعة واخر الاخبار </div>
        </div>
      </div>
    </div>
    <!-- التنقل عند الضغط على احد الدوئر-->
    <!--control-->
    <a class="left carousel-control" href="#carosal" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carosal" role="button" data-slide="next">
      <span class="glyphicon  glyphicon-chevron-right"></span>
    </a>
  </div>





  <section class="site-section" id="section-features">
    <div class="container">


      <div class="col-md-4" style="margin-bottom:30px; font-weight: bold">
        <h4> <strong>-: نيابة شؤون الطلاب </strong> </h4>

        <ul class="site-list">
          عمادة شؤون الطلاب هي إحدى العمادات المساندة والتابعة لوكالة الجامعة للشؤون الأكاديمية، حيث تعتبر المركز الخدمي
          الأول والأهم لطلبة الجامعة، وتقدم العمادة لطلبتها كافة الخدمات المرتبطة بالأنشطة والخدمات الطلابية حيث تم
          تقسيم هذه المهام الى خمس أدارة..حيث يهتم هذا المشروع بأدرتين من اصل خمس أدراة فيهدف الى جعل كل العمليات
          المطلوبة من الطلاب والموظف للاستفادة من الخدمات التي توفرها الادارة تتم بطريقة أكثر سهولة تستهدف توفير الوقت
          والجهد.. ويكون ذلك من خلال هذا المشروع الذي يتم من خلاله متابعة كل المهام المطلوبه من الطلاب اولا ثم يتلقى
          البيانات الصادرة أحد موظفين الادارة الذي يملك كلمة سر تسمح له بالولوج الى الموقع ليتم التعامل معاها حسب
          الأجرات الازمة .
        </ul>
      </div>
      <div class="col-md-8">
        <p><img src="img/imag1.jpg" alt="" class="img-fluid"></p>
      </div>



    </div>
  </section>




  <!--end carousel indicators-->
  <section class="about text-center       wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-iteration="3">
    <!-- container  يمسك المحتوى بتاعي يخلي داخل1170بكسل الخاص بل بوتستراب   اذا لم نكتب هاذه الكلاس  المحتوى سوف يملى الصفحه بتاعي-->
    <div class="container">
      <h1>الخدمات التي تقدمها الجامعة <span>للطالب لمساعدتة في التعليم الجامعي والحصول على الشهادة </span></h1>
      <p class="lead buzz-out"> <strong>الخدمات التي تقدمها جامعة تعز هناك خدمات عديدة لكن نحن وفرناء للطالب الخدمات
          المهمه التي يحتاجها الطالب في التخرج والتعليمم</strong>
      </p>
      <p class="lead buzz-out"> <strong> وسوف نوضح كيفية الحصول على الخدمات الطلابية وكيفية ارفاق البيانات مع عرض امثله
          لهاذه النماذج</strong></p>
    </div>
  </section>















  <!-- start    section features    المميزات الخاصه بلموقع او المنتج  -->
  <section class="features text-center">
    <!-- container  يمسك المحتوى بتاعي يخلي داخل1170بكسل الخاص بل بوتستراب   اذا لم نكتب هاذه الكلاس  المحتوى سوف يملى الصفحه بتاعي-->
    <div class="container">
      <h1>من المميزات</h1>
      <!-- row  قمنا بعمل روا لاننا سوف نحط اربعة مميزات وسوف نقوم بتقسيمهم -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <!--خاص بلحركه للسيكشن نفسه -->
          <div class="feat    wow bounceInDown" data-wow-duration="1s" data-wow-offset="250">
            <i class="fa fa-pied-piper-alt fa-5x "></i>
            <h3>ادارة الوثائق</h3>
            <p class="lead push"> تسهل للطالب في تقديك بياناته الخاصه لطلب شهادة عبرالموقع بسهوله تامه ومعرفة ما علية
              تقديمة من خلال الموقع
              ويعطي نماذج توضيحية للطالب لمعرفت ما علية ارفاقه وارشادات كيفية اضافة البيانات ومن اين احضارها </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feat  wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
            <i class="fa fa-leanpub fa-5x"></i>
            <h3> الباحثين</h3>
            <p class="lead pop"> هاذهي الادارة سوف نوضح عملهاء وكيف يحصل الطالب على الخدمات من خلالها
              كا الاعفاءت من الرسوم الجامعية رسوم الانشطة والموازي والنفقه والانشطة والخاص وهناك خدمات اخرى لاعطاء
              مساعدات علاجية ومساعدات مادية وتعاقدات وكل ما يحتاج الطالب لتسهيل المرحلة التعليمية له لتعلم بشكل مناسب
              ولكي لا يجد صعوبه في تعليمه
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feat  wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
            <i class="fa fa-weibo fa-5x "></i>
            <h3>خدمات المواقع</h3>
            <p class="lead">تساعد الطالب في معرفة الخدمات التي تقدمهاء الجامعة وكيفية الحصول عليها وباي طريقه وكذالك
              قدم
              الموقع بعض الخدمات للموظفين في سهولة عملهم و ترتيب المعلومات التي تصلهم وارشفتها والعمل من اي مكان
              يتواجد
              فيه الموظف للعمل بشكل جيد ولسلامة المعلومات والوثائق </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feat wow bounceInUp" data-wow-duration="1s" data-wow-offset="250">
            <i class="fa fa-forumbee fa-5x"></i>
            <h3>الاخبار </h3>
            <p class="lead"> وكذالك يعتبر الموقع موقع اخباري لعرض الاشياء الجديدة في الجامعة والمعلومات التي تريد
              الجامعة عرضها للطالب وكذالك مواعيد فتح الخدمات ومتى تنتهي ليكون الطالب على دراية
              بلخدمات متى يمكنهو الحصول عليها وكذالك اخبار اخرى تخص الجلمعة
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end   section features  -->



  <!-- start   section testimonials    -->
  <!--  اراى الناس عن الموقع  وعن خدماتا الموقع -->

  <section class="testimonials text-center neapmanagment   wow flipInY" data-wow-duration="3s" data-wow-offset="300">
    <!-- start container-->
    <div class="text-center">
      <div class="container">
        <h1>الادارات في نيابة شؤون الطلاب </h1>
        <!-- start  testimonials carousel-->
        <div class="section-title">
          <p> نيابة شؤون الطلاب تمارس العديد من المهام والاختصاصات اتخاذ جميع الترتيبات الازمه في عملية القبول والتسجيل
            الاسهام في عمادات الكليات المختلفة في مجال ارشاد الطلاب وتوجيههم ومساع.تهم في عملية التكيف مع البيئة
            الجامعية اصدار كافة الؤثائق الخاصة بلخريجين وبلغتين العربية والانجليزية الاعداد والاشراف على سير عملية
            الاختبارات بتنسيق مع عمادات الكليات بلجامعة دراسة احوال الطلبه الاجتماعية والاقتصادية تقديم الخدمات الطلابيه
            في مختلف المجالات
            الاهتمام بمشاكل الطلبه وقضاياهم المختلفة والعمل على حلها او التخفيف من حدتها
          </p>

          <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <h4>ادارة القبول والتسجيل </h4>
            <p> تختص هذه الادارة بتسجيل وقبول الطلاب المستجدين وتقوم باعلان النتائج وتحدد مواعد اختبارات القبول وتسجيل
              الطلاب </p>
          </div>
          <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-cube-alt"></i>
            <h4>ادارة الوثائق </h4>
            <p> هذه الادارة مختصة في الحصول على المؤاهل الجامعي وتتم التحقق واستخرج الشهادة الجامعية عن طريق هاذه
              الادارة </p>
          </div>
          <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-images"></i>
            <h4>ادارة الخدمات الطلابية </h4>
            <p>وتسمى ادارة الباحثات والتي من خلالها يحصل الطالب على الخدمات الطلابية الاعفات وغيرها من الخدمات </p>
          </div>
          <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-shield"></i>
            <h4>ادارة الانشطة الطلابية </h4>
            <p> مختصة في الانشطة الطلابية في جميع ارجاء الجامعة فيما بين الكليات والاقسام في الجامعة </p>
          </div>


          <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-shield"></i>
            <h4>ادارة الشؤون الطبية </h4>
            <p> توفر المساعدات الطبيه وكادر طبي وعيادات في كل كلية للماعدات الطبيه لطالب </p>
          </div>

        </div>
        <!-- end testimonials carousel-->
      </div>
      <!-- end container-->
  </section>
  <!-- end   section testimonials  -->






  <?php
  include 'conectdb/concte.php';

  ?>




  <!-- end   section Our team     -->

  <!--start section subscribe-->
  <!-- subscribe   للااشتراك في موقعي او الاشتراك في الشركه التي في الموقع -->
  <section class="subscribe text-center  ">
    <div class="container   wow rotateInDownRight" data-wow-duration="2s" data-wow-offset="390">
      <!-- container  تقوم بحصر المحجتوى الذي تحتويه في نطاق معين-->
      <h1> نيابة شؤون الطلاب جامعة تعز تقدم</h1>
      <p class="lead">اهم الخدمات الطلابية لتسهيل انجاز معاملات الطالب </p>
      <form class="form-inline" method="POST" action="admin/saperadmin.php">
        <!--input-lg and btn-lg  لتكبير حقل الادخال  و الزر-->
        <input class="form-control input-lg" type="password" name="adminn" placeholder="write  your Email">
        <button type="submit" name="sub" class="btn btn-danger btn-lg">
          <i class="fa fa-edit fa-lg"></i> اشتراك</button>
      </form>
    </div>
  </section>
  <!--end section subscribe-->



  <!--sratr section statistics-->
  <!--statistics    الاحصائيات الخاصه بلموقع او الشركه -->

  <section class="statistics text-center">
    <div class="data">
      <div class="container">
        <h1>عدد الطلاب المتقدمين للجامعة والخدمات الجامعية للطلاب</h1>
        <div class="row">
          <h4>نوضح عدد الطلاب المتقدمين للخدمات الطلابية في الجامعة والطلبه المساجدين واحصاياتهم لكي نوضح ان الجامعة
            توفر خدماتها بشكل مكتمل ولتشجيع الطلاب لاستخدام موقعنا هاذه لتوفي الخدمة الطلابية بشتاء وسائلها البيانات
            المرفقة تعد من بداية انشاء النظام</h4>
          <div class=" col-lg-3 col-sm-6">
            <div class="stats">
              <i class="fa fa-pencil-square fa-5x"></i>
              <p>1200</p>
              <span>الطلاب الحاصلين على خدمات طلابية</span>
            </div>
          </div>


          <div class=" col-lg-3 col-sm-6">
            <div class="stats">
              <i class="fa fa-users fa-5x"></i>
              <p>9000</p>
              <span>عدد الطلاب المتقدمين للجامعة</span>
            </div>
          </div>


          <div class=" col-lg-3 col-sm-6">
            <div class="stats">
              <i class="fa fa-mortar-board fa-5x"></i>
              <p>2400</p>
              <span> عدد الطلاب الحاصلين على الشهاد الالكترونية </span>
            </div>
          </div>

          <div class=" col-lg-3 col-sm-6">
            <div class="stats">
              <i class="fa fa-recycle fa-5x"></i>
              <p>30</p>
              <span>عدد الطلبة الذين لم يرفقو البيانات بشكل صحيح</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!--end section statistics-->




  <!--end section statistics-->



  <?php
  // $$$$$$$$$$$$$$$$$$ الفورم حق تسجيل الدخول $$$$$$$$$$$$$$$$$
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con, 'databaseunivercetytaiz');


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //if (isset($_POST['submit22'])) {

    $username = $_POST['name'];
    $email = $_POST['emaill'];
    $phon = $_POST['phon'];
    $tec = $_POST['mesg'];

    $q = " INSERT INTO  maass (name,emaill,phon,mesg) 
                               VALUES('$username','$email','$phon','$tec') ";
    $query = mysqli_query($con, $q);
    // طريقة عرض الصولر في هائة الصفحة





  }


  ?>
  <!-- رسالتك للفريق-->
  <!--start section Countact us-->
  <section class="Contact-us  text-center" id="loginlog">
    <div class="filds">
      <div class="container">
        <div class="row">
          <i class=" fa fa-envelope fa-5x"></i>
          <p class="lead">التواصل مع الادارة </p>
          <p class="lead">للاستفسار وطلب المساعدة الرجاء التواصل مع الادارة </p>
          <p class="lead">لاتترد في التواصل بنا </p>

          <!--start contuct form-->


          <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control  input-lg " name="name" placeholder="الاسم">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" name="emaill" placeholder="البريدالالكتروني">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" name="phon" placeholder="رقم الهاتف">
              </div>
            </div>

            <div clas="col-md-6">
              <div class="form-group">
                <textarea class="form-control input-lg" name="mesg" placeholder="رسالتك لناء"></textarea>
              </div>
              <button type="submit" class=" btn btn-danger btn-lg btn-block" name="submit22">ارسال الرساله </button>
            </div>
          </form>
        </div>
        <!--end contuct form-->
      </div>
    </div>
  </section>



  <!--end section Countact us-->


  <!--end section Countact us-->

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
            <li><a href="index.php ">الصفحة الرئيسية</a></li>
            <li><a href="managmdocu.php "> طلب شهادة</a></li>
            <li><a href="stdserver.php "> طلب خدمة طلابية</a></li>
            <li><a>جامعة تعز </a></li>
            <li><a href="managmentdatacertifect/datamanag.html">وثيقتي </a></li>
            <li><a href="student_services_request/indecsearch.php">خدمتي</a></li>
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
          <img class="img-thumbnail" src="img/img-footer/5.jpg" alt="photo size ">
          <img class="img-thumbnail" src="img/img-footer/6.jpg" alt="photo size ">
          <img class="img-thumbnail" src="img/img-footer/7.jpg" alt="photo size ">
          <img class="img-thumbnail" src="img/img-footer/8.jpg" alt="photo size ">
          <img class="img-thumbnail" src="img/img-footer/9.jpg" alt="photo size ">
          <img class="img-thumbnail" src="img/img-footer/10.jpg" alt="photo size ">
          <img class="img-thumbnail" src="img/img-footer/11.jpg" alt="photo size ">
          <img class="img-thumbnail" src="img/img-footer/12.jpg" alt="photo size ">
        </div>
      </div>
    </div>
    <div class="copyright text-center">جامعة تعز &copy; 2022 <span>نيابة شؤون</span>.الطلاب </div>
  </section>
  <!-- end  section  footer-->



  <!--start section loading -->
  <!--عند فتح الموقع تظهر شاشه بلون الذي تريده قبل تحميل الموقع لظهور الموقع بشكل منتظم -->
  <section class=" loading-overlay">
    <!--سوف توضع فوق كل الصفحه-->
    <div class="sk-cube-grid">
      <div class="sk-cube sk-cube1"></div>
      <div class="sk-cube sk-cube2"></div>
      <div class="sk-cube sk-cube3"></div>
      <div class="sk-cube sk-cube4"></div>
      <div class="sk-cube sk-cube5"></div>
      <div class="sk-cube sk-cube6"></div>
      <div class="sk-cube sk-cube7"></div>
      <div class="sk-cube sk-cube8"></div>
      <div class="sk-cube sk-cube9"></div>
    </div>
  </section>
  <!--end section loading-->




  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/script.js"></script>
  <!--مكتبه خاصه بلانميشان -->
  <script src="js/WOW.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--مكتبه خاصه بلسكرول الذي على يمين الشاشه شىيط التمرير -->
  <script src="js/jquery.nicescroll.min.js"></script>

</body>

</html>