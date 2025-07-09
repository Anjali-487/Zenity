@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 style="font-size: 24px; font-weight: bold;">Meditation Data</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('meditation.create') }}" class="btn btn-primary">Add Meditation</a>
            <table class="table table-striped" id="table1">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Meditation Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Breathing Exercise</th>
                        <th scope="col">Guided Video</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->breathing_exercise }}</td>
                            <td>
                                @if ($item->guided_video)
                                    <video width="320" height="240" controls>
                                        <source src="/storage/{{ $item->guided_video }}" type="video/mp4">
                                        Your browser does not support the audio element.
                                        </video>
                                @else
                                    No Video Uploaded
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('meditation.edit', $item->_id) }}" class="btn btn-light">Edit</a>

                                <form onsubmit="confirmDelete(event)" class="d-inline" action="{{ route('meditation.destroy', $item->_id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $data->links() }}
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
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
        });
    }
</script>

<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

@include('footer')
