@include('header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Edit Journal</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('journal.update', $journal->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
        
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" value="{{ $journal->date }}" required>
                </div>
        
                <div class="mb-3">
                    <input type="file" name="stickers" class="form-control w-50 mt-3">
                </div>
        
                <div class="mb-3">
                    <input type="file" name="photo" class="form-control w-50 mt-3">
                </div>
        
                <div class="mb-3">
                    <label for="journal" class="form-label">Journal</label>
                    <textarea name="journal" class="form-control" rows="4" required>{{ $journal->journal }}</textarea>
                </div>
        
                <div class="mb-3">
                    <label for="lock" class="form-label">Lock Journal?</label>
                    <select name="lock" class="form-control">
                        <option value="0" {{ $journal->lock == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $journal->lock == 1 ? 'selected' : '' }}>Yes</option>
                    </select>
                </div>
        
                <button type="submit" class="btn btn-primary">Update Journal</button>
            </form>
        </div>
    </div>
</section>

@include('footer')
