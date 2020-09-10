<a href="{{ route('users.edit', $pengguna->id) }}" class="btn btn-sm btn-info">EDIT</a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $pengguna->id }}">
    DELETE
</button>


<div class="modal fade" id="modal-delete-{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        
    <!-- Modal -->
    <form method="POST" action="{{ route('users.destroy', $pengguna->id) }}">
        
        @csrf
        @method('DELETE')
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pengesahan Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <p>Adakah anda bersetuju untuk menghapuskan data {{ $pengguna->nama }}</p>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Confirm</button>
            </div>
        </div>
            
    </form>

    </div>
</div>