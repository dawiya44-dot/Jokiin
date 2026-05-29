<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokiin – Jasa & Template Desain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #2E2B74;
            --primary-light: #3d3a9e;
            --accent: #f5a623;
            --bg-soft: #f7f8fc;
        }
        * { box-sizing: border-box; }
        body {
            font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
            padding-top: 70px;
            background: #fff;
            color: #1a1a2e;
        }
        /* NAVBAR */
        .navbar {
            backdrop-filter: blur(12px);
            background: rgba(255,255,255,0.95) !important;
            border-bottom: 1px solid rgba(46,43,116,0.08);
        }
        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .nav-link {
            font-weight: 600;
            color: #444 !important;
            position: relative;
            padding-bottom: 4px !important;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0;
            width: 0; height: 2px;
            background: var(--primary);
            transition: width .3s;
        }
        .nav-link:hover::after { width: 100%; }
        .nav-link:hover { color: var(--primary) !important; }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, #1a1760 0%, #2E2B74 50%, #4a3fa0 100%);
            padding: 110px 0 90px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -80px; right: -80px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(245,166,35,0.25) 0%, transparent 70%);
            border-radius: 50%;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: -100px; left: -60px;
            width: 350px; height: 350px;
            background: radial-gradient(circle, rgba(255,255,255,0.07) 0%, transparent 70%);
            border-radius: 50%;
        }
        .hero-badge {
            display: inline-block;
            background: rgba(245,166,35,0.2);
            border: 1px solid rgba(245,166,35,0.5);
            color: var(--accent);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 50px;
            margin-bottom: 18px;
        }
        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
        }
        .hero h1 span {
            background: linear-gradient(90deg, var(--accent), #ffd580);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero p {
            font-size: 1.05rem;
            color: rgba(255,255,255,0.82);
            line-height: 1.7;
            max-width: 480px;
        }
        .btn-hero {
            background: linear-gradient(135deg, var(--accent), #e8940f);
            color: #1a1a2e;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            padding: 12px 32px;
            font-size: 0.95rem;
            transition: transform .2s, box-shadow .2s;
            box-shadow: 0 4px 20px rgba(245,166,35,0.4);
        }
        .btn-hero:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(245,166,35,0.5);
            color: #1a1a2e;
        }
        .btn-hero-outline {
            background: transparent;
            color: white;
            font-weight: 700;
            border: 2px solid rgba(255,255,255,0.4);
            border-radius: 50px;
            padding: 11px 28px;
            font-size: 0.95rem;
            transition: all .2s;
        }
        .btn-hero-outline:hover {
            background: rgba(255,255,255,0.1);
            border-color: white;
            color: white;
        }
        .hero-stats {
            display: flex;
            gap: 32px;
            margin-top: 40px;
        }
        .hero-stat-num {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--accent);
        }
        .hero-stat-label {
            font-size: 0.78rem;
            color: rgba(255,255,255,0.6);
            font-weight: 500;
        }

        /* KATALOG */
        .section-katalog {
            padding: 80px 0;
            background: var(--bg-soft);
        }
        .section-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
        }
        .section-subtitle {
            color: #888;
            font-size: 1rem;
            margin-top: 6px;
        }
        .card-custom {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(46,43,116,0.08);
            transition: transform .3s, box-shadow .3s;
            background: white;
            height: 100%;
        }
        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(46,43,116,0.16);
        }
        .card-img-wrap {
            position: relative;
            overflow: hidden;
            height: 200px;
        }
        .card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s;
            cursor: pointer;
        }
        .card-custom:hover .card-img-wrap img {
            transform: scale(1.06);
        }
        .card-img-overlay-btn {
            position: absolute;
            inset: 0;
            background: rgba(46,43,116,0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity .3s;
        }
        .card-custom:hover .card-img-overlay-btn { opacity: 1; }
        .card-body-custom { padding: 20px; text-align: center; }
        .card-title-custom {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 4px;
            color: #1a1a2e;
        }
        .card-desc-custom {
            font-size: 0.82rem;
            color: #999;
            margin-bottom: 10px;
            min-height: 36px;
        }
        .card-price {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 14px;
        }
        .btn-pesan {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border: none;
            border-radius: 50px;
            padding: 9px 26px;
            font-weight: 700;
            font-size: 0.88rem;
            transition: transform .2s, box-shadow .2s;
            box-shadow: 0 4px 14px rgba(46,43,116,0.3);
        }
        .btn-pesan:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(46,43,116,0.4);
            color: white;
        }

        /* TENTANG & FOOTER */
        .section-tentang {
            background: linear-gradient(135deg, #1a1760 0%, #2E2B74 100%);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .section-tentang::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(245,166,35,0.15) 0%, transparent 70%);
            border-radius: 50%;
        }
        .tentang-title {
            font-size: 1.9rem;
            font-weight: 800;
            margin-bottom: 16px;
        }
        .tentang-text {
            color: rgba(255,255,255,0.78);
            line-height: 1.8;
            font-size: 0.97rem;
        }
        .contact-card {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 16px;
            padding: 28px;
            backdrop-filter: blur(8px);
        }
        .contact-card h5 {
            font-weight: 800;
            font-size: 1.1rem;
            margin-bottom: 18px;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
            color: rgba(255,255,255,0.8);
            font-size: 0.93rem;
        }
        .contact-item i {
            width: 36px; height: 36px;
            background: rgba(245,166,35,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            font-size: 1rem;
            flex-shrink: 0;
        }
        .contact-item a { color: var(--accent); text-decoration: none; font-weight: 600; }
        .contact-item a:hover { text-decoration: underline; }

        /* MODAL */
        .modal-header-custom {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 16px 16px 0 0;
            border: none;
            padding: 20px 24px;
        }
        .modal-content { border-radius: 16px; border: none; }
        .info-box {
            background: linear-gradient(135deg, rgba(245,166,35,0.12), rgba(245,166,35,0.06));
            border: 1px solid rgba(245,166,35,0.3);
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 20px;
        }
        .form-control, .form-select {
            border-radius: 10px;
            border: 1.5px solid #e0e0e0;
            padding: 10px 14px;
            font-size: 0.92rem;
            transition: border-color .2s;
        }
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46,43,116,0.1);
        }
        .btn-kirim {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border: none;
            border-radius: 50px;
            color: white;
            padding: 12px 24px;
            width: 100%;
            font-weight: 700;
            font-size: 0.95rem;
            transition: transform .2s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(46,43,116,0.3);
        }
        .btn-kirim:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(46,43,116,0.4);
            color: white;
        }
        .input-group-text {
            border-radius: 10px 0 0 10px;
            background: var(--bg-soft);
            border: 1.5px solid #e0e0e0;
            border-right: none;
            font-weight: 600;
            color: #555;
        }
        .input-group .form-control { border-radius: 0 10px 10px 0; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">Jokiin</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-2">
        <li class="nav-item"><a class="nav-link px-3" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="#katalog">Katalog</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="#tentang">Tentang Kami</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-badge"><i class="bi bi-stars me-1"></i> Desain Cepat & Terjangkau</div>
                <h1>Jasa & Template<br><span>Desain Kreatif</span><br>untuk Kamu</h1>
                <p>Ubah momen dan tugas kamu jadi karya visual yang estetik. Solusi desain modern, cepat, dan terjangkau — untuk media sosial, tugas sekolah, hingga perayaan spesial.</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="#katalog" class="btn btn-hero">
                        <i class="bi bi-grid-fill me-2"></i>Lihat Katalog
                    </a>
                    <a href="#tentang" class="btn btn-hero-outline">
                        <i class="bi bi-info-circle me-2"></i>Tentang Kami
                    </a>
                </div>
                <div class="hero-stats">
                    <div>
                        <div class="hero-stat-num">50+</div>
                        <div class="hero-stat-label">Template Tersedia</div>
                    </div>
                    <div>
                        <div class="hero-stat-num">200+</div>
                        <div class="hero-stat-label">Pesanan Selesai</div>
                    </div>
                    <div>
                        <div class="hero-stat-num">100%</div>
                        <div class="hero-stat-label">Kepuasan Pelanggan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KATALOG -->
<section class="section-katalog" id="katalog">
    <div class="container">
        <div class="text-center mb-5">
            <div class="hero-badge d-inline-block" style="background:rgba(46,43,116,0.08);border-color:rgba(46,43,116,0.2);color:var(--primary);">
                <i class="bi bi-collection me-1"></i> Pilihan Layanan
            </div>
            <h2 class="section-title mt-2">Katalog Layanan</h2>
            <p class="section-subtitle">Pilih template yang sesuai kebutuhanmu, pesan, dan siap dalam hitungan jam.</p>
        </div>
        <div class="row g-4" id="katalogContainer">
            <div class="col-12 text-center py-5">
                <div class="spinner-border text-primary" role="status"></div>
                <p class="text-muted mt-3">Memuat katalog...</p>
            </div>
        </div>
    </div>
</section>

<!-- MODAL LIGHTBOX GAMBAR -->
<div class="modal fade" id="modalGambar" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 bg-transparent shadow-none">
            <div class="modal-body p-0 text-center position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" style="z-index:10;"></button>
                <img id="gambarFullsize" src="" class="img-fluid rounded-4" style="max-height:85vh;">
            </div>
        </div>
    </div>
</div>

<!-- TENTANG KAMI -->
<section class="section-tentang" id="tentang">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badge mb-3" style="background:rgba(245,166,35,0.15);border-color:rgba(245,166,35,0.4);">
                    <i class="bi bi-heart-fill me-1"></i> Siapa Kami
                </div>
                <h2 class="tentang-title">Tentang Kami</h2>
                <p class="tentang-text">Kami adalah mitra kreatif yang percaya bahwa desain berkualitas tidak harus mahal. Berawal dari keinginan membantu pelajar, mahasiswa, dan konten kreator pemula, kami menyediakan berbagai pilihan template dan jasa desain kustom yang siap pakai.</p>
                <div class="d-flex gap-4 mt-4">
                    <div>
                        <div class="hero-stat-num">Fast</div>
                        <div class="hero-stat-label">Pengerjaan Cepat</div>
                    </div>
                    <div>
                        <div class="hero-stat-num">Murah</div>
                        <div class="hero-stat-label">Harga Terjangkau</div>
                    </div>
                    <div>
                        <div class="hero-stat-num">Estetik</div>
                        <div class="hero-stat-label">Desain Modern</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-card">
                    <h5><i class="bi bi-chat-dots-fill me-2" style="color:var(--accent);"></i>Hubungi Kami</h5>
                    <div class="contact-item">
                        <i class="bi bi-whatsapp"></i>
                        <div>
                            WhatsApp<br>
                            <a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            Email<br>
                            <a href="mailto:jokiin@email.com">jokiin@email.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-clock-fill"></i>
                        <div>Jam Operasional<br><span style="color:rgba(255,255,255,0.7);">Senin – Minggu, 08.00 – 22.00</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODAL FORM PEMESANAN -->
<div class="modal fade" id="modalPesan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg">
            <div class="modal-header-custom d-flex justify-content-between align-items-center px-4 py-3">
                <h5 class="modal-title fw-bold text-white mb-0">
                    <i class="bi bi-bag-check-fill me-2"></i>Form Pemesanan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4 pb-4 pt-3">
                <div class="info-box d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-muted small mb-1">Layanan dipilih</div>
                        <div class="fw-bold" id="infoLayanan">-</div>
                    </div>
                    <div class="text-end">
                        <div class="text-muted small mb-1">Harga</div>
                        <div class="fw-bold" style="color:var(--accent);font-size:1.1rem;" id="infoHarga">-</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold small">Nama Lengkap</label>
                    <input type="text" id="inputNama" class="form-control" placeholder="Masukkan nama kamu">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold small">Nomor WhatsApp</label>
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="tel" id="inputKontak" class="form-control" placeholder="8xx xxxx xxxx">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold small">
                        Catatan <span class="text-muted fw-normal">(opsional)</span>
                    </label>
                    <textarea id="inputCatatan" class="form-control" rows="3"
                              placeholder="Contoh: warna tema biru, ukuran A4, dll"></textarea>
                </div>
                <button class="btn btn-kirim" onclick="kirimPesanan()">
                    <i class="bi bi-send-fill me-2"></i>Kirim Pesanan
                </button>
                <div id="alertPesan" class="alert mt-3 d-none"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let selectedLayanan = '';
    let selectedHarga   = 0;
    let selectedId      = null;

    async function loadKatalog() {
        try {
            const res  = await fetch('/api/templates');
            const data = await res.json();
            const container = document.getElementById('katalogContainer');

            if (data.length === 0) {
                container.innerHTML = '<div class="col-12 text-center py-5"><p class="text-muted">Belum ada template tersedia.</p></div>';
                return;
            }

            container.innerHTML = data.map(t => {
                const imgSrc = t.gambar ? '/storage/' + t.gambar : 'https://via.placeholder.com/400x250?text=No+Image';
                return `
                <div class="col-md-4 mb-2">
                    <div class="card-custom">
                        <div class="card-img-wrap">
                            <img src="${imgSrc}" alt="${t.judul}"
                                onclick="lihatGambar('${imgSrc}')">
                            <div class="card-img-overlay-btn">
                                <button class="btn btn-sm btn-light rounded-pill px-3 fw-semibold"
                                    onclick="lihatGambar('${imgSrc}')">
                                    <i class="bi bi-zoom-in me-1"></i>Lihat
                                </button>
                            </div>
                        </div>
                        <div class="card-body-custom">
                            <div class="card-title-custom">${t.judul}</div>
                            <div class="card-desc-custom">${t.deskripsi ?? ''}</div>
                            <div class="card-price">Rp ${Number(t.harga).toLocaleString('id-ID')}</div>
                            <button class="btn btn-pesan" onclick="bukaForm('${t.judul}', ${t.harga}, ${t.id})">
                                <i class="bi bi-bag-plus-fill me-1"></i>Pesan
                            </button>
                        </div>
                    </div>
                </div>`;
            }).join('');
        } catch (e) {
            document.getElementById('katalogContainer').innerHTML =
                '<div class="col-12 text-center py-5"><p class="text-danger"><i class="bi bi-exclamation-circle me-2"></i>Gagal memuat katalog.</p></div>';
        }
    }

    function lihatGambar(url) {
        document.getElementById('gambarFullsize').src = url;
        new bootstrap.Modal(document.getElementById('modalGambar')).show();
    }

    function bukaForm(layanan, harga, id = null) {
        selectedLayanan = layanan;
        selectedHarga   = harga;
        selectedId      = id;
        document.getElementById('infoLayanan').textContent = layanan;
        document.getElementById('infoHarga').textContent   = 'Rp ' + Number(harga).toLocaleString('id-ID');
        document.getElementById('inputNama').value    = '';
        document.getElementById('inputKontak').value  = '';
        document.getElementById('inputCatatan').value = '';
        document.getElementById('alertPesan').classList.add('d-none');
        new bootstrap.Modal(document.getElementById('modalPesan')).show();
    }

    async function kirimPesanan() {
        const nama    = document.getElementById('inputNama').value.trim();
        const kontak  = '+62' + document.getElementById('inputKontak').value.trim();
        const catatan = document.getElementById('inputCatatan').value.trim();
        const alertEl = document.getElementById('alertPesan');

        if (!nama || kontak === '+62') {
            alertEl.className = 'alert alert-danger mt-3';
            alertEl.textContent = 'Nama dan nomor WhatsApp wajib diisi!';
            alertEl.classList.remove('d-none');
            return;
        }

        const formData = new FormData();
        formData.append('nama', nama);
        formData.append('kontak', kontak);
        formData.append('layanan', selectedLayanan);
        formData.append('harga', selectedHarga);
        formData.append('catatan', catatan);
        if (selectedId) formData.append('layanan_id', selectedId);

        try {
            const res  = await fetch('/api/order', { method: 'POST', body: formData });
            const data = await res.json();
            alertEl.className = 'alert alert-success mt-3';
            alertEl.textContent = data.message ?? 'Pesanan berhasil dikirim!';
            alertEl.classList.remove('d-none');
            setTimeout(() => {
                bootstrap.Modal.getInstance(document.getElementById('modalPesan')).hide();
            }, 2000);
        } catch (e) {
            alertEl.className = 'alert alert-danger mt-3';
            alertEl.textContent = 'Gagal terhubung ke server.';
            alertEl.classList.remove('d-none');
        }
    }

    loadKatalog();
</script>
</body>
</html>
