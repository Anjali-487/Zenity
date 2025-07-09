@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Sleeping Aid Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Audio Image -->
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $sleepingaid->audio_pic) }}" alt="{{ $sleepingaid->title }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">{{ $sleepingaid->title }}</h5>

                    <p class="card-text"><strong>Audio File:</strong></p>
                    <audio controls class="w-100">
                        <source src="{{ asset('sounds/' . $sleepingaid->audios) }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>

                    <a href="{{ url('sleepingaid') }}" class="btn btn-primary mt-4">Back to Sleeping Aids</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
