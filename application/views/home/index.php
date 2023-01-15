<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- google font : montserrat medium & semibold-->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
<!-- google font : libre caslon text regular -->
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
<style>
    .montserrat {
        font-family: 'Montserrat', sans-serif;
    }

    .libre {
        font-family: 'Libre Caslon Text', serif;
    }

    .text-10px {
        font-size: 10px;
    }

    .text-14px {
        font-size: 14px;
    }

    div {
        border: 0px solid red;
    }
</style>

<!-- kontainer terluar -->
<div class="container pt-2 montserrat">
    <!-- kotak putih bg -->
    <div class="box bg-light-subtle border my-4 rounded-4 text-center ">
        <!-- baris judul, tombol, dan akun -->
        <div class="row mt-5">
            <div class="col order-first fs-1">
                <b>Perpustakaan</b>
            </div>
            <div class="col my-auto">
                <a href="<?= base_url(); ?>auth" class="btn btn-primary rounded-pill btn-ungu">Pinjam & Baca</a>
            </div>
            <div class="col order-last my-auto">
                <?php
                echo date("l, d-M-Y ");
                ?>
            </div>
        </div>

        <div class="mx-5 my-5 mb-0 text-center">
            <div class="row mx-5 my-5 mb-0">
                <div class="col text-start py-5 px-5">
                    <h1 class="libre">New & Trending</h1>
                    <span class="fs-6">Jelajahi dunia baru lewat membaca</span>
                    <div class="my-4">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success rounded-pill btn-ungu" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <a href="">
                        <div class="mx-1 my-auto h-100 d-inline-block bayangan-buku zoom" style="width: 100%; background-color: rgba(0,0,255,.1)">
                            <img width="235" src="<?= base_url(); ?>assets/img/home/dilan.jpg" alt="" class="zoom-img">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="">
                        <div class="mx-1 my-auto h-100 d-inline-block bayangan-buku zoom" style="width: 100%; background-color: rgba(0,0,255,.1)">
                            <img width="235" src="<?= base_url(); ?>assets/img/home/laskar.jpg" alt="" class="zoom-img">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="">
                        <div class="mx-1 my-auto h-100 d-inline-block bayangan-buku zoom" style="width: 100%; background-color: rgba(0,0,255,.1)">
                            <img width="235" src="<?= base_url(); ?>assets/img/home/ci3.jpg" alt="" class="zoom-img">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- papan rak buku -->
        <div class="row py-2 bg-warning-subtle bayangan z-100 position-relative"></div>

        <div class="m-5 border">
            <div class="row mx-5 column-gap-5 py-5">
                <div class="col">
                    <div class="row">

                        <div class="col">
                            <div class="mx-1 my-auto h-100 d-inline-block bayangan-buku" style="width: 100%; background-color: rgba(0,0,255,.1)">
                                <img width="100" src="<?= base_url(); ?>assets/img/home/harry_potter.jpg" alt="" class="zoom-img">
                            </div>
                        </div>
                        <div class="col text-start ">
                            <div class=" libre text-14px mb-2"><b>Harry Potter and The Death Hallows</b></div>
                            <div class=" libre text-10px mb-3">J.K Rowling</div>
                            <a href="" type="button" class="btn btn-outline-primary rounded-pill py-1 text-14px">Baca</a>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="row">

                        <div class="col">
                            <div class="mx-1 my-auto h-100 d-inline-block bayangan-buku" style="width: 100%; background-color: rgba(0,0,255,.1)">
                                <img width="100" src="<?= base_url(); ?>assets/img/home/davinci_code.jpg" alt="" class="zoom-img">
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class=" libre text-14px mb-2"><b>The Da Vinci Code</b></div>
                            <div class=" libre text-10px mb-3">Dan Brown</div>
                            <a href="" type="button" class="btn btn-outline-primary rounded-pill py-1 text-14px">Baca</a>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="row">

                        <div class="col">
                            <div class="mx-1 my-auto h-100 d-inline-block bayangan-buku" style="width: 100%; background-color: rgba(0,0,255,.1)">
                                <img width="100" src="<?= base_url(); ?>assets/img/home/python.jpeg" alt="" class="zoom-img">
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class=" libre text-14px mb-2"><b>Python For Beginer</b></div>
                            <div class=" libre text-10px mb-3">Elliot Turnnert</div>
                            <a href="" type="button" class="btn btn-outline-primary rounded-pill py-1 text-14px">Baca</a>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="row">

                        <div class="col">
                            <div class="mx-1 my-auto h-100 d-inline-block bayangan-buku" style="width: 100%; background-color: rgba(0,0,255,.1)">
                                <img width="100" src="<?= base_url(); ?>assets/img/home/hobbits.jpg" alt="" class="zoom-img">
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class=" libre text-14px mb-2"><b>The Hobbits</b></div>
                            <div class=" libre text-10px mb-3">J.R.R Tolkien</div>
                            <a href="" type="button" class="btn btn-outline-primary rounded-pill py-1 text-14px">Baca</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>