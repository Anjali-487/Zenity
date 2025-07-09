@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Add Meditation</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('meditation.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control w-50" placeholder="Enter Meditation Name" required>
                </div>

                <div class="mb-3">
                    <label>Upload Guided Video</label>
                    <input type="file" name="guided_video" class="form-control w-50 mt-2" accept="video/*" required>
                </div>

                <div class="mb-3">
                    <label for="title">Title</label>
                     <input type="text" name="title" class="form-control w-50 mt2" id="title" value="{{ old('title', $meditation->title ?? '') }}">
                    </div>
                    
                    <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control w-50 mt-2" id="description">{{ old('description', $meditation->description ?? '') }}</textarea>
                    </div>

                <div class="mb-3">
                    <select name="breathing_exercise" class="form-control w-50">
                        <option disabled selected>Select Breathing Exercise</option>
                        <option>Deep Breathing</option>
                        <option>Box Breathing</option>
                        <option>Alternate Nostril Breathing</option>
                        <option>4-7-8 Breathing</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add Meditation</button>
            </form>
        </div>
    </div>
</section>

@include('footer')
