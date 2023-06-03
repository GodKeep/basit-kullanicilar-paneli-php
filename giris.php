<!DOCTYPE html>
<html>
<head>
    <title>Giriş Paneli</title>
    <style>
        body {
            background-color: #000;
            background-image: url('https://wallpaperaccess.com/full/1219598.jpg');
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background-color: #fff;
            animation: star-fall 5s linear infinite;
        }

        @keyframes star-fall {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            text-align: center; /* Giriş formunu ortala */
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 250px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .login-form input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login-form .extra-links {
            margin-top: 10px;
            text-align: center;
        }

        .login-form .extra-links a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="stars">
        <?php
        $starCount = 100; // Kayan yıldız sayısı
        for ($i = 0; $i < $starCount; $i++) {
            $left = rand(0, 100); // Yıldızın yatay pozisyonunu rastgele belirler
            $top = rand(0, 100); // Yıldızın dikey pozisyonunu rastgele belirler
            $delay = rand(0, 10); // Yıldızın animasyona başlama gecikmesini rastgele belirler
            $size = rand(1, 3); // Yıldızın boyutunu rastgele belirler

            echo "<div class='star' style='left: $left%; top: $top%; animation-delay: $delay" . "s; width: $size" . "px; height: $size" . "px;'></div>";
        }
        ?>
    </div>

    <div class="container">
        <div class="login-form">
            <h2>Giriş Paneli</h2>
            <form name="giris" method="post" action="giris.php">
                <input type="text" name="username" placeholder="Kullanıcı Adı" required><br>
                <input type="password" name="password" placeholder="Parola" required><br>
                <input type="submit" value="Giriş"><br><br>
            </form>
            <div class="extra-links">
                <a href="#">Kayıt Ol</a>
                <a href="#">Şifremi Unuttum</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
 




 ?>