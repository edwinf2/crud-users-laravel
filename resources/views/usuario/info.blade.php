  <!-- Modal -->
  <div class="modal fade" id="edit{{ $usuario->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit">Editar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.update', $usuario->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{$usuario->name}}" required>
            </div>
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{$usuario->email}}" required>
            </div>
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                {{-- <label for="name" class="form-label">Name</label> --}}
                <input type="password" class="form-control" name="passwordrepeat" id="passwordrepeat" placeholder="Repeat Password" required>
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

    <!-- Eliminar -->
    <div class="modal fade" id="delete{{ $usuario->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="edit">Eliminar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('home.destroy', $usuario->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro que deseas eliminar a <strong> {{$usuario->name}} ?</strong> 
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
          </div>
        </div>
      </div>