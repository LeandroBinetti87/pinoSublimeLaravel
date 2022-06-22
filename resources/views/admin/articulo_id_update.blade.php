@extends('admin.base')

@section('content')
<div class="table-responsive">
	
            <h1>Formulario de modificación de artículos</h1>

            <form method="post" action="{{route('formulario.modificar')}}" enctype="multipart/form-data">@csrf
            <div class="form-group">
                    <label class="control-label" for="name">Id artículo</label>
                    <input type="text" class="form-control" value="{{$articulo->id}}" name="id" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label" for="name">Nombre</label>
                    <input type="text" class="form-control" placeholder="{{$articulo->name}}" name="name" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="price">Precio</label>
                    <input type="text" class="form-control" placeholder="{{$articulo->price}}" name="price" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="image">Imagen</label>
                    <input type="file" class="form-control" placeholder="Imagen" name="image">
                </div>
                <div class="form-group">
                    <label class="control-label" for="category">Categoria</label>
                    <select type="text" class="form-control" placeholder="{{$articulo->category}}" name="category" required>
						<option value="Yerbacafe">Yerbacafe</option>
						<option value="Bebidas">Bebidas</option>
					</select>
                </div>
				<button type="submit"  class="btn btn-success mb-3 ml-auto">
					<svg type="submit" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
						<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
					</svg>
					Modificar
				</button>   
            </form>
        </div>
    </div>
</div>
@endsection