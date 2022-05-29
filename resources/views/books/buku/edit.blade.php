@extends('layouts.main');
@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('books.buku.update', $buku->id)}}">
                        @method("PUT")
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="category_id" class="form-control">
                                <option value="">Pilih kategori</option>
                                @foreach($kategori as $row)
                                    <option @if($row->id == $buku->category_id) selected @endif value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input type="text" class="form-control" placeholder="Masukan nama mu" name="name" value="{{ $buku->name }}">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{ $buku->deskripsi }}</textarea>
                              </div>
                            <button type="submit" class="btn btn-primary">simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection