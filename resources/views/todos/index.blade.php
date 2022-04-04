@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ route('todo.create') }}" class="btn btn-outline-primary">Add something</a>

                        <table class="table table-hover table-borderless">
                            <thead>
                                <th scope="col">Item</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        test
                                    </td>
                                    <td>
                                        <a href="" class="btn-sm btn-outline-success">Edit</a>
                                        <a href="" class="btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
