@extends('layouts.admin')

@section('title', 'Tambah Principle Logo')
@section('page-title', 'Tambah Principle Logo')

@section('styles')
<style>
  .card { background: #fff; border: 1px solid #e5e7eb; border-radius: 1rem; padding: 1.5rem; box-shadow: 0 8px 20px rgba(15, 118, 110, 0.06); }
  .form-group { margin-bottom: 1rem; }
  .form-label { display: block; margin-bottom: 0.45rem; font-weight: 700; color: #1f2937; }
  .form-control { width: 100%; padding: 0.7rem 0.9rem; border: 1.5px solid #d1d5db; border-radius: 0.5rem; background: #fafafa; transition: all 0.2s; }
  .form-control:focus { outline: none; border-color: #0f766e; box-shadow: 0 0 0 3px rgba(20,184,166,0.10); background: #fff; }
  .form-errors { margin-top: 0.35rem; color: #dc2626; font-size: 0.8rem; }
  .btn { display: inline-flex; align-items: center; justify-content: center; padding: 0.7rem 1.25rem; border-radius: 0.5rem; text-decoration: none; border: none; font-weight: 700; cursor: pointer; }
  .btn-primary { background: linear-gradient(135deg, #0f766e 0%, #14b8a6 35%, #2563eb 100%); color: #fff; }
  .btn-secondary { background: #f3f4f6; color: #374151; border: 1px solid #e5e7eb; }
</style>
@endsection

@section('content')

<div class="mb-6">
  <a href="{{ route('admin.produk.index') }}" class="text-sm text-indigo-600 hover:underline">← Kembali ke daftar</a>
  <h3 class="mt-3 text-2xl font-semibold text-gray-800">Tambah Logo Mitra</h3>
</div>

<form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card" style="max-width:880px;">
    <div class="form-group">
      <label class="form-label">Nama Mitra</label>
      <input type="text" name="nama_obat" value="{{ old('nama_obat') }}" required class="form-control">
      @error('nama_obat') <div class="form-errors">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
      <label class="form-label">Foto Logo (opsional, bisa banyak sampai 10 file)</label>
      <input type="file" id="fileInput" name="gambar[]" accept="image/*" multiple class="form-control" style="padding:0.4rem;" />
      <div style="font-size:0.85rem;color:#6b7280;margin-top:0.4rem;">Maks 10 file sekaligus. Maks 2MB per file. Format: jpg, png, webp.</div>
      @error('gambar') <div class="form-errors">{{ $message }}</div> @enderror
      @error('gambar.*') <div class="form-errors">{{ $message }}</div> @enderror
    </div>

    <div style="display:flex;gap:0.5rem;">
      <button class="btn btn-primary" type="submit">Simpan</button>
      <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Batal</a>
    </div>
  </div>
</form>

@endsection




