@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0 text-dark">Kategori</h4>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                    Tambah Kategori
                </button>
            </div>

            <div class="table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="btn btn-warning btn-sm text-white" type="button"
                                            data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                            Edit
                                        </button>
                                        <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
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

                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Baru</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('kategori.update', $item->id) }}" method="post">
                                                @csrf
                                                @method('PUT')

                                                <input type="text" name="name" placeholder="Nama Kategori"
                                                    class="form-control mb-3" value="{{ $item->name }}">
                                                <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kategori.store') }}" method="post">
                        @csrf

                        <input type="text" name="name" placeholder="Nama Kategori" class="form-control mb-3">
                        <button class="btn btn-primary" type="submit">Simpan Baru</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
