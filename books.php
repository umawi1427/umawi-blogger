<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أبو الحكم الأموي</title>
    <link rel="icon" type="image/jpg" href="images/homepageIcon.png">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav id="navbar">
        <a href="index.php"><img id="imgIcon" src="images/homepageIcon.png"></a>
        <div id="nav-links">
            <a href="poems.php">الأشعار</a>
            <a href="books.php" class="active">الرسائل</a>
            <?php
            if (isset($_SESSION['valid'])) {
                echo '<a href="home.php">الملف الشخصي</a>
                <a href="php/logout.php">⏻</a>';
            } else {
                echo '<a href="login.php">تسجيل الدخول</a>
                <a href="register.php">إنشاء حساب</a>';
            }
            ?>
        </div>
    </nav>

    <ul id="downloads">
        <li class="list"><a class="downloadLink" href="الأرض.php" title="خلق الأرض">خلق الأرض من القرءان والسنة وأقوال السلف</a></li>
        <li class="list"><a class="downloadLink" href="ما يقال بعد الصلاة.php" title="دعاء بعد الصلاة">الأذكار التي وردت عن النبي مما يقال بعد الصلاة</a></li>
        <li class="list"><a class="downloadLink" href="ملوك بني أمية.php" title="خلفاء بني أمية">خلفاء بني أمَيَّة</a></li>
        <li class="list"><a class="downloadLink" href="تغطية الوجه.php" title="تغطية الوجه">أربعون دليلا من السنة والقرءان في وجوب تغطية الوجوه على النسوان</a></li>
        <li class="list"><a class="downloadLink" href="أسماء الله.php" title="أسماء الله">أسماء الله الحسنى</a></li>
        <li class="list"><a class="downloadLink" href="قصص الأنبياء.php" title="قصص الأنبياء">قصص الأنبياء من القرءان والسنة وأقوال السلف</a></li>
        <li class="list"><a class="downloadLink" href="جزيرة العرب.php" title="جزيرة العرب">جزيرة العرب</a></li>
        <li class="list"><a class="downloadLink" href="تكفير من لا يعمل بأركان الإسلام.php" title="تكفير من لا يعمل بأركان الإسلام">تكفير من لا يعمل بأركان الإسلام</a></li>
        <li class="list"><a class="downloadLink" href="ضعف حديث الخلافة ثلاثون سنة.php" title="ضعف حديث الخلافة ثلاثون سنة">ضعف حديث (الخلافة ثلاثون سنة)</a></li>
        <li class="list"><a class="downloadLink" href="القول الثابت.php" title="تكفير أبي حنيفة">القول الثابت في تكفير النعمان بن ثابت</a></li>
        <li class="list"><a class="downloadLink" href="أموية أيوب.php" title="الأيوبيون">نسب بني أيوب</a></li>
        <li class="list"><a class="downloadLink" href="الأكراد.php" title="الكرد">أصل الكرد</a></li>
        <li class="list"><a class="downloadLink" href="خلوعرش.php" title="خلو العرش">خلو العرش عند نزول الله</a></li>
        <li class="list"><a class="downloadLink" href="نسائي.php" title="تشيع النسائي">تشيع النسائي صاحب السنن</a></li>
    </ul>
</body>

</html>