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
    <table class="poem">
        <tr>
            <th class="justify">الأشعرية بالرحمن كفار</th>
            <th class="center">1</th>
            <th class="justify">ضلوا عن الحق فالعقبى لهم نار</th>
        </tr>
        <tr>
            <th class="justify">بإذن ربي وهذا في الحديث أتى</th>
            <th class="center">2</th>
            <th class="justify">قد قاله أحمد فيمن همُ جاروا</th>
        </tr>
        <tr>
            <th class="justify">سبعون طائفة ثم اثنتين همُ</th>
            <th class="center">3</th>
            <th class="justify">ضلوا عن الحق للنيران قد صاروا</th>
        </tr>
        <tr>
            <th class="justify">من بينهم شرهم والأشعرية هم</th>
            <th class="center">4</th>
            <th class="justify">لم يعبدوا الله كفار وفجار</th>
        </tr>
        <tr>
            <th class="justify">فلا تناكح نساءهمُ وإن كثروا</th>
            <th class="center">5</th>
            <th class="justify">ولا تضيفنَّهم يوما إذا زاروا</th>
        </tr>
        <tr>
            <th class="justify">ولا تصل عليهم إن همُ ماتوا</th>
            <th class="center">6</th>
            <th class="justify">ولا تعاشرهمُ لو منهمُ جار</th>
        </tr>
        <tr>
            <th class="justify">قذى بأعينهم والسقم مهلكهم</th>
            <th class="center">7</th>
            <th class="justify">عليهمُ لعنة الرحمن والعار</th>
        </tr>
        <tr>
            <th class="justify">قد كفَّروا المسلمين الحق لم يذروا</th>
            <th class="center">8</th>
            <th class="justify">من شرهم أحدا سُفْلٌ وأشرار</th>
        </tr>
        <tr>
            <th class="justify">كمثل طاعون عمواس قد انتشروا</th>
            <th class="center">9</th>
            <th class="justify">لم تخل منهم ولايات وأمصار</th>
        </tr>
        <tr>
            <th class="justify">قد عذبوا أهل دين الله إذ حكموا</th>
            <th class="center">10</th>
            <th class="justify">لم ينج من بطشهم بيت ولا دار</th>
        </tr>
        <tr>
            <th class="justify">لم يُثْبِتُوا من صفات الله أكثرها</th>
            <th class="center">11</th>
            <th class="justify">بل أثبتوا أنهم للكفر أنصار</th>
        </tr>
        <tr>
            <th class="justify">إن جئتهم بدليل أنكروا سفها</th>
            <th class="center">12</th>
            <th class="justify">قالوا الأئمة قالوا فيه إنكار</th>
        </tr>
        <tr>
            <th class="justify">لأنه لم يوافق عقل آرسطو</th>
            <th class="center">13</th>
            <th class="justify">يونانهم بئس ما قد قال ثرثار</th>
        </tr>
        <tr>
            <th class="justify">فالله أسأل أن ينهيهمُ أبدا</th>
            <th class="center">14</th>
            <th class="justify">لا يَبْقَ منهم على ذي الأرض ديار</th>
        </tr>
        <tr>
            <th class="justify">ثم الصلاة على خير الورى أبدا</th>
            <th class="center">15</th>
            <th class="justify">واغفر لنا يا إلهي أنت غفار</th>
        </tr>
    </table>
    <div class="pagination">
        <a href="بنو أمية.php"><span>&#8678;</span>بنو أمية هم من ناصروا الدين</a>
        <a class="active" href="الأشاعرة.php">الأشعرية بالرحمن كفار</a>
        <a href="نبذ الأشاعرة.php">لا تسمعن للأشعرية قولهم<span>&#8680;</span></a>
    </div>
</body>

</html>