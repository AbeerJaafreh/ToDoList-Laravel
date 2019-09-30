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

                    <form action="{{route('tasks.update',$task->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary btn-sm" value="Edit">Edit</button>
                    </form>



                </td>

            </tr>
            @endforeach


        {{--@foreach($tasks as $index=>$task)--}}
        {{--<tr>--}}
            {{--<td>{{$index+1}}</td>--}}
            {{--<td>{{$task->task}}</td>--}}
            {{--<td>--}}
                {{--<button class="btn btn-primary btn-sm">Edit</button>--}}
            {{--</td>--}}
        {{--</tr>--}}
            {{--@endforeach--}}

        </tbody>
    </table>

@endsection
