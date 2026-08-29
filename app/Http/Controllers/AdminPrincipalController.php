<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminPrincipalController extends Controller
{
    public function index()
    {
        $dir = storage_path('principellogos');
        $files = [];
        if (is_dir($dir)) {
            $items = scandir($dir);
            foreach ($items as $it) {
                if (in_array($it, ['.', '..'])) continue;
                $files[] = $it;
            }
        }

        return view('admin.principals.index', compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'array', 'max:10'],
            'image.*' => ['image', 'mimes:jpg,jpeg,png,webp,avif', 'max:2048'],
        ]);

        $files = $request->file('image', []);
        if (empty($files)) {
            return back()->withErrors(['image' => 'Pilih minimal satu logo principal.']);
        }

        $dir = storage_path('principellogos');
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $uploaded = 0;
        foreach ($files as $file) {
            if (!$file || !$file->isValid()) {
                continue;
            }

            $originalName = preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $name = time() . '-' . ($uploaded + 1) . '-' . $originalName;
            $file->move($dir, $name);
            $uploaded++;
        }

        if ($uploaded === 0) {
            return back()->withErrors(['image' => 'Tidak ada file logo yang valid untuk diunggah.']);
        }

        return back()->with('success', 'Berhasil mengunggah ' . $uploaded . ' logo principal.');
    }

    public function destroy($filename)
    {
        $path = storage_path('principellogos/' . $filename);
        if (file_exists($path)) {
            @unlink($path);
            return back()->with('success', 'Logo dihapus.');
        }
        return back()->with('error', 'File tidak ditemukan.');
    }
}
