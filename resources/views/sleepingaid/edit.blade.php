@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Edit sleepingaid</h3>

        </div>
        <div class="card-body">

    <form action="{{route('sleepingaid.update',$sleepingaid->_id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <input type="file" name="audio_pic" value="{{$sleepingaid->audio_pic}}" class="form-control w-50 mt-3">
        </div>

        <div class="mb-3">
            <input type="text" name="title" value="{{$sleepingaid->title}}" class="form-control w-50"
            placeholder="Enter sleepingaid name">
        </div>
        
        <div class="mb-3">
            <label>Audios</label>
            <input type="file" name="audios" value="{{$sleepingaid->audios}}" class="form-control w-50 mt-2" accept="audio/*">
            @if ($sleepingaid->audios)
                <p class="mt-2">Current File: <a href="{{ asset('uploads/' . $sleepingaid->audios) }}" target="_blank">Listen</a></p>
            @endif
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update sleepingaid</button>

    </form>

</div>
    </div>
</section>



@include('footer')
