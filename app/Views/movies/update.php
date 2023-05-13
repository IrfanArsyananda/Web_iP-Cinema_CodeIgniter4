<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">
                <center>FORM EDIT MOVIE</center>
            </h1>
            <form action="<?= base_url('/movies/update/') . $movies['id_movie']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slugMov" value="<?= $movies['slug_movie']; ?>">
                <input type="hidden" name="coverMovOld" value="<?= $movies['cover_movie']; ?>">
                <div class="row mb-3">
                    <label for="coverMov" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url('/img/') . $movies['cover_movie']; ?>" class="img-thumbnail cov-add-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="mb-3">
                            <input onchange="setPreviewCov()" class="form-control <?= ($valMsg && $valMsg->hasError('coverMov')) ? 'is-invalid' : ''; ?>" type="file" id="coverMov" name="coverMov" value="<?= old('coverMov'); ?>">
                            <div class="invalid-feedback">
                                <?= ($valMsg && $valMsg->hasError('coverMov')) ? $valMsg->getError('coverMov') : ''; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="titleMov" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($valMsg && $valMsg->hasError('titleMov')) ? 'is-invalid' : ''; ?>" id="titleMov" name="titleMov" autofocus value="<?= (old('titleMov')) ? old('titleMov') : $movies['title_movie']; ?>">
                        <div class="invalid-feedback">
                            <?= ($valMsg && $valMsg->hasError('titleMov')) ? $valMsg->getError('titleMov') : ''; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="coverMov" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($valMsg && $valMsg->hasError('yearMov')) ? 'is-invalid' : ''; ?>" id="yearMov" name="yearMov" value="<?= (old('yearMov')) ? old('yearMov') : $movies['year_movie']; ?>">
                        <div class="invalid-feedback">
                            <?= ($valMsg) ? $valMsg->getError('yearMov') : ''; ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="synopsisMov" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="synopsisMov" name="synopsisMov" value="<?= (old('synopsisMov')) ? old('synopsisMov') : $movies['synopsis_movie']; ?>">
                    </div>
                </div>
                <div class="buttonForForm">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('/movies/') . $movies['slug_movie']; ?>" class="btn btn-outline-warning">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>