@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">User Details</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        {{-- <th>Image</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->fullname}}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            {{-- <td>
                                @if($user->image) 
                                    <img height="50" width="50" class="rounded-circle" src="{{ asset($user->image) }}" alt="User Image">
                                @else
                                    <img height="50" width="50" class="rounded-circle" src="{{ asset('images/default.png') }}" alt="Default Image">
                                @endif                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

<script>
    function confirmDelete(event) {
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "This action cannot be undone!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit(); // Submit form after confirmation
            }
        });
    }
</script>

<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

@include('footer')
