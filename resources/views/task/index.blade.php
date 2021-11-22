@extends('task.layout')

   @section('content')
       <div class="jumbotron container">
           <p class="container" style="padding-top: 8%;margin-left:45%; color: #1a202c;font-size: xxx-large;">Welcome</p>

       </div>

       <div class="container"  style="padding-top: 10%;">
           <table class="table">
               <thead>
               <tr>
                   <th scope="col">#</th>
                   <th scope="col">Tasks</th>
                   <th scope="col" width="300px">Action</th>
               </tr>
               </thead>
               <tbody>
               @php
               $i=0;
               @endphp
               @foreach($tasks as $item)
                   <tr>
                       <th scope="row">{{++$i}}</th>
                       <td>{{ $item->task }}</td>
                       <td>

                           <div class="row">
                               <div class="col">
                                   <a class="btn btn-danger" href="{{ route('task.create') }}">creat</a>
                               </div>
                               <div class="col">
                                   <a class="btn btn-danger" href="{{route('task.show',$item->id)}}">show</a>
                               </div>
                               <div class="col">
                                   <form action="{{ route('task.destroy',$item->id) }}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-danger">Delete</button>
                                   </form>
                               </div>
                           </div>
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
           {!! $tasks->links() !!}

       </div>

   @endsection
