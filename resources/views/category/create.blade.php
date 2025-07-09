@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Add category</h3>

        </div>
        <div class="card-body">

    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <input type="text" name="cat_name" class="form-control w-50"
            placeholder="Enter Category name">
        </div>
        <div class="mb-3">
            <input type="file" name="cat_pic" class="form-control w-50 mt-3">
        </div>
        <div class="form-check form-switch mt-3">
            <input class="form-check-input" type="checkbox" name="sellable" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Sellable</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add category</button>

    </form>

</div>
    </div>
</section>



@include('footer')
