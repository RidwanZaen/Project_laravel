@extends('layouts/main')
@section('container')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Pembelian</h5>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('store') }}" method="POST">
                @method('POST')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="example-todo-title">Username</label>
                    <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter username" required>
                    <small id="emailHelp" class="form-text text-muted">Username minimal berisi 5 karakter.</small>
                </div>

                <div class="form-group">
                    <label for="example-todo-desc">Judul Film</label>
                    <textarea name="description" rows="1" class="form-control" id="example-todo-desc" aria-describedby="emailHelp" placeholder="Enter the Movie Title">{{ old('description') }}</textarea>
                    <small id="emailHelp" class="form-text text-muted">Judul film yang akan kamu beli di website ini.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection