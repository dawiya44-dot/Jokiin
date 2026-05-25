<!DOCTYPE html>
<html>
<head>
    <title>Jokiin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', sans-serif; padding-top: 70px; }
        .navbar { border-radius: 0 0 15px 15px; }
        .nav-link:hover { color: #2E2B74 !important; }
        .hero { background: linear-gradient(to right, #2E2B74, #2E2B74); padding: 100px 0; color: white; }
        .card-custom { border: none; border-radius: 15px; overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1); transition: 0.3s; background: white; }
        .card-custom:hover { transform: translateY(-5px); }
        .btn-custom { background: #2E2B74; border: none; border-radius: 20px; color: white; padding: 8px 20px; }
        .btn-custom:hover { background: #2E2B74; color: white; }
        .section { padding: 60px 0; }
        .bg-light-custom { background: #f5f5f5; }
        .modal-header { background: linear-gradient(to right, #2E2B74, #2E2B74); }
        .btn-kirim { background: #2E2B74; border: none; border-radius: 20px;
            color: white; padding: 8px 24px; width: 100%; }
        .btn-kirim:hover { background: #2E2B74; color: white; }
        .preview-foto { max-height: 150px; object-fit: cover;
            border-radius: 10px; display: none; margin-top: 8px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Jokiin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold">Jasa dan Template Desain</h1>
                <p>Ubah momen dan tugas Anda menjadi karya visual yang estetik. Kami menghadirkan solusi desain cepat, modern, dan sangat terjangkau—khusus untuk kebutuhan media sosial, tugas sekolah, hingga perayaan spesial Anda.</p>
            </div>
        </div>
    </div>
</div>

<!-- Katalog -->
<div class="section bg-light-custom" id="katalog">
    <div class="container text-center">
        <h2 class="mb-5">Katalog Layanan</h2>
        <div class="row" id="katalogContainer">
            <div class="col-12 text-muted">Memuat katalog...</div>
        </div>
    </div>
</div>

<!-- Modal Lightbox -->
<div class="modal fade" id="modalGambar" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 bg-transparent shadow-none">
            <div class="modal-body p-0 text-center">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal"></button>
                <img id="gambarFullsize" src="" class="img-fluid rounded-4" style="max-height:85vh;">
            </div>
        </div>
    </div>
</div>

<div class="section" id="tentang" style="background: #2E2B74">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 style="color: white">Tentang Kami</h2>
                <p style="color: white">Kami adalah mitra kreatif yang percaya bahwa desain berkualitas tidak harus mahal. Berawal dari keinginan untuk membantu pelajar, mahasiswa, dan konten kreator pemula, kami menyediakan berbagai pilihan template dan jasa desain kustom yang siap pakai.</p>
            </div>
            <div class="col-md-6">
                <h5 style="color:white;" class="fw-bold mb-3">Hubungi Kami</h5>
                <p style="color:rgba(255,255,255,0.8);">
                    WhatsApp: <a href="https://wa.me/6281234567890" target="_blank" style="color:#f5a623;">+62 812-3456-7890</a>
                <p style="color:rgba(255,255,255,0.8);">
                    Email: <a href="mailto:jokiin@email.com" style="color:#f5a623;">jokiin@email.com</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Form Pemesanan -->
<div class="modal fade" id="modalPesan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-header rounded-top-4 border-0">
                <h5 class="modal-title fw-bold" style="color: white">Form Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4 pb-4">
                <div class="bg-warning bg-opacity-25 rounded-3 p-3 mb-4">
                    <div class="d-flex justify-content-between">
                        <span class="fw-semibold" id="infoLayanan">-</span>
                        <span class="fw-bold text-warning" id="infoHarga">-</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" id="inputNama" class="form-control rounded-3" placeholder="Masukkan nama kamu">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nomor WhatsApp</label>
                    <div class="input-group">
                        <span class="input-group-text rounded-start-3">+62</span>
                        <input type="tel" id="inputKontak" class="form-control rounded-end-3" placeholder="8xx xxxx xxxx">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Catatan
                        <span class="text-muted fw-normal">(opsional)</span>
                    </label>
                    <textarea id="inputCatatan" class="form-control rounded-3" rows="3"
                              placeholder="Contoh: warna tema biru, ukuran A4, dll"></textarea>
                </div>
                <button class="btn btn-kirim fw-semibold" onclick="kirimPesanan()">
                    Kirim Pesanan
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

    // Load katalog dari Laravel
    async function loadKatalog() {
        try {
            const res  = await fetch('/api/templates');
            const data = await res.json();
            const container = document.getElementById('katalogContainer');

            if (data.length === 0) {
                container.innerHTML = '<p class="text-muted">Belum ada template tersedia.</p>';
                return;
            }

            container.innerHTML = data.map(t => `
                <div class="col-md-4 mb-4">
                    <div class="card-custom">
                        <img src="${t.gambar ? '/storage/' + t.gambar : 'https://via.placeholder.com/300x200'}"
                            style="width:100%; height:180px; object-fit:cover; cursor:pointer;"
                            onclick="lihatGambar('${t.gambar ? '/storage/' + t.gambar : 'https://via.placeholder.com/300x200'}')">
                        <div class="p-3 text-center">
                            <h5 class="fw-bold mb-1">${t.judul}</h5>
                            <p class="text-muted small mb-2">${t.deskripsi ?? ''}</p>
                            <p class="fw-bold text-warning mb-3">
                                Rp ${Number(t.harga).toLocaleString('id-ID')}
                            </p>
                            <button class="btn btn-custom"
                                onclick="bukaForm('${t.judul}', ${t.harga}, ${t.id})">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        } catch (e) {
            document.getElementById('katalogContainer').innerHTML =
                '<p class="text-danger">Gagal memuat katalog.</p>';
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
        document.getElementById('infoHarga').textContent   = 'Rp ' + harga.toLocaleString('id-ID');
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

        // Pakai FormData karena ada file upload
        const formData = new FormData();
        formData.append('nama', nama);
        formData.append('kontak', kontak);
        formData.append('layanan', selectedLayanan);
        formData.append('harga', selectedHarga);
        formData.append('catatan', catatan);
        if (selectedId) formData.append('layanan_id', selectedId);

        try {
            const res = await fetch('/api/order', {
                method: 'POST',
                body: formData
            });

            const data = await res.json();
            alertEl.className = 'alert alert-success mt-3';
            alertEl.textContent = (data.message ?? 'Pesanan berhasil dikirim!');
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

    // Load katalog saat halaman dibuka
    loadKatalog();
</script>

</body>
</html>
