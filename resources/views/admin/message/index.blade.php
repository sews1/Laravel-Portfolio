<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="100px">#</th>
                            <th width="250px">Name</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($message as $item)
                            @php
                                // Debugging untuk melihat nilai is_read
                                // echo $item->is_read; 
                            @endphp
                            <tr style="{{ $item->is_read == 1 ? 'background-color: #f0f0f0;' : 'background-color: #ffffff;' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="/admin/message/{{ $item->id }}"><b>{{ $item->name }}</b></a>
                                </td>
                                <td>{!! Illuminate\Support\Str::limit($item->desc, 100) !!}</td>
                                <td>
                                    <form action="/admin/message/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
