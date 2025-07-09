@include('t_header')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">Booking Details</h4>
        </div>
        <div class="card-body">
        <table class="table table-striped" id="table1">

        <thead>
            <tr>
                <th>Sr No</th>
                <th>Therapist Name</th>
                {{-- <th>Fees</th>
                <th>Total Amount</th>
                <th>Address</th>
                <th>Date</th>
                <th>Time</th> --}}
                <th>Service Date</th>
                <th>Service Time</th>
                {{-- <th>Cash / Online</th> --}}
                {{-- <th>Discount</th> --}}
                {{-- <th>Coupon Code</th>
                <th>Status</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$loop->index + 1 }}</td>
                <td>{{$item->tname}}</td>
                {{-- <td>{{$item->fees}}</td>
                <td>{{$item->tot_amount}}</td> --}}
                {{-- <td>{{$item->date}}</td>
                <td>{{$item->time}}</td> --}}
                <td>{{$item->date}}</td>
                <td>{{$item->time}}</td>
                {{-- <td>{{$item->c_o}}</td>
                {{-- <td>{{$item->c_discount}}</td> --}}
                {{-- <td>{{$item->c_code}}</td>
                <td>{{$item->status}}</td>  --}}
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
    title: "{{Session::get('success')}}",
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
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit(); // Submit the form after confirmation
            }
        });
    }
</script>

<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

@include('t_footer')

