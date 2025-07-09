@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Add Product</h3>

        </div>
        <div class="card-body">

    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control w-50"
            placeholder="Enter product name">
        </div>
        <div class="mb-3">
            <input type="file" name="image" class="form-control w-50 mt-3">
        </div>
        <div class="mb-3">
            <input type="file" name="image2" class="form-control w-50 mt-3">
        </div>
        <div class="mb-3">
            <select name="category" class="form-control w-50">
                <option class="form-control w-50" value="Categories" selected disabled>Categories
                    @foreach ($category as $item)
                    <option class="form-control w-50" value="{{$item->cat_name}}" >{{$item->cat_name}}</option>
                    @endforeach
                </option>
            </select>
        </div>
        {{-- <div class="form-check form-switch mt-3">
            <input class="form-check-input" type="checkbox" value="{{$category->sellable}}" name="sellable" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Sellable</label>
        </div> --}}
        <div class="mb-3">
            <input type="text" name="price" class="form-control w-50"
            placeholder="Enter Product price ">
        </div>
        <div class="mb-3">
            <input type="text" name="discount" class="form-control w-50"
            placeholder="Enter Product Discount">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control w-50"
            placeholder="Enter Product description">
        </div>
        <div class="mb-3">
            <input type="text" name="benefit" class="form-control w-50"
            placeholder="Enter Product Benefit ">
        </div>
        <div class="mb-3">
            <input type="text" name="use" class="form-control w-50"
            placeholder="Enter Product use ">
        </div>
        <div class="mb-3">
            <input type="text" name="safety" class="form-control w-50"
            placeholder="Enter Product Safety ">
        </div>
        <div class="mb-3">
            <input type="text" name="ingredient" class="form-control w-50"
            placeholder="Enter Product Ingredient ">
        </div>
        <div class="mb-3">
            <input type="text" name="sideeffect" class="form-control w-50"
            placeholder="Enter Product Sideeffect ">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Product</button>

    </form>

</div>
    </div>
</section>



@include('footer')
