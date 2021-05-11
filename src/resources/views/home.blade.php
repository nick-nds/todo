<x-master>

  <h5>Add TodO</h5>
  <hr>

  <div class="border container">
    <div class="container">
      <form action="/todo" method="post">
        @csrf
        <div class="row">
          <div class="my-3 col-12">
            <span class="mx-2">Title: </span>
            <input name="title" type="text" placeholder="Title">
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12">
            <span class="mx-2">Description: </span>
            <textarea id="" name="description" cols="" placeholder="Description" rows=""></textarea>
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">Location: </span>
            <input type="text" name="location" placeholder="Location">
          </div>
        </div>
        <div class="row">
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">Start Time: </span>
            <input type="text" value="<?php echo date('Y-m-d H:i:s'); ?>" name="starttime" placeholder="Start Time">
          </div>
          <div class="my-3 col-12 col-md-6">
            <span class="mx-2">End Time: </span>
            <input type="text" value="<?php echo date('Y-m-d H:i:s'); ?>" name="endtime" placeholder="End Time">
          </div>
        </div>
        <button class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

</x-master>
