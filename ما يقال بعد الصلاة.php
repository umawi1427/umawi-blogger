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
    <h1 class="h">الأذكار التي وردت عن النبي مما يقال بعد الصلاة</h1>
    <a class="downloadLink" href="downloads/ما يقال بعد الصلاة.pdf" style="font-size: 30px">[اضغط هنا للتحميل]</a>

    <p class="p">1-عن ثوبان أنَ رَسولُ اللهِ إذَا انْصَرَفَ مِن صَلَاتِهِ اسْتَغْفَرَ ثَلَاثًا وَقالَ: اللَّهُمَّ أَنْتَ السَّلَامُ وَمِنْكَ السَّلَامُ تَبَارَكْتَ ذَا الجَلَالِ وَالإِكْرَامِ (صحيح مسلم)</p>
    <p class="p">2-عن عقبة بن عامر قال أمرني رسول الله أن أقرأ المعوذتين في دبر كل صلاة (سنن الترمذي)</p>
    <p class="p">3-عن البراء بن عازب قال كُنَّا إذَا صَلَّيْنَا خَلْفَ رَسولِ اللهِ أَحْبَبْنَا أَنْ نَكُونَ عن يَمِينِهِ يُقْبِلُ عَلَيْنَا بوَجْهِهِ قالَ: فَسَمِعْتُهُ يقولُ: رَبِّ قِنِي عَذَابَكَ يَومَ تَبْعَثُ أَوْ تَجْمَعُ عِبَادَكَ (صحيح مسلم)</p>
    <p class="p">4-عن كعب بن عجرة قال رسول الله مُعَقِّباتٌ لا يَخِيبُ قائِلُهُنَّ أوْ فاعِلُهُنَّ دُبُرَ كُلِّ صَلاةٍ مَكْتُوبَةٍ: ثَلاثٌ وثَلاثُونَ تَسْبِيحَةً وثَلاثٌ وثَلاثُونَ تَحْمِيدَةً وأَرْبَعٌ وثَلاثُونَ تَكْبِيرَةً (صحيح مسلم)</p>
    <p class="p">5-كانَ ابنُ الزُّبَيْرِ يقولُ: في دُبُرِ كُلِّ صَلَاةٍ حِينَ يُسَلِّمُ لا إلَهَ إلَّا اللَّهُ وَحْدَهُ لا شَرِيكَ له، له المُلْكُ وَلَهُ الحَمْدُ وَهو علَى كُلِّ شيءٍ قَدِيرٌ لا حَوْلَ وَلَا قُوَّةَ إلَّا باللَّهِ لا إلَهَ إلَّا اللَّهُ وَلَا نَعْبُدُ إلَّا إيَّاهُ له النِّعْمَةُ وَلَهُ الفَضْلُ وَلَهُ الثَّنَاءُ الحَسَنُ لا إلَهَ إلَّا اللَّهُ مُخْلِصِينَ له الدِّينَ ولو كَرِهَ الكَافِرُونَ وَقالَ: كانَ رَسولُ اللهِ يُهَلِّلُ بهِنَّ دُبُرَ كُلِّ صَلَاةٍ (صحيح مسلم)</p>
    <p class="p">6-عن المُغِيرَةُ بنُ شُعْبَة: أنَّ رَسولَ اللهِ كَانَ إذَا فَرَغَ مِنَ الصَّلَاةِ وَسَلَّمَ قالَ: لا إلَهَ إلَّا اللَّهُ وَحْدَهُ لا شَرِيكَ له، له المُلْكُ وَلَهُ الحَمْدُ وَهو علَى كُلِّ شيءٍ قَدِيرٌ اللَّهُمَّ لا مَانِعَ لِما أَعْطَيْتَ وَلَا مُعْطِيَ لِما مَنَعْتَ وَلَا يَنْفَعُ ذَا الجَدِّ مِنْكَ الجَدُّ (صحيح مسلم)</p>
</body>

</html>