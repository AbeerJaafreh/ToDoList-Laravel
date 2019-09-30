@extends('layouts.app')
@section('content')

    <form action="{{route('tasks.update',$task->id)}}" method="POST"class="container">
        @method('PATCH')
        @csrf



        <div class="form-group ">
            <label for="task">Task :</label>
            <input type="text" class="form-control" name="task" id="task" value="{{$task->task}}"  >
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>


@endsection
