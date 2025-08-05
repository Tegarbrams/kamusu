<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $komentar = Comment::with('user')->latest()->get();
        $beritas = Berita::latest()->get();
        return view('partials.content', compact('komentar', 'beritas'));


    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required|string|max:1000',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'isi' => $request->isi,
        ]);

        return redirect()->route('dashboard')->with('success', 'Komentar berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required|string|max:1000',
        ]);

        $komentar = Comment::findOrFail($id);

        // pastikan hanya user yang membuat komentar bisa mengedit
        if ($komentar->user_id != Auth::id()) {
            abort(403);
        }

        $komentar->update([
            'isi' => $request->isi,
        ]);

        return redirect()->route('/')->with('success', 'Komentar berhasil diupdate.');
    }

    public function destroy($id)
    {
        $komentar = Comment::findOrFail($id);

        if ($komentar->user_id != Auth::id()) {
            abort(403);
        }

        $komentar->delete();

        return redirect()->route('/')->with('success', 'Komentar berhasil dihapus.');
    }
}
