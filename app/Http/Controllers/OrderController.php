<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Template;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Terima pesanan dari HTML (API)
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required|string|max:100',
            'kontak'     => 'required|string|max:20',
            'layanan'    => 'required|string',
            'layanan_id' => 'nullable|integer',
            'harga'      => 'required|integer',
            'catatan'    => 'nullable|string',
            'foto_referensi' => 'nullable|image|max:3072',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto_referensi')) {
            $fotoPath = $request->file('foto_referensi')->store('referensi', 'public');
        }

        Order::create([
            'nama'           => $request->nama,
            'kontak'         => $request->kontak,
            'layanan'        => $request->layanan,
            'layanan_id'     => $request->layanan_id,
            'harga'          => $request->harga,
            'catatan'        => $request->catatan,
            'foto_referensi' => $fotoPath,
            'status'         => 'pending',
            ]);


        return response()->json(['message' => 'Pesanan berhasil dikirim!'], 201);
    }

    // Halaman admin - list semua order
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.orders', compact('orders'));
    }

    // Update status order
    public function updateStatus(Request $request, int $id)
    {
        Order::findOrFail($id)->update(['status' => $request->status]);
        return back()->with('success', 'Status diperbarui');
    }
}
