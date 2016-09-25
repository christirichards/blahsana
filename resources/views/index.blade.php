@extends('layouts.app')
@section('content')

<h1 class="page-header">Tasks Overview</h1>

<h2 class="sub-header">All Tasks</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Task Name</th>
        <th>Task ID</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tasks->data as $task)
       <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->id }}</td>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>
</div>
@stop
