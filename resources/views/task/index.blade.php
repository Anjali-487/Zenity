@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">Task Data</h4>
        </div>
        <div class="card-body">

            <a href="{{route('task.create')}}" class="btn btn-primary">Add Task</a>
            <table class="table table-striped" id="table1">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        {{-- <th scope="col">Name</th> --}}
                        <th scope="col">Image </th>
                        {{-- <th scope="col">Emotion</th> --}}
                        <th scope="col">Description</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="">
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            {{-- <td>{{ $item->name }}</td> --}}
                            <td>
                                <img height="50" width="50" class="rounded-circle" src="/images/{{ $item->image }}" alt="">
                            </td>
                            {{-- <td>{{ $item->emotion }}</td> --}}
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('task.edit', $item->_id) }}" class="btn btn-light">Edit</a>

                                <form onsubmit="confirmDelete(event)" class="d-inline" action="{{ route('task.destroy', $item->_id) }}" method="POST">
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
   
