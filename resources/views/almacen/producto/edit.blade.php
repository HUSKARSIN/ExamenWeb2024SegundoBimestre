@extends('layouts.admin')
@section('content')
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Editar Producto</h3>
    </div>
    <form action="{{route('producto.update',$producto->id_producto)}}"  method="post" enctype="multipart/form-data" class="form">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" value="{{$producto->nombre}}" placeholder="Ingrese el nombre del producto">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="categoria">Categoria</label>
              <select name="id_categoria" id="id_categoria" class="form-control">
                @foreach($categorias as $cat)
                @if($cat->id_categoria==$producto->id_categoria)
                <option value="{{$cat->id_categoria}}">{{$cat->categoria}}</option>
                @else
                <option value="{{$cat->id_categoria}}">{{$cat->categoria}}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="codigo">Codigo</label>
              <input type="text" class="form-control" value="{{$producto->codigo}}" name="codigo" id="codigo" placeholder="Ingrese el codigo del producto">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="text" class="form-control" value="{{$producto->stock}}" name="stock" id="stock" placeholder="Ingrese el stock del producto">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <input type="text" class="form-control" value="{{$producto->descripcion}}" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion del producto">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" class="form-control" name="imagen" id="imagen">
              @if (($producto->imagen)!="")
              <img src="{{ url('imagenes/productos/' . $producto->imagen) }}" height="100px" width="100px">
              @endif
            </div>
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-success me-1 mb-1"> Guardar</button>
          <button type="reset" class="btn btn-danger me-1 mb-1"> Cancelar</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection