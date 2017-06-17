

@extends ('layouts.master')


@section ('content') 

  <section class="jumbotron text-center">

      <div class="container">

        <h1 class="jumbotron-heading">SwitchTasks</h1>

        <p class="lead text-muted"> Your Everyday Task Manager</p>

        <p>
          <a href="/tasks/create" class="btn btn-primary"> Create new task </a>
          <!-- <a href="#" class="btn btn-secondary">Register</a> -->
        </p>
      </div>

      
  </section>

    <div class="album text-muted">

      <div class="container">

           

        <div class="row">

          @foreach ($tasks as $task)

            <div class="card">

              <h2 class="task-title"> 

              <a href="/tasks/{{ $task->id }}"> {{ $task->title }} </a>


              </h2>

              <p class="card-text">{{ $task->body }}</p>

              <p class="card-text">{{ $task->created_at->toFormattedDateString() }}</p>

              <p> 

              <a href="/tasks/{{ $task->id }}" class="btn btn-info">View Task</a>

              <a href="/tasks/{{ $task-> id }}" class="btn btn-primary">Edit Task</a>

              </p>

            </div>

          @endforeach

        </div>

      </div>

    </div>

@endsection