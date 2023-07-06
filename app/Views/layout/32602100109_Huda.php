<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Layouting</title>
</head>
<body>
    <div class="navbar">
      <div class="navbar-icon">
        <i class="fa-solid fa-circle-user da-2x1"></i>
      </div>
        <div class="navbar-page">
            <ul type="none">
                <li><a href="#">Home </a></li>
                <li><a href="#">About </a></li>
                <li><a href="#">Portfolio </a></li>
                <li><a href="#">Contact </a></li>
            </ul>
        </div>
        <nav class="navbar-sosmed">
            <ul>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></li>
            </ul>
        </nav>
    </div>
    <div class="banner">
        <span class="name"> Rafif Huda Aditya</span><br>
        <span class="deskripsi">IT ENGINEERING</span>
    </div>
    <?= $this->renderSection('content')?>
    <style>
    /* app/Views/layout.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar {
  display: flex;
  justify-content: space-between;
  background-color: #333;
  color: #fff;
  padding: 10px;
}

.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar ul li {
  margin-right: 10px;
}

.navbar ul li a {
  color: #fff;
  text-decoration: none;
}

.banner {
  background-color: #f2f2f2;
  text-align: center;
  padding: 50px;
}

.banner .name {
  font-size: 24px;
  font-weight: bold;
  color: #333;
}

.banner .description {
  font-size: 16px;
  color: #666;
}

/* CSS khusus untuk halaman konten */
.content {
  margin-top: 20px;
  padding: 20px;
}

.content h1 {
  color: #333;
}

.content p {
  color: #666;
}

    </style>
</body>
</html>