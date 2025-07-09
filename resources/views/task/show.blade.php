@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Task Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Task Image -->
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $task->image) }}" alt="Task Image" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    {{-- <p class="card-text"><strong>Name:</strong> {{ $task->name }}</p> --}}
                    {{-- <p class="card-text"><strong>Emotion:</strong> {{ $task->emotion }}</p> --}}
                    <p class="card-text"><strong>Description:</strong> {{ $task->description }}</p>

                    <a href="{{ url('task') }}" class="btn btn-primary mt-3">Back to Tasks</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
