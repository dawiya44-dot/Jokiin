{{-- resources/views/admin/orders.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Admin — Pesanan | Jokiin</title>
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
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: var(--primary);
            position: fixed;
            top: 0; left: 0;
            display: flex;
            flex-direction: column;
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
            background: rgba(255,255,255,0.15);
            color: #fff;
        }

        .main {
            margin-left: 240px;
            padding: 32px;
        }

        .page-header h4 {
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0;
        }

        .page-header p {
            color: var(--muted);
            margin: 4px 0 0;
            font-size: 0.9rem;
        }

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
            width: 40px; height: 40px;
            border-radius: 10px;
            background: rgba(46,43,116,0.1);
            display: flex; align-items: center; justify-content: center;
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

        .card-panel {
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(46,43,116,0.07);
            overflow: hidden;
        }

        .card-panel .panel-header {
            padding: 18px 24px;
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--primary);
            border-bottom: 1px solid #f0f2f8;
        }

        table { width: 100%; border-collapse: collapse; }

        thead tr {
            background: #f8f9ff;
        }

        thead th {
            padding: 12px 16px;
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #eef0f8;
            white-space: nowrap;
        }

        tbody tr {
            border-bottom: 1px solid #f0f2f8;
            transition: background 0.15s;
        }

        tbody tr:hover { background: #fafbff; }
        tbody tr:last-child { border-bottom: none; }

        tbody td {
            padding: 14px 16px;
            font-size: 0.88rem;
            vertical-align: middle;
        }

        .badge-status {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 600;
            white-space: nowrap;
        }

        .status-pending   { background: #fff3cd; color: #856404; }
        .status-proses    { background: #cfe2ff; color: #0a58ca; }
        .status-selesai   { background: #d1e7dd; color: #0f5132; }
        .status-batal     { background: #f8d7da; color: #842029; }

        .btn-status {
            border: none;
            border-radius: 8px;
            padding: 5px 12px;
            font-size: 0.78rem;
            font-weight: 600;
            font-family: 'Plus Jakarta Sans', sans-serif;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-proses  { background: #cfe2ff; color: #0a58ca; }
        .btn-selesai { background: #d1e7dd; color: #0f5132; }
        .btn-batal   { background: #f8d7da; color: #842029; }

        .btn-proses:hover  { background: #0a58ca; color: white; }
        .btn-selesai:hover { background: #0f5132; color: white; }
        .btn-batal:hover   { background: #842029; color: white; }

        .foto-thumb {
            width: 48px; height: 48px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .foto-thumb:hover { transform: scale(1.1); }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--muted);
        }

        .empty-state .icon { font-size: 3rem; margin-bottom: 12px; }

        .alert-custom {
            border-radius: 12px;
            border: none;
            font-size: 0.88rem;
            font-weight: 500;
            padding: 12px 18px;
            margin-bottom: 20px;
            background: rgba(39,174,96,0.1);
            color: #1e8449;
        }

        /* Modal foto */
        .foto-modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.7);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .foto-modal-overlay.show { display: flex; }

        .foto-modal-overlay img {
            max-width: 90vw;
            max-height: 85vh;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
        }

        .foto-modal-overlay .close-btn {
            position: absolute;
            top: 20px; right: 24px;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            line-height: 1;
        }
    </style>
</head>
<body>

{{-- Sidebar --}}
<div class="sidebar">
    <div class="sidebar-brand">Joki<span>in</span></div>
    <div class="sidebar-menu">
        <a href="/admin/templates">&nbsp;Template</a>
        <a href="/admin/orders" class="active">&nbsp;Pesanan</a>
        <a href="/" target="_blank">&nbsp;Lihat Website</a>
    </div>
</div>

{{-- Main --}}
<div class="main">

    <div class="page-header d-flex justify-content-between align-items-start mb-4">
        <div>
            <h4>Daftar Pesanan</h4>
            <p>Kelola dan update status pesanan dari pelanggan.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="alert-custom">{{ session('success') }}</div>
    @endif

    {{-- Stats --}}
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <div class="stat-pill">
                <div class="icon"><i class="bi bi-box"></i></div>
                <div>
                    <div class="val">{{ $orders->count() }}</div>
                    <div class="lbl">Total Pesanan</div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="stat-pill">
                <div class="icon"><i class="bi bi-clock"></i></div>
                <div>
                    <div class="val">{{ $orders->where('status','pending')->count() }}</div>
                    <div class="lbl">Pending</div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="stat-pill">
                <div class="icon"><i class="bi bi-arrow-repeat"></i></div>
                <div>
                    <div class="val">{{ $orders->where('status','proses')->count() }}</div>
                    <div class="lbl">Diproses</div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="stat-pill">
                <div class="icon"><i class="bi bi-check-circle"></i></div>
                <div>
                    <div class="val">{{ $orders->where('status','selesai')->count() }}</div>
                    <div class="lbl">Selesai</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel --}}
    <div class="card-panel">
        <div class="panel-header">&nbsp;Semua Pesanan</div>
        @if($orders->count() > 0)
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Layanan</th>
                        <th>Harga</th>
                        <th>Catatan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $i => $order)
                    <tr>
                        <td class="text-muted">{{ $i + 1 }}</td>
                        <td><strong>{{ $order->nama }}</strong></td>
                        <td>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $order->kontak) }}"
                               target="_blank"
                               style="color: #25d366; font-weight:600; text-decoration:none; font-size:0.85rem;">
                                {{ $order->kontak }}
                            </a>
                        </td>
                        <td>{{ $order->layanan }}</td>
                        <td style="font-weight:700; color:#c47d00;">
                            Rp {{ number_format($order->harga, 0, ',', '.') }}
                        </td>
                        <td style="max-width:160px; color:var(--muted);">
                            {{ $order->catatan ?? '-' }}
                        </td>
                        <td>
                            <span class="badge-status status-{{ $order->status ?? 'pending' }}">
                                {{ ucfirst($order->status ?? 'pending') }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-1">
                                @if(($order->status ?? 'pending') !== 'proses')
                                <form method="POST" action="{{ route('admin.orders.status', $order->id) }}">
                                    @csrf @method('PATCH')
                                    <input type="hidden" name="status" value="proses">
                                    <button type="submit" class="btn-status btn-proses">Proses</button>
                                </form>
                                @endif
                                @if(($order->status ?? 'pending') !== 'selesai')
                                <form method="POST" action="{{ route('admin.orders.status', $order->id) }}">
                                    @csrf @method('PATCH')
                                    <input type="hidden" name="status" value="selesai">
                                    <button type="submit" class="btn-status btn-selesai">Selesai</button>
                                </form>
                                @endif
                                @if(($order->status ?? 'pending') !== 'batal')
                                <form method="POST" action="{{ route('admin.orders.status', $order->id) }}">
                                    @csrf @method('PATCH')
                                    <input type="hidden" name="status" value="batal">
                                    <button type="submit" class="btn-status btn-batal">Batal</button>
                                </form>
                                @endif
                            </div>
                        </td>
                        <td style="color:var(--muted); font-size:0.8rem; white-space:nowrap;">
                            {{ $order->created_at->format('d M Y, H:i') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <div class="empty-state">
                <div class="icon"></div>
                <p>Belum ada pesanan masuk.</p>
            </div>
        @endif
    </div>

</div>

{{-- Modal foto --}}
<div class="foto-modal-overlay" id="fotoModal" onclick="tutupFoto()">
    <span class="close-btn" onclick="tutupFoto()">×</span>
    <img id="fotoModalImg" src="">
</div>

<script>
    function lihatFoto(url) {
        document.getElementById('fotoModalImg').src = url;
        document.getElementById('fotoModal').classList.add('show');
    }

    function tutupFoto() {
        document.getElementById('fotoModal').classList.remove('show');
    }
</script>

</body>
</html>
