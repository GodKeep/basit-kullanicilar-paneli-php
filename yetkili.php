<!DOCTYPE html>
<html>
<head>
    <title>Yetkili Sayfası</title>
    <link rel="stylesheet" href="css/stil.css">
    <style>
        /* Bu sayfaya özgü stil tanımlamaları */
        .container {
            margin: 50px auto;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
        }

        ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        form {
            margin-bottom: 20px;
        }

        form input[type="file"] {
            display: block;
            margin-bottom: 10px;
        }

        .extra-links {
            text-align: center;
        }

        .extra-links a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="tab-menu">
            <a href="#kullanici-tab" class="active">Kullanıcılar</a>
            <a href="#notlar-tab">Notlar</a>
            <a href="#dosya-yukleme-tab">Dosya Yükleme</a>
        </div>

        <div id="kullanici-tab" class="tab-content">
            <h2>Kullanıcılar</h2>
            <table>
                <tr>
                    <th>Kullanıcı Adı</th>
                    <th>E-posta</th>
                    <th>Yetki Seviyesi</th>
                    <th>Son Aktiflik</th>
                </tr>
                <?php
                // Kullanıcıları veritabanından çekerek tabloya ekleme işlemi
                // Örnek veritabanı sorgusu:
                // $users = $db->query("SELECT * FROM users");
                // while ($user = $users->fetch(PDO::FETCH_ASSOC)) {
                //     echo "<tr>";
                //     echo "<td>" . $user['username'] . "</td>";
                //     echo "<td>" . $user['email'] . "</td>";
                //     echo "<td>" . $user['yetki_seviyesi'] . "</td>";
                //     echo "<td>" . $user['son_giris'] . "</td>";
                //     echo "</tr>";
                // }
                ?>
            </table>
        </div>

        <div id="notlar-tab" class="tab-content" style="display: none;">
            <h2>Notlar</h2>
            <ul>
                <?php
                // Notları veritabanından çekerek liste olarak ekleme işlemi
                // Örnek veritabanı sorgusu:
                // $notes = $db->query("SELECT * FROM notes");
                // while ($note = $notes->fetch(PDO::FETCH_ASSOC)) {
                //     echo "<li>" . $note['title'] . " - " . $note['content'] . "</li>";
                // }
                ?>
            </ul>
        </div>

        <div id="dosya-yukleme-tab" class="tab-content" style="display: none;">
            <h2>Dosya Yükleme</h2>
            <form method="post" action="upload.php" enctype="multipart/form-data">
                <input type="file" name="file" required><br>
                <input type="submit" value="Dosyayı Yükle">
            </form>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/giris_sayfasi.js"></script>
</body>
</html>
