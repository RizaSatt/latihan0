<div class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <h1 class="display-4 fw-bold lh-1 mb-3 text">Selamat Datang di Website Saya</h1>
            <p class="lead">Halo, nama saya <span class="fw-bold text-dark"><?= $data['nama']; ?></span>.</p>
            <p class="text-muted">Ini merupakan salah satu karya praktek saya saat berada di kelas pemrograman website dasar yang berfokus pada pembuatan 
                website dengan Konsep MVC sederhana yang efisien dan memastikan code mudah dibaca dan tertata dengan baik.</p>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                <a href="<?= BASEURL ?>/about" class="btn btn-outline-dark px-4 ml-2 btn-lg px-4 me-md-2 shadow-sm">About Me</a>
            </div>
        </div>

        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://illustrations.popsy.co/amber/web-design.svg" class="d-block mx-lg-auto img-fluid" alt="Web Design Illustration" width="700" height="500" loading="lazy">
        </div>
    </div>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mt-5 border-top">
        <div class="feature col text-center">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-primary fs-2 mb-3">
                <i class="bi bi-code-slash"></i>
            </div>
            <h3 class="fs-4">Clean Code</h3>
            <p>Struktur kode yang rapi dan mudah dikelola sesuai standar industri.</p>
        </div>
        <div class="feature col text-center">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-primary fs-2 mb-3">
                <i class="bi bi-cpu"></i>
            </div>
            <h3 class="fs-4">Responsive</h3>
            <p>Tampilan yang optimal di berbagai perangkat, mulai dari HP hingga Desktop.</p>
        </div>
        <div class="feature col text-center">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-primary fs-2 mb-3">
                <i class="bi bi-speedometer2"></i>
            </div>
            <h3 class="fs-4">High Performance</h3>
            <p>Optimasi kecepatan loading untuk pengalaman pengguna yang lebih baik.</p>
        </div>
    </div>
</div>