
@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Product Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Product Image -->
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $data->image) }}" alt="{{ $data->name }}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <p class="card-text"><strong>Description:</strong> {{ $data->description }}</p>
                    <p class="card-text"><strong>Price:</strong> {{ $data->price }}</p>
                    <p class="card-text"><strong>Discount:</strong> {{ $data->discount }}</p>

                    <!-- Optionally, display the discounted price -->
                    {{-- @if($data->discount > 0)
                        <p class="card-text text-muted">
                            <small><del>${{ ($data->price) }}</del></small>
                        </p>
                        <p class="card-text">
                            <strong>Discounted Price:</strong> ${{ $data->discount }}
                        </p>
                    @endif --}}

                    <p class="card-text"><strong>Category:</strong> {{ $data->category }}</p>
                    <p class="card-text"><strong>Benefits:</strong> {{ $data->benefit }}</p>
                    <p class="card-text"><strong>Usage:</strong> {{ $data->use }}</p>
                    <p class="card-text"><strong>Safety:</strong> {{ $data->safety }}</p>
                    <p class="card-text"><strong>Ingredients:</strong> {{ $data->ingredient }}</p>
                    <p class="card-text"><strong>Side Effects:</strong> {{ $data->sideeffect }}</p>

                    <a href="{{ route('product.index') }}" class="btn btn-primary mt-3">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')

