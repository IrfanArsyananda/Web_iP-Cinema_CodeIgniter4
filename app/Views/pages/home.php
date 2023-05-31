<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">
                <center>HOME PAGE</center>
            </h1>
        </div>
    </div>
    <div class="row">
        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ratio ratio-21x9">
                <?php foreach ($carouselData as $cd) : ?>
                    <div class="carousel-item <?= ($cd['carousel_id'] == 1) ? 'active' : '' ?>" data-bs-interval="2000">
                        <img src="<?= base_url('/img/') . $cd['carousel_image'] ?>" class="my-carousel-img d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="my-carousel-capt"><?= $cd['carousel_name']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr class="mt-1 mb-1" />
    <div class="row">
    </div>

</div>
<?= $this->endSection('content'); ?>