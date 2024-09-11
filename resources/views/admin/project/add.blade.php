<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                @if (isset($project))
                    <form action="/admin/posts/project/{{ $project->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                @else
                    <form action="/admin/posts/project" method="POST" enctype="multipart/form-data">
                @endif   
                    
                    @csrf

                    <!-- Title Input -->
                    <div class="form-group mb-4">
                        <label for="title" class="form-label font-weight-bold">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title" value="{{ isset($project) ? $project->title : old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <!-- Cover Image Input -->
                    <div class="form-group mb-4">
                        <label for="cover" class="form-label font-weight-bold">Cover</label>
                        <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                        @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <!-- Centered Image Preview -->
                        @if (isset($project) && $project->cover)
                            <div class="d-flex justify-content-center mt-4">
                                <img src="/{{ $project->cover }}" class="img-fluid rounded shadow-sm" alt="Cover Image" style="max-width: 80%; height: auto;">
                            </div>
                        @endif
                    </div>

                    <!-- Body Input -->
                    <div class="form-group mb-4">
                        <label for="body" class="form-label font-weight-bold">Body</label>
                        <textarea name="body" class="form-control @error('body') is-invalid @enderror" rows="6" placeholder="Enter Body">{{ isset($project) ? $project->body : old('body') }}</textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                {{$message}}
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

