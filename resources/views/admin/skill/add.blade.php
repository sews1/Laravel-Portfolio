<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                @if (isset($skill))
                    <form action="/admin/skill/{{ $skill->id }}" method="POST">
                        @method('PUT')
                @else
                    <form action="/admin/skill" method="POST">
                @endif   
                    
                    @csrf

                    <!-- Title Input -->
                    <div class="form-group mb-4">
                        <label for="title" class="form-label font-weight-bold">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter Title" value="{{ isset($skill) ? $skill->title : old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Icon Input -->
                    <div class="form-group mb-4">
                        <label for="icon" class="form-label font-weight-bold">Icon</label>
                        <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror"
                               placeholder="Enter Icon (e.g., fas fa-user)" value="{{ isset($skill) ? $skill->icon : old('icon') }}">
                        <small><a href="https://fontawesome.com/search" target="_blank" class="text-primary">Click to Search Icon</a></small>
                        @error('icon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Description Input -->
                    <div class="form-group mb-4">
                        <label for="desc" class="form-label font-weight-bold">Description</label>
                        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" rows="6"
                                  placeholder="Enter Description">{{ isset($skill) ? $skill->desc : old('desc') }}</textarea>
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
