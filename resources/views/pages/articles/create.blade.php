@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h4 class="mb-5">Create New Articles</h4>
    {{-- <a href="{{ route('artikel.index') }}" class="btn-simpan rounded-2 p-2">Go Back</a> --}}
    <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="mb-3">
            <label for="category_id">Category Name</label>
            <select name="category_id" id="category_id" class="form-control shadow-none" required>
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="cover">Image</label>
            <input type="file" accept="image/*" name="cover" class="form-control" id="cover" required>
        </div>
        <div class="d-flex align-items-center gap-3">
            <button class="btn-simpan rounded-2 p-2 px-3" type="submit">Save New Data</button>
            <a href="{{route('artikel.index')}}" class="btn btn-light px-3">Back</a>
        </div>
