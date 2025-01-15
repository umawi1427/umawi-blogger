<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpg" href="images/homepageIcon.png">
    <title>أبو الحكم الأموي</title>
</head>
<body>
<nav id="navbar">
    <a href="index.php"><img id="imgIcon" src="images/homepageIcon.png"></a>
    <div id="nav-links">
        <a href="poems.php" class="active">الأشعار</a>
        <a href="books.php">الرسائل</a>
        <?php if (isset($_SESSION['valid'])): ?>
            <a href="home.php">الملف الشخصي</a>
            <a href="php/logout.php">⏻</a>
        <?php else: ?>
            <a href="login.php">تسجيل الدخول</a>
            <a href="register.php">إنشاء حساب</a>
        <?php endif; ?>
    </div>
</nav>
    <table class="poem">        
        <tr>
            <th class="justify">ألا ليت شعري هل أبيتن ليلة</th>
            <th class="center">1</th>
            <th class="justify">بشام بها ذكر الصحابة قد سما</th>
        </tr>        
        <tr>
            <th class="justify">وفيها أناس بالمحبة أشربوا</th>
            <th class="center">2</th>
            <th class="justify">أمية حبا مثل ما شربوا الدما</th>
        </tr>        
        <tr>
            <th class="justify">على حين لهو هاجموا عقر دارهم</th>
            <th class="center">3</th>
            <th class="justify">وأردوهم صرعى فأهلا جهنما</th>
        </tr>        
        <tr>
            <th class="justify">لقد نبحوا هذي السنين كفاية</th>
            <th class="center">4</th>
            <th class="justify">فعدنا لنغزوهم أشد وأعظما</th>
        </tr>        
        <tr>
            <th class="justify">فإن كان جند الكفر للظلم ينتمي</th>
            <th class="center">5</th>
            <th class="justify">فقد كان أهل الحق أعتى وأظلما</th>
        </tr>        
        <tr>
            <th class="justify">إذا سمعوا التكبير عادوا أذلة</th>
            <th class="center">6</th>
            <th class="justify">من الرعب حتى لو أصم وأبكما</th>
        </tr>        
        <tr>
            <th class="justify">إذا سمعوا وقع الجنود تخطفوا</th>
            <th class="center">7</th>
            <th class="justify">وكانوا كمن أخذ الهوا فتسمما</th>
        </tr>        
        <tr>
            <th class="justify">إذا ما رأوا ذا لحية خنعوا له</th>
            <th class="center">8</th>
            <th class="justify">فإن لحا الأسلام قد خضبت دما</th>
        </tr>        
        <tr>
            <th class="justify">فجئنا لنذبح أهل كفر وشيعة</th>
            <th class="center">9</th>
            <th class="justify">وكل نصيري ومن قد تجهما</th>
        </tr>        
        <tr>
            <th class="justify">ولن يقفوا حتى نصلي سوية</th>
            <th class="center">10</th>
            <th class="justify">بدور دمشق إن إلهي أنعما</th>
        </tr>    
    </table>
    <div class="content">
        <div class="pagination" id="paginationLinks">
            <a href="sham.php" class="active">ألا ليت شعري هل أبيتن ليلة</a>
            <a href="الشام.php">أيا ويل أرض الشام ماذا أصابها<span>&#8680;</span></a></div></div>
</body>