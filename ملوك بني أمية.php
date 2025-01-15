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

    <h1 class="h">خلفاء بني أمَيَّة</h1>
    <a class="downloadLink" href="downloads/ملوك بني أمية.pdf" style="font-size: 30px">[اضغط هنا للتحميل]</a>
    <p class="p">1-عثمان بن عفان: عثمان بن عفان بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد عام 47 قبل الهجرة، وهو من السابقين في الإسلام، وتزوج ابْنَتَيِ النبي رقية وأم كلثوم، وبَشَّرَه النبي بالجنة، وَلِيَ الخلافة عمر 12 سنة، وقُتِلَ في داره بعد الحصار عام 35</p>
    <p class="p">2-معاوية بن أبي سفيان: معاوية بن صخر بن حرب بن أمية بن عبد شمس بن عبد مناف، ولد عام 20 قبل الهجرة وأسلم يوم الفتح وقيل يوم القضية، كان من أصحاب النبي وكان من كتاب الوحي منذ أسلم، كان طويلا أبيض جميلا يصفر لحيته كأنها الذهب، قال فيه رسول الله اللهم علم معاوية الكتاب والحساب وقه العذاب (مسند أحمد)، وقال: اللهم اجعله هاديا مهديا واهده واهد به (سنن الترمذي)، كان أول من غزا القسطنطينية وقد قال رسول الله: أول جيش يغزو القسطنطينية مغفور لهم (صحيح البخاري)، فتح قبرص وقيسارية، ولَّاه عمر على بعض الشام وولَّاه عثمان على جميع أمورها، قاتل عليا في صفين لأنه لم يدفع إليه قتلة عثمان وهو وليه، تولى الخلافة بعدما قتل ابن ملجم عليا وصالح الحسن سنة 41 وهو عام الجماعة، كان أول من اتخذ الحرس وديوان الخاتم وختم الكتب، خرج عليه الخوارج فقتلهم أهل الكوفة، أخذ حمران بن أبان البصرة فأرسل معاوية ليقتله فطلب العفو فعفا عنه، أوصى بالملك بعده لابنه يزيد، تُوُفِّيَ بعدما ملك 20 سنة؛ سنة 60 في رجب. وقد جاوز الثمانين</p>
    <p class="p">3-يزيد بن معاوية: يزيد بن معاوية بن صخر بن حرب بن أمية بن عبد شمس بن عبد مناف، ولد سنة 5 أو 6 أو 7 و20، مَلَك بعد أبيه سنة 60، كان أمير أول جيش غزا القسطنطينية وقال رسول اللّه أول جيش يغزو القسطنطينية مغفور له (صحيح البخاري)، لما قتل عبيد الله بن زياد الحسين بن علي في كربلاء وقد حذره الصحابة من الخروج، نقض بعض أهل المدينة بيعة يزيد، فأرسل إليهم ليبايعوه وقيل أنه قتل بعض من لم يبايع مرة أخرى، تُوُفِّيَ عام 64</p>
    <p class="p">4-معاوية بن يزيد: معاوية بن يزيد بن معاوية بن صخر بن حرب بن أمية بن عبد شمس بن عبد مناف، ولد عام 40، مَلَك بعد أبيه يزيد ولم تطل مدته، كان عابدا ناسكا وكان مريضا في ملكه، لم يوص لأحد بعده، تُوُفِّيَ عام 64، أخذ عبد الله بن الزبير الحجازَ بعد وفاته ومروان بن الحكم الشامَ والأزراقة الخوارج العراقَ وسلم بن زياد خراسانَ</p>
    <p class="p">5-مروان بن الحكم: مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد عام 2، روى حديث صلح الحديبية عن النبي، كان كاتبا لعثمان بن عفان، وَلِيَ الملك بعد يزيد سنة أربع وستين للهجرة على الشام وملك عشرة أشهر، هدم ابن الزبير الكعبة لميل جدرانها وأدخل فيها الحجر، أمر ابن الزبير بإجلاء بني أمية من المدينة فطلب منه مروان الأمان ولَقِيَ عبيد الله بن زياد وهو ذاهب إلى الشام وكان أهل الشام قد بايعوا الضحاك بن قيس فقتله مروان في مرج راهط وأخذ الشام، خرج سليمان بن صرد مع أصحابه ليأخذوا بثأر الحسين في عين وردة فهزمهم أهل الشام وقُتِل سليمان بن صرد، أرسل مروان بن الحكم عمرو بن سعيد إلى مصر فأخذها، استقر ملك الشام ومصر لبني أمية، أرسل بعثين للعراق والمدينة ليأخذهما، قيل أنه توفي بالطاعون عام 65</p>
    <p class="p">6-عبد الملك بن مروان: عبد الملك بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد عام 26، قال أبو الزناد: كان يعد فقهاء المدينة أربعة: سعيد بن المسيب وعبد الملك بن مروان وعروة بن الزبير وقبيصة ابن ذؤيب، وَلِيَ المُلْك بعد أبيه سنة 65، أقر البعثتين اللتين بعثهما أبوه إلى العراق والمدينة، أرسل ابن الزبير المهلب بن أبي صفرة إلى الأزارقة لقتالهم، خرج المختار الثقفي الكذاب وتبعه ابن الأشتر وقتلوا شمر بن ذي الجوشن وعبيد الله بن زياد وخولي بن يزيد الأصبحي وعمر بن سعد بن أبي وقاص ثم خادع ابن الزبير فأرسل إليه ابن الزبير مصعبا أخاه فقتله وَوَلَّى مصعبا العراق، استحوذ عمرو بن سعيد الأشدق على الشام بعدما خرج منها عبد الملك إلى زفر بن الحارث لأنه كان قد بايع ابن الزبير فتصالحا ولما رجع عبد الملك إلى الشام تقاتل مع عمرو 16 يوما ثم تصالحا ولكن عبد الملك قتله، ثارت الروم على الشام لما رأوا خلاف عبد الملك وابن الزبير فصالح عبد الملك الروم، أقر عبد الملك المهلب على الأهواز وقتل الأزارقة، خرج عبد الملك إلى العراق وقاتل مصعبا وكان لهما صحبة قديمة فعرض عليه عبد الملك الأمان فلم يقبل مصعب فقتله عبد الملك وأخذ العراق وولى عليها أخاه بشر بن مروان، أخذ عبد الملك خراسان، أرسل عبد الملك الحجاجَ لقتال ابن الزبير في الحجاز فأخذ المدينة وحاصره في مكة وضربها بالمنجنيق وقتل ابن الزبير عام 73 ووَلَّاه عبد الملك على مكة والمدينة، بايع أهل مكة عبد الملك بن مروان، وَلَّى عبد الملك الحجاجَ على العراق بعد موت أخيه بشر، وولى عمه يحيى على المدينة، وَلَّى عبد الملك أمية بن عبد الله على خراسان، نقش عبد الملك الدراهم والدنانير بالعربية، قتل المُهَّلَّبُ الأزارقة وقتل الحجاج ال</p>
    <p class="p">7-الوَليد بن عبد الملك: الوليد بن عبد الملك بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد عام 50، مَلَك عام 86، بنى مسجد بني أمية في دمشق، وَلَّى عمرَ بن عبد العزيز على المدينة وأمره بهدم حجرات النبي وتوسيع المسجد النبوي، غزا قتيبةٌ بن مسلم بلاد الترك، غزا العباس وعبد العزيز ابناه ومَسْلَمَةُ وهشام ابنا عبد الملك بلاد الروم وفتحوا حصونا كثيرة حتى وصلوا إلى خليج القسطنطينية، فُتِحَتْ بلاد الترك والأندلس والهند والسند، أوصاه أبوه بالحجاج فلم يَعْزِلْهُ، تُوُفِّيَ عام 96</p>
    <p class="p">8-سليمان بن عبد الملك: سليمان بن عبد الملك بن مروان بن أمية بن عبد شمس بن عبد مناف، ولد عام 54، مَلْكَ بعد أخيه الوليد، وَلَّى يَزِيْدَ بن المُهَلَّبِ على العراق وخراسان، أراد قتيبة بن مسلم خلع سليمان بن عبد الملك، ولكنه مات قبل ذلك، تتابعت الفتوح في بلاد الترك والروم، حوصرت القسطنطينية على يد مسلمة بن عبد الملك، بايع سليمان لابنه أيوب بعده، ولكن أيوب توفي قبل وفاة سليمان فبايع سليمان لابن عمه عمر بن عبد العزيز ومن بعده لأخيه يزيد بن عبد الملك، توفي سليمان بن عبد الملك عام 99</p>
    <p class="p">9-عمر بن عبد العزيز: عمر بن عبد العزيز بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد سنة 61، كان في جبهته أثر لحافر دابة ولهذا سمي بأشجّ بني أميّة، قيل بأنه هو المجدد الأول لقول النبي إنَّ اللَّهَ يبعَثُ لِهذِه الأمَّةِ على رأسِ كلِّ مائةِ سَنةٍ من يجدِّدُ لَها دينَها (سنن أبي داود)، أمر عمر بن عبد العزيز مسلمة بن عبد الملك ومن معه بالرجوع عن محاصرة القسطنطينية لوهن الجيش، دعا بنو العباس لنفسهم عام مئة للهجرة، مرض عمر بن عبد العزيز سنة 101 وتُوُفِّيَ فيها</p>
    <p class="p">10-يزيد بن عبد الملك: يزيد بن عبد الملك بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد سنة 71، تَوَلَّى المُلْك سنة 101، خرج عليه يزيد بن المهلب فأخذ البصرة، فأرسل إليه يزيد بن عبد المك أخاه مسلمة بن عبد الملك فقتله وأخذ البصرة، وولاه يزيد على العراق وخراسان، تتابع الغزو على بلاد الترك، بايع من بعده لأخيه هشام بن عبد الملك ومن بعده لابنه الوليد بن يزيد، توفي يزيد بن عبد الملك عام 105</p>
    <p class="p">11-هشام بن عبد الملك: هشام بن عبد الملك بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد سنة 72، كان جميلا أبيض أحول يخضب بالسواد، وَلِيَ المُلْكَ عام 105، قَوِيَ أَمر دعوة بني العباس في العراق، تتابع الغزو على بلاد الترك والروم والخزر، تُوُفِّيَ مسلمة بن عبد الملك سنة 121، خلع زيد بن علي هشامَ بن عبد الملك في الكوفة فَقُتِلَ زَيد بن علي وأصحابه، تُوُفِّيَ هشام عام 125</p>
    <p class="p">12-الوليد بن يزيد: الوليد بن يزيد بن عبد الملك بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد سنة 90، كان من أجمل الناس وأشعرهم وأشدهم، وَلِيَ المُلْكَ عام 125، قيل أنه كان يجاهر بشرب الخمر والمعازف فقتله ابن عمه يزيد بن الوليد، تُوُفِّيَ سنة 126</p>
    <p class="p">13-يزيد بن الوليد: يزيد بن الوليد بن عبد الملك بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد عام 90، كان أسمر طويلا صغير الرأس جميلا نحيفا حسن الوجه والجسم، وَلِيَ المُلْكَ بعد ابن عمه الوليد بن يزيد وَمَلَكَ 5 أشهر وأيام وقيل 6 أشهر، بايع من بعده لأخية إبراهيم بن الوليد ومن بعده لعبد العزيز بن الحجاج بن عبد الملك بن مروان، مات بالطاعون عام 126</p>
    <p class="p">14-إبراهيم بن الوليد: إبراهيم بن الوليد بن عبد الملك بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، مَلَكَ سنة 126، سبعين ليلة ثم خلعه مروان بن محمد فهرب إبراهيم وبويع لمروان ثم بايعه إبراهيم طائعا، قُتِلَ في وقعة الزاب مع من قتل من بني أمية سنة 132</p>
    <p class="p">15-مروان بن محمد: مروان بن محمد بن مروان بن الحكم بن أبي العاص بن أمية بن عبد شمس بن عبد مناف، ولد سنة 72، وَلِيَ المُلْك بعد إبراهيم بن الوليد سنة 127، ظهر أبو مسلم الخراساني وبدأ الناس باتباعه، هرب في وقعة الزاب إلى مصر ثم قُتِلَ بها سنة 132، بويع لأبي العباس السفاح بعد موته</p>
    <p class="p">16-عبد الرحمن بن معاوية: عبد الرحمن بن معاوية بن هشام بن عبد الملك، ولد سنة 113، هرب في وقعة الزاب إلى الأندلس واستحوذ عليها سنة 138، لُقِّبَ بصقر قريش وبالداخل لأنه أول من دخل من بني أمية إلى الأندلس حاكما، توفي سنة 172</p>
    <p class="p">17-هشام بن عبد الرحمن: هشام بن عبد الرحمن الداخل، ولد سنة 142 ومَلَكَ سنة 172 وتوفي سنة 180</p>
    <p class="p">18-الحكم بن هشام: الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 153 وملك سنة 180 وتوفي سنة 206</p>
    <p class="p">19-عبد الرحمن بن الحكم: عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 176 وملك سنة 206 وتوفي سنة 238</p>
    <p class="p">20-محمد بن عبد الرحمن: محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 209 وملك سنة 238 وتوفي سنة 273</p>
    <p class="p">21-المنذر بن محمد: المنذر بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 229 وملك سنة 273 وتوفي سنة 275</p>
    <p class="p">22-عبد الله بن محمد: عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل ولد سنة 228 وملك سنة 275 وتوفي سنة 300</p>
    <p class="p">23-عبد الرحمن بن محمد: عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد 277 وملك 300، أخمد كل الثورات في الدولة وبسط سلطانه عليها بعدما كانت محصورة في قرطبة، بنى مدينة الزهراء، توفي 350</p>
    <p class="p">24-الحكم بن عبد الرحمن: الحكم بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد 302 وملك 350 وتوفي 366</p>
    <p class="p">25-هشام بن الحكم: هشام بن الحكم بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 354 وملك سنة 366، ظل خليفة إلى أن خلعه ابن عمه سنة 399، أعيد للحكم سنة 400 وقتل بعد سنة 403</p>
    <p class="p">26-محمد بن هشام: محمد بن هشام بن عبد الجبار بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 366، خلع ابن عمه هشام بن الحكم سنة 399 وملك سنة، توفي سنة 400</p>
    <p class="p">27-سليمان بن الحكم: سليمان بن الحكم بن سليمان بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد 354 ومَلَكَ بعدما خُلِع هشام بن الحكم وقُتِل 407</p>
    <p class="p">28-عبد الرحمن بن محمد: عبد الرحمن بن محمد بن عبد الملك بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولي الملك 407 واغتيل على يد القاسم بن حمود 408</p>
    <p class="p">29-عبد الرحمن بن هشام: عبد الرحمن بن هشام بن عبد الجبار بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 391، خلع أهل قرطبة آل حمود وظهر عليهم عبد الرحمن بن هشام ثم قتله أهل قرطبة عام 414 ولم يمض على حكمه 47 يوما وبايعوا بعده محمد بن عبد الرحمن</p>
    <p class="p">30-محمد بن عبد الرحمن: محمد بن عبد الرحمن بن عبيد الله بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد 366، بايعه أهل قرطبة 414، بلغه أن جيش حمود قادمون فهرب وقتله مرافقوه 416</p>
    <p class="p">31-هشام بن عبد الرحمن: هشام بن محمد بن عبد الملك بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن الداخل، ولد سنة 364، بعدما خلع القرطبيون آل حمود مرة أخرى ولَّوا عليهم هشام بن عبد الرحمن سنة 418، ولكن وزيره كان ظالما فخلعوا بني أمية ونفوهم وهرب هشام ولجأ إلى سليمان بن هود من ملوك الطوائف وتوفي سنة 428 وكان آخر خلفاء بني أمية في الأندلس</p>
    <p class="p">32-صلاح الدين يوسف بن نجم الدين أيوب: يوسف بن أيوب بن شادي بن مروان بن الحكم بن عبد الرحمن بن محمد بن عبد الله بن محمد بن عبد الرحمن بن الحكم بن هشام بن عبد الرحمن بن معاوية بن هشام بن عبد الملك، ولد سنة 532 في تكريت، عينه العاضد وزيرا للدولة الفاطمية بعد عمه وكانوا من الروافض فخرج عليهم واستحوذ على مصر وفتح إيليا في معركة حطين وأخذ الشام، توفي عام 589 ودفن بجانب مسجد بني أمية في دمشق</p>
    <p class="p">33-عماد الدين عثمان بن صلاح الدين يوسف: عثمان بن يوسف بن أيوب بن شادي بن مروان، ولد عام 568 وتوفي عام 595</p>
    <p class="p">34-ناصر الدين محمد بن عماد الدين عثمان: محمد بن عثمان بن يوسف بن أيوب بن شادي بن مروان، ولد عام 586، وَلِيَ الحكم وعمره 9 سنوات وملك سنة واحدة ثم أخذ الحكم منه الأتابك بهاء الدين قراقوش ثم أتى العادل سيف الدين أحمد وأخذ الحكم من الأتابك، توفي عام 614</p>
    <p class="p">35-سيف الدين أحمد بن نجم الدين أيوب: أحمد بن أيوب بن شادي بن مروان، ولد سنة 538 ومَلَكَ سنة 596 وتوفي سنة 615</p>
    <p class="p">36-ناصر محمد بن سيف الدين أحمد: محمد بن أحمد بن أيوب بن شادي بن مروان، ولد سنة 576، تنازل عن إيليا للنصارى وردت بعد ذلك للمسلمين، توفي سنة 635</p>
    <p class="p">37-سيف الدين أبو بكر بن ناصر الدين محمد: أبو بكر بن محمد بن أحمد بن أيوب بن شادي بن مروان، ولد عام 603، خلعه أخوه أيوب عام 637، توفي سنة 638</p>
    <p class="p">38-نجم الدين أيوب بن ناصر الدين محمد: أيوب بن محمد بن أحمد بن أيوب بن شادي بن مروان، ولد سنة 603 وتوفي سنة 647</p>
    <p class="p">39-توران شاه بن نجم الدين أيوب: توران شاه بن أيوب بن محمد بن أحمد بن أيوب بن شادي بن مروان، مَلَكَ سنة 647 وتوفي سنة 648</p>
    <p class="p">40-مظفر الدين موسى بن يوسف: موسى بن يوسف بن يوسف بن محمد بن محمد بن أيوب بن شادي بن مروان، ولد سنة 642 وملك سنة 648 وتوفي سنة 652</p>
</body>

</html>