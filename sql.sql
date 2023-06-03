-- Kullanıcılar tablosu
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    yetki_seviyesi INT NOT NULL,
    son_giris DATETIME
);

-- Notlar tablosu
CREATE TABLE notes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Dosyalar tablosu
CREATE TABLE files (
    id INT PRIMARY KEY AUTO_INCREMENT,
    filename VARCHAR(100) NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
