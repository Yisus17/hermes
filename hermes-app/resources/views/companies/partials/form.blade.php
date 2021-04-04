<div class="custom-form row">
    <div class="form-group required-info col-12">
        <span>*Campos obligatorios</span>
    </div>


    <div class="form-group col-12">
        <label for="name"><span class="required-field">*</span> Nombre</label>
        <input 
        type="text" 
        name="name" 
        class="form-control" 
        value="{{isset($company) ? $company->name : old('name')}}" 
        required/>
    </div>

    <div class="form-group col-12">
        <label for="sector"></span> Sector</label>
        <input 
        type="text" 
        name="sector" 
        class="form-control" 
        value="{{isset($company) ? $company->sector : old('sector')}}" 
        />
    </div>
    

    <div class="form-group col-12">
        <button class="btn btn-primary " type="submit">Guardar</button>
        <a href="/companies" class="btn btn-secondary">Volver</a>
    </div>

</div>