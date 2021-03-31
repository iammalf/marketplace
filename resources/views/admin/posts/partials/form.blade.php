<div class="form-group">
    {!! Form::label('name', 'Título de Post') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Título del Post']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug del Post', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('categorypost_id', 'Categoría') !!}
    {!! Form::select('categorypost_id', $categorypost, null, ['class' => 'form-control']) !!}

    @error('categorypost_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-5">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    <br>
    @error('tags')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    <hr>
    @error('status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2018/06/10/13/41/rice-3466518_960_720.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reiciendis quidem eos ex. Sunt sequi numquam
            totam ab quibusdam inventore quam praesentium corrupti animi cum. Commodi eveniet ipsam enim ad.</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Estracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un Estracto']) !!}

    @error('extract')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Digite el cuerpo del Post']) !!}

    @error('body')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
