@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Edit Therapist</h3>

        </div>
        <div class="card-body">

    <form action="{{route('therapist.update',$therapist->_id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" name="name" value="{{$therapist->name}}" class="form-control w-50"
            placeholder="Enter Therapist name">
        </div>
        <div class="mb-3">
            <input type="file" name="image" class="form-control w-50 mt-3">
        </div>
        <div class="mb-3">
            <input type="text" name="title" value="{{$therapist->title}}" class="form-control w-50"
            placeholder="Enter Therapist title">
        </div>
        <div class="mb-3">
            <input type="text" name="desc" value="{{$therapist->desc}}" class="form-control w-50"
            placeholder="Enter Therapist Desc">
        </div>
        <div class="mb-3">
            <select name="session" class="form-control w-50" value="{{$therapist->session}}">
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
            <input type="text" name="area" value="{{$therapist->area}}" class="form-control w-50"
            placeholder="Enter Therapist area">
        </div>
        <div class="mb-3">
            <input type="text" name="fees" value="{{$therapist->fees}}" class="form-control w-50"
            placeholder="Enter Therapist fees">
        </div>
        <div class="mb-3">
            <input type="text" name="experience" value="{{$therapist->experience}}" class="form-control w-50"
            placeholder="Enter Therapist experience">
        </div>

        <div class="mb-3">
            <input type="email" name="email" value="{{$therapist->email}}" class="form-control w-50"
            placeholder="Enter Therapist email">
        </div>

        <div class="mb-3">
            <input type="password" name="password" value="{{$therapist->password}}" class="form-control w-50"
            placeholder="Enter Therapist password">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Therapist</button>

    </form>

</div>
    </div>
</section>



@include('footer')
