@extends('layouts.app')
@section('content')

<form action="{{route('tasks.store')}}" method="POST"class="container">
    {{csrf_field()}}

    <div class="form-group ">
        <label for="task">Task :</label>
        <input type="text" class="form-control" name="task" id="task"  placeholder="Enter task">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
