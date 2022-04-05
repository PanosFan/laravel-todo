@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Todos
                        <a href="{{ route('todo.create') }}" class="btn btn-outline-primary">Add something</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <th scope="col">Todos</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </thead>
                            <tbody>
                                @forelse ($todos as $todo)
                                    <tr>
                                        @if ($todo->completed)
                                            <td class="lead"> <s>{{ $todo->title }}</s></td>
                                            <td>
                                                <s>{{ $todo->description }}</s>
                                            </td>
                                        @else
                                            <td class="lead"> {{ $todo->title }}</td>
                                            <td>
                                                {{ $todo->description }}
                                            </td>
                                        @endif

                                        <td>
                                            <form action="{{ route('todo.destroy', $todo->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('todo.edit', $todo->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <button type="submit" class="btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>
                                            No todos
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
