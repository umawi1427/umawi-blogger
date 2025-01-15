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
    <h1 class="h">تشيع النسائي صاحب السنن</h1>
    <p class="p">قال ابن عساكر في تاريخ دمشق ج71 ص173: قال: وكان أبو عبد الرحمن يؤثر لباس البرود النوبية الخضر، ويقول: هذا عوض عن النظر إلى الخضرة من النبات فيما يراد لقوة البصر. وكان يكثر الجماع، مع صوم يوم وإفطار يوم، وكان له أربع زوجات يقسم لهن، ولا يخلو مع ذلك من جارية أو اثنتين، يشتري الواحدة بالمئة ونحوها، ويقسم لها كما يقسم للحرائر. وكان قوته في كل يوم رطل خبز جيد لا يأكل غيره، كان صائما أم مفطرا، وكان يكثر أكل الديوك الكبار، تشترى له وتسمّن ثم تذبح فيأكلها، ويذكر أنّ ذلك ينفعه في باب الجماع، وسمعت قوما ينكرون عليه كتاب الخصائص لعلي رضي الله عنه وتركه لتصنيف فضائل أبي بكر، وعمر، وعثمان، فلم يكن في ذلك الوقت صنّفها فحكيت له ما سمعت فقال: دخلنا إلى دمشق والمنحرف عن علي بها كثير، فصنف كتاب الخصائص رجاء أن يهديهم الله، ثم صنّف بعد ذلك فضائل أصحاب رسول الله صلى الله عليه وسلم وقرأها على الناس. وقيل له، وأنا حاضر: ألا تخرّج فضائل معاوية؟ فقال: أيّ شيء أخرج، اللهم لا تشبع بطنه
        <br><br>قال ابن عساكر في تاريخ دمشق ج71 ص175: خرج أبو عبد الرحمن من مصر في آخر عمره إلى دمشق، فسئل بها عن معاوية بن أبي سفيان وما روي من فضائله. فقال: معاوية لا يرضى رأسا برأس حتى يفضّل؟ فما زالوا يدفعون في حضنيه حتى أخرج من المسجد، ثم حمل إلى مكة وتوفي بها سنة ثلاث وثلاث مئة وهو مقتول
        <br><br>قال ابن عساكر ج1 ص176: قال الدارقطني: خرج حاجا فامتحن بدمشق، وأدرك الشهادة، فقال: احملوني إلى مكة، فحمل وتوفي بها، وهو مدفون بين الصفا والمروة، وكانت وفاته في شعبان سنة ثلاث وثلاثمائة.
        <br><br>قال الذهبي ج14 ص125: فيه قليل تشيع وانحراف عن خصوم الإمام علي، كمعاوية وعمرو.
        <br><br>قال ابن خلكان في وفيات الأعيان ج1 ص77: وكان يتشيع.
        <br><br>قال ابن تيمية في منهاج السنة: هَذَا مَعَ أَنَّ الْحَاكِمَ مَنْسُوبٌ إِلَى التَّشَيُّعِ، وَقَدْ طُلِبَ مِنْهُ أَنْ يَرْوِيَ حَدِيثًا فِي فَضْلِ مُعَاوِيَةَ، فَقَالَ: مَا يَجِيءُ مِنْ قَلْبِي مَا يَجِيءُ مِنْ قَلْبِي، وَقَدْ ضَرَبُوهُ عَلَى ذَلِكَ فَلَمْ يَفْعَلْ، وَهُوَ يَرْوِي فِي الْأَرْبَعِينَ أَحَادِيثَ ضَعِيفَةً، بَلْ مَوْضُوعَةً عِنْدَ أَئِمَّةِ الْحَدِيثِ، كَقَوْلِهِ بِقِتَالِ النَّاكِثِينَ، وَالْقَاسِطِينَ، وَالْمَارِقِينَ لَكِنَّ تَشَيُّعَهُ، وَتَشَيُّعَ أَمْثَالِهِ مِنْ أَهْلِ الْعِلْمِ بِالْحَدِيثِ كَالنَّسَائِيِّ، وَابْنِ عَبْدِ الْبَرِّ، وَأَمْثَالِهِمَا لَا يَبْلُغُ إِلَى تَفْضِيلِهِ عَلَى أَبِي بَكْرٍ وَعُمَرَ فَلَا يُعْرَفُ فِي عُلَمَاءِ الْحَدِيثِ مَنْ يُفَضِّلُهُ عَلَيْهِمَا بَلْ غَايَةُ الْمُتَشَيِّعِ مِنْهُمْ أَنْ يُفَضِّلَهُ عَلَى عُثْمَانَ.
        <br><br>قال النسائي في سننه ج5 ص253: أخبرنا أحمد بن عثمان بن حكيم الأودي قال حدثنا خالد بن مخلد قال حدثنا علي بن صالح عن ميسرة بن حبيب عن المنهال بن عمرو عن سعيد بن جبير قال كنت مع ابن عباس بعرفات فقال ما لي لا أسمع الناس يلبون، قلت يخافون من معاوية فخرج ابن عباس من فسطاطه فقال لبيك اللهم لبيك فإنهم قد تركوا السنة من بغض علي.
        <br><br>قال النسائي في سننه ج5 ص245: أَخْبَرَنَا ‌مُحَمَّدُ بْنُ مَنْصُورٍ، قَالَ: حَدَّثَنَا ‌الْحَسَنُ بْنُ مُوسَى، قَالَ: حَدَّثَنَا ‌حَمَّادُ بْنُ سَلَمَةَ، عَنْ ‌قَيْسِ بْنِ سَعْدٍ، عَنْ ‌عَطَاءٍ، عَنْ ‌مُعَاوِيَةَ قَالَ أَخَذْتُ مِنْ أَطْرَافِ شَعَرِ رَسُولِ اللهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ بِمِشْقَصٍ كَانَ مَعِي بَعْدَ مَا طَافَ بِالْبَيْتِ وَبِالصَّفَا وَالْمَرْوَةِ فِي أَيَّامِ الْعَشْر، قَالَ قَيْسٌ: وَالنَّاسُ يُنْكِرُونَ هَذَا عَلَى مُعَاوِيَةَ.
        <br><br>قال ابن العماد ج4 ص17: وقال ابن خلّكان قال محمد بن إسحاق الأصبهاني: سمعت مشايخنا بمصر يقولون: إن أبا عبد الرّحمن فارق مصر في آخر عمره، وخرج إلى دمشق، فسئل عن معاوية وما روي من فضائله، فقال: أما يرضى معاوية أن يخرج رأسا برأس، حتى يفضّل؟ وفي رواية أخرى ما أعرف له فضيلة إلا لا أشبع الله بطنك، وكان يتشيّع، فما زالوا يدافعونه في خصيتيه وداسوه، ثم حمل إلى مكّة فتوفي بها وهو مدفون بين الصّفا والمروة. وقال الحافظ أبو نعيم الأصبهاني: لما داسوه بدمشق مات بسبب ذلك الدّوس، فهو مقتول
        <br><br>قال سبط ابن الجوزي في مرآة الزمان ج16 ص430: واختلفوا في أي مكان تُوفِّي، فحكى الحاكم أبو عبد الله قال: حدثني محمد بن إسحاق الأصبهاني قال: سمعت مشايخنا بمصر يذكرون أن أبا عبد الرحمن فارق مصر في آخر عمره، وخرج إلى دمشق، فسُئِل عن معاوية وما روي في فضائله، فقال: أما يَرضى معاوية أن يخرج رأسًا برأس حتَّى يُفَضَّل؟! وفي رواية: ما أعرف له فضيلةً إلا لا أشبعَ اللهُ بطنه وكان يتشيَّع، فما زالوا يدفعون في خُصْيَيه حتَّى أخرجوه من المسجد وفي رواية: يدفعون في خصيه وداسوه، ثمَّ حُمِل إلى الرَّمْلَة فمات بها في هذه السنة. قال الحاكم وحدثني علي بن عمر الحافظ يعني الدارقطني قال لما امتُحِنَ النسائيُّ بدمشق قال احملُوني إلى مكَّة فحُمِل إليها فتوفِّي بها، وهو مدفونٌ بين الصفا والمروة وكانت وفاتُه في شعبان من هذه السنة، وقال أبو نعيم لَمَّا داسُوه بدمشق مات بسبب ذلك الدَّوْس، فهو مقتول.
        <br><br>قال العراقي في شرح التبصرة ج2 ص321: وهو ما حكى ابنُ مَنْده، عنْ مشايخهِ أنَّهُ سُئِلَ بدمشقَ عنْ مُعاويةَ، وما رُويَ منْ فضائِلِهِ، فقالَ ألا يرضى معاويةُ رأساً برأسٍ حتَّى يُفَضَّلَ، فما زالوا يرفسونَهُ في خصيَيْهِ حتَّى أُخْرِجَ منَ المسجدِ، ثمَّ حُمِلَ إلى مكةَ وماتَ بها وذكرَ الدارقطنيُّ أنَّ ذلكَ كانَ بالرَّمْلَةِ.
        <br><br>قال الحاكم في معرفة علوم الحديث ص83: فَحَدَّثَنِي مُحَمَّدُ بْنُ إِسْحَاقَ الْأَصْبَهَانِيُّ، قَالَ: سَمِعْتُ مَشَايِخَنَا بِمِصْرَ يَذْكُرُونَ أَنَّ أَبَا عَبْدِ الرَّحْمَنِ فَارَقَ مِصْرَ فِي آخِرِ عُمُرِهِ، وَخَرَجَ إِلَى دِمَشْقَ، فَسُئِلَ بِهَا عَنْ مُعَاوِيَةَ بْنِ أَبِي سُفْيَانَ، وَمَا رُوِيَ مِنْ فَضَائِلِهِ، فَقَالَ: لَا يَرْضَى مُعَاوِيَةُ رَأْسًا بِرَأْسٍ حَتَّى يَفْضُلَ، قَالَ: فَمَا زَالُوا يَدْفَعُونَ فِي حِضْنَيْهِ حَتَّى أُخْرِجَ مِنَ الْمَسْجِدِ، ثُمَّ حُمِلَ إِلَى الرَّمْلَةِ، وَمَاتَ بِهَا سَنَةَ ثَلَاثٍ وَثَلَاثِ مِائَةٍ
    </p>
</body>

</html>