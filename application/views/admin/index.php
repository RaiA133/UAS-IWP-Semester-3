<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="pagetitle">
                <h1><?= $judul; ?> | Admin</h1>
                <p>Edit Akun Member Anggota Perpustakaan</p>
            </div><!-- End Page Title -->

            <?php
            // query data dimana semua data user yg memiliki role_id = 2 (member) akan di query
            $queryMember = $this->db->get_where('user', ['role_id' => 2])->result_array();
            // var_dump($queryMember);
            ?>

            <?php foreach ($queryMember as $data) : ?>
                <div class="col-lg-4">
                    <div class="card" style="width: 21rem;">
                        <img src="<?= base_url('assets/img/profile/') . $data['image']; ?>" class="card-img-top" alt="profile">
                        <div class="card-body">
                            <hr class="divider">
                            <h5 class="card-title py-0"><?= $data['id']; ?> | <?= $data['name']; ?> | Member</h5>
                            <hr class="divider">
                            <div class="text-center">
                                <a href="<?= $data['github_link']; ?>" class="card-link">Github</a>
                                <a href="<?= $data['fb_link']; ?>" class="card-link">Facebook</a>
                                <a href="<?= $data['ig_link']; ?>" class="card-link">Instagram</a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Kode Anggota : </b>MU00<?= $data['id']; ?></li>
                            <li class="list-group-item"><b>Username : </b><?= $data['username']; ?></li>
                            <li class="list-group-item"><b>Email : </b><?= $data['email']; ?></li>
                            <li class="list-group-item"><b>Tempat/tgl Lahir : </b><?= $data['tempat_lahir']; ?> | <?= $data['tgl_lahir']; ?></li>
                            <li class="list-group-item"><b>Member Sejak : </b><?= date('d F Y', $data['date_created']); ?></li>
                        </ul>
                        <div class="row mx-auto my-4">
                            <div class="col">
                                <a href="<?= base_url('admin/hapus/') . $data['id']; ?>"><button type="submit" class="btn btn-danger px-4" onclick="return confirm('Apakah Anda Yakin ?');">Hapus</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
</main><!-- End #main -->