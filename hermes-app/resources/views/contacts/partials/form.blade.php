<div class="custom-form row">
    <div class="form-group required-info col-12">
        <span>*Campos obligatorios</span>
    </div>


    <div class="form-group  col-12 col-sm-4">
        <label for="name"><span class="required-field">*</span> Nombre</label>
        <input 
        type="text" 
        name="name" 
        class="form-control" 
        value="{{isset($contact) ? $contact->name : old('name')}}" 
        required/>
    </div>

    <div class="form-group  col-12 col-sm-4">
        <label for="last_name"><span class="required-field">*</span> Apellido</label>
        <input 
        type="text" 
        name="last_name" 
        class="form-control" 
        value="{{isset($contact) ? $contact->last_name : old('last_name')}}" 
        required/>
    </div>

    
    <div class="form-group col-12 col-sm-4">
        <label for="phone"><span class="required-field">*</span>Teléfono</label>
        <input 
        type="text" 
        name="phone" 
        class="form-control" 
        value="{{isset($contact) ? $contact->phone : old('phone')}}" 
        required/>
    </div>

    <div class="form-group col-12 col-sm-6">
        <label for="email"><span class="required-field">*</span>Email</label>
        <input 
        type="email" 
        name="email" 
        class="form-control" 
        value="{{isset($contact) ? $contact->email : old('email')}}" 
        required/>
    </div>

    <div class="form-group col-12 col-sm-6">
        <label for="business_name"> Empresa</label>
        <input 
        type="text" 
        name="business_name" 
        class="form-control" 
        value="{{isset($contact) ? $contact->business_name : old('business_name')}}" 
        required/>
    </div>
    
    <div class="col-12"><hr></div>

    <div class="form-group col-12 col-sm-6">
        <label for="country_id">País</label>
        <select name="country_id" class="form-control selectpicker" data-live-search="true">
        <option value="" selected disabled>--Selecciona una opción--</option>
        @foreach($countries as $country)
            <option value="{{ $country->id }}" 
            {{ 
                (isset($address) && $country->id == $address->country_id) ||
                old('country_id') == $country->id ? 
                    'selected' 
                    : 
                    '' }}>{{ $country->name }}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group col-12 col-sm-6">
        <label for="business_name"> Estado / Provincia</label>
        <input 
        type="text" 
        name="state" 
        class="form-control" 
        value="{{isset($address) ? $address->state : old('state')}}" 
        required/>
    </div>
    
    <div class="form-group col-12 col-sm-4">
        <label for="business_name"> Municipio</label>
        <input 
        type="text" 
        name="municipality" 
        class="form-control" 
        value="{{isset($address) ? $address->municipality : old('municipality')}}" 
        required/>
    </div>

    <div class="form-group col-12 col-sm-4">
        <label for="business_name"> Ciudad</label>
        <input 
        type="text" 
        name="city" 
        class="form-control" 
        value="{{isset($address) ? $address->city : old('city')}}" 
        required/>
    </div>

    <div class="form-group col-12 col-sm-4">
        <label for="business_name"> Código Postal</label>
        <input 
        type="number" 
        name="zipcode" 
        class="form-control" 
        min="0" step="1"
        value="{{isset($address) ? $address->zipcode : old('zipcode')}}" 
        required/>
    </div>
    

    <div class="form-group col-12">
        <button class="btn btn-primary " type="submit">Guardar</button>
        <a href="/contacts" class="btn btn-secondary">Volver</a>
    </div>

</div>