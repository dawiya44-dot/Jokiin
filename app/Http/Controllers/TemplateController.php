<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function index()
    {
        $templates = Template::latest()->get();
        return response()->json($templates);
    }

    public function adminIndex()
    {
        $templates = Template::latest()->get();
        return view('admin.templates', compact('templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required|string|max:100',
            'harga'     => 'required|integer',
            'kategori'  => 'required|string',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('templates', 'public');
        }

        Template::create([
            'judul'     => $request->judul,
            'harga'     => $request->harga,
            'kategori'  => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $gambarPath,
        ]);

        return back()->with('success', 'Template berhasil ditambahkan!');
    }

    public function destroy(int $id)
    {
        Template::findOrFail($id)->delete();
        return back()->with('success', 'Template berhasil dihapus!');
    }
}
