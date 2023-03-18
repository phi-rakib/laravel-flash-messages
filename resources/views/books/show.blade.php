@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <h2>Show Book</h2>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Book</th>
                            <td>{{ $book->name }}</td>
                        </tr>
                        <tr>
                            <th>Author</th>
                            <td>{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $book->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection