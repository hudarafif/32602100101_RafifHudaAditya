<?= $this->extend('layout/32602100109_Huda.php')?>
<?= $this->renderSection('content')?>

<div class="about">
    <div class="about-us">
        <h1>About Us</h1>
        <p>Majoring Informatics Engineering from the Islamic University of Sultan Agung Semarang.</p>
    </div>
    <div class="about-experience">
        <h1>Experience</h1>
        <div class="about-experience-list">
            <table border='1'>
                <tr>
                    <th rowspan='3'>2020</th>
                    <th colspan='2'>website tim</th>
                    <th rowspan='3'>2021</th>
                    <th colspan='2'>database tim.</th>
                </tr>
                <tr>
                    <td>Pati</td>
                    <td>Indonesia</td>
                    <td>SEMARANG</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td colspan='2'>membuat website toko thrift sederhana yang responsibel serta mudah dipahami</td>
                    <td colspan='2'>membuat database pada toko kelontong secara tim</td>
                </tr>
            </table>
        </div>
    </div>
</div>
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