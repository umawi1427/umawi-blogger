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
    <h1 class="h">أربعون دليلا من السنة والقران في وجوب تغطية الوجوه على النسوان</h1>
    <a class="downloadLink" href="downloads/أربعون دليلا من السنة والقرءان في وجوب تغطية الوجوه على النسوان.pdf" style="font-size: 30px">[اضغط هنا للتحميل]</a>
    <p class="p">1-قال الله، وَإِذَا سَأَلْتُمُوهُنَّ مَتَاعًا فَاسْأَلُوهُنَّ مِن وَرَاءِ حِجَابٍ</p>
    <p class="p">2-قال الله، يَا أَيُّهَا النَّبِيُّ قُل لِّأَزْوَاجِكَ وَبَنَاتِكَ وَنِسَاءِ الْمُؤْمِنِينَ يُدْنِينَ عَلَيْهِنَّ مِن جَلَابِيبِهِنَّ ذَٰلِكَ أَدْنَىٰ أَن يُعْرَفْنَ فَلَا يُؤْذَيْنَ وَكَانَ اللَّهُ غَفُورًا رَّحِيمًا</p>
    <p class="p">3-قال الله، وَلَا يُبْدِينَ زِينَتَهُنَّ إِلَّا مَا ظَهَرَ مِنْهَا وَلْيَضْرِبْنَ بِخُمُرِهِنَّ عَلَىٰ جُيُوبِهِنَّ</p>
    <p class="p">4-عَنْ أَنَسٍ، قَالَ: رَأَى عُمَرُ جَارِيَةً مُتَقَنِّعَةً، فَضَرَبَهَا وَقَالَ لَا تَشَبَّهِينَ بِالْحَرَائِرِ (مصنف ابن أبي شيبة)</p>
    <p class="p">5-عن أم سلمة قالت سئل رسول الله كم تجر المرأة من ذيلها قال: شبراً. قالت إذاً ينكشف عنها، قال، ذراع لا تزيد عليه (المجتبى للنسائي)</p>
    <p class="p">6-عن عبد اللَّهِ بن مسعود، الْمَرْأَةُ عَوْرَةٌ وَأَقْرَبُ مَا تَكُونُ مِنْ رَبِّهَا، إِذَا كَانَتْ فِي قَعْرِ بَيْتِهَا، فَإِذَا خَرَجَتِ اسْتَشْرَفَهَا الشَّيْطَانُ (مصنف ابن أبي شيبة)</p>
    <p class="p">7-عن عائشة فَبيْنَا أنَا جَالِسَةٌ في مَنْزِلِي غَلَبَتْنِي عَيْنِي فَنِمْتُ، وكانَ صَفْوَانُ بنُ المُعَطَّلِ السُّلَمِيُّ ثُمَّ الذَّكْوَانِيُّ مِن ورَاءِ الجَيْشِ، فأدْلَجَ فأصْبَحَ عِنْدَ مَنْزِلِي، فَرَأَى سَوَادَ إنْسَانٍ نَائِمٍ، فأتَانِي فَعَرَفَنِي حِينَ رَآنِي، وكانَ رَآنِي قَبْلَ الحِجَابِ، فَاسْتَيْقَظْتُ باسْتِرْجَاعِهِ حِينَ عَرَفَنِي فَخَمَّرْتُ وجْهِي بجِلْبَابِي (صحيح البخاري)</p>
    <p class="p">8-عن عائشة قالت يرحم الله نساء المهاجرات الأول لما أنزل الله، وليضربن بخمرهن علي جيوبهن، شققن مروطهن فاختمرن بها (صحيح البخاري)</p>
    <p class="p">9-عَنْ أَسْمَاءَ بنت أبي بكر قَالَتُ كُنَّا نُغَطِّي وُجُوهَنَا مِنَ الرِّجَالِ، وَكُنَّا نَمْتَشِطُ قَبْلَ ذَلِكَ (صحيح ابن خزيمة)</p>
    <p class="p">10-عن عمرو بن العاص قال بينما نحن مع رسول الله في هذا الشعب إذ قال انظروا هل ترون شيئاً فقلنا نرى غرباناً فيها غراب أعصم أحمر المنقار والرجلين فقال رسول الله لا يدخل الجنة من النساء إلا من كان منهن مثل هذا الغراب في الغربان (مسند أحمد)</p>
    <p class="p">11-عن عائشة أنها قالت إن كان رسول الله ليصلي الصبح فينصرف النساء متلفعات بمروطهن ما يعرفن من الغلس (موطأ مالك)</p>
    <p class="p">12-عن ‌صفية ‌بنت ‌أبي ‌عبيد: خرجت امرأة مختمرة متجلببة فقال عمر من هذه المرأة، فقيل له هذه جارية لفلان رجل من بنيه فأرسل إلى حفصة فقال من حملك على أن تخمري هذه الأمة وتجلببيها وتشبهيها بالمحصنات حتى هممت أن أقع بها لا أحسبها إلا من المحصنات، لا تشبهوا الإماء بالمحصنات (السنن الكبرى للبيهقي)</p>
    <p class="p">13-عن ابن عباس؛ قوله، يا أيها النبي قل لأزواجك وبناتك ونساء المؤمنين يُدْنِينَ عَلَيْهِنَّ مِن جَلَابِيبِهِنَّ، أمر الله نساء المؤمنين، إذا خرجن من بيوتهن في حاجة، أن يغطين وجوههن، من فوق رؤوسهن بالجلابيب، ويبدين عينا واحدة (تفسير الطبري)</p>
    <p class="p">14-عن ابن مسعود قال وَلَا يُبْدِينَ زِينَتَهُنَّ إِلَّا مَا ظَهَرَ مِنْهَا، قال: الثياب (تفسير الطبري)</p>
    <p class="p">15-عن فاطمة بنت المنذر أنها قالت كنا نخمر وجوهنا ونحن محرمات مع أسماء بنت أبي بكر الصديق (موطأ مالك)</p>
    <p class="p">16-عن عقبة بْنِ عَامِرٍ أَنَّ رَسُولَ اللهِ قَال، إِيَّاكُمْ وَالدُّخُولَ عَلَى النِّسَاءِ، فَقَالَ رَجُلٌ مِنَ الْأَنْصَارِ يَا رَسُولَ اللهِ أَفَرَأَيْتَ الْحَمْوَ قَالَ: الْحَمْوُ الْمَوْت (صحيح البخاري)</p>
    <p class="p">17-عن ابن عباس قال: تدني الجلباب إلى وجهها ولا تضرب به، قال روح في حديثه: قلت: وما لا تضرب به، فأشار لي، كما تجلبب المرأة، ثم أشار لي ما على خدها من الجلباب، قال: تعطفه وتضرب به على وجهها كما هو مسدول على وجهها (سنن أبي داود)</p>
    <p class="p">18-عن عبيدة في قوله، يَا أَيُّهَا النَّبِيُّ قُل لِّأَزْوَاجِكَ وَبَنَاتِكَ وَنِسَاء الْمُؤْمِنِينَ يُدْنِينَ عَلَيْهِنَّ مِن جَلَابِيبِهِنَّ، فلبسها عندنا ابن عون، قال: ولبسها عندنا محمد، قال محمد: ولبسها عندي عبيدة. قال ابن عون: بردائه، فتقنع، فغطى أنفه وعينه اليسرى، وأخرج عينه اليمنى، وأدنى رداءه من فوق حتى جعله قريبا من حاجبه، أو على الحاجب (تفسير الطبري)</p>
    <p class="p">19-عن ابن سيرين قال سألت عبيدة عن قوله (يدنين عليهن من جلابيبهن) الآية؛ قال، فقال بثوبه، فغطى رأسه ووجهه وأبرز ثوبه عن إحدى عينيه (تفسير الطبري)</p>
    <p class="p">20-عن أم سلمة زوج النبي قالت: لما نزلت هذه الآية (يدنين عليهن من جلابيبهن) خرج نساء الأنصار كأن على رؤوسهن الغربان من السكينة (سنن أبي داود)</p>
    <p class="p">21-‏عَنْ ‏ ‏عَائِشَةَ‏ ‏قَالَتْ ‏ ‏خَرَجَتْ ‏ ‏سَوْدَةُ ‏ ‏بَعْدَمَا ضُرِبَ الْحِجَابُ لِحَاجَتِهَا وَكَانَتْ امْرَأَةً جَسِيمَةً لَا تَخْفَى عَلَى مَنْ يَعْرِفُهَا فَرَآهَا ‏ ‏عُمَرُ بْنُ الْخَطَّابِ ‏ ‏فَقَالَ يَا ‏ ‏سَوْدَةُ ‏ ‏أَمَا وَاللَّهِ مَا تَخْفَيْنَ عَلَيْنَا فَانْظُرِي كَيْفَ تَخْرُجِينَ قَالَتْ فَانْكَفَأَتْ رَاجِعَةً وَرَسُولُ اللَّهِ ‏فِي بَيْتِي وَإِنَّهُ لَيَتَعَشَّى وَفِي يَدِهِ عَرْقٌ فَدَخَلَتْ فَقَالَتْ يَا رَسُولَ اللَّهِ إِنِّي خَرَجْتُ لِبَعْضِ حَاجَتِي فَقَالَ لِي ‏ ‏عُمَرُ ‏ ‏كَذَا وَكَذَا قَالَتْ فَأَوْحَى اللَّهُ إِلَيْهِ ثُمَّ رُفِعَ عَنْهُ وَإِنَّ الْعَرْقَ فِي يَدِهِ مَا وَضَعَهُ فَقَالَ ‏ ‏إِنَّهُ قَدْ أُذِنَ لَكُنَّ أَنْ تَخْرُجْنَ لِحَاجَتِكُنَّ (صحيح البخاري)</p>
    <p class="p">22-‏عَنْ ‏ ‏أُمِّ عَطِيَّةَ ‏ ‏قَالَتْ أَمَرَنَا رَسُولُ اللَّهِ ‏‏أَنْ نُخْرِجَهُنَّ فِي الْفِطْرِ وَالْأَضْحَى ‏الْعَوَاتِقَ ‏ ‏وَالْحُيَّضَ وَذَوَاتِ ‏ ‏الْخُدُورِ ‏ ‏فَأَمَّا الْحُيَّضُ فَيَعْتَزِلْنَ الصَّلَاةَ وَيَشْهَدْنَ الْخَيْرَ وَدَعْوَةَ الْمُسْلِمِينَ قُلْتُ يَا رَسُولَ اللَّهِ إِحْدَانَا لَا يَكُونُ لَهَا جِلْبَابٌ قَالَ ‏ ‏لِتُلْبِسْهَا أُخْتُهَا مِنْ جِلْبَابِهَا (صحيح مسلم)</p>
    <p class="p">23-‏عَنْ ‏عَائِشَةَ؛ ‏رَأَيْتُ النَّبِيَّ ‏يَسْتُرُنِي بِرِدَائِهِ وَأَنَا أَنْظُرُ إِلَى‏ ‏الْحَبَشَةِ ‏‏يَلْعَبُونَ فِي الْمَسْجِدِ حَتَّى أَكُونَ أَنَا الَّتِي أَسْأَمُ‏ ‏فَاقْدُرُوا قَدْرَ‏ ‏الْجَارِيَةِ‏ ‏الْحَدِيثَةِ السِّنِّ الْحَرِيصَةِ عَلَى اللَّهْوِ‏ (البخاري)</p>
    <p class="p">24-عَنْ‏ ‏أَنَسٍ قَالَ ‏أَقَامَ النَّبِيُّ ‏بَيْنَ ‏ ‏خَيْبَرَ ‏ ‏وَالْمَدِينَةِ ‏ ‏ثَلَاثًا ‏ ‏يُبْنَى عَلَيْهِ‏ ‏بِصَفِيَّةَ بِنْتِ حُيَيٍّ ‏ ‏فَدَعَوْتُ الْمُسْلِمِينَ إِلَى ‏ ‏وَلِيمَتِهِ ‏ ‏فَمَا كَانَ فِيهَا مِنْ خُبْزٍ وَلَا لَحْمٍ أُمِرَ‏ ‏بِالْأَنْطَاعِ ‏ ‏فَأَلْقَى فِيهَا مِنْ التَّمْرِ ‏وَالْأَقِطِ‏ ‏وَالسَّمْنِ فَكَانَتْ ‏وَلِيمَتَهُ ‏فَقَالَ الْمُسْلِمُونَ إِحْدَى أُمَّهَاتِ الْمُؤْمِنِينَ أَوْ مِمَّا مَلَكَتْ يَمِينُهُ فَقَالُوا إِنْ حَجَبَهَا فَهِيَ مِنْ أُمَّهَاتِ الْمُؤْمِنِينَ وَإِنْ لَمْ يَحْجُبْهَا فَهِيَ مِمَّا مَلَكَتْ يَمِينُهُ فَلَمَّا ارْتَحَلَ وَطَّى لَهَا خَلْفَهُ وَمَدَّ الْحِجَابَ بَيْنَهَا وَبَيْنَ النَّاسِ ‏(صحيح البخاري)</p>
    <p class="p">25-عن عائشة في قول الله: ولا يبدين زينتهن إلا ما ظهر منها، قالت: القلب والفتخة (غريب الحديث للقاسم بن سلام) </p>
    <p class="p">26-عن عبيدة السلماني، ولا يبدين زينتهن إلا ما ظهر منها؛ قال الثياب (فوائد يحيى بن معين رواية أبي بكر المروزي)</p>
    <p class="p">27-عن جابر بن عبد الله قال سمعت رسول الله يقول، إذا خطَبَ أحدُكُم المرأة، فَقَدِرَ أَن يرى منها بعض ما يَدْعُوهُ إليها، فليَفعَل (مسند أحمد)</p>
    <p class="p">28-عن ابن عباس ولا يبدين زينتهن قال: الكف ورقعة الوجه (مصنف ابن أبي شيبة)</p>
    <p class="p">29-عن عامر بن شراحيل الشعبي، أنه سأل فاطمة بنت قيس، أخت الضحاك بن قيس. وكانت من المهاجرات الأول. فقال: حدثيني حديثا سمعتيه من رسول الله. لا تسنديه إلى أحد غيره. فقالت: لئن شئت لأفعلن. فقال لها: أجل. حدثيني. فقالت: نكحت ابن المغيرة. وهو من خيار شباب قريش يومئذ. فأصيب في أول الجهاد مع رسول الله. فلما تأيمت خطبني عبد الرحمن بن عوف، في نفر من أصحاب رسول الله. وخطبني رسول الله على مولاه أسامة بن زيد. وكنت قد حدثت؛ أن رسول الله قال "من أحبني فليحب أسامة، فلما كلمني رسول الله قلت: أمري بيدك. فأنكحني من شئت. فقال انتقلي إلى أم شريك، وأم شريك امرأة غنية، من الأنصار. عظيمة النفقة في سبيل الله. ينزل عليها الضيفان. فقلت: سأفعل. فقال لا تفعلي. إن أم شريك امرأة كثيرة الضيفان. فإني أكره أن يسقط عنك خمارك، أو ينكشف الثوب عن ساقيك، فيرى القوم منك بعض ما تكرهين. ولكن انتقلي إلى ابن عمك، عبدالله بن عمرو بن أم مكتوم، وهو رجل من بني فهر، فهر قريش وهو من البطن الذي هي منه، فانتقلت إليه (صحيح مسلم)</p>
    <p class="p">30-‏عَنْ ‏أَبِي هُرَيْرَةَ ‏قَالَ‏ ‏كُنْتُ عِنْدَ النَّبِيِّ ‏فَأَتَاهُ رَجُلٌ فَأَخْبَرَهُ أَنَّهُ تَزَوَّجَ امْرَأَةً مِنْ ‏ ‏الْأَنْصَارِ ‏فَقَالَ لَهُ ‏أَنَظَرْتَ إِلَيْهَا قَالَ لَا قَالَ فَاذْهَبْ فَانْظُرْ إِلَيْهَا فَإِنَّ فِي أَعْيُنِ ‏الْأَنْصَارِ ‏شَيْئًا ‏(مسلم)</p>
    <p class="p">31-عَن‏ ‏أَبِي حُمَيْدٍ ‏قَالَ ‏ ‏قَالَ رَسُولُ اللَّهِ‏‏: ‏ ‏إِذَا خَطَبَ أَحَدُكُمْ امْرَأَةً فَلَا جُنَاحَ عَلَيْهِ أَنْ يَنْظُرَ إِلَيْهَا إِذَا كَانَ إِنَّمَا يَنْظُرُ إِلَيْهَا لِخِطْبَتِهِ وَإِنْ كَانَتْ لَا تَعْلَمُ ‏(صحيح مسلم)</p>
    <p class="p">32-‏عَنْ ‏الْمُغِيرَةِ بْنِ شُعْبَةَ ‏ ‏أَنَّهُ خَطَبَ امْرَأَةً فَقَالَ النَّبِيُّ‏‏: ‏ ‏انْظُرْ إِلَيْهَا فَإِنَّهُ ‏ ‏أَحْرَى ‏ ‏أَنْ يُؤْدَمَ ‏ ‏بَيْنَكُمَا (سنن الترمذي)</p>
    <p class="p">33-عَنِ ابْنِ عَبَّاسٍ، فَلَيْسَ عَلَيْهِنَّ جُنَاحٌ أَنْ يَضَعْنَ ثِيَابَهُنَّ، هِيَ الْمَرْأَةُ لَا جُنَاحَ عَلَيْهَا أَنْ تَجْلِسَ فِي بَيْتِهَا بِدِرْعٍ وَخِمَارٍ وَتَضَعَ عَنْهَا الْجِلْبَابَ مَا لَمْ تَتَبَرَّجْ لِمَا يَكْرَهُ اللَّهُ (تفسير ابن أبي حاتم)</p>
    <p class="p">34-عَنِ ابْنِ عَبَّاسٍ ﴿وَلَا يُبْدِينَ زِينَتَهُنَّ إِلَّا لِبُعُولَتِهِنَّ﴾ قَالَ: لَا تُبْدِي خَلَاخِلَهَا وَمِعْضَدَاتِهَا وَنَحْرَهَا وَشَعْرَهَا إِلَّا لِزَوْجِهَا، قَوْلُهُ (أَوْ آبَائِهِنَّ) إِلَى قَوْلِهِ (أَوْ آبَاءِ بُعُولَتِهِنَّ)، وبِهِ عَنِ ابْنِ عَبَّاسٍ، (وَلَا يُبْدِينَ زِينَتَهُنَّ إِلَّا لِبُعُولَتِهِنَّ أَوْ آبَائِهِنَّ أَوْ آبَاءِ بُعُولَتِهِنَّ) إِلَى (أَوْ مَا مَلَكَتْ أَيْمَانُهُنَّ) فَالزِّينَةُ الَّتِي تُبْدِيهَا لِهَؤُلَاءِ مِنَ النَّاسِ مِنْ قُرْطِهَا وَقِلَادَتِهَا وَسِوَارَيْهَا، فَأَمَّا خَلَاخِلُهَا وَمِعْضَدَتُهَا وَنَحْرُهَا وَشَعْرُهَا فَإِنَّهَا لَا تُبْدِيهِ إِلَّا لِزَوْجِهَا (تفسير ابن أبي حاتم)</p>
    <p class="p">35-عَنْ عَبْدِ اللَّهِ بن مسعود قَالَ: الزِّينَةُ زِينَتَانِ زِينَةٌ بَاطِنَةٌ لَا يَرَاهَا إِلَّا الزَّوْجُ: الْخَاتَمُ وَالسِّوَارُ، وَالظَّاهِرَةُ: الثِّيَابُ (تفسير ابن أبي حاتم)</p>
    <p class="p">36-عَنْ عَبْدِ اللَّهِ بْنِ مَسْعُودٍ فِي هَذِهِ الْآيَةِ؛ فَلَا يَضَعْنَ مِنْ ثِيَابِهِنَّ، قَالَ: جَلَابِيبَهُنَّ (تفسير ابن أبي حاتم)</p>
    <p class="p">37-عَنِ ابْنِ عَبَّاسٍ أَنَّهُ كَانَ يَقْرَأُ أَنْ يَضَعْنَ مِنْ ثِيَابِهِنّ، قَالَ: الْجِلْبَابُ (السنن الكبرى للبيهقي)</p>
    <p class="p">38- عن صَفِيَّةَ بِنْتَ حُيَيّ‏ أَنَّهَا جَاءَتْ رَسُولَ اللَّهِ تَزُورُهُ وَهُوَ مُعْتَكِفٌ فِي الْمَسْجِدِ فِي الْعَشْرِ الْغَوَابِرِ مِنْ رَمَضَانَ فَتَحَدَّثَتْ عِنْدَهُ سَاعَةً مِنْ الْعِشَاءِ ثُمَّ قَامَتْ تَنْقَلِبُ فَقَامَ مَعَهَا النَّبِيُّ يَقْلِبُهَا حَتَّى إِذَا بَلَغَتْ بَابَ الْمَسْجِدِ الَّذِي عِنْدَ مَسْكَنِ أُمِّ سَلَمَةَ زَوْجِ النَّبِيِّ مَرَّ بِهِمَا رَجُلَانِ مِنْ الْأَنْصَارِ فَسَلَّمَا عَلَى رَسُولِ اللَّهِ ثُمَّ نَفَذَا فَقَالَ لَهُمَا رَسُولُ اللَّهِ عَلَى رِسْلِكُمَا إِنَّمَا هِيَ صَفِيَّةُ بِنْتُ حُيٍّ قَالَا سُبْحَانَ اللَّهِ يَا رَسُولَ اللَّهِ وَكَبُرَ عَلَيْهِمَا مَا قَالَ إِنَّ الشَّيْطَانَ يَجْرِي مِنْ ابْنِ آدَمَ مَبْلَغَ الدَّمِ وَإِنِّي خَشِيتُ أَنْ يَقْذِفَ فِي قُلُوبِكُمَا‏ (صحيح البخاري)</p>
    <p class="p">39- حَدَّثَنَا مُحَمَّدُ بْنُ يُوسُفَ حَدَّثَنَا سُفْيَانُ عَنْ مَنْصُورٍ عَنْ أَبِي وَائِلٍ عَنْ عَبْدِ اللَّهِ بْنِ مَسْعُودٍ، قَالَ النَّبِيُّ لَا تُبَاشِرُ الْمَرْأَةُ؛ الْمَرْأَةَ فَتَنْعَتَهَا لِزَوْجِهَا كَأَنَّهُ يَنْظُرُ إِلَيْهَا‏ (صحيح البخاري)</p>
    <p class="p">40- عَنْ عَاصِمٍ، كُنَّا نَدْخُلُ عَلَى حَفْصَةَ بِنْتِ سِيرِينَ وَقَدْ جَعَلَتِ الْجِلْبَابَ هَكَذَا وَتَنَقَّبَتْ بِهِ فَنَقُولُ لَهَا رَحِمَكِ اللهُ قَالَ اللهُ تَعَالَى، والْقَوَاعِدُ مِنَ النِّسَاءِ اللَّاتِي لَا يَرْجُونَ نِكَاحًا فَلَيْسَ عَلَيْهِنَّ جُنَاحٌ أَنْ يَضَعْنَ ثِيَابَهُنَّ غَيْرَ مُتَبَرِّجَاتٍ بِزِينَةٍ، قَالَ فَتَقُولُ لَنَا أِيُّ شَيْءٍ بَعْدَ ذَلِكَ فَنَقُولُ، وَأَنْ يَسْتَعْفِفْنَ خَيْرٌ لَهُنَّ، فَتَقُول هُوَ إِثْبَاتُ الْجِلْبَابِ (السنن الكبرى للبيهقي)</p>
</body>

</html>