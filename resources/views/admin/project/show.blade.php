<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                <a href="/admin/posts/project" class="btn btn-primary px-4"><i class="fas fa-arrow-left"></i> Back</a>
                <h4><b>{{ $project->title }}</b></h4>
                <p>Date Created {{ $project->created_at }}</p>

                <img src="/{{ $project->cover }}" width="100%" alt="">

                 <div class="py-3"></div>
                <p>{{ $project->body }}</p>
            </div>
        </div>
    </div>
</div>