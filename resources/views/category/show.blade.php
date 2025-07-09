@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Category Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Category Image -->
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $category->cat_pic) }}" alt="{{ $category->cat_name }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">{{ $category->cat_name }}</h5>

                    <p class="card-text"><strong>Sellable:</strong>
                        @if($category->sellable)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </p>

                    <a href="{{ url('category') }}" class="btn btn-primary mt-3">Back to Categories</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
