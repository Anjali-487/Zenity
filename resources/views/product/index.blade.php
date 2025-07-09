@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">Product Data</h4>
        </div>
        <div class="card-body">

            <a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>
            <table class="table table-striped" id="table1">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Product Pic</th>
                        <th scope="col">Product Pic2</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Price</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Description</th>
                        <th scope="col">P_Benefit</th>
                        <th scope="col">P_use</th>
                        <th scope="col">P_Safety</th>
                        <th scope="col">P_Ingredient</th>
                        <th scope="col">P_Sideeffect</th>
                        <th scope="col">Actions</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="">
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img height="50" width="50" class="rounded-circle" src="/images/{{ $item->image }}" alt="">
                            </td>
                            <td>
                                <img height="50" width="50" class="rounded-circle" src="/images/{{ $item->image2 }}" alt="">
                            </td>
                            <td>{{$item->category}}</td>
                            {{-- <td>
                                @if ($item->sellable)
                                    Sellable
                                @else
                                    Not Sellable
                                @endif
                            </td> --}}
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->discount }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->benefit }}</td>
                            <td>{{ $item->use }}</td>
                            <td>{{ $item->safety }}</td>
                            <td>{{ $item->ingredient }}</td>
                            <td>{{ $item->sideeffect }}</td>

                            <td>
                                <a href="{{ route('product.edit', $item->_id) }}" class="btn btn-light">Edit</a>

                                <form onsubmit="confirmDelete(event)" class="d-inline" action="{{ route('product.destroy', $item->_id) }}" method="POST">
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
   
