<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Nombre de la Etiqueta']) !!}
    @error('name')
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingresar El slug de la Etiqueta', 'readonly']) !!}
    @error('slug')
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {{-- <label for="">Color</label>
    <select name="color" class="form-control">
        <option value="red" >Colot rojo</option>
        <option value="green" selected>Color verde</option>
        <option value="blue">Color azul</option>
    </select> --}}
    {!! Form::label('color', 'color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    @error('color')
    <small class="text-danger"> {{$message}}</small>
    @enderror
</div>