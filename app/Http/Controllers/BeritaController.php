<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index() {
        $beritas = Berita::latest()->get();
        return view('dashboard.berita', compact('beritas'));
    }

    public function create() {
        return view('berita.create');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('foto')->store('berita_foto', 'public');

        Berita::create([
            'judul' => $request->judul,
            'foto' => $path,
        ]);

        return redirect()->route('home')->with('success', 'Berita berhasil ditambahkan!');
    }
}
