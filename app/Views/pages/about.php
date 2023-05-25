<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1 class="my-3">
        <center>ABOUT PAGE</center>
    </h1>
    <br>
    <div class="row">
        <div class="col md-6">
            <p><b>Nama : </b><?= $dataAbout['Nama'] ?></p>
            <p><b>Alamat : </b><?= $dataAbout['Alamat'] ?></p>
            <p style="text-align: justify;"><b>Deskripsi : </b><br><?= $dataAbout['Deskripsi'] ?></p>
        </div>
        <div class="col md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75181.35438755473!2d112.5985505537527!3d-7.974832194167912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Malang%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1684827025794!5m2!1sen!2sid" width="600" height="450" style="border:solid 1px black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>