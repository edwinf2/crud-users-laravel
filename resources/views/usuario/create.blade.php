  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create">Agregar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="password" class="form-control" name="passwordrepeat" id="passwordrepeat" placeholder="Repeat Password">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>