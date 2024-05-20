<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="blogs" id="blog">
    <div class="blogs__container">
        <h2 class="section__header">Blogs</h2>
        <p class="section__subheader">Perkenalan berbagai Game Engine yang digunakan Game Developer</p>
    </div>
    <div class="content">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blog_database";

        // Buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Ambil data dari tabel blogs
        $sql = "SELECT title, content, image FROM blogs";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data dari setiap baris
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="' . $row["image"] . '" alt="' . $row["title"] . '">';
                echo '<h4>' . $row["title"] . '</h4>';
                echo '<p>' . $row["content"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
</section>

</body>
</html>
