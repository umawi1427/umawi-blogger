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
<body style="background-image: url('images/map.png'); background-size: cover; background-position: center center; background-attachment: fixed; margin: 0; height: 100vh;">    <nav id="navbar">
        <a href="index.php"><img id="imgIcon" src="images/homepageIcon.png"></a>
        <div id="nav-links">
            <a href="poems.php">الأشعار</a>
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
    <audio id="audioPlayer" loop style="display:none;">
        <source src="images/سرايا.mp3">
    </audio>
    <script>
        const audio = document.getElementById('audioPlayer');
        const requiredSequence = ['u', 'k', 'm'];
        let currentSequence = [];
        let tapCount = 0;
        let lastTapTime = 0;
        const tapInterval = 5000;
        const requiredTaps = 3;
        document.body.addEventListener('touchstart', (event) => {
            const currentTime = Date.now();
            if (currentTime - lastTapTime <= tapInterval) {
                tapCount++;
            } else {
                tapCount = 1;
            }
            lastTapTime = currentTime;
            if (tapCount === requiredTaps) {
                audio.play();
                tapCount = 0;
            }
        });
        document.addEventListener('keydown', (event) => {
            const keyPressed = event.key.toLowerCase();
            currentSequence.push(keyPressed);
            if (currentSequence.length > requiredSequence.length) {
                currentSequence.shift();
            }
            if (JSON.stringify(currentSequence) === JSON.stringify(requiredSequence)) {
                audio.play();
                currentSequence = [];
            }
        });
    </script>
    <a href="umawi.php">
        <img class="indexImage" src="images/homepageIcon.png" style="position: fixed; bottom: 0; left: 0; margin: 10px; width: 100px; height: 100px;">
    </a>
    <p id="homepageText" style="text-align: center;">موقع أبي الحكم الأموي</p>
    <div style="position: fixed; bottom: 20px; right: 20px; display: flex; justify-content: center; align-items: center;">
        <button id="toggleButton" onclick="toggleForm()" style="font-size: 50px; background-color: transparent; border: none; cursor: pointer;">
            &#9993;
        </button>        
        <form id="commentForm" onsubmit="submitForm(); return false;" style="display: none;">
            <label for="comment"></label>
            <textarea required id="comment" name="comment" rows="25" cols="15" placeholder="أرسل لأبي الحكم الأموي" style="resize: none; width: 100%;"></textarea>
            <button type="submit" style="width: 101%; background-color: #b5f0ad; margin-right: -20px;">إرسال</button>
        </form>
        <script>
            function toggleForm() {
                var form = document.getElementById("commentForm");
                var button = document.getElementById("toggleButton");

                if (form.style.display === "none" || form.style.display === "") {
                    form.style.display = "block";
                    button.innerHTML = '&#10006;';
                } else {
                    form.style.display = "none";
                    button.innerHTML = '&#9993;';
                }
            }
            document.getElementById("comment").addEventListener("keydown", function(event) {
                if (event.key === "Enter" && !event.shiftKey) {
                    event.preventDefault();
                    submitForm();
                }
            });
            function submitForm() {
                var comment = document.getElementById("comment").value;
                var formspreeEndpoint = "https://formspree.io/f/xblrrgbw";
                fetch(formspreeEndpoint, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({
                            comment: comment
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
                document.getElementById("comment").value = "";
            }
        </script>
    </div>
</body>
</html>