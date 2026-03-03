<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="mb-4 position-relative">
                <img src="<?= BASEURL; ?>/img/profil.png" 
                     alt="Foto Profil" 
                     width="200" height="200" 
                     class="rounded-circle shadow-lg border border-white" 
                     style="object-fit: cover; border-width: 5px !important;">
            </div>

            <h1 class="display-4 font-weight-bold mb-2 text">About Me</h1>
            <p class="lead text-secondary mb-4">
                Informasi singkat mengenai profil profesional saya.
            </p>

            <div class="card shadow border-0 rounded-lg overflow-hidden">
                <div class="card-body p-5">
                    <h3 class="mb-3">Halo, Saya <span class="text"><?= $data['nama']; ?></span></h3>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Saat ini saya berusia <strong><?= $data['umur']; ?> tahun</strong> dan berprofesi sebagai seorang <strong><?= $data['pekerjaan']; ?></strong>. 
                        Sebagai lulusan S1 Informatika, saya memiliki ketertarikan kuat dalam pengembangan solusi digital dan manajemen operasional.
                    </p>
                    
                    <hr class="my-4">

                    <div class="row text-left">
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-light-primary rounded-circle p-3 mr-3">
                                    <i class="bi bi-mortarboard-fill text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-uppercase text-muted d-block">Pendidikan</small>
                                    <strong>S1 Informatika</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-light-success rounded-circle p-3 mr-3">
                                    <i class="bi bi-briefcase-fill text-success"></i>
                                </div>
                                <div>
                                    <small class="text-uppercase text-muted d-block">Status Pekerjaan</small>
                                    <strong><?= $data['pekerjaan']; ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn btn-outline-dark px-4 ml-2">Lihat Daftar Mahasiswa</a>
                        <a href="#" class="btn btn-outline-dark px-4 ml-2">Hubungi Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-light-primary { background-color: rgba(15, 15, 15, 0.1); }
    .bg-light-success { background-color: rgba(10, 10, 10, 0.1); }
    .icon-box { width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; }
</style>