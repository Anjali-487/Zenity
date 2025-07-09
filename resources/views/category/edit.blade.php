@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Edit category</h3>

        </div>
        <div class="card-body">

    <form action="{{route('category.update',$category->_id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" name="cat_name" value="{{$category->cat_name}}" class="form-control w-50"
            placeholder="Enter Category name">
        </div>
        <div class="mb-3">
            <input type="file" name="cat_pic" class="form-control w-50 mt-3">
        </div>
        <div class="form-check form-switch mt-3">
            @if ($category->sellable=="on")
            <input class="form-check-input" type="checkbox" name="sellable" role="switch" id="flexSwitchCheckChecked" checked>
                
            @else
            <input class="form-check-input" type="checkbox" name="sellable" role="switch" id="flexSwitchCheckChecked" >
                
            @endif
            <label class="form-check-label" for="flexSwitchCheckChecked">Sellable</label>
          </div>
        <button type="submit" class="btn btn-primary mt-3">Update category</button>

    </form>

</div>
    </div>
</section>



@include('footer')
