@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
    <h3>Add Journal</h3>

        </div>
        <div class="card-body">
            <form action="{{ route('journal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
        
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
        
                <div class="mb-3">
                    <label for="stickers" class="form-label">Stickers (Comma Separated)</label>
                    <input type="file" name="stickers" class="form-control">
                </div>
        
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>
        
                <div class="mb-3">
                    <label for="journal" class="form-label">Journal</label>
                    <textarea name="journal" class="form-control" rows="4" required></textarea>
                </div>
        
                <div class="mb-3">
                    <label for="lock" class="form-label">Lock Journal?</label>
                    <select name="lock" class="form-control">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
        
                <button type="submit" class="btn btn-primary mt-3">Save Journal</button>
            </form>
        </div>
    </div>
</section>



@include('footer')
