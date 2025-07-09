@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Add Coupon</h3>

        </div>
        <div class="card-body">

    <form action="{{route('coupon.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <input type="text" name="c_code" class="form-control w-50 mt-3"
            placeholder="Enter Coupon code">
        </div>
        <div class="mb-3">
            <textarea type="text" name="c_desc" class="form-control w-50 mt-3"
            placeholder="Enter Coupon description"></textarea>
        </div>
        <div class="mb-3">
            <input type="text" name="c_discount" class="form-control w-50 mt-3"
            placeholder="Enter Coupon Discount percentage">
        </div>
        <div class="mb-3">
            <input type="text" name="c_max_amt" class="form-control w-50 mt-3"
            placeholder="Enter Max amount ">
        </div>
        <div class="mb-3">
            <input type="file" name="c_pic" class="form-control w-50 mt-3">
        </div>
        <div class="form-check form-switch mt-3">
            <input class="form-check-input" type="checkbox" name="status" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
          </div>

        <button type="submit" class="btn btn-primary mt-3">Add Coupon</button>

    </form>

</div>
    </div>
</section>



@include('footer')