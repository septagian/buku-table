@extends('layouts.main')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Books
                        <div class="float-end"><a href="{{ route('books.buku.create') }}">Tambah Data</a></div>
                    </div>
                    <div class="card-body">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>nama</th>
                                    <th>category</th>
                                    <th>deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $book->name }}</td>
                                        <td>{{ $book->Category->name }}</td>
                                        <td>{{ $book->deskripsi }}</td>
                                        <td>
                                            <a href="{{ route('books.buku.edit', $book->id) }}" class="btn btn-primary">edit</a>
                                            <a href="{{ route('books.buku.destroy', $book->id) }}" class="btn btn-danger">hapus</a>
                                        </td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection