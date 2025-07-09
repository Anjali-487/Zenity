@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Edit Meditation</h3>
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

            <form action="{{ route('meditation.update', $meditation->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name">Meditation Name</label>
                    <input type="text" name="name" class="form-control w-50" value="{{ old('name', $meditation->name) }}" required>
                </div>

                <div class="mb-3">
                    <label>Upload Guided Video</label>
                    <input type="file" name="guided_video" class="form-control w-50 mt-2" accept="video/*">
                    @if ($meditation->guided_video)
                        <p class="mt-2">Current File: <a href="{{ asset('storage/' . $meditation->guided_video) }}" target="_blank">Watch</a></p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control w-50 mt-2" id="title" value="{{ old('title', $meditation->title) }}">
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control w-50 mt-2" id="description">{{ old('description', $meditation->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <select name="breathing_exercise" class="form-control w-50">
                        <option disabled>Select Breathing Exercise</option>
                        <option value="Deep Breathing" {{ $meditation->breathing_exercise == 'Deep Breathing' ? 'selected' : '' }}>Deep Breathing</option>
                        <option value="Box Breathing" {{ $meditation->breathing_exercise == 'Box Breathing' ? 'selected' : '' }}>Box Breathing</option>
                        <option value="Alternate Nostril Breathing" {{ $meditation->breathing_exercise == 'Alternate Nostril Breathing' ? 'selected' : '' }}>Alternate Nostril Breathing</option>
                        <option value="4-7-8 Breathing" {{ $meditation->breathing_exercise == '4-7-8 Breathing' ? 'selected' : '' }}>4-7-8 Breathing</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update Meditation</button>
            </form>
        </div>
    </div>
</section>

@include('footer')
