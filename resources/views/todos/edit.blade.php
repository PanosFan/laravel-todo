@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update
                        <a href="{{ route('todo.index') }}" class="btn btn-outline-primary">Back</a>
                    </div>
                    <div class="card-body">

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('todo.update', $todo->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="title" class="col-form-label text-md-right">Title</label>

                                <input id="title" type="title" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ $todo->title }}" autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-form-label text-md-right">Description</label>

                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                                    autocomplete="description" ">{{ $todo->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="completed" id="completed"
                                        value="{{ $todo->completed }}" @checked($todo->completed)>

                                    <label class="form-check-label" for="completed">
                                        Completed?
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection