@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Add sleepingaid</h3>

        </div>
        <div class="card-body">

    <form action="{{route('sleepingaid.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
    
        <div class="mb-3">
            <input type="file" name="audio_pic" class="form-control w-50 mt-3">
        </div>

        <div class="mb-3">
            <input type="text" name="title" class="form-control w-50"
            placeholder="Enter sleepingaid name">
        </div>

        <div class="mb-3">
            <label>Audios</label>
            <input type="file" name="audios" class="form-control w-50 mt-2" accept="audio/*" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add SleepingAid</button>

    </form>

</div>
    </div>
</section>



@include('footer')
