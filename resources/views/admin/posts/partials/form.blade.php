<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el Nombre del Post']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el Slug del Post', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Ctageoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    <br>
    @error('tags')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>
    <br>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="row mb-3">
    <div class="col">
        @isset($post->image)
        <div class="image-wrapper">
            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="" srcset="">
        </div>
        @else
        <div class="image-wrapper">
            <img id="picture" src="https://cdn.pixabay.com/photo/2021/03/30/08/56/woman-6136425_960_720.jpg" alt="" srcset="">
        </div>  
        @endisset
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del  Post') !!}
            {!! Form::file('file', ['class'=>'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
            <small class="text-danger">{{$message}}</small>
        @enderror
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quo doloremque quasi, quis sapiente qui molestias atque quos laudantium distinctio expedita, iusto tempore facere fuga ipsa vitae quisquam quas inventore?</p>
    </div>
</div>
<div class="form-group" id="estracto">
    {!! Form::label('stract', 'Extracto', null) !!}
    {!! Form::textarea('stract', null, ['class' => 'form-control']) !!}
    @error('stract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group" id="cuerpo">
    {!! Form::label('body', 'Cuerpo del Post', null) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>