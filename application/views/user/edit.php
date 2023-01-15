<main id="main" class="main">
    <section class="section">
        <div class="row">

            <div class="pagetitle">
                <?php
                // ambil data role_id kita dari data akun yg kita login kan sekarang
                $role_id = $this->session->userdata('role_id');
                // fetch data database dari table user_menu
                $role = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
                // var_dump($role); //test
                ?>
                <h1><?= $judul; ?> | <?= $role['role']; ?></h1>
                <p>Keterangan Profile</p>
            </div><!-- End Page Title -->

            <div class="col-lg-6"> <!-- General Form Elements -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title pb-0 text-center">Form Edit Data Diri</h5>
                        <hr class="divider">

                        <?php echo form_open_multipart('user/edit'); ?><!-- pengganti method="post" enctype="multipart/form-data" -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" autocomplete="off">
                                <div class="alert-form"><?= form_error('name', '<small class="allert-form text-danger mt-n6">', '</small>'); ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" autocomplete="off">
                                <div class="alert-form"><?= form_error('username', '<small class="allert-form text-danger mt-n6">', '</small>'); ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Kode Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="MB00<?= $user['id']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="registerEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="registerEmail" name="registerEmail" value="<?= $user['email']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-3 col-form-label">Poto Profile</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="image" name="image" value="<?= base_url('assets/img/profile/') . $user['image']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tgl_lahir" class="col-sm-3 col-form-label">Tgl lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tgl Pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= date('d F Y', $user['date_created']); ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jam Pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control" value="<?= date('G:i', $user['date_created']); ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-sm-3 col-form-label">Link Github</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="github" name="github" value="<?= $user['github_link']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="facebook" class="col-sm-3 col-form-label">Link Facebook</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $user['fb_link']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="instagram" class="col-sm-3 col-form-label">Link Instagram</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $user['ig_link']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3 pt-3">
                            <div class="col-lg text-center">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- End General Form Elements -->

            <div class="col-lg-3"> <!-- General Form Elements -->
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg text-center">
                            <h5 class="card-title pb-0 text-center">Poto Profile</h5>
                            <hr class="divider">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top" alt="profile">
                            <label for="image" class="mt-3 border border-primary rounded-4 px-3">Ubah Poto Profile</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>