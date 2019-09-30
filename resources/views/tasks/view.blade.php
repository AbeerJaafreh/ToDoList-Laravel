@extends('layouts.app')
@section('content')

    <table class="table table-sm container ">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $index=>$task)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$task->task}}</td>
                <td>
                    <form action="{{route('tasks.destroy',$task->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>

                    <a href="{{route('tasks.edit',$task->id)}}" class="btn btn-primary">Edit</a>



                </td>

            </tr>
            @endforeach



        </tbody>
    </table>
    <a href="{{route('tasks.create')}}" class="btn btn-outline-dark">Back</a>


@endsection
