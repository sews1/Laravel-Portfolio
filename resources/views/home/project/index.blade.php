<div class="container my-5">
    <div class="text-center mt-5">
        <div id="projectsSection" class="container section projects-style" 
             style="background-color: #f0f0f0; padding: 2rem; border-radius: 8px;">
            <h2 class="text-center mb-4" style="color: #333;">My Projects</h2>

            <div class="row">
                @foreach($project as $item)
                <div class="col-md-4 mb-4">
                    <div class="card" 
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; border-radius: 8px;">
                        <img src="{{ $item->cover }}" class="card-img-top" alt="Project Image" 
                            style="border-top-left-radius: 8px; border-top-right-radius: 8px;">

                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 700; color: #333;">{{ $item->title }}</h5>
                            <p class="card-text" style="color: #555;">{{ $item->body }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

