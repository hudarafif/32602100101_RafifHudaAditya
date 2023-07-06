<!-- app/Views/profile.php -->
<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
    <!-- Isi konten profil di sini -->
    <h2>Profil Saya</h2>
    <p>Nama: Rafif Huda Aditya</p>
    <p>Umur: 20 Tahun</p>
    <p>Fakultas: Teknologi Industri</p>

    <h2>Keahlian</h2>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
        <li>Adobe Premier</li>
        <li>Adobe Illustrator</li>
        <li>Adobe After Effect</li>
    </ul>
<?= $this->endSection() ?>