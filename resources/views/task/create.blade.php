@extends('task.layout')

@section('content')


    <div class="container">
        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <div class="mb-3" style="padding-top: 12%;">
                <label for="exampleFormControlTextarea1" class="form-label">Add Tasks</label>
                <textarea class="form-control"  rows="3" name="task"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary">save</button>
            </div>
        </form>
    </div>

@endsection
