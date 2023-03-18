@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <h2>All Books</h2>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Book Name</th>
                                <th scope="col">Author Name</th>
                                <th scope="col" colspan="3">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                                @foreach ($books as $book)
                                <tr>
                                    <th scope="row">{{ $book->id }}</th>
                                    <td scope="row">{{ $book->name }}</td>
                                    <td scope="row">{{ $book->author }}</td>
                                    <td scope="row">
                                        <div class="btn-group">
                                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary btn-sm ">show</a>
                                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm confirm-delete" data-href="{{ route('books.destroy', $book->id) }}">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12">
            {{ $books->links() }}
        </div>

        @include('modals.delete-modal')
    </div>
@endsection