<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">
                <center>CONTACT PAGE</center>
            </h1>
            <?php foreach ($dataContact as $a) : ?>
                <ul>
                    <li><?= $a['wa']; ?></li>
                    <li><?= $a['em']; ?></li>
                    <li><?= $a['ig']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>