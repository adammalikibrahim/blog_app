@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0 text-dark">Edit Artikel</h4>
                <a href="{{ route('artikel.index') }}" class="btn btn-light" type="button">
                    Go Back
                </a>
            </div>

            <form action="{{ route('artikel.update', $item->id) }}" method="post" enctype="multipart/form-data"
                class="mt-5">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="category">Pilih Kategori</label>
                    <select name="category_id" id="category" class="form-control shadow-none">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'SELECTED' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title">Judul Artikel</label>
                    <input type="text" class="form-control shadow-none" name="title" id="title"
                        value="{{ $item->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="cover">Cover Artikel</label>
                    <input type="file" accept="image/*" class="form-control shadow-none" name="cover" id="cover">
                    <span class="text-secondary">Pilih gambar jika kamu ingin menggantinya.</span>
                </div>
                <div class="mb-3">
                    <label for="body">Body/Isi Artikel</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control shadow-none">{{ $item->body }}</textarea>
                </div>

                <button class="btn btn-primary px-4" type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </section>
@endsection
