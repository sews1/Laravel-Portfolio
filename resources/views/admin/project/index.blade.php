<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/project/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>  Create</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Cover</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($project as $item)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/{{ $item->cover }}" width="100px" alt=""></td>
                        <td>
                            <a href="/admin/posts/project/{{$item->id}}"><b>{{ $item->title }}</b></a>
                        </td>
                        <td>

                            <div class="d-flex">

                           
                                <a href="/admin/posts/project/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/admin/posts/project/{{ $item->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td> 
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
