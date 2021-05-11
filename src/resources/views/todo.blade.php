<x-master>

  @php
  if(isset($location)) {
  if($location->geoplugin_status == 200) {
  $currLocation = $geoplugin_city." - ".$geoplugin_region." - ".$geoplugin_countryName." - ".$geoplugin_continentName;
  } else {
  $currLocation = "Kolkata - West Bengal - India - Asia";
  }
  } else {
  $currLocation = "Kolkata/West Bengal/India/Asia";
  }
  @endphp
  @section('title', 'Todo App - Add Todos')
  <h5>Add TodO</h5>
  <hr>

  <div class="border container">
    <div class="container">
      <form action="/todo" method="post">
        @csrf
        <div class="row">
          <div class="my-3 col-12">
            <span class="mx-2">Title: </span>
            <input value="{{ old('title') }}" name="title" type="text" placeholder="Title">
            @error('title')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12">
            <span class="mx-2">Description: </span>
            <textarea id="" value="{{ old('description') }}" name="description" cols="" placeholder="Description" rows=""></textarea>
            @error('description')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">Location: </span>
            <input type="text" value="{{$currLocation }}" name="location" placeholder="Location">
            @error('location')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">Start Time: </span>
            <input type="text" value="<?php echo date('Y-m-d H:i:s'); ?>" name="starttime" placeholder="Start Time">
            @error('starttime')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
          </div>
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">End Time: </span>
            <input type="text" value="<?php echo date('Y-m-d H:i:s'); ?>" name="endtime" placeholder="End Time">
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
