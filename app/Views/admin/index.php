<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-3">
                <center>ADMIN LIST PAGE</center>
            </h1>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            <?php endif ?>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Anyone?" name="keyword">
                    <button class="btn btn-outline-primary" type="submit" name="search">Search</button>
                </div>
            </form>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (5 * ($currentPage - 1));
                    foreach ($admins as $ad) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?> </th>
                            <td><img src="/img/<?= $ad['admin_avatar']; ?>" alt="" class="movieCoverImage"></td>
                            <td><?= $ad['admin_username']; ?></td>
                            <td><?= $ad['admin_password']; ?></td>
                            <td>
                                <a href="/admin/<?= $ad['admin_id']; ?>" class="btn btn-success">Detail</a>
                                <form action="/admin/<?= $ad['admin_id']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin hapus <?= $ad['admin_username']; ?> ?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('admin_data', 'admin_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>