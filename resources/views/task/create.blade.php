@include('header')

<section class="section">
    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-3 p-4">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="fw-bold mb-0">Add Task</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('task.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Task Image Upload -->
                    <div class="mb-4">
                        <label for="image" class="form-label fw-bold">Upload Image</label>
                        <input type="file" name="image" class="form-control w-75">
                    </div>

                    <!-- Task Description -->
                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">Task Description</label>
                        <input type="text" name="description" class="form-control w-75" placeholder="Enter Task Description">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-lg btn-primary">Add Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('footer')
