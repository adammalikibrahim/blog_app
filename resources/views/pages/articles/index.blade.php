@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0 text-dark">Artikel</h4>
                <a href="{{ route('artikel.create') }}" class="btn btn-primary" type="button">
                    Tambah Artikel
                </a>
            </div>

            @if ($items->count() > 0)
                <div class="table-responsive mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Artikel</th>
                                <th>Kategori Artikel</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="{{ route('artikel.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm text-white">
                                                Edit
                                            </a>
                                            <form action="{{ route('artikel.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm text-white" type="submit"
                                                    onclick="return confirm('Temenan?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-danger text-center mt-5">Belum Ada Artikel</p>
            @endif
        </div>
    </section>
@endsection
