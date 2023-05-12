<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">
                <center>ABOUT PAGE</center>
            </h1>
            <p><?php
                d($dataAbout);
                ?></p>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>