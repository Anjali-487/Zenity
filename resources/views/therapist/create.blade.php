@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Add Therapist</h3>

        </div>
        <div class="card-body">

    <form action="{{route('therapist.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control w-50"
            placeholder="Enter Therapist name">
        </div>
        <div class="mb-3">
            <input type="file" name="image" class="form-control w-50 mt-3">
        </div>
        <div class="mb-3">
            <input type="text" name="title" class="form-control w-50"
            placeholder="Enter Therapist title">
        </div>
        <div class="mb-3">
            <input type="text" name="desc" class="form-control w-50"
            placeholder="Enter Therapist Desc">
        </div>
        <div class="mb-3">
            <select name="session" class="form-control w-50">
                <option class="form-control w-50" disabled selected>Select your Session</option>
                <optgroup class="form-control w-50" label="Morning">
                    <option>9:00AM to 11:00AM</option>
                    <option>12:00PM to 2:00PM</option>
                </optgroup>
                <optgroup class="form-control w-50" label="Evening">
                    <option>4:00PM to 6:00PM</option>
                    <option>7:00PM to 9:00PM</option>
                </optgroup>
            </select>
        </div>
        <div class="mb-3">    
            <input type="text" name="area" class="form-control w-50"
            placeholder="Enter Therapist area">
        </div>
        <div class="mb-3">
            <input type="text" name="fees" class="form-control w-50"
            placeholder="Enter Therapist fees">
        </div>
        <div class="mb-3">
            <input type="text" name="experience" class="form-control w-50"
            placeholder="Enter Therapist experience">
        </div>

        <div class="mb-3">
            <input type="email" name="email" class="form-control w-50"
            placeholder="Enter Therapist email">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Therapist</button>

    </form>

</div>
    </div>
</section>



@include('footer')
