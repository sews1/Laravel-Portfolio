<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <a href="/admin/message" class="btn btn-primary btn-sm px-5"><i class="fas fa-arrow-left"></i> Back</a>
                    <h4><b>From : {{$message->name}}</b></h4>
                    <p>Date Created : {{$message->created_at}}</p>
                   {!! $message->desc !!}
            </div>
        </div>
    </div>
</div>