<div class="modal fade" id="modal-delete-{{$cat->id_categoria}}">
  <div class="modal-dialog">
  <form action="{{route('categoria.destroy',$cat->id_categoria)}}" method="post" class="form">
      @csrf
      @method('DELETE')
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Categoria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span>$times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Desea Eliminar la categoria? {{$cat->categoria}}</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-light" >Eliminar</button>
        </div>
      </div>
    </form>
  </div>
</div>