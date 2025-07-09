@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Add Banner</h3>

        </div>
        <div class="card-body">

    <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <input type="text" name="banner_name" class="form-control w-50"
            placeholder="Enter banner title"/>
        </div>
        <div class="mb-3">
            <input type="file" name="banner_pic" class="form-control w-50 mt-3"/>
        </div>
        <div class="form-check form-switch mt-3">
            <input class="form-check-input" type="checkbox" name="status" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
          </div>
        <button type="submit" class="btn btn-primary mt-3">Add Banner</button>

    </form>

</div>
    </div>
</section>



@include('footer')
