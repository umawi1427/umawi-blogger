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
            <a href="poems.php" class="active">الأشعار</a>
            <a href="books.php">الرسائل</a>
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
    <table class="poem" style="height: 120px;">
        <tr>
            <th class="justify">ولسنا نوالي في سوى الله ربنا</th>
            <th class="center">1</th>
            <th class="justify">ولسنا نعادي في سواه البشائر</th>
        </tr>
        <tr>
            <th class="justify">ومن قد رأيناه يوالي بغيره</th>
            <th class="center">2</th>
            <th class="justify">فقد صار مرتدا سفيها وكافرا</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="وليد.php"><span>&#8678;</span>وليد الخبث من شر البرايا</a>
        <a class="active" href="ولاء.php">ولسنا نوالي في سوى الله ربنا</a>
        <a href="حنبل.php">ذكرت اليوم شيخنا كان حقا<span>&#8680;</span></a>
    </div>
</body>

</html>