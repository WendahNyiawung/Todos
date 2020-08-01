@extends('layout.app')

@section('content')
<h1 class="text-center">Create Todos</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create New Todos
            </div>
            <div class="card-body">
                @if ($errors ->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors ->all() as $errors)
                        <li class="list-group-items">
                            {{$errors}}
                        </li>

                        @endforeach
                    </ul>
                </div>

                @endif
                    <form action="/store-todos" method="POST">
                        @csrf
                            <div class="form-group">
                                <input type="text" class="form-control"placeholder="name"  name="name">
                            </div>
                            <div class="form-group">
                                <textarea name="description" id="" cols="5" rows="5" class="form-control"placeholder="description"></textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-success">Create Todos</button>
                            </div>
                        </form>
            </div>
        </div>

    </div>
</div>


@endsection
