<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/skill/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>  Create</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Icon</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($skill as $item)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title}}
                        <td>
                            <i class="{{ $item->icon }}"></i>
                        </td>
                        <td>
                            <div class="d-flex">

                           
                                <a href="/admin/skill/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/admin/skill/{{ $item->id }}" method="POST">
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
