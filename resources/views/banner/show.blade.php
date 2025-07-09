@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Banner Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Banner Image -->
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $banner->banner_pic) }}" alt="{{ $banner->banner_name }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">{{ $banner->banner_name }}</h5>
                    
                    <p class="card-text"><strong>Status:</strong> 
                        @if($banner->status)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </p>

                    <a href="{{ url('banner') }}" class="btn btn-primary mt-3">Back to Banners</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
