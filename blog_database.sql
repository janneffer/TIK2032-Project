CREATE TABLE blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO blogs (title, content, image) VALUES
('UNITY ENGINE', 'Unity adalah mesin permainan lintas platform yang dikembangkan oleh Unity Technologies, pertama kali diumumkan dan diluncurkan pada bulan Juni 2005 di Apple Inc. Apple Worldwide Developers Conference sebagai mesin permainan eksklusif Mac OS X Pada 2018.', 'img/unity.jpeg'),
('UNREAL ENGINE', 'Unreal Engine adalah sebuah aplikasi pengembangan permainan (game engine) yang dibuat oleh Epic Games, memulai debutnya pada 1998, dengan permainan bertema tembak-menembak orang-pertama (FPS).', 'img/unreal.jpg'),
('GODOT ENGINE', 'Godot adalah mesin permainan lintas platform, gratis dan sumber terbuka yang dirilis di bawah lisensi MIT yang permisif. Ini awalnya dikembangkan oleh pengembang perangkat lunak Argentina Juan Linietsky dan Ariel Manzur. untuk beberapa perusahaan di Amerika Latin sebelum dirilis ke publik pada tahun 2014.', 'img/godot.png');

