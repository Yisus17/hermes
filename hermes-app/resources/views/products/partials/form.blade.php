<div id="product-data" class="custom-form row">
  <div class="form-group required-info col-12">
    <span>*Campos obligatorios</span>
  </div>


  <div class="form-group col-12 col-sm-4">
    <label for="name"><span class="required-field">*</span>Nombre</label>
    <input 
      type="text" 
      name="name" 
      class="form-control" 
      value="{{isset($product) ? $product->name : old('name')}}" 
      required/>
  </div>

  <div class="form-group col-12 col-sm-4">
    <label for="code"><span class="required-field">*</span>Código</label>
    <input 
      type="text" 
      name="code" 
      class="form-control" 
      value="{{isset($product) ? $product->code : old('code')}}" 
      required/>
  </div>

  <div class="form-group col-12 col-sm-4">
    <label for="category_id"><span class="required-field">*</span>Categoría</label>
    <select name="category_id" class="form-control selectpicker" data-live-search="true" required>
      <option value="" selected disabled>--Selecciona una opción--</option>
      @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ (isset($product) && $category->id == $product->category_id) || old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
      @endforeach
    </select>
  </div>


  <div class="form-group col-12">
    <label for="description"><span class="required-field">*</span>Descripción</label>
    <input 
      type="text" 
      name="description" 
      class="form-control" 
      value="{{isset($product) ? $product->description : old('description')}}"
      required
    />
  </div>

 

  <div class="form-group col-12 col-sm-6">
    <label for="price">Precio</label>
    <div class="input-group">
      <input 
        type="number" 
        name="price"
        class="form-control" 
        min="0" 
        step="0.01" 
        value="{{isset($product) ? $product->price : old('price')}}" 
      />
      <div class="input-group-append">
        <span class="input-group-text">$</span>
      </div>
    </div>
  </div>

  <div class="form-group col-12 col-sm-6">
    <label for="stock">Stock</label>
    <div class="input-group">
      <input 
        type="number" 
        name="stock"
        class="form-control" 
        min="0" 
        step="0.01" 
        value="{{isset($product) ? $product->stock : old('stock')}}" 
      />
      <div class="input-group-append">
        <span class="input-group-text">Unid</span>
      </div>
    </div>
  </div>

  <div class="form-group col-12">
    <button class="btn btn-primary " type="submit">Guardar</button>
    <a href="/products" class="btn btn-secondary">Volver</a>
  </div>
</div>





