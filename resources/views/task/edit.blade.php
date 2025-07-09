@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Edit Task</h3>

        </div>
        <div class="card-body">

    <form action="{{route('task.update',$task->_id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        {{-- <div class="mb-3">
            <input type="text" name="name" class="form-control w-50" value="{{$task->name}}"
            placeholder="Enter Task name">
        </div> --}}
        <div class="mb-3">
            <input type="file" name="image" class="form-control w-50 mt-3" value="{{$task->image}}">
        </div>
        {{-- <div class="mb-3">
            <select name="emotion" class="form-control w-50" value="{{$task->emotion}}">
                <option class="form-control w-50" disabled selected>Show us What You Feel</option>
                <option class="form-control w-50">Anger</option>
                <option class="form-control w-50">Sadness</option>
                <option class="form-control w-50">Happiness</option>
                <option class="form-control w-50">Shame</option>
                <option class="form-control w-50">Anxiety</option>
            </select>
        </div> --}}
        <div class="mb-3">
            <input type="text" name="description" class="form-control w-50" value="{{$task->description}}"
            placeholder="Enter Task Desc">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Task</button>

    </form>

</div>
    </div>
</section>



@include('footer')
