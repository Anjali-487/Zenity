@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">Edit Profile</h4>
        </div>
        <div class="card-body">
            <form action="/editprofile" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" value="{{ old('fullname', $user->fullname) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mobile_no</label>
                    <input type="text" name="mobileno" class="form-control" value="{{ old('mobileno', $user->mobileno) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Profile Image</label>
                    <input type="file" name="u_image" class="form-control">
                    @if($user->u_image)
                        <img src="{{ asset('storage/' . $user->u_image) }}" alt="User Image" height="80" width="80" class="rounded-circle mt-2">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (Session::get('success'))
    <script>
        Swal.fire({
            icon: "success",
            title: "{{ Session::get('success') }}",
            showConfirmButton: false,
            timer: 2500
        });
    </script>
@endif

@include('footer')
