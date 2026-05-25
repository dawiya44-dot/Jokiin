{{-- resources/views/admin/templates.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Admin — Kelola Template | Jokiin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary: #2E2B74;
            --primary-light: #3d39a0;
            --accent: #f5a623;
            --bg: #f0f2f8;
            --card-bg: #ffffff;
            --text: #1a1a2e;
            --muted: #7b7d9a;
            --danger: #e74c3c;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: var(--primary);
            position: fixed;
            top: 0; left: 0;
            display: flex;
            flex-direction: column;
            padding: 0;
            z-index: 100;
        }

        .sidebar-brand {
            padding: 28px 24px 20px;
            font-size: 1.4rem;
            font-weight: 800;
            color: #fff;
            letter-spacing: -0.5px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-brand span { color: var(--accent); }

        .sidebar-menu {
            padding: 16px 12px;
            flex: 1;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s;
            margin-bottom: 4px;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: rgba(255,255,255,0.12);
            color: #fff;
        }

        .sidebar-menu a.active {
            background: rgba(255,255,255,0.18);
        }

        /* Main content */
        .main {
            margin-left: 240px;
            padding: 32px;
        }

        /* Header */
        .page-header {
            margin-bottom: 28px;
        }

        .page-header h4 {
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0;
            color: var(--text);
        }

        .page-header p {
            color: var(--muted);
            margin: 4px 0 0;
            font-size: 0.9rem;
        }

        /* Card */
        .card-panel {
            background: var(--card-bg);
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(46,43,116,0.07);
            border: none;
        }

        .card-panel .panel-header {
            padding: 20px 24px 0;
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-panel .panel-body { padding: 20px 24px 24px; }

        /* Form inputs */
        .form-control, .form-select {
            border: 1.5px solid #e0e3f0;
            border-radius: 10px;
            font-size: 0.88rem;
            padding: 10px 14px;
            transition: border-color 0.2s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46,43,116,0.08);
        }

        .form-label {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }

        .btn-primary-custom {
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
            font-size: 0.88rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: all 0.2s;
            cursor: pointer;
        }

        .btn-primary-custom:hover {
            background: var(--primary-light);
            transform: translateY(-1px);
        }

        /* Template cards */
        .template-card {
            background: var(--card-bg);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(46,43,116,0.07);
            transition: all 0.25s;
            border: 1.5px solid transparent;
            height: 100%;
        }

        .template-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(46,43,116,0.13);
            border-color: rgba(46,43,116,0.1);
        }

        .template-card img, .template-card .img-placeholder {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .template-card .img-placeholder {
            background: linear-gradient(135deg, #e8eaf5, #d0d4ee);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--muted);
            font-size: 0.8rem;
        }

        .template-card .card-body {
            padding: 14px 16px 8px;
        }

        .template-card .card-title {
            font-size: 0.95rem;
            font-weight: 700;
            margin-bottom: 4px;
            color: var(--text);
        }

        .template-card .card-desc {
            font-size: 0.8rem;
            color: var(--muted);
            margin-bottom: 8px;
        }

        .template-card .card-footer-custom {
            padding: 10px 16px 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .badge-harga {
            background: rgba(245,166,35,0.12);
            color: #c47d00;
            border-radius: 8px;
            padding: 4px 10px;
            font-size: 0.82rem;
            font-weight: 700;
        }

        .badge-kategori {
            background: rgba(46,43,116,0.08);
            color: var(--primary);
            border-radius: 6px;
            padding: 3px 8px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .btn-hapus {
            background: transparent;
            border: 1.5px solid #e74c3c22;
            color: var(--danger);
            border-radius: 8px;
            padding: 5px 12px;
            font-size: 0.8rem;
            font-weight: 600;
            font-family: 'Plus Jakarta Sans', sans-serif;
            cursor: pointer;
            transition: all 0.2s;
            width: calc(100% - 32px);
            margin: 0 16px 14px;
            display: block;
        }

        .btn-hapus:hover {
            background: var(--danger);
            color: #fff;
            border-color: var(--danger);
        }

        /* Alert */
        .alert-custom {
            border-radius: 12px;
            border: none;
            font-size: 0.88rem;
            font-weight: 500;
            padding: 12px 18px;
            margin-bottom: 20px;
        }

        .alert-success-custom {
            background: rgba(39,174,96,0.1);
            color: #1e8449;
        }

        /* Stats bar */
        .stat-pill {
            background: white;
            border-radius: 12px;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 2px 8px rgba(46,43,116,0.07);
        }

        .stat-pill .icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(46,43,116,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .stat-pill .val {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
        }

        .stat-pill .lbl {
            font-size: 0.78rem;
            color: var(--muted);
            font-weight: 500;
        }

        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--muted);
        }

        .empty-state .icon { font-size: 3rem; margin-bottom: 12px; }
        .empty-state p { font-size: 0.95rem; }
    </style>
</head>
<body>

{{-- Sidebar --}}
<div class="sidebar">
    <div class="sidebar-brand">Joki<span>in</span></div>
    <div class="sidebar-menu">
        <a href="/admin/templates" class="active">&nbsp;Template</a>
        <a href="/admin/orders">&nbsp;Pesanan</a>
        <a href="/" target="_blank">&nbsp;Lihat Website</a>
    </div>
</div>

{{-- Main --}}
<div class="main">

    {{-- Header --}}
    <div class="page-header d-flex justify-content-between align-items-start">
        <div>
            <h4>Kelola Template</h4>
            <p>Tambah, kelola, dan hapus template layanan kamu.</p>
        </div>
        <a href="/admin/orders" class="btn btn-sm"
           style="background:white; border:1.5px solid #e0e3f0; border-radius:10px;
                  font-weight:600; font-size:0.85rem; padding:8px 16px; color:var(--primary);">
            Lihat Pesanan
        </a>
    </div>

    {{-- Alert --}}
    @if(session('success'))
        <div class="alert-custom alert-success-custom">
            {{ session('success') }}
        </div>
    @endif

    {{-- Stat --}}
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <div class="stat-pill">
                <div class="icon"><i class="bi bi-grid-fill"></i></div>
                <div>
                    <div class="val">{{ $templates->count() }}</div>
                    <div class="lbl">Total Template</div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="stat-pill">
                <div class="icon"><i class="bi bi-brush-fill"></i></div>
                <div>
                    <div class="val">{{ $templates->where('kategori','jasa')->count() }}</div>
                    <div class="lbl">Jasa</div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="stat-pill">
                <div class="icon"><i class="bi bi-file-earmark-fill"></i></div>
                <div>
                    <div class="val">{{ $templates->where('kategori','template')->count() }}</div>
                    <div class="lbl">Template</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Form Tambah --}}
    <div class="card-panel mb-4">
        <div class="panel-header">&nbsp;Tambah Template Baru</div>
        <div class="panel-body">
            <form method="POST" action="{{ route('admin.templates.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Contoh: Desain Poster Event" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control" placeholder="50000" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-select">
                            <option value="template">Template</option>
                            <option value="jasa">Jasa</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi singkat (opsional)">
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn-primary-custom w-100">
                            + Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Daftar Template --}}
    <div class="row g-3">
        @forelse($templates as $t)
        <div class="col-md-3 col-sm-6">
            <div class="template-card">
                @if($t->gambar)
                    <img src="{{ asset('storage/' . $t->gambar) }}" alt="{{ $t->judul }}">
                @else
                    <div class="img-placeholder">Belum ada gambar</div>
                @endif

                <div class="card-body">
                    <div class="card-title">{{ $t->judul }}</div>
                    <div class="card-desc">{{ $t->deskripsi ?? '-' }}</div>
                    <div class="d-flex gap-2">
                        <span class="badge-harga">Rp {{ number_format($t->harga, 0, ',', '.') }}</span>
                        <span class="badge-kategori">{{ ucfirst($t->kategori) }}</span>
                    </div>
                </div>

                <div class="px-0 pb-0">
                    {{-- FIXED: form hapus yang benar --}}
                    <form method="POST" action="{{ route('admin.templates.destroy', $t->id) }}"
                          onsubmit="return confirm('Hapus template \'{{ $t->judul }}\'?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-hapus">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
            <div class="col-12">
                <div class="empty-state">
                    <div class="icon"></div>
                    <p>Belum ada template. Tambahkan template pertamamu di atas!</p>
                </div>
            </div>
        @endforelse
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
