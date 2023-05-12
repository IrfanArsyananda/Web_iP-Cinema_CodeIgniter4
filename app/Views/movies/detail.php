<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">
                <center>MOVIE DETAIL PAGE</center>
            </h1>
            <div class="card mb-3" style="max-width:fit-content">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $movies['cover_movie']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movies['title_movie']; ?></h5>
                            <p class="card-text"><?= $movies['synopsis_movie']; ?></p>
                            <p class="card-text"><small class="text-muted"><?= $movies['year_movie']; ?></small></p>
                            <div class="buttonForForm">
                                <a href="/movies-edit/<?= $movies['slug_movie']; ?>" class="btn btn-warning">Edit</a>
                                <a href="/movies" class="btn btn-outline-warning">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>