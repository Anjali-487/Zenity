@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">Coupon Data</h4>
        </div>
        <div class="card-body">

            <a href="{{route('coupon.create')}}" class="btn btn-primary">Add Coupon</a>
            <table class="table table-striped" id="table1">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Coupon code</th>
                        <th scope="col">Coupon Pic</th>
                        <th scope="col">Description</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Max_Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="">
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $item->c_code }}</td>
                            <td>
                                <img height="50" width="100"  src="/images/{{ $item->c_pic }}" alt="">
                            </td>
                            <td>{{ $item->c_desc }}</td>
                            <td>{{ $item->c_discount }}</td>
                            <td>{{ $item->c_max_amt }}</td>
                            <td>
                                @if ($item->status)
                                <span class="badge bg-success">On Air</span>

                                @else
                                <span class="badge bg-danger">Off Air</span>

                                @endif
                            </td>
                            <td>
                                {{-- <a href="{{ route('coupon.show', $item->_id) }}" class="btn btn-info">Show</a> --}}

                                <a href="{{ route('coupon.edit', $item->_id) }}" class="btn btn-warning">Edit</a>

                                <form onsubmit="confirmDelete(event)" class="d-inline" action="{{ route('coupon.destroy', $item->_id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{$data->links()}}
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
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

    @include('footer')