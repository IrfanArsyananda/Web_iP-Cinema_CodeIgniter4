<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">
                <center>MOVIE LIST PAGE</center>
            </h1>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            <?php endif ?>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Year</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($movies as $mo) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?> </th>
                            <td><img src="<?= base_url('/img/') . $mo['cover_movie']; ?>" alt="" class="movieCoverImage"></td>
                            <td><?= $mo['title_movie']; ?></td>
                            <td><?= $mo['year_movie']; ?></td>
                            <td>
                                <a href="<?= base_url('/movies/') . $mo['slug_movie']; ?>" class="btn btn-success">Detail</a>
                                <form action="<?= base_url('/movies/') . $mo['id_movie']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin hapus <?= $mo['title_movie']; ?> ?');">Delete</button>
                                </form>
                                <!-- <a href="/movies/delete/" class="btn btn-danger">Delete</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>