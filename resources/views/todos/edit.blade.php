@extends('layout.app')

@section('content')
<h1 class="text-center">Create Todos</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
               Edit todo
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
                    <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                        @csrf
                            <div class="form-group">
                                <input type="text" class="form-control"placeholder="name"  name="name" value="{{$todo->name}}">
                            </div>
                            <div class="form-group">
                                <textarea name="description" id="" cols="5" rows="5" class="form-control"placeholder="description" >{{$todo->description}}</textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-success">Update todo</button>
                            </div>
                        </form>
            </div>
        </div>

    </div>
</div>


@endsection
