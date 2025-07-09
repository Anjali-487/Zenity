@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Therapist Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Therapist Image -->
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $therapist->image) }}" alt="{{ $therapist->name }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">{{ $therapist->name }}</h5>
                    <p class="card-text"><strong>Title:</strong> {{ $therapist->title }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $therapist->desc }}</p>
                    <p class="card-text"><strong>Session Duration:</strong> {{ $therapist->session }} mins</p>
                    <p class="card-text"><strong>Area of Expertise:</strong> {{ $therapist->area }}</p>
                    <p class="card-text"><strong>Fees:</strong> ₹{{ $therapist->fees }}</p>
                    <p class="card-text"><strong>Experience:</strong> {{ $therapist->experience }} years</p>
                    <p class="card-text"><strong>Email:</strong> {{ $therapist->email }}</p>

                    <a href="{{ url('therapist') }}" class="btn btn-primary mt-3">Back to Therapists</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
