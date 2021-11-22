@extends('task.layout')

@section('content')

    <div class="container" style="padding-top: 2%">


            <div class="from-group">
                <label for="exampleFormControlTextarea1"> this task: {{ $task->task }} </label>

            </div>


    </div>

@endsection
