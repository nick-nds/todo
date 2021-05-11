<x-master>
  @section('title', 'Todo App - Homepage')
  <div class="container">
      @if (session('status'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('status') }}
      </div>
      @endif
    <div class="row">
      @foreach ($data as $todo)
      <div class="col-12 col-md-4 card border-0" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">{{ $todo->title }}</h4>
          <p class="card-text">{{ $todo->description }}</p>
          <p>
            <span><b>Added on: </b> {{ $todo->created_at }}</span>
          </p>
          <p>
            <span><b>Start Time: </b> {{ $todo->starttime }}</span>
          </p>
          <p>
            <span><b>End Time: </b> {{ $todo->endtime }}</span>
          </p>
          <form action="delete/{{ $todo->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-link p-0 m-0 float-left">Mark Complete</button>
          </form>
          <a class="float-right mr-2" href="/edit/{{ $todo->id }}">Edit</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</x-master>
