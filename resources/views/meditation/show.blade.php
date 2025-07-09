@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Meditation Details</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $meditation->title }}</h5>
            <p class="card-text"><strong>Name:</strong> {{ $meditation->name }}</p>
            <p class="card-text"><strong>Breathing Exercise:</strong> {{ $meditation->breathing_exercise }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $meditation->description ?? 'N/A' }}</p>

            <p class="card-text mt-4"><strong>Guided Video:</strong></p>
            <video width="70%" height="auto" controls>
                <source src="{{ asset('storage/' . $meditation->guided_video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p>
            <a href="{{ url('meditation') }}" class="btn btn-primary mt-4">Back to Meditations</a></p>
        </div>
    </div>
</section>

@include('footer')
