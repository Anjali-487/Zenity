@include('header')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">Orders Details</h4>
        </div>
        <div class="card-body">
        <table class="table table-striped" id="table1">

        <thead>
            <tr>
                <th>Sr No</th>
                <th>Username</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total_Amount</th>
                <th>Cash / Online</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
            <tr>
                <td>{{$loop->index + 1 }}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->pname}}</td>
                <td>
                    <img height="50" width="50" class="rounded-circle" src="/images/{{ $item->pic1 }}" alt="">
                </td>
                <td>{{$item->amount}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->tot_amount}}</td>
                <td>{{$item->c_o}}</td>
                <td><a href="/ostatus/{{$item->_id}}" class="btn btn-outline-info">
                    @if ($item->status==1)
                        Recevied
                    @elseif($item->status==2)
                        Dispatched
                    @elseif($item->status==3)
                        Shipping
                        @elseif($item->status==4)
                        Out for Delievry
                        @else
                        Delivered
                           
                    @endif</a></td>            
                </tr>
            @endforeach
        </tbody>
    </table>
        {{-- {{$data->links()}} --}}
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