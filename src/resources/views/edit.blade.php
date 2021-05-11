<x-master>

  @section('title', 'Todo App - Edit Todos')
  <h5>Edit Todo</h5>
  <hr>

  <div class="border container">
    <div class="container">
      <form action="/edit/{{ $todo->id}}" method="post">
        @csrf
        @method('put')
        <div class="row">
          <div class="my-3 col-12">
            <span class="mx-2">Title: </span>
            <input value="{{ $todo->title }}" name="title" type="text" placeholder="Title">
            @error('title')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12">
            <span class="mx-2">Description: </span>
            <textarea id="" name="description" cols="" placeholder="Description" rows="">{{ $todo->description }}</textarea>
            @error('description')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">Location: </span>
            <input type="text" value="{{ $todo->location }}" name="location" placeholder="Location">
            @error('location')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">Start Time: </span>
            <input type="text" value="{{ $todo->starttime }}" name="starttime" placeholder="Start Time">
            @error('starttime')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">End Time: </span>
            <input type="text" value="{{ $todo->endtime }}" name="endtime" placeholder="End Time">
            @error('endtime')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <button class="btn btn-primary">Submit</button>
      </form>
      @if (session('status'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('status') }}
      </div>
      @endif
    </div>
  </div>

</x-master>

