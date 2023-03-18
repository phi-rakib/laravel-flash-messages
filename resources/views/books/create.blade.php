@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <h2>Add New Book</h2>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('books.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">
                                <strong>Name</strong>
                            </label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="author">
                                <strong>Author</strong>
                            </label>
                            <input type="text" class="form-control" name="author">
                        </div>

                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection