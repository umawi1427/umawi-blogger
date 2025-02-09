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
            <th class="justify">بلاد الشر مجمع كل سوء</th>
            <th class="center">1</th>
            <th class="justify">وشر الناس قد أضحوا ذويها</th>
        </tr>
        <tr>
            <th class="justify">وكم من منكرات قد سمعنا</th>
            <th class="center">2</th>
            <th class="justify">وإشراك برب الناس فيها</th>
        </tr>
        <tr>
            <th class="justify">ولي الأمر قد حلت عليه</th>
            <th class="center">3</th>
            <th class="justify">لعان الله إذ يزداد تيها</th>
        </tr>
        <tr>
            <th class="justify">فلا في الدين ذو خير وبر</th>
            <th class="center">4</th>
            <th class="justify">ولا في الكفر إذ أضحى سفيها</th>
        </tr>
        <tr>
            <th class="justify">سيأتي يومنا ونريك حقا</th>
            <th class="center">5</th>
            <th class="justify">سيوف الحق إنك تشتهيها</th>
        </tr>
        <tr>
            <th class="justify">بيوم أسود الغد قمطرير</th>
            <th class="center">6</th>
            <th class="justify">به يعلو كلام الله فيها</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="حنبل.php"><span>&#8678;</span>ذكرت اليوم شيخنا</a>
        <a class="active" href="تركيا.php">بلاد الشر مجمع كل سوء</a>
        <a href="شمس.php">نصره الله على الجهمية<span>&#8680;</span></a>
    </div>
</body>

</html>